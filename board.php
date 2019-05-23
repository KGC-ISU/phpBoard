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
                <!-- <div class="boards">
                    <div class="num">
                        1
                    </div>
                    <div class="title">
                        <a href="/getboard.php">낑깡국 역사 1</a>
                    </div>
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
                <div class="boards">
                    <div class="num">
                        2
                    </div>
                    <div class="title">
                        <a href="/getboard.php">낑깡국 역사 2</a>
                    </div>
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
                <div class="boards">
                    <div class="num">
                        3
                    </div>
                    <div class="title">
                        <a href="/getboard.php">낑깡국 역사 3</a>
                    </div>
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
                <div class="boards">
                    <div class="num">
                        4
                    </div>
                    <div class="title">
                        <a href="/getboard.php">낑깡국 역사 4</a>
                    </div>
                    <div class="writer">
                        낑깡왕
                    </div>
                    <div class="date">
                        2019-05-20
                    </div>
                    <div class="cnt">
                        0
                    </div>
                </div> -->
            </div>
            
        </div>
    </div>
</body>
</html>