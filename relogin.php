<?php include("include/connect.php");

session_start();
 @$email=$_SESSION['email'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script language="javascript">
function validate()
{
var str=true;
document.getElementById("msg1").innerHTML="";
document.getElementById("msg2").innerHTML="";
if(document.frm.password.value=='')
{
document.getElementById("msg2").innerHTML="Please Enter Password";
str=false;
}


var validate_char= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if(!document.frm.email.value.match(validate_char))
{
document.getElementById("msg1").innerHTML="Please Enter Valid Email ID";
str=false;
}
return str;
}
</script>



</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>

</div>
</div><div class="bod">
  <div class="bod_rt" >
   
	<div style=" width:360px; height:171px; margin-left:270px; margin-top:50px; margin-bottom:50px; background-color: #DFEFFF; border:1px; border-style:solid; border-color:#0000FF; padding:15px;">
	
	<?php 
	 $b=$_GET['ref'];
	if($_SESSION['email']!="")
	{
	echo "<script language=javascript>window.location.href='$b'</script>";
	}
	?>

<form name="frm" action="userlogin.php" method="post" onSubmit="return validate()">
	<table class="clsWithoutBorder">
        <tr>
		<td></td>
	         <td class="clsWithoutBorder">
	    	      <table class="">
    	          <tr>
				  <!--<td align="right" width="280"><h1></h1> </td>-->
				  <td align="right" width="375">
				  </td>
            	  </tr>
				  </table>
				  <table>
              	  <?php if ($_GET['act']=="deny")
				  { ?>
            	  <tr>
				  
    	          <td height="40"><b></b></td>
        	      <td style="color:#CC3300"><?php  echo "Permission is not granted from the admin"; ?></td>
            	  </tr><?php } ?>
	           <tr>
				  <?php 
				  if($_GET['act']=='no')
				  {
				  ?>
    	          <td height="40"><b><font color="#990000">Error Message:</b></font></td>
        	      <td><?php echo "Please Enter Correct Username OR Password"; ?></td>
            	  <?php  } ?>
				  </tr>
  
                   
                    <tr>
				  
    	          <td height="40"><b>Email</b></td>
        	      <td><input  name="email" size="30" type="text" /><div id="msg1" style="color:#FF0000"></td>
            	  </tr>
	              <tr>
				  <td height="40"><b>Password</b></td>
    	          <td><input  name="password" size="30" type="password" /><div id="msg2" style="color:#FF0000"></td>
        	      </tr>
				  
				  
				  
	              </table>          </td>
        </tr>
   <tr> 
	  <td></td><td align="center"><input type="submit" name="submit" value="Submit" class="btnstyle" />                                 
      <a href="forget_pass.php">Forgot Password?</a>

</td>

</table>
</form>

	
	<?php //include("learn/index.php"); ?>
	</div>
  </div></div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
