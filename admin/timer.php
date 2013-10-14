<?php 
@session_start();
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
	 include("include/leftsidebar.php"); ?>
<?php
if(isset($_POST["submit"]))
{
$date=$_POST["date"];
mysql_query("UPDATE timer SET date='$date' WHERE id = '1'");
?>
<script type="text/javascript">
window.location.href="timer.php?st='updated'";
</script>
<?php
}
?> 
<head>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<script type="text/javascript">
function valid()
{
	if(document.timerform.date.value=="")
	{
		document.getElementById('tdate').innerHTML='Please choose date';
		return false
	}
	else
	{
		document.getElementById('tdate').innerHTML='';
	}
}
</script>
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['st']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added new time"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Timer</h3>
		
		</header>

<div class="tab_container" style="width:100%">

<form method="post" action="" name="timerform" onsubmit="return valid();">
<table width="700" height="150" cellspacing=0 border="0" cellpadding="0" align="center" summary="">
	  <tr><td width="20px">Idea Timer</td>
	  	<td>
		
	  		<input type="Text" name="date" id="demo1" maxlength="25" size="25">
			<a href="javascript:NewCal('demo1','ddmmyyyy')">
			<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
			</a>
	  	</td><td><span id="tdate" style="color:#FF0000"/></td>
	  </tr>
	  <tr><td><input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form>


</div>
</div>
	</section>
	</body></html>