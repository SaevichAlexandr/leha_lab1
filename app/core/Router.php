<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07.03.2019
 * Time: 13:22
 */

include_once ("routes/Routes.php");

class Router
{
    static $validRoutes = [];

//    public static function getRoutes($validRoute, $method)
//    {
//        self::$validRoutes[] = [$validRoute, $method];
//    }

    public function start($url)
    {
        echo $_SERVER['REQUEST_URI'];

        $uri = $_SERVER['REQUEST_URI'];

        if ($uri != '/') {

        }
//        $routeIsFound = false;
//
//        if ($url == "") {
//            include_once ("app/views/main.php");
//        } else {
//            foreach (self::$validRoutes as $validRoute)
//            {
//                if ($validRoute[0] == $url) {
//                    $validRoute[1]->__invoke();
//                    $routeIsFound = true;
//                }
//            }
//            if ($routeIsFound == false) {
//                include_once ("app/views/404.php");
//            }
//        }
    }
}
