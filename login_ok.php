<?php

$id = $_POST['id'];
$pass = $_POST['pass'];

require("db.php");

$sql = "SELECT * FROM users WHERE id = ? AND pass = ?";
$user = fetch($con, $sql, [$id, $pass]);

if($user) {
    $_SESSION['user'] = $user;
    msgAndGo("로그인 성공", "/getBoardList.php");
} else {
    msgAndGo("로그인 실패", "/login.php");
}