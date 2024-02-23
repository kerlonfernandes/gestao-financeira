<?php

namespace UserClass;

use HelpersClass\SupAid;
use Midspace\Database;
use PDOException;

// require_once('../config.php');
// require_once('../Database.php');
// require_once("../src/app/SupAid.php");

require_once("../_app/Config.php");
require_once("../models/Database.php");
require_once("../src/SupAid.php");

class User
{

    private $conn;
    private $Helpers;
    public $key_user;
    public $chave_recuperacao;
    public $return;
    public $dados;

    public function __construct($connection)
    {
        $this->conn = new Database($connection);
        $this->Helpers = new SupAid();

    }

    public function register(array $user)
    {
        
        $key_user = $this->Helpers->generateRandomLetterHash(28);
        $chave_recuperacao = $this->Helpers->generateNumKey(16, 0, 9);
        $chave_recuperacao = implode($chave_recuperacao);

        $this->key_user = $key_user;
        $this->chave_recuperacao = $chave_recuperacao;

        //verificar se o usuário existe no banco de dados
        $query = $this->conn->execute_query("SELECT id from users WHERE user = :user", ["user" => $user['user']]);

        $query = $this->conn->execute_non_query(
            "INSERT INTO users(user, email, password, sex, birth, slug, recover_key, registration_time, registration_date) VALUES (:user, :email, :password, :sex, :birth, :slug, :recover_key, :registration_time, :registration_date)",
            [
                ":user" => $user['user'],
                ":email" => $user['email'],
                ":password" => $this->Helpers->hashPassword($user['pass']),
                ":sex" => $user["sex"],
                ":birth" => $user["birth"],
                ":slug" => $this->Helpers->createSlug($user["user"]),
                ":recover_key" => $this->key_user,
                ":registration_time" => currentTime,
                ":registration_date" => currentDate,
            ]
        );
        
        try {

            $this->return = $this->conn->execute_query("SELECT id from user WHERE user = :user", [":user" => $user['user']]);

            if ($this->return->results > 1) {
                return;
            } else {
                $query = $this->conn->execute_non_query(
                    "INSERT INTO users(user, email, password, sex, birth, slug, recover_key, registration_time, registration_date) VALUES (:user, :email, :password, :sex, :birth, :slug, :recover_key, :registration_time, :registration_date)",
                    [
                        ":user" => $user['user'],
                        ":email" => $user['email'],
                        ":password" => $this->Helpers->hashPassword($user['pass']),
                        ":sex" => $user["sex"],
                        ":birth" => $user["birth"],
                        ":slug" => $this->Helpers->createSlug($user["user"]),
                        ":recover_key" => $this->key_user,
                        ":registration_time" => currentTime,
                        ":registration_date" => currentDate,
                    ]
                );
                
                return $query;
                
            }
        } catch (PDOException $e) {

            print_r($e);
        }
    }

    public function Auth(array $user)
    {
        if (!empty($user)) {
            $this->dados = $this->return = $this->conn->execute_query(
                "SELECT id, email, nome, key_user FROM usuarios WHERE email = :email AND senha = :pass",
                [
                    "email" => $user['email'],
                    "pass" => $user['pass']
                ]
            );
            return $this->dados;
        } else {
            return;
        } 
    }
    public function RecoverPass () {

        

    }
}

    


