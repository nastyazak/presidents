<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<script>
    function err() {
        var err = window.location.search.split('?')[1];
        if (err.length > 0)
            document.getElementById('error').innerHTML = decodeURIComponent(err);
    }
    function Mes() {
        alert("Необходимо авторизироваться для доступа к галерее");
    }
</script>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/styles4.css">
</head>
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
        <h1>Регистрация</h1>
        <form action="check.php" method="post">
            <input type="text" name="name" placeholder="Имя">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Придумайте пароль"><br><br>
            <span id="error"></span><br><br>
            <div class="кнопки">
                <button class="entrance"><a href="entrance.php">Вход</a></button>
                <button class="registry" type = "submit">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</article>
</body>
<br><br>
</html>