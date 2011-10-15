<?php
session_start();
if(isset($_POST["sendmail"])&&md5($_POST["captchaclient"])==$_POST["captchaserver"]){
foo();
}
?>