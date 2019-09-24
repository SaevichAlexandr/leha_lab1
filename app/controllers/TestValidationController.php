<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 06.04.2019
 * Time: 3:34
 */

class TestValidationController extends FormValidationController
{

    public function isNotEmpty()
    {
        if ($_POST['fio'] == "") {
            return false;
        } elseif ($_POST['electricity'] == "") {
            return false;
        } elseif ($_POST['electricity2'] == "") {
            return false;
        } else {
            return true;
        }
    }

    function validate()
    {
        echo "<h1>Информация</h1>";
        echo "<h3>";
        if (!$this->isNotEmpty($_POST)) {
            echo "Введены не все данные!";
        } elseif (!$this->isFIO($_POST)) {
            echo "ФИО введено некорректно!";
        } else {
            echo "Тест пройден верно!";
        }
        echo "</h3>";
//        var_dump($_POST);
    }
}