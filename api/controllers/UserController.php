<?php
use UserClass\User;
use Midspace\Database;
include "../_app/Config.php";
include "../src/User.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class UserController {

    public function registerUser() {
        $response = array();

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if($_POST["user"] && $_POST["pass"] && $_POST["birth"] && $_POST["sex"]) {
                $user_data = [
                    "user" => $_POST["user"],
                    "email" => $_POST["email"],
                    "pass" => $_POST["pass"],
                    "birth" =>  $_POST["birth"],
                    "sex" => $_POST["sex"],
                ];
                $user = new User(MYSQL_CONFIG);
                $results = $user->register($user_data);
                if ($results->status === "success") {
                    $response["status"] = "success";
                    $response["error"] = false;
                    $response["message"] = "";
                    $response["info"] = "";   
                }
                else {
                    $response["status"] = "error";
                    $response["error"] = true;
                    $response["message"] = "";
                    $response["info"] = "";   
                }
                json_encode($response);
            }
         
        }

    }

    public function verifyIfUserNameExists() {
        $database = new Database(MYSQL_CONFIG);
        
        header('Content-Type: application/json'); 
  
        if(isset($_GET["username"])) {
            $userName = $_GET["username"];
            
            $result = $database->execute_query_and_get_json("SELECT id FROM users WHERE user = :user", [
                ":user" => $userName
            ]);
        
            echo $result;
        } else {
            echo json_encode(array('error' => 'access_denied'));
        }
    }

    public function verifyEmail() {
        $database = new Database(MYSQL_CONFIG);
        
        header('Content-Type: application/json'); 
  
        if(isset($_GET["email"])) {
            $email = $_GET["email"];
            
            $result = $database->execute_query_and_get_json("SELECT id FROM users WHERE email = :email", [
                ":email" => $email
            ]);
        
            echo $result;
        } else {
            echo json_encode(array('error' => 'access_denied'));
        }
    }

}