<?php

namespace application\controller\base;

use \application\service\Application;

abstract class Controller {

    protected
        $view,
        $request,
        $config,
        $session,
        $logger;

    public function __construct() {
        $this->view = Application::get()->view();
        $this->request = Application::get()->request();
        $this->config = Application::get()->config();
        $this->logger = Application::get()->logger();
        $this->session = Application::get()->session();
    }
}