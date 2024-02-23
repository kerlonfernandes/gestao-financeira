<?php


$routes = [

    "/" => "HomeController@index",
    "/v1/register" => "UserController@registerUser",
    "/v1/verify_user" => "UserController@verifyIfUserNameExists",
    "/v1/verify_email"=> "UserController@verifyEmail",
    "/users/{id}" => "UserController@show"

];