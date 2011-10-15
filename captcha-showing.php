<?php
session_start();
$_SESSION['captchacode']="";
for($i=0;$i<4;$i++){
$random[1]=rand(48,57);
$random[2]=rand(65,90);
$random[3]=rand(97,122);
$chose=rand(1,3);
$_SESSION['captchacode'].=chr($random[$chose]);
}

?>

<form method="post" action="captcha-verifying.php" >
<table>
<tr><td>Captcha: </td><td><img width="150px" height="50" src="captcha-img.php"><br>
<input type="hidden" value="<?php echo md5($_SESSION['captchacode']); ?>" name="captchaserver">
<input type="text" name="captchaclient"></td></tr>
<input type="submit">
</table>
</form>