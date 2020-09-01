<?php

namespace application\service;

use \application\service\View;
use \application\service\Request;
use \application\service\Config;
use \application\service\Session;
use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;
use PHPUnit\Runner\Exception;

class Application
{

    private static $app = null;
    private
        $view,
        $request,
        $config,
        $session,
        $logger;

    private function __construct()
    {
        $this->view = new View();
        $this->request = new Request();
        $this->config = new Config();
        $this->session = new Session();
        $this->logger = new Logger("common");
        $this->logger->pushHandler(new StreamHandler(BASE_PATH . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "common.log"));
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function get()
    {
        if (!self::$app) {
            self::$app = new Application();
        }

        return self::$app;
    }

    public function view()
    {
        return $this->view;
    }

    public function request()
    {
        return $this->request;
    }

    public function config()
    {
        return $this->config;
    }

    public function session()
    {
        return $this->session;
    }

    public function logger()
    {
        return $this->logger;
    }

    public function dispatch()
    {
        try {

            if($_SERVER["REQUEST_URI"] === '/') {
                $this->request->redirect("/?path=home/index");
            }

            if (!$this->request->get("path")) {
                throw new Exception("Wrong URL format.");
            }

            list(
                $controller,
                $action
                ) = explode('/', $this->request->get("path"));

            $class = "\\application\\controller\\" . ucfirst($controller) . "Controller";

            if(!class_exists($class)) {
                throw new Exception("class $class not found!");
            }

            $controller = new $class();

            if (!method_exists($controller, "action_" . $action)) {
                throw new Exception("method action_" . $action . " not found in class " . $controller);
            }

            $controller->{"action_" . $action}();

        } catch (\Exception $ex) {
            $this->logger->error($ex->getMessage());
            $this->view->render("error/500error");
            //$this->request->redirect('/');
        }

    }
}
