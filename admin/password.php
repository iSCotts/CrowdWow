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
if(isset($_POST['submit']))
{
@$min=$_POST['min1'];
@$max=$_POST['max1'];
 $sql="update pass set max='$max',min='$min'";
$result=mysql_query($sql);
?>
  <script type="text/javascript">
window.location.href="password.php?dm=msg";
</script>
<?php
}

 
 
?>




	<?php include("include/leftsidebar.php"); ?>
<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>


<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function vali()
{
if(document.form1.min1.value=="")
{
document.getElementById('pass').innerHTML='Please enter minvalue';
return false;
}
else {
document.getElementById('pass').innerHTML='';

}
if(document.form1.max1.value=="")
{
document.getElementById('pass1').innerHTML='Please enter maxvalue';
return false;
}
else {
document.getElementById('pass1').innerHTML='';

}
}

</script>
</head>
<body>
<section id="main" class="column">
<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully Password change"; }?>
	</h4>
			<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Password Setting</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
</div>
<form name="form1" action="" method="post" onSubmit="return vali();">
			<table style="padding-left:250px;"> <tr>
			<td height="37">Min Length</td>
			<td>
			<input type="text" size="30" name="min1"></td><td> &nbsp;<span id="pass" style="color:#FF0000"/></td></tr>
			<tr><td height="41">Max length</td>
			<td>
			<input type="text" size="30" name="max1">
			</td><td>&nbsp;<span id="pass1" style="color:#FF0000"/></td></tr>
			<tr><td></td>
			<td>
			<input type="submit" value="Update" name="submit">
			</td></tr></table>

		
		
</form>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
	
