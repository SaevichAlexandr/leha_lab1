<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.03.2019
 * Time: 17:24
 */

class FormValidationController
{
    public function isNotEmpty()
    {
        if ($_POST['fio'] == "") {
            return false;
        } elseif ($_POST['phone'] == "") {
            return false;
        } elseif ($_POST['sex'] == "") {
            return false;
        } elseif ($_POST['age'] == "") {
            return false;
        } elseif ($_POST['email'] == "") {
            return false;
        } else {
            return true;
        }

    }

    public function isPhoneNumber()
    {
        $regexp = "/[+]{1}[0-9]{11}/";
        if (preg_match($regexp, $_POST['phone'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    public function isAge()
    {
        if ($_POST['age'] > 0 && $_POST['age'] < 126) {
            return true;
        } else {
            return false;
        }
    }

    public function isEmail()
    {
        $regexp = "/[a-z]+[@]{1}[a-z]+[.]{1}[a-z]+/";
        if (preg_match($regexp, $_POST['email'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    public function isFIO()
    {
        $regexp = "/[а-яё]+\s[а-яё]+\s[а-яё]+/ui";
        if (preg_match($regexp, $_POST['fio'], $match)) {
            return true;
        } else {
            return false;
        }
    }

    public function validate()
    {
        echo "<h1>Информация</h1>";
        echo "<h3>";
        if (!$this->isNotEmpty()) {
            echo "Введены не все данные!";
        } elseif (!$this->isFIO()) {
            echo "Неверный ввод ФИО!";
        } elseif (!$this->isPhoneNumber()) {
            echo "Неверный ввод номера телефона!";
        } elseif (!$this->isAge()) {
            echo "Введён неверный возраст!";
        } elseif (!$this->isEmail()) {
            echo "Введён неверный E-mail!";
        } else {
            echo "Данные введены верно.";
        }
        echo "</h3>";

    }
}