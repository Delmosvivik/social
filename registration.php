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
    <title>Регистрация</title>
</head>
<body>
<?php
    include ("menu.php");
    ?>
    <div class="container">
        <form action="registration.php" class="reg" method="post">
            <h3>Регистрация</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ФИО</label>
                <input name='login' type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваше ФИО">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-decribedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никогда и не кому не передадим вашу почту.</div>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Возраст</label>
            <input name='age' type="text" class="form-control" id="formGroupExampleInput">
           </div>
           <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name='pass-first' type="password" class="form-control" id="exampleInputPassword1">
           </div>
           <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Введите пароль повторно</label>
            <input name='pass-second' type="password" class="form-control" id="exampleInputPassword2">
           </div>
           <button name='button-reg' type="submit" class="btn btn-primary">Отправить</button>
             <a href="auth.php">Авторизоваться</a>
             <div class="form-text1">Если еще не зарегистрированы, нажмите кнопку выше</div>
    </div>
</body>
</html>