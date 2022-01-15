<?php
 
session_start();
 
$string = '';
 
for ($i = 0; $i < 8; $i++) {
  $string .= chr(rand(97, 122));
}
 
$_SESSION['random_code'] = $string;
$img = imagecreate(90, 20);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
imagefilledrectangle($img, 0, 0, 500, 300, $white);
imagestring($img, 5, 0, 0, $_SESSION['random_code'], $black);

header("Content-type: image/png");
imagepng($img);
?>