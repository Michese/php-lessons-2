<?php

namespace Classes;

use mysql_xdevapi\Exception;

class Application
{
    private $view;
    private $db;
    static $menu = [
        'menu' => [
            [
                'src' => '/',
                'title' => 'Главная'
            ],
            [
                'src' => '/gallery/',
                'title' => 'Галлерея'
            ],
            [
                'src' => '/goods/',
                'title' => 'Товары'
            ]
        ]
    ];
    static $params = [
        'title' => 'Lesson 4',
        'year' => 2020
    ];

    public function __construct(\Classes\view $view, $db = null)
    {
        $this->view = $view;
        $this->db = $db;
    }

    public function index()
    {
        $params = array_merge(self::$menu, self::$params);

        $this->view->render("index", $params);
    }

    public function gallery()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = 'gallery';

        $sql = "select gallery.id_gallery as id_gallery, gallery.title_gallery as title_gallery, gallery.src_gallery as src_gallery from gallery";
        $sth = $this->db->query($sql);

        $gallery = [];
        while ($row = $sth->fetchObject()) {
            $gallery[] = $row;
        }


        $params['gallery'] = $gallery;

        $this->view->render("gallery", $params);
    }

    public function galleryImage()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = 'gallery_image';

        $id_gallery = (int)htmlspecialchars(strip_tags($_GET['id_gallery']));
        $sql = "select gallery.title_gallery as title_gallery, gallery.src_gallery as src_gallery 
from gallery where id_gallery = $id_gallery";
        $sth = $this->db->query($sql);
        $image = $sth->fetchObject();

        if (isset($image)) {
            $params['image'] = $image;
        } else {
            $params['image'] = [];
        }

        $this->view->render('gallery_image', $params);
    }

    public function goods()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = 'goods';
        $goods = [];
        $addMore = false;

//        for ($i = 0; $i < 250; $i++) {
//            $random_title = rand(1, 1000);
//            $random_price = rand(500, 100000);
//            $sql = "insert into `goods`( `title_goods`, `description_goods`, `price_goods`, `src_big_goods`, `src_small_goods`) values ('product $random_title', 'description $random_title', $random_price, 'https://placekitten.com/250/300', 'https://placekitten.com/500/600')";
//            $this->db->exec($sql);
//        }


        $sql = "select goods.id_goods as id_goods, goods.title_goods as title_goods, goods.price_goods as price_goods, 
        goods.src_small_goods as src_small_goods from goods limit 25";
        $sth = $this->db->query($sql);

        while ($row = $sth->fetchObject()) {
            $goods[] = $row;
        }

        if (isset($goods)) {
            $params['goods'] = $goods;
            $lastIdGoods = (int)end($goods)->id_goods;

            $sql = "select id_goods from goods where id_goods > " . $lastIdGoods . " limit 1";
            $sth = $this->db->query($sql);
            if ($sth->fetchObject()) {
                $addMore = true;
            }
        } else {
            $params['goods'] = [];
        }

        $params['more'] = $addMore;
        $this->view->render('goods', $params);
    }

    public function goodsProduct()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = 'goods_product';

        $id_goods = (int)htmlspecialchars(strip_tags($_GET['id_goods']));
        $sql = "select goods.id_goods as id_goods, goods.title_goods as title_goods, 
        goods.description_goods as description_goods, goods.price_goods as price_goods, 
        goods.src_big_goods as src_big_goods from goods where id_goods = $id_goods";
        $sth = $this->db->query($sql);
        $product = $sth->fetchObject();

        if (isset($product)) {
            $params['product'] = $product;
        } else {
            $params['product'] = [];
        }

        $this->view->render('goods_product', $params);
    }

    public function goodsMore()
    {
        $response = [];
        $addMore = false;
        $result = false;
        $goods = [];

        try {
            $lastIdGoods = (int)htmlspecialchars(strip_tags($_POST['lastIdGoods']));
            $sql = "select goods.id_goods as id_goods, goods.title_goods as title_goods, goods.price_goods as price_goods, 
            goods.src_small_goods as src_small_goods from goods where id_goods > $lastIdGoods limit 25";
            $sth = $this->db->query($sql);

            while ($row = $sth->fetchObject()) {
                $goods[] = $row;
            }

            if (isset($goods)) {
                $response['goods'] = $goods;
                $lastIdGoods = (int)end($goods)->id_goods;

                $sql = "select id_goods from goods where id_goods > " . $lastIdGoods . " limit 1";
                $sth = $this->db->query($sql);
                if ($sth->fetchObject()) {
                    $addMore = true;
                }
            } else {
                $response['goods'] = [];
            }

            $response['more'] = $addMore;
            $result = true;
        } catch (Exception $e) {

        }

        $response['result'] = $result;
        $response = json_encode($response);
        echo $response;
    }


}