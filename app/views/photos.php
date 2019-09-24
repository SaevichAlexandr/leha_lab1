<!DOCTYPE html>
<html>
<head>
    <title>Наша первая Web-страница</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Первая страница" />
    <meta name="keywords" content="web-страница, первая web-страница, html" />
    <script src="../../public/assets/js/script.js"></script>
    <link rel=stylesheet href="../../public/assets/css/style_1.css">
	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <script src="../../public/assets/js/lightbox-plus-jquery.min.js"></script>
    <link rel=stylesheet href="../../public/assets/css/lightbox.min.css">
    
	    <script>
        var title = [
        "Камера", 
        "Информация",
        "Дом",
        "Телефон",
        "Принтер",
        "Вперед",
        "Поиск",
        "Сообщение",
        "Часы"
		];        

        var photo = [
        '9.png', 
        "1.png",
        "2.png",
        "3.png",
        "4.png",
        "5.png",
        "6.png",
        "7.png",
        "8.png"
		];        
    </script>
	
</head>
<body onload="checkTimeHistory('photos.php')" onbeforeunload="saveToCookies('photos.php')"  id = "bodys">
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

        <div>
            <table>
                <?php
                foreach (PhotoModel::$photos as $photo) {
                    echo "<img src=\"public/assets/img/" . $photo["name"] .
                        ".png\" alt=\"". $photo["alternative"] ."\" width=\"200\">";
                }
                ?>
            </table>
        </div>
    
</body>
</html>