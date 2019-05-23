<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="/css/board.css">
    <link href="https://fonts.googleapis.com/css?family=Cute+Font|Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head-wrap">
            <ul class="nav">
                <li><a href="/index.php">KGC</a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/getBoardList.php">커뮤니티</a></li>
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

    <div class="board">
        <div class="inner-box">
            <div class="board-title">
            낑깡국 역사 1
            </div>

            <div class="board-infos">
                <div class="inner-info">
                    <span>작성자</span>
                    <span>작성일</span>
                    <span>조회수</span>
                </div>
                <div class="inner-info row">
                    <div class="writer">
                        낑깡왕
                    </div>
                    <div class="date">
                        2019-05-20
                    </div>
                    <div class="cnt">
                        0
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text">
            낑깡왕 1세 드디어 국왕이 되어 나라를 세우다.
        </div>
    </div>

    <div class="select">
        <a href="/update.php">수정하기</a>
        <a href="/delete.php">글 삭제</a>
        <a href="/getBoardList.php">글 목록</a>
    </div>
</body>
</html>