<?php 
@session_start();
if(($_SESSION['password'])!='')
{
?>
<script>
window.location.href="usermanage.php";
</script>
<?php
}
include("include/connect.php");
include("include/header.php");
?>


<?php
@$username=$_POST['username'];
@$password=$_POST['password'];


$check= "select * from admin_login where admin_name='$username' and admin_password='$password'" ;
$go=mysql_query($check);
@$rowcount = mysql_num_rows($go);

if($rowcount>0)

{

$_SESSION['admin']=$username;

$_SESSION['password']=$password;

echo "<script language=javascript>window.location.href='usermanage.php'</script>";

}

else

{

//echo "<script language=javascript>window.location.href='index.php?msg=no'</script>";



}

?>
 
<!--if($rowcount) 
{
 
header("Location: usermanage.php");
}
else
{
header("Location: index.php");
}-->

<script type="text/javascript">
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

</script>


<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section id="main" class="column">
<form  name="form1" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return check()">
<table class="logintable" border="1" >
  <tr>
    <th class="ulogin" ><font face="Arial, Helvetica, sans-serif" size="3"  color="#666666">Login To Begin Editing </font></th>
  </tr>
  <tr >
	<td width="681"  style="border:#FFFFFF" >
	  <p>Username:
          <input type="text" name="username"  />
          <div id="uname"></div>
	    <br />
	    <br />
	    Password:
	    <input type="Password" name="password" >
        <div id="psd" ></div>
			    <br /><br/>
	    </p>
<br />
	    <div align="center" >
    	<input type="submit" name="submit" value="Submit" />
        </div>
      </p></td>
  </tr>
</table>
</form >
</section>
</body>
</html>

	