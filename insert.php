<?php
include("include/connect.php");
$query="select * from logo";
@$sql=mysql_query($query);
if(@$row=mysql_fetch_array($sql))
{
$go=$row['logo'];

}
$s="select * from pass";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$min=$row['min'];
$max=$row['max'];
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];



$password=$_POST['password'];
 $p=strlen($password);

if($fname=="" || $lname=="" || $email=="" || $password=="")
{?>
<script type="text/javascript">
window.location.href="success.php";
</script>
<?php
} 

elseif (!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $email))
{
?>
<script type="text/javascript">
window.location.href="success.php?msg='invalid email'";
</script>
<?php
}

else
{
$s1="select * from user";
$q1=mysql_query($s1);
while($r1=mysql_fetch_array($q1))
{
$u=$r1['u_email'];
}
if($u==$email)
{
?>
<script>
window.location.href="suc.php?msg=already_registered";
</script>
<?php
}
else
{
$sql="insert into user (u_firstname,u_lastname,	u_email,u_password,u_doj ) VALUES ('$fname','$lname','$email','$password',CURDATE())";
$query=mysql_query($sql);

$sql1=mysql_query("select u_id from user where u_email='$email'");
 while($row1=mysql_fetch_array($sql1))
 { $uid=$row1['u_id']; }
 $url="topinfluence.php?$id=$uid";
$qq= "update user set url='$url' where u_email='$email'";
 $sql2=mysql_query($qq);

 $sql1="select u_id from user where u_email='$email'";
 $query1=mysql_query($sql1);
$row1=mysql_fetch_array($query1);
 $id=$row1['u_id'];
 ?>
 <?php 

$app="http://www.perflance.com/demo/quirky_new/confirm_login.php";
$send_email=$_POST['email'];
$to = $send_email;
//$to ="sh.aarifeen85@gmail.com";
$headers = "From: " . "Quirky" . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "Quirky mail";
$message = "<html><body bgcolor=#dff3fd>";
$message .="<table style='border:5px solid #000' width='740' cellpadding='0' cellspacing='0' rules='groups' >";
$message .="<tr><td><table bgcolor='#8C8C8C' cellpadding='0' cellspacing='0' width='100%'>	
  <tr>
                    <td width='20'>&nbsp;</td>
                    <td><a href='#' style='color:#1E7EC8;'><img src='http://www.perflance.com/demo/quirky_new/admin/uploadimage/<?php echo @$go; ?>'  height='30' width='100' border='0' /></a></td>
                    <td align='right' style='padding-top:10px;'><font face='Arial, Helvetica, sans-serif' size='5' color='#FFFFFF'></font></td>
                    <td width='20'>&nbsp;</td>
                </tr>
        </table></td>
    </tr>
    <tr>
        <td><table cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                    <td width='20'></td>
                    <td><table cellpadding='0' cellspacing='0' width='100%'>

                            <tr>
                                <td height='30'>&nbsp;
				<strong>Please visit on following link to confirm your Quirky account</strong>
				</td>
                            </tr>
                            <tr>
                                <td><a href=http://www.perflance.com/demo/quirky_new/confirm_login.php?id=$id >$app</a></td>
                            </tr>
                            
							<tr>
							<td>
							&nbsp;<strong>Thank You,<br/>
							&nbsp;Quirky</strong><br/>
							&nbsp;<a href='http://www.perflance.com/demo/quirky_new'>Quirky.com</a>
							</td>
							</tr>
                    </table></td>
                </tr>
        </table></td>
    </tr>";
$message .="</table>";
$message .="</body></html>";
//$from = "someonelse@example.com";

mail($to,$subject,$message,$headers);


?>
<script type="text/javascript">
window.location.href = "suc.php";
</script>
<?php
}}
?>
</body>
</html>
