<?php

$name = $_POST['name'];
$id = $_POST['id'];
$pass = $_POST['pass'];

require("db.php");

$sql = "INSERT INTO users (id, pass, name) VALUES (?, ?, ?)";

$cnt = query($con, $sql, [$id, $pass, $name]);

if($cnt == 0) {
    msgAndGo("같은 아이디가 존재하거나 잘못된 입력입니다.", "/register.php");
} else {
    msgAndGo("성공적으로 회원가입 되었습니다.", "/login.php");
}