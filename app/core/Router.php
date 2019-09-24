<?php

class Router
{
    function route()
    {
        //Получаем имя контроллера или "page" по умолчанию
        $controller_name = $_REQUEST["controller"];
        //Получаем имя экшена или "index" по умолчанию
        $action_name = $_REQUEST['action'];
        //Путь и имя файла контроллера
        $controller_file = "app/controllers/".$controller_name.'controller.php';
        //Проверяем наличие файла контроллера и завершаем работу в случае его отсут-ствия
        if(file_exists($controller_file)){
            include_once $controller_file;
        } elseif ($controller_name == null) {
            include_once "app/controllers/MainController.php";
            $controller = new MainController();
            $controller->generateView();
        } else {
            echo "ОШИБКА! Файл контроллера $controller_file не найден!";
            die;
        }
        //Создаем экземпляр контроллера
        $controller_class_name = ucfirst($controller_name).'Controller';
        $controller = new $controller_class_name;

//        Вызываем экшн конроллера
        if(method_exists($controller, $action_name)) {
            $controller->$action_name();
        } else {
            echo "ОШИБКА! Отсутствует метод $action_name контроллера $controller_class_name";
            die;
        }
    }
}
