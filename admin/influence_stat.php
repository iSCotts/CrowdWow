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
 $days=$_POST['days'];
 $spent=$_POST['spent'];
 $votes=$_POST['votes'];
 $per=$_POST['per'];
 $v="INSERT INTO `duration` (`p_id`, `days`, `spent`, `votes`, `percent`) VALUES ('$p_id','$days','$spent','$votes','$per')";
 
mysql_query($v);
 ?>
 <script type="text/javascript">
window.location.href="influence_stat.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php } ?>

<head>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<script type="text/javascript">
function vali()
{
	if(document.form1.days.value=="")
	{
		document.getElementById('ptitle').innerHTML='Please Enter the date in given format';
		return false
	}
	else
	{
		document.getElementById('ptitle').innerHTML='';
	}
        if(document.form1.spent.value=="")
	{
		document.getElementById('plink').innerHTML='Please Enter the spend phase';
		return false
	}
	else
	{
		document.getElementById('plink').innerHTML='';
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
	<h3 class="tabs_involved">Product devlopment Duration</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

	

<tr>

<td height="30">Date(m/d/Y)</td>
<td><input type="text" name="days" id="demo1"  style="width:140px;" /> <a href="javascript:NewCal('demo1','ddmmyyyy')">
			<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">&nbsp;<span id="ptitle" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Spent On</td>
<td> 
<select name="spent">
<option>evaluation</option>
<option>research</option>
<option>design</option>
<option>branding</option>
</select>
&nbsp;<span id="plink" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Votes</td>
<td><input type="text" name="votes"></td>
</tr>
<tr>
<td height="30">Percentage</td>
<td><input type="text" name="per"></td>
</tr>
<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
<div style="margin-top:50PX;">		
<?php include("manage_dev.php"); ?>
	</div>	
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
