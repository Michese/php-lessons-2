<?php

namespace application\model;

use application\model\base\Model;

class GalleryModel extends Model
{
    public function getIndexItems()
    {
        $params["title"] = $this->config->get("title");
        $params["js"] = "gallery";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["gallery"] = $this->getAllGallery();
        return $params;
    }

    public function getImage()
    {
        $params["title"] = $this->config->get("title");
        $params["js"] = "gallery_image";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["image"] = $this->getGalleryImage();
        return $params;
    }

    public function getAllGallery()
    {
        $statement = $this->dbh->prepare("select * from gallery");
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getGalleryImage()
    {
        $statement = $this->dbh->prepare("select * from gallery where id_gallery = :id");
        $statement->bindValue(":id", $this->request->get("id_gallery"), \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchObject();
    }
}