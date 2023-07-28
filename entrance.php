<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="css/styles4.css">
</head>
<script>
    /*
    *@Функция записывает в переменную err то, что находиться в URL после знака вопроса,
    * и, если длина err будет больше 0, передает его раскодированное значени в span*/
    function err() {
        var err = window.location.search.split('?')[1];
        if(err.length > 0)
            document.getElementById('error').innerHTML = decodeURIComponent(err);
    }
    /*
    *@Функция вызывает сообщение о необходимости авторизоваться для доступа к галерее
    */
    function Mes() {
        alert("Необходимо авторизироваться для доступа к галерее");
    }
</script>
<br>
<body onload="err()">
<header>
    <nav class = "logo">
        <ul>
            <div class="главная">
                <a href="input.php"><img width="50px"></a>
            </div>
            <ul class = "menu">
                <li>
                    <a href="government.php">Правление</a>
                </li>
                <li>
                    <a href="security.php">Охрана</a>
                </li>
                <li>
                    <a href="facts.php">Факты</a>
                </li>
                <li>
                    <a href="hobby.php">Хобби</a>
                </li>
                <li>
                    <a href="curse of tecumseh.php">Пролятие Текумсе</a>
                </li>
                <li>
                    <?php if(strlen($_SESSION['nick']) > 0):?>
                        <a href="gallery.php">Галерея</a>
                    <?php else: ?>
                        <a onclick="Mes()">Галерея</a>
                    <?php endif; ?>
                </li>
            </ul>
        </ul>
    </nav>
</header>
<article>
    <div class = "поле">
        <h1>Вход</h1>
        <form action="avtor.php" method="post">
            <input type="email" name="email" placeholder="Введите email">
            <input type="password"  name="password" placeholder="Введите пароль"><br><br><br>
            <span id="error"></span><br><br>
            <div class="кнопки">
                <button class="entrance" type = "submit">Авторизоваться</button>
                <button class="registry"><a href="registration1.php">Регистрация</a></button>
            </div>
        </form>
    </div>
</article>
</body>
<br>
</html>