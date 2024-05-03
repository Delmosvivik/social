             <php? include("application/users.php") ; ?>
                 <!DOCTYPE html>
                 <html lang="en">

                 <head>
                     <meta charset="UTF-8">
                     <meta name="viewport" content="device-width, initial-scale=1.0">
                     <title>Профиль</title>
                     <link rel="stylesheet" href="../css/profile-style.css">
                     <link rel="stylesheet" href="../css/menu.css">
                 </head>

                 <body>

                     <header>
                         <h1>Профиль пользователя</h1>
                         <form action="logout.php" method="post">
                             <button type="submit" name="logouthButton">Выйти</button>
                         </form>
                     </header>
                     <?php
                        include("../menu.php");
                        ?>
                     <section id="profile-info">
                         <h2>Информация о пользователе</h2>


                         <div id="profile-picture-container">
                             <img id="profile-picture" src="avatars/placeholder.png" alt="avatars/placeholder.png">
                         </div>
                         <p>ФИО: <span class="info" id="user-name"> <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : ''; ?></span></p>
                         <p>Возраст: <span class="info" id="user-age"> <?php echo isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?></span></p>
                         <p>Дата создания аккаунта: <span class="info" id="account-creation-date"></span></p>
                         <p>Email: <span class="info" id="user-email"> </span></p>
                         <p>О себе: <span class="info" id="user-info"></span></p>
                         <h3>Панель управления</h3>
                         <button onclick="documemnt.location='editer_profile.php'" id="edit-profile"> Редактировать профиль</button>
                         <button onclick="document.location='http:/localhost/Social/AdminChat/AdminChat.php'" id="admin-chat">Написать администратору</button>
                         <!-- Кнопка обновления картинки -->
                         <button id="update-picture">Обновить картинку</button>
                         <!-- Кнопка удаления картинки -->
                         <button id="delete-picture">Удалить картинку</button>
                         <!-- Элемент для загрузки новой картинки -->
                         <input type="file" id="file-input" accept="image/*" style="display: none">
                         <button
onclick="document.location='http://localhost/Social/posts/createpost.php'"
id="admin-chat">Создать пост</button>
                     </section>
                     <section id="users-post">
                         <h2>Мои посты</h2>
                         <?php echo $output; ?>
                         <ul id="post-list">
                             <li>
                                 <p>Текст поста</p>
                                 <p>Коментарии: <span class="comments-count">5</span></p>
                             </li>
                         </ul>
                     </section>
                     <script>
document.addEventListener("DOMContentLoaded", function() {
// Получаем все посты по классу
var posts = document.querySelectorAll('.post-block');
posts.forEach(function(post) {
// Добавляем обработчик события при наведении мыши
post.addEventListener('mouseenter', function() {
this.style.backgroundColor = '#50576b'; // Светлее при наведении
});
// Добавляем обработчик события при уходе мыши
post.addEventListener('mouseleave', function() {
this.style.backgroundColor = ''; // Возвращаем исходный цвет
});
});
});
</script>
                     <script src="../js/profile.js" defer></script>
                     <script src="../js/picture.js" defer></script>
                 </body>

                 </html>