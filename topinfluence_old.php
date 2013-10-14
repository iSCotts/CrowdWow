<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Community</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
 <?php

include('include/connect.php'); 
 $usid=$_GET['$id'];
 $go=$_GET['go'];
 @$query3="SELECT * FROM user where u_id='$usid'";
@$result = mysql_query($query3);
while(@$row=mysql_fetch_array($result))
{  $u_firstname=$row['u_firstname'];
$u_lastname=$row['u_lastname'];
}

 @$query2="SELECT * FROM user_profile where u_id='$usid'";
@$result = mysql_query($query2);
while(@$row=mysql_fetch_array($result))
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
 
  ?>
   
<div style="margin-top:50px;">
<div style="height:60px; width:900px;">
<table>
				<tr style="height:50px;font-weight:bold;">
				<td style="width:300px; background-color:#0099FF;">Community / User profile /<?php /*echo $username*/ echo @$u_firstname;  ?><?php /*echo $username*/ echo @$u_lastname;  ?>
</td>
<td style="width:500px;" >
</td>
<td style="width:100px; background-color:#0099FF;" >
<div>
<?php
if($go=='top')
{
?>
<a href="invent.php" class="button bright back">Go Back</a>
<?php
}
else
{
?>
<a href="community.php" ><img src="images/back.png"></a>
<?php
}
?>


</div>
</td>
</tr>
</table>
</div>

<div style="height:50px; margin-top:50px;font-weight:bold; font-size:18px;color:#6600FF;">
Welcome-<?php /*echo $username*/ echo @$u_firstname;  ?><?php /*echo $username*/ echo @$u_lastname;  ?>
</div>

<div style="width:900px; height:600px; background-color:#CCCCCC; margin-top:50px;font-weight:bold;">
<table>
<tr>

<td>
<div style="width:300px; height:300px;"><img src="upload_image/<?php /*echo $username*/ echo @$image;  ?>" width="200px"; height="300px"; />
</div>
<div style="width300px; height:300px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">Specialties:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$specialties;  ?>
</td>
</tr>
</table>
</div>
</td>

<td>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">Info
</td>
</tr>
<tr>
<td style="height:50px; color:#6600FF; font-size:18px;">Gender:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$gender;  ?>
</td>
</tr>
</table>
</div>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">Website:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$website;  ?>
</td>
</tr>
</table>
</div>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">Hometown:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$hometown;  ?>
</td>
</tr>
</table>
</div>
</td>

<td>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">
</td>
</tr>
<tr>
<td style="height:50px; color:#6600FF; font-size:18px;">About Me:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$about_me; ?>
</td>
</tr>
</table>
</div>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">First Product:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$f_product;  ?>
</td>
</tr>
</table>
</div>
<div style="width:300px; height:200px;">
<table>
<tr><td style="height:50px; color:#6600FF; font-size:18px;">Most Admirid Product:
</td>
</tr>
<tr><td><?php /*echo $username*/ echo @$ma_product;  ?>
</td>
</tr>
</table>
</div>
</td>

</tr>
</table>
</div>	
<div style="height:50px;">

</div>

<?php
}
?>

</div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
