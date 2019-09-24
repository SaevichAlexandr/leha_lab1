<?php

//namespace app\core;

class Controller
{
    function createView($view)
    {
        if (file_exists("app/views/".$view.".php")) {
            include_once("app/views/".$view.".php");
        } elseif ($view == "") {
            include_once("app/views/main.php");
        } else {
            include_once("app/views/404.php");
        }
    }
}