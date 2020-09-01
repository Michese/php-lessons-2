<?php

namespace application\controller;

use application\controller\base\Controller;
use application\model\AccountModel;

class AccountController extends Controller
{
    public function action_register()
    {
        $accountModel = new AccountModel();

        if ($this->request->hadPost() && isset($this->request->post()["sign_up"])) {
            $this->view->render("account/register", $accountModel->sign_up());
        } else if ($this->request->hadPost() && isset($this->request->post()["sign_in"])) {
            $this->view->render("account/register", $accountModel->sign_in());
        } else {
            $this->view->render("account/register", $accountModel->getRegisterItems());
        }
    }
}