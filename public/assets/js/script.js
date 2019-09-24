

var hids = ['hintName', 'hintPhone', 'hintMail'];
var hints = ['Иван Иванович Иванов', '79780325393', 'Например, vladimir@example.com'];

function validate_form() {
    var valid = true;

    if (document.contact_form.sex[0].checked == false && document.contact_form.sex[1].checked == false && valid == true){
        valid = false;
    }
    if (validate_fio('hintName') == false)
        valid = false;
    if (validate_email('hintMail') == false)
        valid = false;
    if (validate_mes() == false)
        valid = false;
    if (validate_phone('hintPhone') == false)
        valid = false;
    if (document.getElementById("dateOfBirth").value == ""){
        $("#dateOfBirth").css("background-color", "#FF6347");
        valid = false;
    }
    if (valid == false) {
        window.alert("Поля не заполнены или заполнены неверно.");
        event.preventDefault();
    }
    return valid;
}

function hideHints(){
    for (var i = 0; i < hideHints.arguments.length; i++) {
        document.getElementById(hideHints.arguments[i]).innerHTML = "";
    }
}

function validate_fio(hint){
    var regExp = /^[а-яА-ЯёЁa-zA-Z]+\s[а-яА-ЯёЁa-zA-Z]+\s[а-яА-ЯёЁa-zA-Z]+$/;
    if (!(regExp.test(document.contact_form.fio.value))) {
        document.contact_form.fio.style.backgroundColor = "#FF6347";
        document.getElementById(hint).innerHTML = hints[hids.indexOf(hint)];
        return false;
    } else {
        document.contact_form.fio.style.backgroundColor = "#F0FFF0";
        document.getElementById(hint).innerHTML = "";
        return true;
    }
}

    function blablaland()
    {
        //document.getElementById('name').style.backgroundColor = "white"
        $("#name").css("background-color", "white");
    }

function validate_phone(hint){
    var regExp = /^[73]\d{8,10}$/;
    if (!(regExp.test(document.contact_form.phone.value))) {
        document.contact_form.phone.style.backgroundColor = "#FF6347";
        document.getElementById(hint).innerHTML = hints[hids.indexOf(hint)];
        return false;
    } else {
        document.contact_form.phone.style.backgroundColor = "#F0FFF0";
        document.getElementById(hint).innerHTML = "";
        return true;
}
}

function validate_mes(){
    if (document.contact_form.mes.value == "") {
        document.contact_form.mes.style.backgroundColor = "#FF6347";
        return false;
    } else {
        document.contact_form.mes.style.backgroundColor = "#F0FFF0";
        return true;
    }
}

function validate_email(hint){
    var regExp = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
    if (!regExp.test(document.contact_form.email.value)) {
        document.contact_form.email.style.backgroundColor = "#FF6347";
        document.getElementById(hint).innerHTML = hints[hids.indexOf(hint)];
        return false;
    } else {
        document.contact_form.email.style.backgroundColor = "#F0FFF0";
        document.getElementById(hint).innerHTML = "";
        return true;
    }
}

function lsNull() {
    var pages = ['main', 'AboutMe', 'contact', 'interests', 'study', 'test', 'photos.php'];
    for (var i = 0; i < pages.length; i++) {
        var iValue = localStorage[pages[i]] || 0;
        localStorage.setItem(pages[i], iValue);
    }
}

function startTime()
{
    window.setInterval(function () {
        var week = new Array( "Вс", "Пн", "Вт", "Ср", "Чт","Пт", "Сб");
        var date = new Date();
        var stringDate = document.getElementById('currentDate');
        stringDate.innerHTML = ad0(date.getDate()) + '.' + ad0(date.getMonth() + 1) + '.' + (date.getFullYear() - 2000) + ', ' + week[date.getDay()] + " "
        + ad0(date.getHours()) + ':' + ad0(date.getMinutes()) + ':' + ad0(date.getSeconds());
    }, 1);
}

function checkTimeHistory(page) {
    startTime();
        var pages = new Array('main', 'AboutMe', 'contact', 'interests', 'study', 'tests', 'photos.php');
    for (var i = 0; i < pages.length; i++) 
    {
        var iValue = localStorage[pages[i]] || 0;
        localStorage.setItem(pages[i], iValue);
    }
    var cookies = getCookie(page) || 0;
    var lS = localStorage.getItem(page) || 0;
    $("#history").innerHTML = "Local Storage: " + lS + ". Cookies: " + cookies;
}

function ad0(add){
    if (add < 10)
        add = "0" + add;
    return add;
}

function setCookie(name, value) {
    document.cookie = name + "=" + value;
}

function getCookie(name) {
    var r = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
    if (r) return r[2];
    else return 0;
}

function saveToCookies(name) {
    lsNull();
    localStorage.setItem(name, parseInt(localStorage.getItem(name)) + 1);
    if (getCookie(name)=="0")
        setCookie(name, 1);
    else
        setCookie(name, (parseInt(getCookie(name))+ 1));
}

function changeStyleDiv(color)
{
    if (color == 1)
    {
        $("#bodys").css("background-color", "blue");
    }
else if (color == 2)
    {
        $("#bodys").css("background-color", "red");
    }
else if (color == 3)
    {
        $("#bodys").css("background-color", "green");
    }
else if (color == 4)
    {
        $("#bodys").css("background-color", "white");
    }
}


$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
});



