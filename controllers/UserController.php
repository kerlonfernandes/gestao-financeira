<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./_app/Config.php";
class UserController extends RenderView {

    public function registerSteps() {
        session_start();

        if(isset($_GET["accountfor"])) {
            if($_GET["accountfor"] == "onlyu") {
                $this->loadView('onlyuView', ['title' => "Criar conta | Apenas você",
                                              "site_url"=> SITE
                                                
                                             ]);
            }
            else if ($_GET["accountfor"] == "couple") {
                $this->loadView("forCoupleRegisterView", ["title"=> "Criar conta | Para Casais",
                                                          "site_url"=> SITE

                                                         ]);
            }
            else if($_GET["accountfor"] == "") {
                $this->loadView('registerSteps', ['title' => "Primeiro Passo", "site_url"=> SITE]);
    
            }
            else {        
                $this->loadView('registerSteps', ['title' => "Primeiro Passo", "site_url"=> SITE]);

            }
        } 
        
        else {
            $this->loadView('registerSteps', ['title' => "Primeiro Passo", "site_url"=> SITE]);

        }
    }

    public function login() {
        // print_r(SITE);
        $this->loadView("loginView", [
            "title"=> "Login",
            "site_url"=> SITE
        ]);
    }
 

}