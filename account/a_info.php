<?php
include('include/connect.php'); 
session_start();
 @$username=$_SESSION['email'];
 @$userid=$_SESSION['u_id'];
if(isset($_POST['submit']))
{
$s1="select * from user where u_email='$username'";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$p=$r1['u_password'];
$p1=$_POST['pass1'];
$l=$_POST['lname'];
$f=$_POST['fname'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];


$s2="update user set u_firstname='$f',u_lastname='$l',u_password='$pass1' where u_email='$username'";
$q2=mysql_query($s2);

}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<script language="javascript">
function validate()
{
var str=true;
document.getElementById("msg1").innerHTML="";
document.getElementById("msg2").innerHTML="";
if(document.frm.fname.value=='')
{
document.getElementById("msg5").innerHTML="Please Enter First Name";
return false;
}
if(document.frm.lname.value=='')
{
document.getElementById("msg6").innerHTML="Please Enter Last Name";
return false;
}

if(document.frm.pass.value=='')
{
document.getElementById("msg1").innerHTML="Please Enter current password";
return false;
}
if(document.frm.pass1.value=='')
{
document.getElementById("msg2").innerHTML="Please Enter New Password";
return false;
}
if(document.frm.pass2.value=='')
{
document.getElementById("msg3").innerHTML="Please Enter Confirm Password";
return false;
}
if(document.frm.pass1.value!=document.frm.pass2.value)
{
document.getElementById("msg4").innerHTML="Password and Confirm Password does not match";
return false;
}

return true;
}
</script>


</head>

<body>



<div class="bod">
  <div>

<div class='tier x12'>
<div class='column x12 last'>
		
<div class='box bordered squared no-padding account-box account-info clearfix clear'>
<div class='hd'>
<h3 class='no-margin clearfix' style="width:827px;"><a>Your Account Info</a></h3>
</div>
			
<div class='bd clearfix'>
<?php
@$userid=$_SESSION['u_id'];
 $query2="SELECT * FROM user_profile where u_id='$userid'";
$result = mysql_query($query2);
while($row=mysql_fetch_array($result))
{
 $specialties=$row['specialties'];
 $gender=$row['gender'];
 @$website=$row['website'];
 @$ma_product =$row['ma_product'];
 @$f_product =$row['f_product'];
 @$hometown=$row['hometown'];
 @$about_me =$row['about_me'];
 @$use_alies  =$row['use_alies'];
 @$image  =$row['image'];
}?>


<form name="frm" action="" method="post" onSubmit="return validate()">


<table width="66%">
<tbody>
<tr>
<th colspan='3'>Your Account Name</th>
</tr>
<tr>
<td width='130px'>
<?php 
$s="select * from user where u_email='$username'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$fname=$r['u_firstname'];
$lname=$r['u_lastname'];
}
?>
<label>Current Name</label></td>
<td><label><?php echo $fname." ".$lname; ?><label></td>
</tr>
<tr>
<td><label>New Name</label></td>
<td>
<input type='text' value='' class='clearField' name="fname"></input><div id="msg5" style="color:#FF0000"></div>

</td>
<td>
<input type='text' value='' class='clearField' name="lname"></input><div id="msg6" style="color:#FF0000"></div>
</td>
</tr>
</tbody>
<!-- <tbody>
<tr>
<th colspan='2'>Your E-Mail Address</th>
</tr>
<tr>
<td>Current Name</td>
<td></td>
</tr>
<tr>
<td><label>New E-Mail</label></td>
<td><input type='text' value='Enter E-Mail' class='empty'></input></td>
</tr>
<tr>
<td><label>Confirm New E-Mail</label></td>
<td><input type='text' value='Enter E-Mail' class='empty'></input></td>
</tr>
</tbody> -->
<tbody>
<tr>
<th>Your Password</th>
<th style="color:#e51d9b;">

</th>
</tr>
<tr>

<td><label>Current Password</label></td>
<td><input type='password'  class='clearField' name="pass"><div id="msg1" style="color:#FF0000"></div><div id="msg7" style="color:#FF0000"></div></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type='password' class='clearField' name="pass1"></input><div id="msg2" style="color:#FF0000"></div></td>
</tr>
<tr>
<td><label>Confirm New Password</label></td>
<td><input type='password' class='clearField' name="pass2"></input><div id="msg3" style="color:#FF0000"></div></td>
</tr>
<tr><td class="profile-info"><div id="msg4" style="color:#FF0000"></div></td></tr>
</tbody>
</table>

</div>
</div>
<div class='account-action-buttons clearfix'>

<input type="submit" value="submit" name="submit"  class="btnstyle"/>
<div class="clear"></div>
</div>
</div>
</div>

</form></div>
      

</div>
