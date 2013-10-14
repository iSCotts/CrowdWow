<?php
include("include/connect.php");
session_start();
$m=$_GET['msg'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
<div class="bod_rt" style="margin-bottom:135px;">
<div class="page quirky-idea">
<div class="tier x12">
<div class="column x9" style="margin-left:90px;">
<div class="form-controls box mSmaller filled-bright" style="margin-left:170px; margin-top:50px;"><strong> 
<?php
if ($_GET['mode']=='pay')
{
?>
Payed successfully
<?php 
}
elseif($_GET['msg'])
{
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This email already exists,Please enter new email.
<?php
}
else
{
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your are successfully registered.<br />
Please check your email and follow the link to activate your account. </strong>
<?php } ?>
  <div class="button-holder"><strong>  </strong>
</div>
</div> 
<div id="payment-box" class="box mSmaller">
</div></div>
</div>
</div>
</div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
