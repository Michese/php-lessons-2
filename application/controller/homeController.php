<?php

namespace application\controller;

use application\controller\base\Controller;
use application\model\HomeModel;

class HomeController extends Controller
{

    public function action_index()
    {
        $homeModel = new HomeModel();
        $this->view->render("home/index", $homeModel->getIndexItems());
    }
}