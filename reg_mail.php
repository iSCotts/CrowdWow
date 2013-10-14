<?php
$to = $send_email;
//$to ="sh.aarifeen85@gmail.com";
$headers = "From: " . "Quirky" . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Quirky mail";
$message = "<html><body bgcolor=#dff3fd>";
$message .="<table width=100% cellpadding=0 cellspacing=0  style=font-family:Verdana; font-size:12px; color:#000000; line-height:18px;>";
$message .="<tr><td valign=top style=height: 26px; width: 403px;>Please visit on following link for reset your Quirky password</td></tr>";
$message .="<tr><td valign=top style=height: 26px><a href=$app>$app</a></td></tr>";

$message .="<tr><td style=height: 26px; colspan=3>Thank You,</td></tr>";
$message .="<tr><td colspan=3>Quirky</td></tr>";
$message .="<tr><td colspan=3><a href=http://www.perflance.com/demo/quirky_new>Quirky.com</a></td></tr>";
$message .="</table>";
$message .="</body></html>";
//$from = "someonelse@example.com";
if(mail($to,$subject,$message,$headers))
{
 $update="update user set Reset_pass='1' where u_email='$send_email'";
 mysql_query($update) or die(mysql_error());
$send_email='';
?>
<script type="text/javascript">
window.location.href="upload.php?$msg='Your password reset request sent successfully, please check your mail'";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
window.location.href="upload.php?$msg='Message could not be sent, try again.'";
</script>
<?php
}
?>