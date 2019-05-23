<?php

$id = $_POST['id'];
$pass = $_POST['pass'];

require("db.php");

$sql = "SELECT * FROM users WHERE id = ? AND pass = ?";
$user = fetch($con, $sql, [$id, $pass]);

if($user) {
    $_SESSION['user'] = $user;
    msgAndGo("로그인 성공", "/board.php");
} else {
    msgAndGo("아이디나 비밀번호가 잘못되었습니다.", "/login.php");
}