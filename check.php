<?php
session_start();
if($_SESSION['pass'] == 1) {
    include "password.php";
    exit();
}
if($_SESSION['random_code'] == $_POST["string"]) {
    $_SESSION['allow'] = 1;
    header("Location: /stres");
    die();
} else {
    header("Location: /stres");
    die();
}
?>