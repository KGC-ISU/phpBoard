<?php

$name = $_POST['name'];
$id = $_POST['id'];
$pass = $_POST['pass'];

require("db.php");

$sql = "INSERT INTO users (id, pass, name) VALUES (?, ?, ?)";

$cnt = query($con, $sql, [$id, $pass, $name]);

if($cnt == 0) {
    msgAndGo("회원가입이 실패했습니다.", "/register.php");
} else {
    msgAndGo("성공적으로 회원가입 되었습니다.", "/login.php");
}