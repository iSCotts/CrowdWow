<?php

@session_start();
 

$userid=$_SESSION['u_id']; 
include('include/connect.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Account</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<script src="js/lightbox-form2.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div>

<div class="bod">
  <div class="bod_rt">

 <div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='' class='breadcrumb-link'>My Account</a>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>


<div class="bod">
  <div > <?php 
$userid=$_SESSION['u_id']; 
$sql1="select * from user_profile where u_id='$userid'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
 $image=$row1['image'];
  
  
?>
  <div class='page quirky-user-inbox logged-out'>
<div class='tier x12 user-account-header'>
<div class='box filled-soft bordered' >

<?php
 if($image=="")
 {
 ?>
 


 <a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="user_noimage.png" class="user-account-header-icon" src="upload_image/user_noimage.png" width="50px"  height="50px" /></a>
 <?php
 }
 else
 {
 ?>

<a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="<?php echo $image; ?>" class="user-account-header-icon" src="upload_image/<?php echo $image; ?>" width="50px"  height="50px" /></a>
<?php }
?>
<h2 class='user-account-header-title'>
<?php 
}

$sql="select * from user where u_id='$userid'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
 $fname=$row['u_firstname'];
  $lname=$row['u_lastname'];
  }
?>

			Your Account: <span class='user-account-header-name'><?php echo $fname;?><?php echo $lname; ?></span>

</h2>
<a href="edit_profile.php" class="button user-account-header-edit-button bright">Edit Your Profile</a>
</div>

</div>
</div>
</div>
  
	<?php include("account_act/account1.php"); ?>

  </div>
</div>
</div></div></div>
</div></div></div></div></div>	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
