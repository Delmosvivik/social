<?php
    include("application/users.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Авторизация</title>
</head>
<body>
    <?php
    include ("menu.php");
    ?>
    <div class="container">
        <form action="auth.php" method="post" class="reg">
            <h3>Авторизация</h3>
            <!--Адрес электронной почты -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электроной почты</label>
                <p></p>
                <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда и не кому не передадим вашу почту.</div>
            </div>
            <!-- Пароль -->
            <div class="mb-3"></div>
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <p></p>
            <input name='password' type="password" class="form-label" id="exampleInputPassword1">
             <!-- Кнопки для входа или регистрации -->
             <button name='button-log' type="submit" class="btn btn-primary">Войти</button>
             <a href="registration.php">Зарегистрироваться</a>
             <div class="form-text1">Если еще не зарегистрированы, нажмите кнопку выше</div>
        </form>
    </div>
</body>
</html>