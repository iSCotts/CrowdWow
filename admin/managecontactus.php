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
mysql_query("DELETE FROM contact_us WHERE au_id='$did'");
?>
<script type="text/javascript">
window.location.href="managecontactus.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{

$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
 $sql2="update contact_us set cu_status='1' where cu_id='$sid'";

$query2=mysql_query($sql2);

$sql2="update contact_us set cu_status='0' where cu_id!='$sid'";

$query2=mysql_query($sql2);




}
if($mode=='deact')
{
$sid=$_GET['sid'];
 $sql2="update contact_us set cu_status='0' where cu_id='$sid'";
//exit;
$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="managecontactus.php?sm=msg";
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
	window.location.href = "managecontactus.php?did="+did;
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
   window.location.href='managecontactus.php?sid='+id+'&mode='+mode;
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
var googlewin=dhtmlwindow.open("googlebox", "iframe", "editcontactus.php?aid="+id, "Edit And Details", "width=400px,height=400px,resize=1,scrolling=1,center=1")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
window.location.reload(true);
return true;
}
}
</script>
<script>
	function search1(id)
{

   window.location.href='manageblog.php?sid='+id;
 
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
	<h3 class="tabs_involved">Manage Contact Us</h3>
		
		</header>
		 

		<div class="tab_container" style="width:100%" >
		
		<?php 
		if(isset($_POST['submit']))
		{
		$pname=$_POST['pname'];
		$sql="SELECT article.name,article.title,article.detail,article.p_id,article.art_status,product.p_name,product.p_type,product.p_status,product.p_id from article inner join product on article.p_id=product.p_id where article.p_id='$pname'";
		$sql1=mysql_query($sql);
		
		?>
		<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					
    				<th width="94" >ProductName</th>
					
					<th width="98" >Name</th>  
    				<th width="68" >Type</th> 
    			 
    			 <th width="62" >Title</th> 
				 
				   
					<th  width="60">Status</th>
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
				</tr> 
				<?php
				$i=1;
				while($r=mysql_fetch_array($sql1))
		{
		echo $r['p_name'];
		?>
		 <tr>
		
	<td width="55"><?php echo $i; ?></td>
	  <td><?php echo $r['p_name'] ;?></td>
  <td><?php echo $r['name'] ;?></td>
  
  <td><?php echo $r['p_type'] ;?></td>
    <td><?php echo $r['title'] ;?></td>
	
	   

	  
	  <td class="cursor">
	 <?php if($r['art_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $r['p_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $r['p_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	 <td class="cursor"> <a onClick="openmypage(<?php echo $r['p_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $r['p_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }
			  ?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
		  <?php
		  }
		
else
{
$result = mysql_query("select * from contact_us ");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
                                        <th width="98" >S.No.</th>  
					<th width="98" >Name</th>  
					<th  width="60">Status</th>
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
				</tr>  
				<?php
				$i=1;
				while($row=mysql_fetch_array($result))
                 {
				 ?>
		 		 <tr>
		
	<td width="55"><?php echo $i; ?></td>

  <td><?php echo $row['cu_title'] ;?></td>
  
	  
	  <td class="cursor">
	 <?php if($row['cu_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['cu_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['cu_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	 <td class="cursor"> <a href="editcontactus.php?aid=<?php echo $row['cu_id']; ?>"><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['cu_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; } }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>