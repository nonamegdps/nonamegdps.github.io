<?php
session_start();
if($_SESSION['pass'] == 1) {
    include "password.php";
    exit();
}
if($_SESSION['allow'] == 1) {
    include "captcha.php";
    exit();
}


$set = $_GET["set"];
$url = $_GET["site"];
if($set == "" || $url == "") {
    header("Location: /stres");
    die();
}
$_SESSION['set'] = $set;
if($set == 1) {
    header("Location: level.php?site=$url");
    die();
}if($set == 2) {
    header("Location: stats.php?site=$url");
    die();
}if($set == 3) {
    header("Location: login.php?site=$url");
    die();
}
?>
