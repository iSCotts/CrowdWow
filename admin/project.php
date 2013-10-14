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
$protitle=$_POST['title'];
$prodetail=$_POST['detail'];
$v="INSERT INTO `project` ( `pro_title`, `pro_detail`) VALUES ('$protitle','$prodetail')";
mysql_query($v);
?>
<script type="text/javascript">
window.location.href="project.php?dm=msg";
</script>
<?php
 }
?>

  
  

	 
<html>
<head>
<script type="text/javascript">
function vali()
{
if(document.form1.title.value=="")
{
document.getElementById('namel').innerHTML='Please enter title type';
return false;
}
else {
document.getElementById('namel').innerHTML='';

}
if(document.form1.detail.value=="")
{
document.getElementById('email').innerHTML='Please enter project detail';
return false;
}
else {
document.getElementById('email').innerHTML='';
}
}
</script>
</head>

<body>
<section id="main" class="column">
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added project"; }?>
	</h4>	
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add Project</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
<td height="30">Title</td>
<td><input type="text" name="title"  style="width:333px;" /></td>&nbsp;<td><span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Project Detail</td>
<td><textarea name="detail" rows="10" cols="40"></textarea></td>&nbsp;<td><span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
