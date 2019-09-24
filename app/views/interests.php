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
            <p class="caption">Мои интересы</p>
        <div id="text">
            <p>Навигация:</p>
            <ul>
                <li><a href="#My_interests">Якорь 1</a></li>
                <li><a href="#Top_music">Якорь 2</a></li>
<!--            </ul>-->
<!--        </div>-->
<!--        <div id="text_2">-->
<!--           <script>-->
<!--    var film_arr = ["Фильм 1", "Фильм 2", "Фильм 3", "Фильм 4", "Фильм 5", "Фильм 6", "Фильм 7"];        -->
<!--    var book_arr = ['Книга 1', "Книга 2", "Книга 3", "Книга 4", "Книга 5", "Книга 6", "Книга 7"]; -->
<!--    var lang_arr = ["Javascript", "PHP", "<s>HTML</s>", "C++", "C#",]; -->
<!--</script>-->
<!--     <p class="caption_2"><a name="book">Любимые книги</a></p>-->
<!--<ul>    -->
<!--    <script>-->
<!--        var i = 0;-->
<!--        while (i < book_arr.length)-->
<!--        {-->
<!--            document.write('<li>');-->
<!--            document.write(book_arr[i]);-->
<!--            document.write("</li>");-->
<!--            i++;-->
<!--        }-->
<!--    </script> -->
<!--</ul>-->
<!--            <p class="caption_2"><a name="films">Любимые фильмы</a></p>-->
<!--                <ul>    -->
<!--                    <script>-->
<!--                        var i = 0;-->
<!--                        while (i < film_arr.length)-->
<!--                        {-->
<!--                            document.write('<li>');-->
<!--                            document.write(film_arr[i]);-->
<!--                            document.write("</li>");-->
<!--                            i++;-->
<!--                        }-->
<!--                    </script> -->
<!--                </ul>-->
<!--            <p class="caption_2"><a  name="lang">Любимые языки программирования</a></p>-->
<!--                <ul>    -->
<!--                    <script>-->
<!--                        var i = 0;-->
<!--                        while (i < lang_arr.length)-->
<!--                        {-->
<!--                            document.write('<li>');-->
<!--                            document.write(lang_arr[i]);-->
<!--                            document.write("</li>");-->
<!--                            i++;-->
<!--                        }-->
<!--                    </script>           -->
<!--                </ul>-->
<!---->
<!--        </div>-->
<!--        </div>-->
<!--        -->
<!--    </div>-->
<!--    -->
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