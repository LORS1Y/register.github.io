<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale-1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма регистрации</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
        if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="'col">
                        <h1>Форма регистрации</h1>
        <form action="php/check.php" method="post">
            <input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="from-control" name="name" id="name" placeholder="Введите Имя"><br>
            <input type="password" class="from-control" name="pass" id="pass" placeholder="Введите пороль"><br>
            <button class="btn btn-success" type="submit">ОК</button>
        </form>
    </div>
                <div class="'col">
                        <h1>Форма авторизации</h1>
        <form action="php/auth.php" method="post">
            <input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="from-control" name="pass" id="pass" placeholder="Введите пороль"><br>
            <button class="btn btn-success" type="submit">Войти</button>
        </form>
        </div>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="php/exit.php">здесь</a>.</p>

        <?php endif;?>
        </div>
    </div>
</body>
</html>