<?php

namespace application\controller;

use application\controller\base\Controller;
use application\model\GalleryModel;

class GalleryController extends Controller {
    public function action_index() {
        $galleryModel = new GalleryModel();
        $this->view->render("gallery/gallery", $galleryModel->getIndexItems());
    }

    public function action_gallery_image() {
        $galleryModel = new GalleryModel();
        $this->view->render("gallery/gallery_image", $galleryModel->getImage());
    }
}