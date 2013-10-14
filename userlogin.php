<!--<script type="text/javascript">
function check()
{
if(document.form1.username.value=="")
{
document.getElementById('uname').innerHTML='<font color="red">fill username</font>';
return false;
}

if(document.form1.password.value=="")
{
document.getElementById('psd').innerHTML='<font color="red">Fill Password</font>';
return false;
}

return true;
}
</script>-->

<?php 
include("include/connect.php");
@session_start();
@$username=$_POST['email'];
@$password=$_POST['password'];
 if($username=="" || $password=="")
{?>
<script type="text/javascript">
window.location.href="relogin.php?ref=<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
}
else
{

$check= "select * from user where u_email='$username' and u_password='$password' and u_status='1' and Reset_pass='1'" ;
$go=mysql_query($check);
$row=mysql_fetch_array($go);
{
$u_id=$row['u_id'];
$_SESSION['uname']=$row['u_firstname'];
}
@$rowcount = mysql_num_rows($go);

if($rowcount=='0')

{
echo "<script language=javascript>window.location.href='relogin.php?act=no'</script>";
}

else
{
$_SESSION['email']=$username;
$_SESSION['u_id']=$u_id;
$_SESSION['uname'];
$a=$_SERVER['HTTP_REFERER'];
if($_SERVER['HTTP_REFERER']=='http://perflance.com/demo/quirky_new/relogin.php?act=no')
{
echo "<script language=javascript>window.location.href='http://perflance.com/demo/quirky_new/index.php'</script>";
}
else
{
echo "<script language=javascript>window.location.href='$a'</script>";
}

}
}
?>

