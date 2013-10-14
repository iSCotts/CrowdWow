<?php 

session_start();
if(isset($_SESSION['password'])=="")
{
?>
<script>
window.location.href="index.php";
</script>
<?php
}
include("include/connect.php");
include("include/header.php");
	 include("include/leftsidebar.php"); ?>
	 <?php
if(isset($_POST['submit']))
{
@$fname=$_POST['fname'];
@$lname=$_POST['lname'];
@$email=$_POST['email'];
@$password=$_POST['password'];
$date=date('y/m/d');

$sql=mysql_query("insert into user (u_firstname,u_lastname,u_email,u_password,u_doj,Reset_pass) values('$fname','$lname','$email','$password' ,'$date','1')");

$result=mysql_query($sql);
?>
<script type="text/javascript">
window.location.href="newuser.php?dm=msg";
</script>
<?php
}
?>
<head>
<script type="text/javascript">
function vali()
{
if(document.form1.fname.value=="")
{
document.getElementById('namef').innerHTML='Please enter firstname';
return false;
}
else {
document.getElementById('namef').innerHTML='';

}

if(document.form1.lname.value=="")
{
document.getElementById('namel').innerHTML='Please enter lastname';
return false;
}
else {
document.getElementById('namel').innerHTML='';

}
if(document.form1.email.value=="")
{
document.getElementById('email').innerHTML='Please enter email';
return false;
}
else {
document.getElementById('email').innerHTML='';

}

   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.form1.email.value;
   if(reg.test(address) == false) {
     document.getElementById('email').innerHTML='Please enter correct email';
      return false;
/*else {
document.getElementById('email').innerHTML='';
*/
}
if(document.form1.password.value=="")
{
document.getElementById('pass').innerHTML='Please enter password';
return false;
}
else {
document.getElementById('pass').innerHTML='';

}
if(document.form1.repassword.value=="")
{
document.getElementById('repass').innerHTML='Please enter repassword';
return false;
}
else {
document.getElementById('repass').innerHTML='';

}
if(document.form1.password.value!=document.form1.repassword.value)
{
document.getElementById('repass1').innerHTML='Please enter correct repassword';
return false;
}
}
</script>
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully add user"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add New User</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
<tr>
<td height="30">First Name</td>
<td><input type="text" size="30" name="fname"  /></td><td> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Last Name</td>
<td><input type="text" size="30" name="lname"  /></td><td> &nbsp;<span id="namel" style="color:#FF0000"/></tr>
<tr>
<td height="30">Email Address</td>
<td><input type="text" size="30" name="email"  /></td><td> &nbsp;<span id="email" style="color:#FF0000"/></tr>
<tr>
<td height="30">Password</td>
<td><input type="password" size="30" name="password"  /></td><td> &nbsp;<span id="pass" style="color:#FF0000"/></tr>
<tr>
<td height="30">Repassword</td><td><input type="password" size="30" name="repassword"  />
</td><td> &nbsp;<span id="repass" style="color:#FF0000"/><td> &nbsp;<span id="repass1" style="color:#FF0000"/></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input name="submit" type="submit" value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>