<?php
    require("db.php");

    $sql = "SELECT * FROM board WHERE num = ?";

    $num = $_GET['num'];

    $board = fetch($con, $sql, [$num]);

    if($board) {
        $sql = "UPDATE board SET cnt = cnt+1 WHERE num = ?";

        query($con, $sql, [$num]);
    } else {
        msgAndGo($sql, "/board.php");
    }
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
        <div class="inner-box">
            <div class="board-title">
                <?= $board->title . ' (' . $board->id . ')' ?>
            </div>

            <div class="board-infos">
                <div class="inner-info">
                    <span>작성자</span>
                    <span>작성일</span>
                    <span>조회수</span>
                </div>
                <div class="inner-info row">
                    <div class="writer">
                        <?= $board->writer ?>
                    </div>
                    <div class="date">
                        <?= $board->date ?>
                    </div>
                    <div class="cnt">
                        <?= $board->cnt ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text">
            <?= $board->content ?>
        </div>
    </div>

    <?php if( isset($_SESSION['user']) ) : ?>

        <?php if( $_SESSION['user']->id == $board->id ) : ?>

            <div class="select">
                <a href="/update.php?num=<?= $num ?>">수정하기</a>
                <a href="/deleteBoard.php?num=<?= $num ?>">글 삭제</a>
                <a href="/board.php">글 목록</a>
            </div>

        <?php else : ?>

            <div class="select">
                <a href="/board.php">글 목록</a>
            </div>

        <?php endif ?>

    <?php else : ?>

        <div class="select">
            <a href="/board.php">글 목록</a>
        </div>

    <?php endif ?>
    
</body>
</html>