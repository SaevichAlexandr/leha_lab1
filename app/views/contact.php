<!DOCTYPE html>
<html>
<head>
    <title>Наша первая Web-страница</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Первая страница" />
    <meta name="keywords" content="web-страница, первая web-страница, html" />
    
    <link rel=stylesheet href="../../public/assets/css/style_1.css">
	
	     <script type="text/javascript">
 function FocusOnInput()
 {
 document.getElementById("firstname").focus();
 }
 </script>
</head>
<body  onload="FocusOnInput()">
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
                <br>
                <p>Контакт</p>
                <br>
                <form name="contact" action="?controller=formvalidation&action=validate" method="POST">
                    <div>
                        <label for="fio">Ваше ФИО:</label>
                        <input id="fio" type="text" name="fio" placeholder="Иван Иванович Иванов"/>
                    </div>
                    <br>
                    <div>
                        <label for="phone">Ваш телефон:</label>
                        <input id="phone" type="tel" name="phone" placeholder="+79780325393"/>
                    </div>
                    <br>
                    <div>
                        <label>Ваш Пол:</label>
                        <input id="male" type="radio" name="sex" value="1" />Мужской
                        <input id="female" type="radio" name="sex" value="2" />Женский
                        <input id="other" type="radio" name="sex" value="3" checked="checked" />Небинарный
                    </div>
                    <br>
                    <label>Возраст:</label>
                    <input id="age" type="number" name="age" placeholder="18">
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div>
                <lable>Ваш E-mail:</lable>
                <input id="email" type="email" name="email" placeholder="lupapupa@mail.ru" />
            </div>
            <br>
            <div>
                <input type="reset" value="Сбросить" />
                <input type="submit" name="submit" value="Отправить"/>
            </div>

            <div id="error"></div>
            <!--                    </fieldset>-->
            </form>
        </div>
    </div>

</body>
</html>