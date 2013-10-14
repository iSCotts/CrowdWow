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

 
 if(isset($_GET['did']))
 {
$did=$_GET['did'];
mysql_query("DELETE FROM shop WHERE s_id='$did'");
?>
<script type="text/javascript">
window.location.href="shopmanage.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
 $sql2="update shop set s_status='1' where s_id='$sid'";

$query2=mysql_query($sql2);


}
if($mode=='deact')
{
$sid=$_GET['sid'];
 $sql2="update shop set s_status='0' where s_id='$sid'";
//exit;
$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="shopmanage.php?sm=msg";
</script>
<?php
}
?>

	<?php include("include/leftsidebar.php"); ?>
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
	window.location.href = "shopmanage.php?did="+did;
	return true;
	}
	else
	{
		return false;
	}
	
	
}
//-->
</script>
<script>
	function changesta(id,mode)
{
var r=confirm("do you want to change Status");
if (r==true)
  {
   window.location.href='shopmanage.php?sid='+id+'&mode='+mode;
  }
else
  {
   return false;			
  }
}
</script>
<script type="text/javascript">
function openmypage(id)
{
var googlewin=dhtmlwindow.open("googlebox", "iframe", "shopedit.php?aid="+id, "Edit Ad Details", "width=400px,height=200px,resize=1,srcolling=1,center=1", "recal")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
window.location.reload(true);
return true;
}
}
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
	<h3 class="tabs_involved">Shop Management</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		<?php 

$result = mysql_query("SELECT * FROM shop");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2"> 

				<tr> 
   					
    				<th width="53">S.No.</th> 
    				<th width="202">Shop</th> 
    				<th width="92">No. of Items</th> 
    				                 
                    
					<th width="60" >Status</th> 
					<th width="60">Edit</th> 
					<th width="60">Delete</th> 
				</tr> 
                
				<?php
				$i=1;
				while($row = mysql_fetch_array($result))
  {?>
		 <tr>
		
	<td><?php echo $i ;?></td>
  <td><?php echo $row['s_name'] ;?></td>
  <td>	
  <?php 
 $query = "SELECT  *from product where s_id='".$row['s_id']."'";

	 
$result1 = mysql_query($query);
echo $num=mysql_num_rows($result1);


?>
</td>
 
	 
	  
	<td class="cursor"> <?php if($row['s_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['s_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['s_id']; ?>, 'act')"><img src="images/no.png" /></a></td>
	   <?php }?>
	  <td class="cursor"><a onClick="openmypage(<?php echo $row['s_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	  <td class="cursor"><a  onClick="deleteid(<?php echo $row['s_id']; ?>)"><img src="images/delete.png"  /></a></td>
	 
			  </tr> <?php $i++;   } ?>
			<tbody> 
			</tbody> 
		  </table>
		</div>
	</section>
	</body></html>
	