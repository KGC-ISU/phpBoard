<?php

$title = $_POST['title'];
$content = $_POST['txt'];

require("db.php");

$user = $_SESSION['user'];

$sql = "INSERT INTO board (title, writer, content, date, cnt) VALUES (?, ?, ?, curdate(), 0)";

$cnt = query($con, $sql, [$title, $user->name, $content]);

if($cnt == 0) {
    msgAndGo("글 등록 중 오류발생", "/getBoardList.php");
} else {
    msgAndGo("글이 등록되었습니다.", "/getBoardList.php");
}