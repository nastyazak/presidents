<?php
    session_start();
    $login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."hghgvjgvkjgvgvhgvh76876");

    /*подключаемся к нашей базе данных и ищем пользователя с введенными значениями*/
    $mysql = new mysqli('localhost', 'root', '','register');
    $result = $mysql->query("SELECT name FROM users WHERE login = '$login' AND password = '$pass'");
    $error = "";
    $users = $result->fetch_assoc();
    /*если такого пользователя не нашли, то его перебрасывает на эту же страницу и выводиться ошибка */
    if(count($users)==0){
        $error = "Не правильный email или пароль";
        header('Location: entrance.php?'.$error);
        exit();
    }
    /*в суперглобальную переменную $_SESSION записывается введенное имя пользователя*/
    $_SESSION['nick'] = $users['name'];
    $mysql->close();
    header('Location: input.php');
?>