<?php
@session_start();
include("include/connect.php"); 
$u_id=$_SESSION['u_id'];
$sub_id=$_GET['sub_id'];
if(isset($_POST['submit']))
{
$amount=$_POST['amount'];
$sql="insert into backers set sub_id='$sub_id',u_id='$u_id',amount='$amount'";
$query=mysql_query($sql);
?>
<script type="text/javascript">
window.location.href="suc.php?mode=pay";
</script>
<?php 
}
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
document.getElementById("msg2").innerHTML="";
if(document.frm.amount.value=='')
{
document.getElementById("msg2").innerHTML="Please Enter Amount";
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
   
	<div style=" width:360px; height:160px; margin-left:270px; margin-top:50px; margin-bottom:50px; background-color: #DFEFFF; border:1px; border-style:solid; border-color:#0000FF; padding:15px;">
	
	
<form name="frm" action="" method="post" onSubmit="return validate()">
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
              	  
            	  
	              <tr>
    	          <td height="40" colspan="2"><font color="black"><b>Enter Pledge Amount you wish to pay</b></font></td>
            	  </tr>
	              <tr>
				  <td height="50"><font color="black"><b>Pledge amount</b></font></td>
    	          <td><input  name="amount" size="15" type="text" />&nbsp;<b>$</b> <div id="msg2" style="color:#FF0000"></td>
        	      </tr>
				  
				  
				  
	              </table>          </td>
        </tr>
   <tr> 
	  <td></td><td align="center"><input type="submit" name="submit" value="Submit" class="btnstyle" />                                 
</td>

</table>
</form>
</div>
  </div></div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
