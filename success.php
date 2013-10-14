<?php 
include("include/connect.php");
session_start();
$sql="select * from pass";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$min=$row['min'];
$max=$row['max'];
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
document.getElementById("msg3").innerHTML="";
document.getElementById("msg4").innerHTML="";
document.getElementById("msg5").innerHTML="";
document.getElementById("msg6").innerHTML="";

if(document.frm.fname.value=='')
{
document.getElementById("msg1").innerHTML="Please Enter First Name";
str=false;
}
if(document.frm.lname.value=='')
{
document.getElementById("msg5").innerHTML="Please Enter Last Name";
str=false;
}

if(document.frm.password.value=='')
{
document.getElementById("msg2").innerHTML="Please Enter Password";
str=false;
}
var pass=document.frm.password.value.length;
if(pass < <?php echo $min; ?> || pass > <?php echo $max; ?> )
{
document.getElementById("msg6").innerHTML="Length of password must lies between <?php echo $min; ?> and <?php echo $max; ?>";
return false;
}

if(document.frm.password.value!=document.frm.repassword.value)
{
document.getElementById("msg3").innerHTML="Password and Confirm Password does not match";
str=false;
}
var validate_char= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if(!document.frm.email.value.match(validate_char))
{
document.getElementById("msg4").innerHTML="Please Enter Valid Email ID";
str=false;
}


return str;
}
</script>

<?php } ?>
</head>

<body>
<div class="main">
<?php 
@include("include/header.php");
$msg=$_GET['msg'];
$msg1=$_GET['msg1'];
 ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	
	
	<div style=" width:400px; height:300px; margin-left:270px; margin-top:50px; margin-bottom:50px; background-color: #DFEFFF; border:1px; border-style:solid; border-color:#0000FF; padding:15px;">
	<form name="frm" action="insert.php" method="post" onSubmit="return validate()">
	<table class="clsWithoutBorder">
        <tr>
		<td></td>
	         <td class="clsWithoutBorder">
	    	      <table class="">
    	          <tr>
				  <!--<td align="right" width="280"><h1></h1> </td>-->
				  <td align="right" width="350">
				 
            	  </tr>
				  </table>
				  <table>
                   <div align="center"><font color="#FF0000"><?php echo $msg; ?></font></div>
                   <div align="center"><font color="#FF0000"><?php echo $msg1; ?></font></div>
              	  <tr>
	              <td width="250" height="30"><b>First Name</b></td>
    	          <td><input  type="text" name="fname" size="30" /><div id="msg1" style="color:#FF0000"></div></td>
        	      </tr>
            	  <tr>
	              <td height="40"><b>Last Name</b></td>
    		      <td><input name="lname" size="30" type="text" /><div id="msg5" style="color:#FF0000"></div></td>
            	  </tr>
	              <tr>
    	          <td height="40"><b>Email</b></td>
        	      <td><input name="email" size="30" type="text" /><div id="msg4" style="color:#FF0000"></div></td>
            	  </tr>
	              <tr>
				  <td height="40"><b>Password</b></td>
    	          <td><input name="password" size="30" type="password" /><div id="msg2" style="color:#FF0000"></div><div id="msg6" style="color:#FF0000"></div></td>
                    
        	      </tr>
				  <tr>
				  <td height="40"><b>Confirm Password</b></td>
    	          <td><input name="repassword" size="30" type="password" /><div id="msg3" style="color:#FF0000"></div></td>
        	      </tr>
				  
				  <tr>
				  <td colspan="2"><input name="user[terms]" type="hidden" value="0" /><input id="user_terms" name="user[terms]" type="checkbox" value="1" />
<span>I have read and understood quirky's <a href="">terms &amp; conditions</a></span></td>
				  </tr>
				  
				  <tr>
    	          <td>	</td>
        	      <td height="50"><input type="submit" name="submit" value="Submit" style="width:100px;background: #1589FF;color: #FFF;height:30px;font-size:15px;border: 2px solid #CCCCCC;" />
				  </td>
            	  </tr>
	              </table>          </td>
        </tr>
    </table>

</form>
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
