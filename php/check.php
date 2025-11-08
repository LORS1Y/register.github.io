<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Логин слишком длиный или короткий";
    exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Имя слишком длиное или короткое";
    exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 20) {
    echo "Пороль слишком длиный или короткий (от 2 до 20 символов)";
    exit();
}

$pass = md5($pass."sdad123");

$mysql = new mysqli('localhost:8889', 'root', 'root', 'lors1yregisters');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: /');

?>
