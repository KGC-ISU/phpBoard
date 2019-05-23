<?php

require("db.php");

$sql = "DELETE FROM board WHERE num = ?";

$num = $_GET['num'];

$cnt = query($con, $sql, [$num]);

if($cnt == 0) {
    msgAndGo("글 삭제 중 오류발생", "/content.php?num=$num");
} else {
    msgAndGo("성공적으로 삭제되었습니다.", "/board.php");
}