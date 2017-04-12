<?php

session_start();

include './autoload.php';
include './template/accessRequired.html.php';
$reg = new Registration(); //extends DB so no need to call DB

$userInfo = $reg->getUserInfo($_SESSION['user_id']);

include './template/admin.html.php';
?>
