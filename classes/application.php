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
        'title' => 'Lesson 4'
    ];

    public function __construct(\Classes\view $view, $db = null)
    {
        $this->view = $view;
        $this->db = $db;
        self::$params['year'] = date('Y');
        if (isset($_SESSION['user'])) {
            self::$menu['menu'][] = [
                'src' => '/account/',
                'title' => 'Личный кабинет'
            ];
            self::$menu['menu'][] = [
                'src' => '/logout/',
                'title' => 'Выйти'
            ];
        } else {
            self::$menu['menu'][] = [
                'src' => '/register/',
                'title' => 'Войти'
            ];
        }
    }

    private function _rememberSite($url)
    {
        $result = false;

        $sql = "select first_site_history, second_site_history, third_site_history, fourth_site_history,
 fifth_site_history from user where id_user = " . $_SESSION['user']->id_user;
        $sth = $this->db->query($sql);
        $user = $sth->fetchObject();

        $sql = "update user set first_site_history = '$url', second_site_history = '$user->first_site_history', 
third_site_history = '$user->second_site_history', fourth_site_history = '$user->third_site_history',
         fifth_site_history = '$user->fourth_site_history' where id_user = " . $_SESSION['user']->id_user;
        $count = $this->db->exec($sql);
        if ($count > 0) {
            $result = true;
        }

        return $result;
    }

    public function index()
    {
        $params = array_merge(self::$menu, self::$params);
        if(isset($_SESSION['user'])) {
            $params['name_user'] = $_SESSION['user']->name_user;
            $this->_rememberSite($_SERVER['REQUEST_URI']);
        } else {
            $params['name_user'] = ' ';
        }

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

        if(isset($_SESSION['user'])) {
            $this->_rememberSite($_SERVER['REQUEST_URI']);
        }

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

        if(isset($_SESSION['user'])) {
            $this->_rememberSite($_SERVER['REQUEST_URI']);
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

        if(isset($_SESSION['user'])) {
            $this->_rememberSite($_SERVER['REQUEST_URI']);
        }

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

        if(isset($_SESSION['user'])) {
            $this->_rememberSite($_SERVER['REQUEST_URI']);
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

    public function register()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = ' ';

        if (isset($_SESSION["user"]) || $this->_checkAuthWithCookie()) {
            header('Location: /');
            exit();
        }

        $answer = " ";

        if (isset($_POST["sign_up"])) {
            $answer = $this->_addUser();
        } else if (isset($_POST["sign_in"])) {
            $answer = $this->_signInUser();
        }

        $params['answer'] = $answer;
        $this->view->render("register", $params);
    }

    private function _checkAuthWithCookie()
    {
        $result = false;

        if (isset($_COOKIE['id_user']) && isset($_COOKIE['cookie_hash'])) {
            $sql = "select * from user where id_user = '" . (string)htmlspecialchars(strip_tags($_COOKIE['id_user'])) . "'";
            $sth = $this->db->query($sql);
            $user = $sth->fetchObject();

            if (($user->password_user !== $_COOKIE['cookie_hash']) || ($user->id_user !== $_COOKIE['id_user'])) {
                setcookie("id_user", "", time() - 3600 * 24 * 30 * 12, "/");
                setcookie("cookie_hash", "", time() - 3600 * 24 * 30 * 12, "/");
            } else {
                $_SESSION["user"] = $user;
                header("Location: /");
            }

        }

        return $result;
    }

    private function _addUser()
    {
        $result = false;
        $answer = " ";

        $login = (string)htmlspecialchars(strip_tags($_POST["login"]));
        $name = (string)htmlspecialchars(strip_tags($_POST["name"]));
        $password = (string)htmlspecialchars(strip_tags($_POST["password"]));

        $sql = "select * from user where login_user = '$login'";
        $sth = $this->db->query($sql);
        $user = $sth->fetchObject();

        if (empty($user)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into user (login_user, name_user, password_user) values ('$login', '$name', '$password_hash')";
            $count = $this->db->exec($sql);
            if ($count > 0) {
                $result = true;
            }
        }

        if ($result) {
            $answer = "Пользователь успешно добавлен!";
        } else {
            $answer = "Пользователь с таким логином уже существует!";
        }

        return $answer;
    }

    private function _signInUser()
    {
        $answer = " ";

        $login = (string)htmlspecialchars(strip_tags($_POST["login"]));
        $password = (string)htmlspecialchars(strip_tags($_POST["password"]));

        $sql = "select * from user where login_user = '$login'";
        $sth = $this->db->query($sql);
        $user = $sth->fetchObject();

        if (isset($user) && password_verify($password, $user->password_user)) {

            if (isset($_POST['rememberme']) && $_POST['rememberme'] == 'on') {
                setcookie("id_user", $user->id_user, time() + 86400);
                setcookie("cookie_hash", $user->password_user, time() + 86400);
            }

            $_SESSION['user'] = $user;
            header("Location: /");
            exit;
        } else {
            $answer = "Не удалось войти!";
        }

        return $answer;
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        session_destroy();
        header("Location: /");
        exit;
    }

    public function account()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /");
            exit;
        }

        $sql = "select first_site_history, second_site_history, third_site_history, fourth_site_history,
 fifth_site_history from user where id_user = " . $_SESSION['user']->id_user;
        $sth = $this->db->query($sql);
        $user = $sth->fetchObject();

        $params = array_merge(self::$menu, self::$params);
        $params['js'] = ' ';
        $params['name_user'] = $_SESSION['user']->name_user;
        $params['site_history'] = [
            $user->first_site_history,
            $user->second_site_history,
            $user->third_site_history,
            $user->fourth_site_history,
            $user->fifth_site_history,
        ];

        //$this->_rememberSite($_SERVER['REQUEST_URI']);
        $this->view->render('account', $params);
    }

}