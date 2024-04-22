<php?
include("application/users.php" );
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
  include("menu.php");
  ?> 
  <div class="container">
    <form action="auth.php" class="reg" method="post">
     <h3>Регистрация</h3>
     <div class="mb-3">
        <label for="" class="form-label">ФИО</label>
        <input type="text" name="login" class="form-control" id="FormGroupExampleInput" placeholder="Видите ваше ФИО">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Адрес электроной почты</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" aria-describedby="EmailHelp" >
        <div class="form-text" id="EmailHelp">Мы никогда и никому не дадим вашу почту</div>
     </div>
     <div class="mb-3">
        <label for="" class="form-label">Возраст</label>
        <input type="text" name="age" class="form-control" id="FormGroupExampleInput" aria-describedby="EmailHelp" >
     </div>
     <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" name="pass-first" class="form-control" id="FormGroupExamplePassword1" >
     </div>
     <div class="mb-3">
       <label for="exampleInputPassword2" class="form-label">Введите пароль повторно</label>
        <input type="password" name="pass-first" class="form-control" id="FormGroupExamplePassword2" >
     </div>
      <button name="button-reg" type="submit" class="btn btn-primary" > Отправить</button>
      <a href="auth.php">Авторизоваться</a>
      <div class="form-text1" >Если вы уже зарегистрированы, нажмите на кнопку выше</div>
    </div>
  </div> 
    </form>
  </div> 
</body>
</html>