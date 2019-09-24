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
<!--        				<script>-->
<!--    function ValidName() {-->
<!--	 var area = document.getElementById('firstname');-->
<!--         if (area.value=='') {                 -->
<!--            window.alert('Не введено имя!');-->
<!--        }-->
<!--		 var area = document.getElementById('dadname');-->
<!--         if (area.value=='') {                 -->
<!--            window.alert('Не введено отчество!');-->
<!--        }-->
<!--		 var area = document.getElementById('surname');-->
<!--         if (area.value=='') {                 -->
<!--            window.alert('Не введена фамилия!');-->
<!--        }-->
<!--		 var area = document.getElementById('email');-->
<!--         if (area.value=='') {                 -->
<!--            window.alert('Не введен E-mail!');-->
<!--        }-->
<!--        var re2 = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;-->
<!--        var myMail2 = document.getElementById('phone').value;-->
<!--        if (re2.test(myMail2) == true){return true;}else{window.alert('Ошибка: Не введен правильный номер телефона');return false;}}-->
<!--</script>-->
<!---->
<!--		}-->
<!--</script>-->
<!---->
<!--        <div id="info">-->
<!--            <div id="text">-->
<!--            <p class="caption">Контакт</p>-->
<!--			 <form onsubmit="ValidName()" name="form" action="#">-->
<!--                    <fieldset>-->
<!--                        <div class="text_table">-->
<!--                            <label for="firstname">Ваше имя:</label>-->
<!--                            <input id="firstname" type="text" name="firstname" placeholder=""/>-->
<!--                        </div>-->
<!--                        <div class="text_table">-->
<!--                            <label for="dadname">Ваше отчество:</label>-->
<!--                            <input id="dadname" type="text" name="surname" placeholder="Иванович" />-->
<!--                        </div>-->
<!--                        <div class="text_table">-->
<!--                            <label for="surname">Ваша фамилия:</label>-->
<!--                            <input id="surname" type="text" name="surname" placeholder="Иванов" />-->
<!--                        </div>-->
<!--						 <div class="text_table">-->
<!--                            <label for="phone">Ваше телефон:</label>-->
<!--                            <input id="phone" type="text" name="phone" placeholder="+7"/>-->
<!--                        </div>-->
<!--                        <div class="text_table">-->
<!--                            <label>Ваш Пол:</label>-->
<!--                            <input type="radio" name="color" value="1" />Мужской-->
<!--                            <input type="radio" name="color" value="2" checked="checked" />Женский-->
<!--                        </div>-->
<!--                        <div class="text_table">-->
<!--                            <label for="email">Ваш email:</label>-->
<!--                            <input id="email" type="email" name="email" />-->
<!--                        </div>-->
<!--                        <div class="text_table">-->
<!--                        <label  for="city"><p>Возраст:</p></label>-->
<!--                        -->
<!--                        <select id="city" name="city">-->
<!--                            <option>1</option>-->
<!--                            <option>2</option>-->
<!--                            <option>3</option>-->
<!--                            <option>4</option>-->
<!--                            <option>5</option>-->
<!--                            <option>6</option>-->
<!--                            <option>7</option>-->
<!--                            <option>8</option>-->
<!--                            <option>9</option>-->
<!--                            <option>10</option>-->
<!--                        </select>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <input type="reset" value="Сбросить" />-->
<!--                            <input type="submit" name="submit" value="Отправить" onclick="mailto:Murzov_Alex@gmail.com"/>-->
<!--							</div>-->
<!--    <div id="error"></div>-->
<!---->
<!--                        <div class="text_table">-->
<!--                            <label for="date">Дата рождения:</label>-->
<!--                            <input id="date" type="text" name="date"/>-->
<!--                            <div class="text_table">-->
<!--                                <select id="month" name="month" onchange="ept(true);">-->
<!--                                    <option>Январь-->
<!--                                    <option>Февраль-->
<!--                                    <option>Март-->
<!--                                    <option>Аперль-->
<!--                                    <option>Май-->
<!--                                    <option>Июнь-->
<!--                                    <option>Июль-->
<!--                                    <option>Август-->
<!--                                    <option>Сентябрь-->
<!--                                    <option>Октябрь-->
<!--                                    <option>Ноябрь-->
<!--                                    <option>Декабрь-->
<!--                                </select>-->
<!--                                <select id="year" name="year" onchange="ept(false);">-->
<!--                                    <option>1992-->
<!--                                    <option>1993-->
<!--                                    <option>1994-->
<!--                                    <option>1995-->
<!--                                    <option>1996-->
<!--                                    <option>1997-->
<!--                                    <option>1997-->
<!--                                    <option>1998-->
<!--                                    <option>1999-->
<!--                                    <option>2001-->
<!--                                    <option>2002-->
<!--                                    <option>2003-->
<!--                                </select>-->
<!--                            </div>-->
<!--                                <table id="dataTable">      -->
<!--                                    <tr>-->
<!--                                        <td class = "colums">Пн</td>-->
<!--                                        <td class = "colums">Вт</td>-->
<!--                                        <td class = "colums">Ср</td>-->
<!--                                        <td class = "colums">Чт</td>-->
<!--                                        <td class = "colums">Пт</td>-->
<!--                                        <td class = "colums">Сб</td>-->
<!--                                        <td class = "colums">Вс</td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--<script>-->
<!--    var n = 5;-->
<!--    var m = 7;-->
<!--    var i=1;-->
<!--    var count = 1;-->
<!--    var day = 31;-->
<!--    while (i <= n){-->
<!--        document.write('<tr>');-->
<!--        var j=1;-->
<!--        while(j <= m){-->
<!--                document.write('<td class="text_table">');-->
<!--                if (count <= day){-->
<!--                    if (count == 1){-->
<!--                    document.write('<input  class="radio_buttons_i"  type="radio" name="radio" value = '+ count +' id="' + count + '" onchange="ept(false);" checked = "checked"/><label id = "' + (count+100) + '"  class="radio_buttons_l"  for="' + count + '">' + count + '</label>');-->
<!--                    } else {-->
<!--                    document.write('<input  class="radio_buttons_i"  type="radio" name="radio" value = '+ count +' id="' + count + '" onchange="ept(false);"/><label id = "' + (count+100) + '" class="radio_buttons_l" for="' + count + '">' + count + '</label>');    -->
<!--                    }-->
<!--                }-->
<!---->
<!--                document.write("</td>");-->
<!--                j++;-->
<!--                count ++;-->
<!--        }-->
<!--        document.write("</tr>");-->
<!--        i++;-->
<!--    }-->
<!--</script>                     -->
<!--                                </table>-->
<!--                    </fieldset>-->
<!--                </form>-->
<!--				<script>-->
<!--    function ept(flag) {-->
<!---->
<!--        if (flag == true){-->
<!---->
<!--            var table = document.getElementById("dataTable");-->
<!---->
<!--            if ((document.getElementById('month').value == 'Январь') || (document.getElementById('month').value == 'Март') || (document.getElementById('month').value == 'Июль') || (document.getElementById('month').value == 'Август') || (document.getElementById('month').value == 'Октябрь') || (document.getElementById('month').value == 'Декабрь'))-->
<!--            {-->
<!--                document.getElementById(31).style.display = "block";-->
<!--                document.getElementById(30).style.display = "block";-->
<!--                document.getElementById(131).style.display = "block";-->
<!--                document.getElementById(130).style.display = "block";-->
<!--            } -->
<!--            else if (document.getElementById('month').value == 'Февраль')-->
<!--            {-->
<!--                document.getElementById(31).style.display = "none";-->
<!--                document.getElementById(30).style.display = "none";-->
<!--                document.getElementById(131).style.display = "none";-->
<!--                document.getElementById(130).style.display = "none";-->
<!--            } -->
<!--            else -->
<!--            {-->
<!--                document.getElementById(31).style.display = "none";-->
<!--                document.getElementById(131).style.display = "none";-->
<!--            }-->
<!--        }-->
<!---->
<!--        var rad=document.getElementsByName('radio');-->
<!--        for (var i=0;i<rad.length; i++) {-->
<!--            if (rad[i].checked) {-->
<!--                var checkedButton = i + 1;-->
<!--            }-->
<!--        }-->
<!--        document.getElementById('date').value = checkedButton + "." + -->
<!--        document.getElementById('month').value + -->
<!--        "." + -->
<!--        document.getElementById('year').value;-->
<!--    }  -->
<!---->
<!--    function createdId(c){-->
<!--        return "label" + c;-->
<!--    }-->
<!--</script>-->
<!---->
<!--            </div>-->
<!--        </div>  -->
<!--    </div> -->

        <div id="info">
            <div id="text">
                <br>
                <p>Контакт</p>
                <br>
                <form name="contact" action="validation/contact" method="POST">
                    <!--                    <fieldset>-->
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