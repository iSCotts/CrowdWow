<?php 
session_start();
if(isset($_SESSION['password'])=="")
{
?>
<script>
window.location.href="index.php";
</script>
<?php
}
include("include/connect.php");
include("include/header.php");
include("include/leftsidebar.php"); 
if (isset($_POST['submit'])) 
{
 $p_id=$_GET['id'];
 $theme1=$_POST['days'];
 $theme2=$_POST['days2'];
 $theme3=$_POST['days3'];
 
 $v="INSERT INTO `themes` (`p_id`, `theme1`, `theme2`, `theme3`) VALUES ('$p_id','$theme1','$theme2','$theme3')";
 mysql_query($v);
 ?>
 <script type="text/javascript">
window.location.href="themes.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php } ?>

<head>
<script type="text/javascript">
function vali()
{
	
     if(document.form1.days.value=="")
	{
		document.getElementById('ptitle').innerHTML='Please Enter the first color';
		return false
	}
	else
	{
		document.getElementById('ptitle').innerHTML='';
	}
	if(document.form1.days2.value=="")
	{
		document.getElementById('ptitle2').innerHTML='Please Enter the second color';
		return false
	}
	else
	{
		document.getElementById('ptitle2').innerHTML='';
	}
	if(document.form1.days3.value=="")
	{
		document.getElementById('ptitle3').innerHTML='Please Enter the third color';
		return false
	}
	else
	{
		document.getElementById('ptitle3').innerHTML='';
	}
}
</script>
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added a press news"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add Themes</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

	

<tr>

<td height="30">Theme 1:</td>
<td><input type="text" name="days"  style="width:140px;" /> &nbsp;<span id="ptitle" style="color:#FF0000"/></td></tr>
<tr>

<td height="30">Theme 2:</td>
<td><input type="text" name="days2"  style="width:140px;" /> &nbsp;<span id="ptitle2" style="color:#FF0000"/></td></tr>
<tr>

<td height="30">Theme 3:</td>
<td><input type="text" name="days3"  style="width:140px;" /> &nbsp;<span id="ptitle3" style="color:#FF0000"/></td></tr>

<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
<div style="margin-top:50PX;">		
<?php include("manage_theme.php"); ?>
	</div>	
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
