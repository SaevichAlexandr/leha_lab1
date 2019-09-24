<?php

//namespace app\core;

class Controller
{
    function createView($route)
    {
        if (file_exists("app/views/".$route.".php")) {
            include_once("app/views/".$route.".php");
        } elseif ($route == "") {
            include_once("app/views/main.php");
        } else {
            include_once("app/views/404.php");
        }
    }
}