<?php
include("../application/db.php");
session_start();
// Получаем ID поста из URL
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// SQL запрос на выборку поста по ID
$sql_post = "SELECT posts.title, posts.content, posts.image_url, posts.created_at, users.us_name
FROM posts
LEFT JOIN users ON posts.user_id = users.id
WHERE posts.id = $post_id
LIMIT 1";
$result_post = $conn->query($sql_post);
?>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="device-width, initial-scale=1.0">
<title>Пост</title>
<!-- Подключение файла CSS -->
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/post.css">
</head>
<body>
<?php
include("../menu.php");
?>
<?php
// Проверка наличия поста
if ($result_post->num_rows > 0) {
// Вывод данных поста
while($row = $result_post->fetch_assoc()) {
echo '<div class="post-container">';
echo '<h1>' . htmlspecialchars($row["title"]) . '</h1>';
// Проверяем наличие имени автора и выводим его, если оно есть
if (!empty($row["us_name"])) {
echo '<p class="author-name">Автор: ' . 
htmlspecialchars($row["us_name"]) . '</p>';
}
if (!empty($row["image_url"])) {
echo '<img src="' . htmlspecialchars($row["image_url"]) . '" 
alt="Post Image">';
}
echo '<p>' . nl2br(htmlspecialchars($row["content"])) . '</p>';
echo '<p class="post-time">Опубликовано: ' . $row["created_at"] . 
'</p>';
echo '</div>';
}
} else {
echo "Пост не найден.";
echo "Ошибка запроса к базе данных: " . $conn->error;
}
// Вывод формы комментариев
echo '<div class="comment-form-container">';
echo '<h3>Оставить комментарий</h3>';
echo '<form action="" method="post">';
echo '<input type="hidden" name="post_id" value="' . $post_id . '">';
echo '<label for="content">Комментарий:</label><br>';
echo '<textarea id="content" name="content" rows="4" 
required></textarea><br><br>';
echo '<button type="submit" name="submit_comment">Отправить
комментарий</button>';
echo '</form>';
echo '</div>';
?>
</body>
</html>