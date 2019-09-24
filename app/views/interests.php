<!DOCTYPE html>
<html>
<head>
    <title>Наша первая Web-страница</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Первая страница" />
    <meta name="keywords" content="web-страница, первая web-страница, html" />
    
    <link rel=stylesheet href="../../public/assets/css/style_1.css">
</head>
<body>
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
            <p class="caption">Мои интересы</p>
        <div id="text">
            <p>Навигация:</p>
            <ul>
                <li><a href="#My_interests">Якорь 1</a></li>
                <li><a href="#Top_music">Якорь 2</a></li>

        <br><br><br>
        <div id="My_interests">
            <h1>Мои интересы</h1>
            <br>
            <ul class="mainList">
                <?php
                foreach (InterestsModel::$interests as $interest) {
                    echo "<li>" . $interest ."</li>";
                }
                ?>
            </ul>
        </div>
                <br><br><br>
        <div id="Top_music">
            <h1>Музыка</h1>
            <br>
            <ul class="mainList">
                <?php
                foreach (InterestsModel::$music as $song) {
                    echo "<li>" . $song["name"] . "<p><audio controls><source src=\"public/assets/audios/" . $song["src"] . ".mp3\"></audio></p></li>";
                }
                ?>
            </ul>
        </div>
</body>
</html>