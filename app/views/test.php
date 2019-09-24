<!DOCTYPE html>
<html>
<head>
    <title>Наша первая Web-страница</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Первая страница" />
    <meta name="keywords" content="web-страница, первая web-страница, html" />
    <script src="../../public/assets/js/script.js"></script>
    <link rel=stylesheet href="../../public/assets/css/style_1.css">
</head>
<body>
<!--<body onload="checkTimeHistory('test')" onbeforeunload="saveToCookies('test')" id = "bodys">-->
    <div id="page">

        <div id="hat">

                <a class="logo" href="#" name="Логотип">
                    <img height="128" width="128" src="../../public/assets/img/logo.png" alt="Логотип">
                </a>

        </div>
        <div id="navigation">
            <ul>
                <li><a href="?controller=main&action=generateview">Главная</a></li>
                <li><a href="#">Автор</a>
                    <ul class="dropdawn">
                        <li><a href="?controller=about&action=generateview">Обо мне</a></li>
                        <li><a href="?controller=interests&action=generateview">Мои интересы</a></li>
                        <li><a href="?controller=photo&action=generateview">Фотоальбом</a></li>
                        <li><a href="?controller=contact&action=generateview">Контакт</a></li>
                        <li><a href="?controller=study&action=generateview">Учёба</a></li>
                    </ul>
                </li>
                <li><a href="?controller=test&action=generateview">Тест</a></li>
            </ul>
        </div>
    <div id="info">
        <div id="text">
            <p class="caption">Тест</p>
            <form name="form" action="?controller=testvalidation&action=validate" method="POST">
                <fieldset>
                    <div class="text_table">
                        <label for="fio">ФИО:</label>
                        <input id="fio" type="text" name="fio" placeholder="Иванов Иван Иванович"/>
                    </div>
                    <div class="text_table">
                        <label  for="city"><p>Группа:</p></label>

                        <select id="city" name="city">
                            <optgroup label="1 курс">
                                <option>ИС\б-11-о</option>
                                <option>ИС\б-12-о</option>
                                <option>ИС\б-13-о</option>
                            </optgroup>
                            <optgroup label="2 курс">
                                <option>ИС\б-21-о</option>
                                <option>ИС\б-22-о</option>
                                <option>ИС\б-23-о</option>
                            </optgroup>
                            <optgroup label="3 курс">
                                <option>ИС\б-31-о</option>
                                <option>ИС\б-32-о</option>
                                <option>ИС\б-33-о</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="text_table">
                        <label><b>Параллельное соединение ветвей электрической цепи:</b></label>
                        <p>
                            <input type="radio" name="electricity" value="1" />часть электрической цепи состоящая из совокупности различных идеализированных элементов
                            <input type="radio" name="electricity" value="2" />соединение, при котором все участки цепи присоединяются к одной и той же паре узлов и на всех участках имеется одно и то же напряжение
                            <input type="radio" name="electricity" value="3" />замкнутый путь, проходящий по нескольким ветвям электрической цепи
                        </p>
                    </div>

                    <div class="text_table">
                        <label><b>Электрическая схема:</b></label>
                        <p><input type="radio" name="electricity2" value="1" />графическое изображение электрической цепи</p>
                        <p><input type="radio" name="electricity2" value="2" />часть цепи, содержащая источники энергии</p>
                        <p><input type="radio" name="electricity2" value="3" />часть цепи, не содержащая источников энергии</p>
                    </div>
                    <div class="text_table">
                        <label><b>Выберите уважаемых преподавателей</b></label>
                        <p>
                            <input type="checkbox" name="respect1" value="1" checked="checked" disabled />Кирилл Викторович
                            <input type="checkbox" name="respect2" value="1" checked="checked" disabled />Ирина Петровна
                            <input type="checkbox" name="respect3" value="1" checked="checked" disabled />Андрей Юрьевич
                        </p>
                    </div>
                    <div class="text_table">
                        <label>Напишите ваши пожелания</label>
                        <br>
                        <textArea maxlength="1200" rows="12" cols="30" ></textArea>
                        <br>
                    </div>
                    <div>
                        <input type="reset" value="Сбросить" />
                        <input type="submit" name="submit" value="Отправить" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>