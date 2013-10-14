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
//include("include/header.php");

 
 if(isset($_GET['did']))
 {
$did=$_GET['did'];
mysql_query("DELETE FROM design WHERE d_id='$did'");
?>
<script type="text/javascript">
window.location.href="design.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
}


?>

	<?php //include("include/leftsidebar.php"); ?>
<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<script type="text/javascript">
<!--
function deleteid(did) 
{
//alert(did);
	var answer = confirm("DO you want to delete");
	if (answer==true)
	{
	window.location.href = "design.php?did="+did;
	return true;
	}
	else
	{
		return false;
	}
	
	
}
//-->
</script>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully deleted"; ?>
	</h4>
		<?php } ?>
		<?php  if(isset($_GET['sm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully status change"; ?>
	</h4>
		<?php } ?>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Design Managment</h3>
		
		</header>
		 

		<div class="tab_container" style="width:100%" >
		
		<?php 
		if(isset($_POST['submit']))
		{
		
		$pname=$_POST['pname'];
		$sql="select * from design where p_id='$p_id'";
		$sql1=mysql_query($sql);
		
		?>
		<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					
    				
					

    				<th width="68" >Design</th> 
    			 
				   
					<th width="60" >Delete</th>  
  
				</tr> 
				<?php
				$i=1;
				while($r=mysql_fetch_array($sql1))
		{
		
		?>
		 <tr>
		
	<td width="55"><?php echo $i; ?></td>

  <td><img src="uploadimage/<?php echo $r['design']; ?>"  height="40" width="80" /></td>
  

	<td class="cursor"><a  onClick="deleteid(<?php echo $r['d_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }
			  ?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
		  <?php
		  }
		
else
{
$p_id=$_GET['id'];
 $sql="select * from design where p_id='$p_id'";
$query = mysql_query("select * from design where p_id='$p_id'");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					
    			<th width="68" >Name</th> 	
					
					
    			<th width="68" >Design</th> 
    			 

					<th width="60" >Delete</th>  
  
					  
				</tr>  
				<?php
				$i=1;
				while($row=mysql_fetch_array($query))
                 {
				 ?>
		 		 <tr>
		
	<td width="55"><?php echo $i; ?></td>
	<td width="55"><?php echo $row['d_name']; ?></td> 
 <td><img src="uploadimage/<?php echo $row['design']; ?>"  height="40" width="80" /></td>
  

	

	<td class="cursor"><a  onClick="deleteid(<?php echo $row['d_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; } }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>