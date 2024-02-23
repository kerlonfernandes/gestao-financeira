<?php
session_start();
class HomeController extends RenderView {

    public function index(){

        if(isset($_SESSION["user"])){
            
        }
        else {
            header("Location: ./login");
        }

    }

}