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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/Board.js"></script>
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

    <div class="board">
        <div class="info">
            <div class="board-name">
                자유게시판
            </div>
            <div class="function">
                <a href="/insert.php">글 작성</a>
            </div>
        </div>
        <hr>
        <div class="list">
            <div class="boards board-info">
                <div class="num">
                    글번호
                </div>
                <div class="title">
                    글 제목
                </div>
                <div class="writer">
                    작성자
                </div>
                <div class="date">
                    작성일
                </div>
                <div class="cnt">
                    조회수
                </div>
            </div>
            <div class="board-list">
                
            </div>
            
        </div>
    </div>
</body>
</html>