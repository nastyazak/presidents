<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
/*Функция, которая выводит сообщение "Здравствуйте (имя пользователя)"*/
function getNick() {
    if(isset($_SESSION['nick'])) {
        echo  "Здравствуйте, " .$_SESSION['nick'];
    }
    else {
        echo '';
    }
}
?>
<head>
    <meta charset="UTF-8">
    <title>Президенты Соединенных Штатов Америки</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
&nbsp;
<script>
    function Mes() {
        alert("Необходимо авторизироваться для доступа к галерее");
    }
</script>
<body>
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php getNick(); ?></span>
    <div class="кнопки">
        <div class = "entrance"><a href="entrance.php">&nbsp;&nbsp;&nbsp;Вход&nbsp;&nbsp;&nbsp;</a></div>
        <div class = "registry"><a href="registration1.php">&nbsp;&nbsp;&nbsp;Регистрация&nbsp;&nbsp;&nbsp;</a></div>
    </div>
</header>
    <div class = "main">
        <h1>Президенты Соединенных Штатов Америки</h1>
        <h2>Добро пожаловать!</h2>
    </div>
<article>
    <div class = "introduction">
     <p>Президент США - это политическая персона,
        которая хорошо известна не только в Соединенных Штатах, но и по всему миру.
        Граждане других государств: от Ирака до Китая, от Австралии и до России знают,
        как зовут американского президента, как он выглядит,
        и могут прокомментировать его политические действия.
        Статус США привел к тому, что президент страны является очень известным человеком в мире.
        Чтобы стать президентом Соединенных Штатов, необходимо родиться в Соединенных Штатах,
        быть не моложе 35 лет и прожить в Соединенных Штатах как минимум последние 14 лет.</p>
    </div>
</article>
</body>
</html>
