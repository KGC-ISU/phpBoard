<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Cute+Font|Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Pen+Script&display=swap" rel="stylesheet">

    <script src="/js/App.js"></script>
</head>
<body>
    <header>
        <div class="head-wrap">
            <ul class="nav">
                <li><a href="/index.php">KGC</a></li>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/getBoardList.php">커뮤니티</a></li>
            </ul>

            <ul class="login">
                <li><a href="/login.php">로그인</a></li>
                <li><a href="/register.php">회원가입</a></li>
            </ul>
        </div>
        <div class="visual login-visual">
            <div class="login-box">
                <div class="msg">함께 소통하러 가는길</div>
                <div class="info">회원가입</div>
                <form action="/register_ok.php" method="POST">
                    <input type="text" name="name" placeholder="유저닉네임">
                    <input type="text" name="id" placeholder="아이디">
                    <input type="password" name="pass" placeholder="비밀번호">
                    <input type="submit" value="회원가입 하기">
                </form>
                <div class="register">
                    <div class="register-info">
                        이미 회원 이신가요?
                    </div>
                    <div class="register-link">
                        <a href="/login.php">로그인 하러 가기</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>