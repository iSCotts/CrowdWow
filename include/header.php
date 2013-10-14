<?php 
include("include/connect.php");
@session_start();
@$userid=$_SESSION['userid'];
@$email=$_SESSION['email'];
$_SESSION['u_id'];

@$sql="select * from user where u_email='$email'";
@$query=mysql_query($sql);
@$row=mysql_fetch_array($query);
?>
<?php
$query="select * from logo";
@$sql=mysql_query($query);
if(@$row=mysql_fetch_array($sql))
{
 $go=$row['logo'];
$fev=$row['fevicon'];
}
?>


<html>
<head>
<link rel="shortcut icon" href="admin/uploadimage/<?php echo $fev; ?>" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="css/lightbox-form.css">
        <script src="js/lightbox-form.js" type="text/javascript"></script>
		<script src="js/lightbox-form1.js" type="text/javascript"></script>
</head>



<div class="hdr"><div class="hdr_top"><div class="hdr_top_lt">

  <div class="hdr_top_lt_top" style="margin-bottom:10px;"><a href="index.php" ><img src="admin/uploadimage/<?php echo @$go; ?>"  height="50" width="150" /></a></div>
  <div class="hdr_top_lt_btm">
  <?php if($_SESSION['email']=='')
{
 ?>
<span class="login"><a href="#" onClick="openbox1('Login',1)">Log in</a></span><div id="filter1"></div>
<div id="box1">
  <span id="boxtitle1"></span>
		<?php include("loginform.php"); ?> 
</div> to your Account  |  <span class="signup"><a href="#" onClick="openbox('Registration', 1)">Signup</a>
  
 </span> 
  <div id="filter"></div>
<div id="box">
  <span id="boxtitle"></span>
		<?php include("upload.php"); ?> 
</div>
  
  <?php 
}
else
{
?>
   </div>
</div><div class="hdr_top_rt">
<!--<marquee>
Latest: Introducing the Nautilus Toilet&hellip;
</marquee>-->
<?php 
if(@$_GET['act']=='yes' || @$_SESSION['email']!='' )
{
?>
<span style="margin:0 0 0 430px"> <span class="guest" style="float:right; margin-top:-30px;">
<?php include("dropdown.php");  ?>
</span></span>
<?php } ?>
<br />
</div></div>
 <?php } ?>

 <?php if($_SESSION['email']=="")
 {
 ?>
 
 
<div class="hdr_btm"><div class="hdr_btm_top">
<?php include("menu.php"); ?>

</div>

<?php
}
else
{
 ?>
<div class="hdr_btm"><div class="hdr_btm_top" style="margin-top:15px;">
<?php include("menu.php"); ?>

</div>
<?php }?>

<form name="f5" action="mainsearch.php" method="post" style="margin-top:-108px; float:right; margin-right:-111px;">
<input type="text" name="testsearch" style="width:110px; float:left; border:solid 1px #cecfce; height:27px; margin:0; padding:0;" />&nbsp;
<input type="submit" name="search" value="search"  style="width:52px; background-color:#ff5d7b; border:none; height:28px; color:#FFFFFF;" />
</form>





</html>