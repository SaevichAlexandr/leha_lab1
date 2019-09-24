<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 06.04.2019
 * Time: 3:34
 */

class TestValidationController extends FormValidationController
{

    static function isNotEmpty($data)
    {
        if ($data['fio'] == "") {
            return false;
        } elseif ($data['electricity'] == "") {
            return false;
        } elseif ($data['electricity2'] == "") {
            return false;
        } else {
            return true;
        }
    }

    function validate()
    {
        echo "<h1>Информация</h1>";
        echo "<h3>";
        if (!self::isNotEmpty($_POST)) {
            echo "Введены не все данные!";
        } elseif (!self::isFIO($_POST)) {
            echo "ФИО введено некорректно!";
        } else {
            echo "Тест пройден верно!";
        }
        echo "</h3>";

    }
}