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
mysql_query("DELETE FROM highlight WHERE h_id='$did'");
?>
<script type="text/javascript">
window.location.href="managehighlight.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
$sql2="update highlight set h_status='1' where h_id='$sid'";

$query2=mysql_query($sql2);





}
if($mode=='deact')
{
$sid=$_GET['sid'];
 $sql2="update highlight set h_status='0' where h_id='$sid'";
//exit;
$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="managehighlight.php?sm=msg";
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
	window.location.href = "managehighlight.php?did="+did;
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
   window.location.href='managehighlight.php?sid='+id+'&mode='+mode;
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
var googlewin=dhtmlwindow.open("googlebox", "iframe", "edithighlight.php?aid="+id, "Edit And Details", "width=400px,height=400px,resize=1,scrolling=1,center=1")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
window.location.reload(true);
return true;
}
}
</script>
<script>
	function search1(id)
{

   window.location.href='managehighlight.php?sid='+id;
 
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
	<h3 class="tabs_involved">Highlight Managment</h3>
		
		</header>
		 

		<div class="tab_container" style="width:100%" >
		
		<?php 
		if(isset($_POST['submit']))
		{
		$pname=$_POST['pname'];
		$sql="select * from highlight";
		$sql1=mysql_query($sql);
		
		?>
		<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					
    				
					
					<th width="98" >Highlight ID</th>  
    				<th width="68" >Title</th> 
    			 
    			 <th width="62" >Features</th> 
				  <th  width="60">Status</th>
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
  
				</tr> 
				<?php
				$i=1;
				while($r=mysql_fetch_array($sql1))
		{
		
		?>
		 <tr>
		
	<td width="55"><?php echo $i; ?></td>
	  <td><?php echo $r['h_id'] ;?></td>
  <td><?php echo $r['h_title'] ;?></td>
  
  <td><?php echo $r['h_desc'] ;?></td>
    
	  
	  <td class="cursor">
	 <?php if($r['h_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $r['h_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $r['h_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	 <td class="cursor"> <a onClick="openmypage(<?php echo $r['h_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $r['h_id']; ?>)"><img src="images/delete.png"  /></a></td>
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
$result = mysql_query("select * from highlight where p_id='$p_id'");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					
    				
					
					
    				<th width="168" >Image</th> 
    			 
    			 <th width="100" >Features</th> 
	
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
	 
  <td><img src="uploadimage/<?php echo $row['h_image']; ?>"  height="40" width="80" /></td>
  
  <td><?php echo $row['h_desc'] ;?></td>
       <td class="cursor">
	 <?php if($row['h_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['h_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['h_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	
	 <td class="cursor"> <a href="highlight.php?id=<?php echo $p_id; ?>&hid=<?php echo $row['h_id']; ?>"><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['h_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; } }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>