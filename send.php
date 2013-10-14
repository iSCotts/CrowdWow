<?php
include("include/connect.php");
@session_start();
$email=$_SESSION['email'];
$s="select * from user where u_email='$email'";
$q=mysql_query($s);
$r=mysql_fetch_array($q);

$uid=$r['u_id'];

$b="&uid=";
?>
<?php
if(isset($_POST['send']))
{

$a=$_POST['toname'];
	$emailsubject="Quirky- ".date("Y/m/d H:i:s"); 
	$headers.="From: " . $_REQUEST['frmname']."\n";
	$headers.="Reply-To: " . $_REQUEST['toname']."\n";

	 //echo $a="Email " . $_REQUEST['toname']."\n";

	//$mail.="Email " . $_REQUEST['toname']."\n";
	$message.="Comment: " . $_REQUEST['description']."\n";
	//$message.="User IP: " . $_SERVER['REMOTE_ADDR']."\n";
	$message.="Site: ". $_SERVER['HTTP_REFERER'].$b.$uid."\n\n";
	
	mail($a,$emailsubject,$message,$headers);
	
	//$name=$_REQUEST['name'];
	 $email=$_REQUEST['toname'];
	
	 $msg=$_REQUEST['description'];
	
	$ip=$_SERVER['REMOTE_ADDR'];
	$site=$_SERVER['HTTP_REFERER'];
}
?>
<html>
<head>

</head>

<body>
<form name=""  action="" method="post">
	<table class="clsWithoutBorder">
      
        <tr>
		<td></td>
	         <td class="clsWithoutBorder">
	    	      <table class="">
    	          <tr>
				  
				  <td align="right" width="350">
				  <img src="images/close.png" style="height:30px;width:30px; margin-top: -50px;
    position: absolute; margin-left:20px;
    width: 30px;" onClick="closebox_oo()" /></td>
            	  </tr>
				  </table>
				  <table>
              	  <tr>
	              <td width="250" height="30"><b>From:</b>(your email address)</td>
    	          <td><input type="text" name="frmname" style="width:220px;" /></td>
        	      </tr>
            	  <tr>
	              <td height="40"><b>To:</b>(their email address)</td>
    		      <td><input type="text" name="toname"  style="width:220px;" /></td>
            	  </tr>
	              
	              <tr>
    	          <td height="40"><b>Comments:</b>
(optional)</td>
        	      <td><textarea cols="25" rows="5" name="description"></textarea></td>
            	  </tr>
				  <tr>
    	          <td></td>
        	      <td height="50"><input type="submit" name="send" value="Submit"  class="btnstyle" />

				  </td>
            	  </tr>
	              </table>          </td>
        </tr>
    </table>
</form>

</body>
<html>