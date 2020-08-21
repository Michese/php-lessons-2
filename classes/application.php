<?php

namespace Classes;

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
            ]
        ]
    ];
    static $params = [
        'title' => 'Lesson 3',
        'year' => 2020
    ];

    public function __construct(\Classes\view $view, \Classes\DB $db = null)
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

        $sql = "select * from gallery";
        $images = $this->db->getAssocResult($sql);

        $params['images'] = $images;

        $this->view->render("gallery", $params);
    }

    public function galleryImage()
    {
        $params = array_merge(self::$menu, self::$params);
        $params['js'] = 'gallery_image';

        $id_gallery = (int)htmlspecialchars(strip_tags($_GET['id_gallery']));
        $sql = "select gallery.title_gallery, gallery.src_gallery from gallery where id_gallery = $id_gallery";
        $assocResult = $this->db->getAssocResult($sql);

        if (isset($assocResult[0])) {
            $params['image'] = $assocResult[0];
        } else {
            $params['image'] = [];
        }

        $this->view->render('gallery_image', $params);
    }

    public function example1()
    {
        $this->view->render("index", ["name" => "Hello, world! example1"]);
    }


}