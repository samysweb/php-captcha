<?php
session_start();
Header("Content-Type: image/png");
$img = ImageCreate(150,50);
$black = ImageColorAllocate($img, 100, 100, 100);
ImageFill($img, 0, 0, $black);
$white = ImageColorAllocate($img, 255, 255, 255);
ImageString($img, 10, 10, 20, $_SESSION['captchacode'][0], $white);
ImageString($img, 10, 50, 30, $_SESSION['captchacode'][1], $white);
ImageString($img, 10, 85, 5, $_SESSION['captchacode'][2], $white);
ImageString($img, 10, 130, 25, $_SESSION['captchacode'][3], $white);
$_SESSION['captchacode']="";
ImagePNG($img);
?>