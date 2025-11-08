<?php

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);

$pass = md5($pass."sdad123");

$mysql = new mysqli('localhost:8889', 'root', 'root', 'lors1yregisters');

$stmt = $mysql->prepare("SELECT * FROM users WHERE login = ? AND pass = ?");
$stmt->bind_param("ss", $login, $pass);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    echo "Такой пользователь не зарегистрирован";
    exit();
}

setcookie('user', $user['name'], time() + 60, "/");
$mysql->close();

header('Location: /');
exit();

?>