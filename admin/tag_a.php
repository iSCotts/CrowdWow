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
?>

<?php
if (isset($_POST['submit'])) 
{
$tag_b=$_POST['tags'];
$v="insert into tag_blog (tag) values ('$tag_b')";

mysql_query($v);
}
?>  

<html>
<body>
<section id="main" class="column">
		
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Tag Blog</h3>
		
		</header>

<form name="form1" action="" method="post"  onSubmit="return valid();">
	
	<table style="padding-left:225px"> 
<td height="30">Tag Blog</td>
<td><input type="text" name="tags"  style="width:200px;" /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Submit"></td>
</tr></table>
</form>

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
 
 if(isset($_GET['did']))
 {
$did=$_GET['did'];
mysql_query("DELETE FROM tag_blog WHERE id='$did'");
?>
<script type="text/javascript">
window.location.href="tag_a.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
$sql2="update tag_blog where id='$sid'";

$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="tag_a.php?sm=msg";
</script>
<?php
}
?>

	
<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<script type="text/javascript">

function deleteid(did) 
{

	var answer = confirm("DO you want to delete");
	if (answer==true)
	{
	window.location.href = "tag_a.php?did="+did;
	return true;
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
var googlewin=dhtmlwindow.open("googlebox", "iframe", "edit_blog.php?aid="+id, "Edit Ad Details", "width=400px,height=200px,resize=1,scrolling=1,center=1")

googlewin.onclose=function(){ 
window.location.reload(true);
return true;
}
}
</script>
<script>
	function search1(id)
{

   window.location.href='tag_blog.php?sid='+id;
 
}
</script>
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function valid()
{
	if(document.form1.tags.value=="")
	{
		document.getElementById('namel').innerHTML='Please Enter Tag Blog';
		return false
	}
	else
	{
		document.getElementById('namel').innerHTML='';
	}
}
</script>

</head>
<body>
<section id="main" class="column">
		
		<div class="tab_container" style="width:100%" >
		
		<?php 
		if(isset($_POST['submit']))
		{
		
		$sql="SELECT * from tag_blog";
		$sql1=mysql_query($sql);
		
		?>
		<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th width="5">S.No.</th>
					
    			 
    			 <th width="100" >Tag Blog</th> 
				  
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
	  
    <td><?php echo $r['tag'] ;?></td>

	 <td class="cursor"> <a onClick="openmypage(<?php echo $r['id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $r['id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }
			  ?>
 
			<tbody> 
			</tbody> 
		  </table>
		  <?php
		  }
		
else
{
$result = mysql_query("SELECT * from tag_blog");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th width="5">S.No.</th>
					
    			 
    			 <th width="100" >Tag Blog</th> 
				  
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
				</tr>  
				<?php
				$i=1;
				while(@$row=mysql_fetch_array($result))
                 {
				 ?>
		 		 <tr>
		
	<td width="55"><?php echo $i; ?></td>
	  
    <td><?php echo $row['tag'] ;?></td>
	
	 <td class="cursor"> <a onClick="openmypage(<?php echo $row['id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; } }?>
 
			<tbody> 
			</tbody> 
		  </table>
	</div>
	</section>
	</body></html>

