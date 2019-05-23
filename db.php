<?php

session_start();

$connStr = "mysql:host=gondr.asuscomm.com;dbname=yy_30203;charset=utf8mb4";
$user = "yy_30203";
$pass = "1234";

$con = new PDO($connStr, $user, $pass);

function fetchAll($con, $sql, $data = []){
    $q = $con->prepare($sql);
    $q->execute($data);
    return $q->fetchAll(PDO::FETCH_OBJ);
}

function fetch($con, $sql, $data = []) {
    $q = $con->prepare($sql);
    $q->execute($data);
    
    return $q->fetch(PDO::FETCH_OBJ);
}

function msgAndGo($msg, $target) {
    echo "<script>alert('$msg'); location.href = '$target';</script>";
}

function query($con, $sql, $data) {
    $q = $con->prepare($sql);
    $q->execute($data);

    return $q->rowCount();
}

function sendJsonResponse($msg, $success, $data = []) {
    header('Content-type:application/json');
    echo json_encode(['success'=>$success, 'msg'=>$msg, 'list'=>$data], JSON_UNESCAPED_UNICODE);
}