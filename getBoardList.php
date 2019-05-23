<?php

require("db.php");

$sql = "SELECT * FROM board";

$list = fetchAll($con, $sql);

sendJsonResponse("성공적으로 로드됨", true, $list);