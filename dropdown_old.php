<?php 
include("include/connect.php");
session_start();
@$userid=$_SESSION['userid'];
@$email=$_SESSION['email'];
if(@$_GET['act']=='yes' || @$_SESSION['email']!='' )
@$sql="select * from user where u_email='$email'";
@$query=mysql_query($sql);
@$row=mysql_fetch_array($query);
$row['u_firstname']." ".$row['u_lastname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JavaScript Dropdown Menu Demo</title>
<link rel="stylesheet" href="css/dropdown.css" type="text/css" />
<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body>

<br /><br />

<dl class="dropdown">
  <dt id="one-ddheader" onmouseover="ddMenu('one',1)" onmouseout="ddMenu('one',-1)"><img src="images/p.png" height="15" width="15">&nbsp;&nbsp;<?php /*echo "Welcome"*/ ?>&nbsp;<?php echo $row['u_firstname']." ".$row['u_lastname'];  ?></dt>
  <dd id="one-ddcontent" onmouseover="cancelHide('one')" onmouseout="ddMenu('one',-1)">
    <ul>
      <li><a href="my_account.php" class="underline">My Account</a></li>
      <li><a href="activity.php" class="underline">Activity</a></li>
      <li><a href="show_cart.php" class="underline">Add to Cart</a></li>
      <li><a href="change_password.php" class="underline">Change Password</a></li>
      <li><a href="forum.php" class="underline">Forum</a></li>
      <li><a href="inbox.php" class="underline">Inbox</a></li>
       <li><a href="view_profile.php" class="underline">My Profile</a></li>     
      <li><a href="accountbalance.php" class="underline">Account Balance</a></li>
      <li><a href="logout.php" class="underline">Logout</a></li>
      
    </ul>
  </dd>
</dl>



<div style="clear:both" />


</body>
</html>