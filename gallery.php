<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/styles5.css">
</head>
&nbsp;
<body onload="beginGal()">
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
                    <a href="gallery.php">Галерея</a>
                </li>
            </ul>
        </ul>
    </nav>
    <div class="buttons">
        <div class = "entrance"><a href="entrance.php">&nbsp;&nbsp;&nbsp;Вход&nbsp;&nbsp;&nbsp;</a></div>
        <div class = "registry"><a href="registration1.php">&nbsp;&nbsp;&nbsp;Регистрация&nbsp;&nbsp;&nbsp;</a></div>
    </div>
</header>
<div class="Photo">
    <h1>ФОТОГАЛЕРЕЯ</h1>
</div>
<article>
    <div class="main">
        <div id="left">
            <img src="image/right.png" alt width="40%" onclick="leftRun()">
        </div>
        <div id="gallery">
        </div>
        <div id="right">
            <img src="image/left.png" alt width="40%" onclick="rightRun()">
        </div>
    </div>
</article>
</body>
</html>