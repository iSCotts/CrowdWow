<?php
include('include/connect.php'); 
session_start();
 @$email=$_SESSION['email'];
 @$userid=$_SESSION['u_id'];
 if(isset($_POST['submit']))
 {
 $pass=$_POST['pass'];
 $pass1=$_POST['pass1'];
  $sql="update user set u_password='$pass' where u_email='$email'";
$qury=mysql_query($sql);
?>
<script>
window.location.href=("index.php");
</script>
 <?php }
 
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Password</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function validate()
{
var str=true;
document.getElementById("msg1").innerHTML="";
document.getElementById("msg2").innerHTML="";
if(document.frm.pass.value=='')
{
document.getElementById("msg1").innerHTML="Please Enter New Password";
return false;
}
if(document.frm.pass1.value=='')
{
document.getElementById("msg2").innerHTML="Please Confirm Password";
return false;
}
if(document.frm.pass.value!=document.frm.pass1.value)
{
document.getElementById("msg3").innerHTML="Password and Confirm Password does not match";
return false;
}
return true;
}
</script>

</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	
	
	
</li>
<div id="cart-dropdown-container">
<div id="cart-dropdown-top"></div>
<div class="h-dropdown" id="cart-dropdown" style="">
<table id="cart-dropdown-table">

<tr>
<th colspan=2 style="text-align: left;">
          Product Name
</th>
<th>
          Quantity
</th>
<th>
          Price
</th>
</tr>
    
</table>
<div class="button-holder">

      
<div class="right" style="margin-left: 10px;">
<a href="/checkout" class="button bright right">Proceed To Checkout</a>
</div>
<div class="right">
<a href="/cart_items" class="button soft right">Edit Cart</a>
</div>
<div class="clear">
</div>
</div>
</div>
</div>

</li>
</ul>
      
</div>
</div>
</div>
</div>

<link title="Quirky Ideas :: product 0134 :: product evaluation" rel="alternate" type="application/atom+xml" href="http://www.quirky.com/projects/795.atom" />


<div class="page">

<div class="tier mSmaller x12">

<div class='box global-pagination right'>
<a href="view_profile.php" class="button bright back" name="">View Profile</a>
</div>
</div>

<div class="tier x12 page-header">
<div class="column x7">

<div class='box'>
<h1 class='bold-sans'>
<a href="">
<?php 
echo "Welcome ". @$_SESSION['email'];

?></a>
</h1>
				
</div>
</div>
</div>






<style>
			.profile-info {color:#46166b;font-size:12px;font-weight:bold;padding:5px;}
</style>
<?php
 $userid=$_SESSION['email'];
  $query2="SELECT * FROM user where u_email='$userid'";

$result = mysql_query($query2);
while($row=mysql_fetch_array($result))
{
 $pass=$row['u_password'];
 $id=$row['u_id'];
}?>

<?php
$s="select * from user_profile where u_id='$id'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$image  =$r['image'];
}
?>


</div>
<div>
<form name="frm" action="" method="post" onSubmit="return validate()">

<div class="tier x12 user-profile-panel">

<div class='box x12 filled-soft bordered' style="margin-bottom:18px;">
<div class='user-profile-panel-left' style="padding:35px 15px;width:222px;">


<div>
<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">Your Photo</h1>
<?php
 if($image==null || $image=="")
 {
  echo "<img src='upload_image/user_noimage.png' height='' width='205'>"; 
 }
 else
 {
 ?>
<img alt="<?php echo $image;  ?>" class="user-profile-panel-image" src="upload_image/<?php  echo $image;  ?>" width="205px" />
<?php
}
?>
<div style="border-bottom:1px solid #ccc;width:95%;float:right;"></div>

</div>


<div style='padding-left:10px;margin-top:10px;'>
 <br/>

</div>
					
<div style='padding-left:10px;'>
<div style="font-weight:bold;font-size:12px;">
</div>
						

</div>

				

					
<div style='padding-left:10px;margin-top:20px;'>
						
</div>

<div class='user-profile-panel-right' style="padding-left:30px;float:left; margin-left:250px; margin-top:-274px;">

<div>

<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>

<table style="margin-top:10px;">
<tr>

<td class="profile-info">New Password:</td>
<td>
<input type="password" name="pass" size="60"   />
<div id="msg1" style="color:#FF0000"></div>

</td>
</tr>
<tr>

<td class="profile-info">Confirm Password:</td>
<td>
<input type="password" name="pass1" size="60"  />
<div id="msg2" style="color:#FF0000"></div>

</td>
</tr>
<tr><td class="profile-info"><div id="msg3" style="color:#FF0000"></div></td></tr>
</table>


</div>
				
<div style="margin-top:20px;">
<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">


						
</div>

</div>
				
<div style="margin-top:15px;">
<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">

</div>
</div>
				
<div style="margin-top:15px;">

<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">
</div>
<div style="font-size:12px;margin-top:10px;">
</div>
</div>
<input type="submit" value="submit" name="submit" class="btnstyle"/>				
</div>
</div></div></div>		
</form>
</div>
<div class='account-action-buttons clearfix'>
<!--<a class="button bright big" href="#" onclick="jQuery('#edit-profile.php').submit();; return false;">Save</a>
<a href="/users/74187/settings" class="button cancel big">Cancel</a> -->


<div class="clear"></div>
</div>
</div>
</div>


      
</div>
	
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>



</body>
</html>
