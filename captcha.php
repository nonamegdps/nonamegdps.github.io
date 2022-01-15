<?php
session_start();

if($_SESSION['pass'] != 1) {
    include "password.php";
    exit();
}
?><div align="center">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <image src="cap.php" />
<form action="check.php" method="post">
    <input name="string" style="width:100px" autofocus minlength="8" maxlength="8" required/><br />
    <input type="submit" />
</form>
</div>