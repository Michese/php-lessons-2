<?php

namespace application\model;

use application\model\base\Model;

class HomeModel extends Model{
    public function getIndexItems() {
        $params["title"] = $this->config->get("title");
        $params["js"] = " ";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["name_user"] = " ";
        if(!empty($this->session->get("user"))) {
            $params["name_user"] = $this->session->get("user")["name_user"];
        }

        return $params;
    }
}