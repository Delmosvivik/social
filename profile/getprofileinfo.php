<?php
include_once '../application/db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userid = $_SESSION["id"];
    $query = "SELECT email, created, info FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $stmt->bind_result($email, $created, $info);
    $stmt->fetch();
    $stmt->close();

    $userinfo = $email . '|' . $created . '|' . $info;
    echo $userinfo;
} else {
    echo "Error. Недоступный метод запроса.";
    exit;
}
