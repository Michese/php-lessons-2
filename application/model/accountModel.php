<?php

namespace application\model;

use application\model\base\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Param;

class AccountModel extends Model
{

    public function getRegisterItems()
    {
        $params["title"] = $this->config->get("title");
        $params["js"] = " ";
        $params["year"] = $this->config->get("year");
        $params["menu"] = $this->config->get("menu");

        $params["answer"] = " ";
        return $params;
    }

    public function sign_in()
    {
        $params = [];
        $statement = $this->dbh->prepare(
            "select 
            user.id_user as id_user,
            user.login_user as login_user,
            user.name_user as name_user,
            user.password_user as password_user
            from user 
            where login_user = :login_user"
        );
        $statement->bindValue(":login_user", $this->request->post("login"), \PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetchObject();

        if (password_verify($this->request->post("password"), $user->password_user)) {
            $this->session->set("user", $user);

            if ($this->request->post("rememberme")) {
                setcookie("login_user", $this->session->get("login_user"), time() + 3600 * 24);
                setcookie("password_user", $this->session->get("password_user"), time() + 3600 * 24);
            }

            $this->request->redirect("/?path=home/index");
        } else {
            $params = $this->getRegisterItems();
            $params["answer"] = "Вы ввели неверный логин или пароль!";
        }

        return $params;
    }

    public function sign_up()
    {
        $params = $this->getRegisterItems();

        $statement = $this->dbh->prepare(
            "select user.id_user 
            from user
            where user.login_user = :login_user"
        );
        $statement->bindValue(":login_user", $this->request->post("login"), \PDO::PARAM_STR);
        $statement->execute();
        if (!isset($statement->fetchObject()->id_user)) {

            $password = password_hash($this->request->post("password"), PASSWORD_DEFAULT);

            $statement = $this->dbh->prepare(
                "insert into `user` (`name_user`, `login_user`, `password_user`)
                values (:name_user, :login_user, :password_user)"
            );
            $statement->bindValue(":name_user", $this->request->post("name"), \PDO::PARAM_STR);
            $statement->bindValue(":login_user", $this->request->post("login"), \PDO::PARAM_STR);
            $statement->bindValue(":password_user", $password, \PDO::PARAM_STR);

            if ($statement->execute()) {
                $params["answer"] = "Аккаунт успешно зарегистрирован!";
            } else {
                $params["answer"] = "Что-то пошло не так!";
            }

        } else {
            $params["answer"] = "Пользователь с таким логином уже существует!";
        }

        return $params;
    }

    public function signInWithCookies() {

    }
}
