<?php

namespace application\model\base;

use application\service\Application;

class Model {
    protected
        $view,
        $request,
        $config,
        $session,
        $dbh,
        $logger;

    public function __construct() {
        $this->view = Application::get()->view();
        $this->request = Application::get()->request();
        $this->config = Application::get()->config();
        $this->logger = Application::get()->logger();
        $this->session = Application::get()->session();
        $this->dbh = new \PDO(
            $this->config->get("db")["dsn"],
            $this->config->get("db")["user"],
            $this->config->get("db")["password"]
        );
    }
}