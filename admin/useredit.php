<?php
include("include/connect.php");
@$id=$_GET['aid'];
$sql="select * from user where u_id='$id'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
  {

 @$fname=$row['u_firstname'] ;
 @$lname=$row['u_lastname'];
 @$pass=$row['u_password'];
 @$email=$row['u_email'];
  }
   
  

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
@$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$points=$_POST['points'];
$sql="update user set u_firstname='$fname',u_lastname='$lname',u_email='$email',u_password='$password' where u_id='$id'";
$result=mysql_query($sql);
$sql1="update pro_naming set pro_points='$points' where u_id='$id'";
$result1=mysql_query($sql1);

}
?> 
<html>
<body>


	
	<form name="useredit" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<table>
	<tr>
	<td>Frist Name</td><td><input type="text" size="40" name="fname"  value="<?php echo @$fname; ?>" id="fname"></td></tr>
	<tr>
	<td>Last Name</td><td><input type="text" size="40" name="lname" value="<?php echo @$lname; ?>" id="lname"></td></tr>
	<tr>
	<td>Password</td><td><input type="password" size="40" name="password" value="<?php echo @$pass; ?>" id="password"></td></tr>
	<tr>
	<td>Email</td><td><input type="text" size="40" name="email" value="<?php echo @$email; ?>" id="email"></td></tr>
        <tr>
	<td>Influence Points</td><td><input type="text" size="40" name="points" value="<?php echo @$points; ?>" id="point"></td></tr>  
	<tr>
	<td></td><td height="50"><input type="submit" value="Submit" name="submit"></td></tr>
		
	</table></form></div>
	
		
		</body>
		</html>
		
		

