<?php


$routes = [

    "/" => "HomeController@index",
    "/users/{id}" => "UserController@show",
    "/signup" => "UserController@registerSteps",
    "/login" => "UserController@login"

];