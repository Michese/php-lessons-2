<?php

require_once 'Twig/Autoloader.php';
require_once 'classes/application.php';
require_once 'classes/view.php';
require_once 'classes/db.php';

Twig_Autoloader::register();
//echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));

try {

    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $view = new \Classes\View($twig);
    $db = new \Classes\DB('localhost', 'michese', '1234', 'trialdb2');
    $app = new \Classes\Application($view, $db);

    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $page = "index";

    if (isset($url_array[1]) && $url_array[1] !== "") {
        $page = $url_array[1];
    }

    for ($count = 2; $count < count($url_array); $count++) {
        if ($url_array[$count] !== '' && !preg_match("/^(\?)(.*)$/", $url_array[$count])) {
            $page .= ucfirst($url_array[$count]);
        }

    }

    $app->$page();

} catch (Exception $e) {
    die("Error" . $e->getMessage());
}