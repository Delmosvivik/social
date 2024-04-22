<php? include( "application/users.php" ); ?>
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
    include("menu.php");
    ?>
    <div class="container">
      <form action="auth.php" class="reg" method="post">
        <h3>Авторизация</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Адрес Электроной почты</label>
          <p></p>
          <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="form-text" id="EmailHelp">Мы никогда и никому не дадим вашу почту</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <p></p>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="button-log" type="submit" class="btn btn-primary">Войти</button>
        <a href="registration.php">Зарегистрироваться</a>
      </form>
    </div>
  </body>

  </html>