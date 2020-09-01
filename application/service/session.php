<?php

namespace application\service;

class Session
{
    private $session = null;

    public function setSession($key, $value)
    {
        $this->session[$key] = $value;
    }

    public function get($item = null)
    {
        $result = null;
        if ($item === null) {
            $result = $this->session;
        } else if (isset($this->session[$item])) {
            $result = $this->session[$item];
        }
        return $result;
    }

    public function start() {
        session_start();
    }

    public function destroy() {
        session_destroy();
    }
}