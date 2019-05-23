<?php
require("db.php");

$num = $_GET['num'];

$sql = "SELECT * FROM board WHERE num = ?";

$board = fetch($con, $sql, [$num]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="/css/insert.css">
    <link href="https://fonts.googleapis.com/css?family=Cute+Font|Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head-wrap">
            <ul class="nav">
                <li><a href="/index.php">KGC</a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/board.php">커뮤니티</a></li>
            </ul>

            <?php if( isset($_SESSION['user']) ) : ?>

            <ul class="login">
                <li class="ok"><?= $_SESSION['user']->name ?> 님</li>
                <li><a href="/logout.php">로그아웃</a></li>
            </ul>

            <?php else : ?>

            <ul class="login">
                <li><a href="/login.php">로그인</a></li>
                <li><a href="/register.php">회원가입</a></li>
            </ul>

            <?php endif ?>
            
        </div>
    </header>

    <div class="insert-board">
        <div class="info">
            글 수정하기
        </div>
        <form action="/updateBoard.php?num=<?= $num ?>" method="POST">
            <input type="text" name="title" value="<?= $board->title ?>" placeholder="글 제목을 입력하세요">
            <textarea name="txt" id="user-txt" placeholder="글 내용을 입력하세요"><?= $board->content ?></textarea>
            <input type="submit" value="글 수정 완료">
        </form>
    </div>
</body>
</html>