<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.03.2019
 * Time: 17:24
 */

class FormValidationController
{
    static function isNotEmpty($data)
    {
        if ($data['fio'] == "") {
            return false;
        } elseif ($data['phone'] == "") {
            return false;
        } elseif ($data['sex'] == "") {
            return false;
        } elseif ($data['age'] == "") {
            return false;
        } elseif ($data['email'] == "") {
            return false;
        } else {
            return true;
        }

    }

    static function isPhoneNumber($data)
    {
        $regexp = "/[+]{1}[0-9]{11}/";
        if (preg_match($regexp, $data['phone'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    static function isAge($data)
    {
        if ($data['age'] > 0 && $data['age'] < 126) {
            return true;
        } else {
            return false;
        }
    }

    static function isEmail($data)
    {
        $regexp = "/[a-z]+[@]{1}[a-z]+[.]{1}[a-z]+/";
        if (preg_match($regexp, $data['email'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    static function isFIO($data)
    {
        $regexp = "/[а-яё]+\s[а-яё]+\s[а-яё]+/ui";
        if (preg_match($regexp, $data['fio'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    function validate()
    {
        echo "<h1>Информация</h1>";
        echo "<h3>";
        if (!self::isNotEmpty($_POST)) {
            echo "Введены не все данные!";
        } elseif (!self::isFIO($_POST)) {
            echo "Неверный ввод ФИО!";
        } elseif (!self::isPhoneNumber($_POST)) {
            echo "Неверный ввод номера телефона!";
        } elseif (!self::isAge($_POST)) {
            echo "Введён неверный возраст!";
        } elseif (!self::isEmail($_POST)) {
            echo "Введён неверный E-mail!";
        } else {
            echo "Данные введены верно.";
        }
        echo "</h3>";

    }
}