<!DOCTYPE html>
<html>
<head>
    <title>Первая лабочка</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Первая страница" />
    <meta name="keywords" content="web-страница, первая web-страница, html" />
    <script src="../../public/assets/js/script.js"></script>
    <link rel=stylesheet href="../../public/assets/css/style_1.css">
</head>
<body onload="checkTimeHistory('main')" onbeforeunload="saveToCookies('main')" id = "bodys">
    <div id="page">
       
        <div id="hat">
               
                <a class="logo" href="#" name="Логотип">
                    <img height="128" width="128" src="../../public/assets/img/logo.png" alt="Логотип">
                </a>
                
    </div>

        <div id="navigation">
            <ul>
                <li><a href="main">Главная</a></li>
                <li><a href="#">Автор</a>
                    <ul class="dropdawn">
                        <li><a href="about">Обо мне</a></li>
                        <li><a href="interests">Мои интересы</a></li>
                        <li><a href="photos">Фотоальбом</a></li>
                        <li><a href="contact">Контакт</a></li>
                        <li><a href="study">Учёба</a></li>

                    </ul>
                </li>
                <li><a href="test">Тест</a></li>
            </ul>
        </div>
        
        <div id="info">
            <div id="text">
			<div id="history" ></div>
            <p class="caption">Главная</p>
			<p id="txt"></p>
                <img class="imgage" src="../../public/assets/img/camera.png"/>
                <p>Мурзов Алексей Олегович</p>
                <p>Группа - ИС/б-33-о</p>
				<p>Да, у меня нет нормальной фотографии:(</p>
             </div>
        </div>
       </div>
    </div>
    
</body>
</html>