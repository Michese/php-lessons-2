<?php

namespace application\model;

use application\model\base\Model;

class GoodsModel extends Model
{
    public function getIndexItems()
    {
        $params["title"] = $this->config->get("title");
        $params["js"] = "goods";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["goods"] = $this->getAllGoods();
        $lastIdGoods = (int)end($params["goods"])["id_goods"];
        $params["more"] = $this->anyMoreGoods($lastIdGoods);
        return $params;
    }

    public function getMoreGoods() {
        $response = [];
        $response["goods"] = $this->getAllGoods($this->request->post("lastIdGoods"));
        $lastIdGoods = (int)end($response["goods"])["id_goods"];
        $response["more"] = $this->anyMoreGoods($lastIdGoods);
        $response["result"] = true;
        return json_encode($response);
    }

    public function getProduct()
    {
        $params["title"] = $this->config->get("title");
        $params["js"] = "goods_product";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["product"] = $this->getGoodsProduct();
        return $params;
    }

    public function getAllGoods($lastIdGoods = 0)
    {
        $statement = $this->dbh->prepare(
            "select
          goods.id_goods as id_goods,
          goods.title_goods as title_goods,
          goods.price_goods as price_goods,
          goods.src_small_goods as src_small_goods
          from goods
          where id_goods > :id
          limit 25");
        $statement->bindValue(":id", $lastIdGoods, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getGoodsProduct()
    {
        $statement = $this->dbh->prepare(
            "select 
            goods.id_goods as id_goods,
            goods.title_goods as title_goods,
            goods.description_goods as description_goods_goods,
            goods.price_goods as price_goods,
            goods.src_big_goods as src_big_goods
            from goods 
            where id_goods = :id"
        );
        $statement->bindValue(":id", $this->request->get("id_goods"), \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchObject();
    }

    public function anyMoreGoods($lastIdGoods) {
        $result = false;

        $sql = "select id_goods
                from goods
                where id_goods > $lastIdGoods
                limit 1";
        $sth = $this->dbh->query($sql);

        if($sth->fetchObject()) {
            $result = true;
        }

        return $result;
    }
}