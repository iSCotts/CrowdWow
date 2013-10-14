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
include("include/leftsidebar.php"); ?>
	
	
 
<?php
if (isset($_POST['submit'])) 
{
$sname=$_POST['sname'];
$v="insert into shop (s_name,s_status) values ('$sname','1')";
mysql_query($v);
}
?>

<html>

<head>

</head>

<body>
<section id="main" class="column">
	<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add New Shop</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
       
	<?php include("shopform.php");  ?>	
		
</div>
		</div>	
	</section>
	</body></html>