<?php
    /*записывание всех значений из поля ввода в соответствующие переменные*/
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $error = "";
    /*проверка вводимых пользователем значений на длину*/
    if(empty($name)) {
        $error = "Недопустимая длина имени";
    }
    else if(strlen($login) < 8 || strlen($login) > 50) {
        $error = "Недопустимая длина логина";
    }
    else if(strlen($pass) < 6 || strlen($pass) > 32) {
        $error = "Недопустимая длина пароля";
    }
    /*если найдется ошибка, пользователя будет перебрасывать на эту же страницу*/
    if(strlen($error) > 0){
        header('Location: registration1.php?'.$error);
        exit();
    }
    /*хеширование пароля, чтобы его было сложно взломать
     *
     */
    $pass = md5($pass."hghgvjgvkjgvgvhgvh76876");
    /*подключаемя к базе данных, записываем данные, которые ввел пользователь
     * если все введено верно, пользователя будет перебрасывать на главною страницу*/
    $mysql = new mysqli('localhost', 'root', '','register');
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$pass', '$name')");
    $mysql->close();
    header('Location: input.php');
?>