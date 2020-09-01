<?php

namespace application\service;

class Request
{

    private static
        $data,
        $getData,
        $postData;

    public function __construct()
    {
        foreach ($_REQUEST as $key => $value) {
            $this->setData($key, $value);
        }

        foreach ($_POST as $key => $value) {
            $this->setPostData($key, $value);
        }

        foreach ($_GET as $key => $value) {
            $this->setGetData($key, $value);
        }
    }

    private function setData($key, $value)
    {
        self::$data[$key] = $value;
    }

    private function setPostData($key, $value)
    {
        self::$postData[$key] = $value;
    }

    private function setGetData($key, $value)
    {
        self::$getData[$key] = $value;
    }

    public function data($item = null)
    {
        $result = null;

        if ($item === null) {
            $result = self::$data;
        } else if (isset(self::$data[$item])) {
            $result = self::$data[$item];
        }

        return $result;
    }

    public function post($item = null)
    {
        $result = null;

        if ($item === null) {
            $result = self::$postData;
        } else if (isset(self::$postData[$item])) {
            $result = self::$postData[$item];
        }

        return $result;
    }

    public function get($item = null)
    {
        $result = null;

        if ($item === null) {
            $result = self::$getData;
        } else if (isset(self::$getData[$item])) {
            $result = self::$getData[$item];
        }

        return $result;
    }

    public function hadPost()
    {
        return !empty(self::$postData);
    }

    public function redirect($url) {
        header ("Location: " . $url, true, 301);
        exit();
    }
}
