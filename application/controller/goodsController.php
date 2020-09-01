<?php

namespace application\controller;

use application\controller\base\Controller;
use application\model\GoodsModel;

class GoodsController extends Controller {

    public function action_index() {
        $productModel = new GoodsModel();
        $this->view->render("goods/goods", $productModel->getIndexItems());
    }

    public function action_more_goods() {
        if (!$this->request->hadPost()) {
            throw new \Exception("not found post request.");
            exit();
        }

        $productModel = new GoodsModel();
        echo $productModel->getMoreGoods();
    }

    public function action_goods_product() {
        $productModel = new GoodsModel();
        $this->view->render("goods/goods_product", $productModel->getProduct());
    }
}