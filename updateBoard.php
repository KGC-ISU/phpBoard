<?php

require("db.php");

$num = $_GET['num'];

$title = $_POST['title'];
$txt = $_POST['txt'];

$sql = "UPDATE board SET title = ?, content = ? WHERE num = ?";

$cnt = query($con, $sql, [$title, $txt, $num]);

if($cnt == 0) {
    msgAndGo("글을 수정하는 중 오류발생", "/content.php?num=$num");
} else {
    msgAndGo("글 수정완료", "/content.php?num=$num");
}