<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.03.2019
 * Time: 21:58
 */

class PhotoController extends Controller
{
    public function bar()
    {
        $photoObj1 = new PhotoModel();
        $photoObj1->foo();
    }

    public function createView($route)
    {
        parent::createView($route);

    }
}