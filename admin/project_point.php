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
$research=$_POST['research'];
$design=$_POST['design'];
$branding=$_POST['branding'];
$points=$_POST['points'];
$apoints=$_POST['apoints'];
$type=$_POST['type'];
$v="insert into project_point (points,d_percent,r_percent,b_percent,type) values ('$points','$research','$design','$branding','$type')";

mysql_query($v);
}
?>  

<html>
<head>
<script type="text/javascript">
function vali()
{
if(document.form1.research.value=="")
{
document.getElementById('namef').innerHTML='Please enter research points';
return false;
}
else {
document.getElementById('namef').innerHTML='';

}

if(document.form1.design.value=="")
{
document.getElementById('namel').innerHTML='Please enter design points';
return false;
}
else {
document.getElementById('namel').innerHTML='';

}
if(document.form1.branding.value=="")
{
document.getElementById('email').innerHTML='Please enter branding points';
return false;
}
else {
document.getElementById('email').innerHTML='';

}
if(document.form1.points.value=="")
{
document.getElementById('po').innerHTML='Please enter user project points';
return false;
}
else {
document.getElementById('po').innerHTML='';

}
if(document.form1.apoints.value=="")
{
document.getElementById('apo').innerHTML='Please enter admin project points';
return false;
}
else {
document.getElementById('apo').innerHTML='';

}
if(document.form1.type.value=="")
{
document.getElementById('t').innerHTML='Please enter project type';
return false;
}
else {
document.getElementById('t').innerHTML='';

}

}
</script>

</head>
<body>
<section id="main" class="column">
		
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Project Points</h3>
		
		</header>

<form name="form1" action="" method="post" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
<tr>
<td height="30">Project Points</td>
<td><input type="text" size="30" name="points"  /></td><td> &nbsp;<span id="po" style="color:#FF0000"/></tr>
<tr>
<td height="30">Research</td>
<td><input type="text" size="30" name="research"  /></td><td> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Design</td>
<td><input type="text" size="30" name="design"  /></td><td> &nbsp;<span id="namel" style="color:#FF0000"/></tr>
<tr>
<td height="30">Branding</td>
<td><input type="text" size="30" name="branding"  /></td><td> &nbsp;<span id="email" style="color:#FF0000"/></tr>
<tr>
<td height="30">Project Type</td>
<td><input type="text" size="30" name="type"  /></td><td> &nbsp;<span id="t" style="color:#FF0000"/></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input name="submit" type="submit" value="Submit"></td>
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

mysql_query("DELETE FROM project_point WHERE pp_id='$did'");
?>
<script type="text/javascript">
window.location.href="project_point.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
$sql2="update project_point where id='$sid'";

$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="project_point.php?sm=msg";
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
	window.location.href = "project_point.php?did="+did;
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
var googlewin=dhtmlwindow.open("googlebox", "iframe", "edit_project_point.php?aid="+id, "Edit Ad Details", "width=400px,height=200px,resize=1,scrolling=1,center=1")

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
function vali()
{
if(document.form1.research.value=="")
{
document.getElementById('namef').innerHTML='Please enter firstname';
return false;
}
else {
document.getElementById('namef').innerHTML='';

}

if(document.form1.design.value=="")
{
document.getElementById('namel').innerHTML='Please enter lastname';
return false;
}
else {
document.getElementById('namel').innerHTML='';

}
if(document.form1.branding.value=="")
{
document.getElementById('email').innerHTML='Please enter email';
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
		
		<div class="tab_container" style="width:100%" >
		
		<?php 
		if(isset($_POST['submit']))
		{
		
		$sql="SELECT * from project_point";
		$sql1=mysql_query($sql);
		
		?>
		<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th width="5">S.No.</th>
					
    			          <th width="100" >Project Points</th>
<!--                                  <th width="100" >Admin Project Points</th>-->
    			          <th width="100" >Research</th> 
				  <th width="100" >Design</th>
				  <th width="100" >Branding</th>
				  <th width="100" >Project Type</th>
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
        <td><?php echo $r['points'] ;?></td>	
<!--        <td><?php echo $r['apoints'] ;?></td>  -->
        <td><?php echo $r['r_percent'] ;?></td>
	<td><?php echo $r['d_percent'] ;?></td>
	<td><?php echo $r['b_percent'] ;?></td>
        <td><?php echo $r['type'] ;?></td>    
	 <td class="cursor"> <a onClick="openmypage(<?php echo $r['pp_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $r['pp_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }
			  ?>
 
			<tbody> 
			</tbody> 
		  </table>
		  <?php
		  }
		
else
{
$result = mysql_query("SELECT * from project_point");

	?>		

			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th width="5">S.No.</th>
					
    			          <th width="100" >Project Points(%)</th>
                                  <!--<th width="100" >Admin Project Points(%)</th>-->
    			          <th width="100" >Research(%)</th> 
				  <th width="100" >Design(%)</th>
				  <th width="100" >Branding(%)</th>
                                  <th width="100" >Project Type</th>
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
	<td><?php echo $row['points'] ;?></td>
<!--        <td><?php echo $row['apoints'] ;?></td>-->  
        <td><?php echo $row['r_percent'] ;?></td>
	<td><?php echo $row['d_percent'] ;?></td>
	<td><?php echo $row['b_percent'] ;?></td>
        <td><?php echo $row['type'] ;?></td>
	
	 <td class="cursor"> <a onClick="openmypage(<?php echo $row['pp_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['pp_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; } }?>
 
			<tbody> 
			</tbody> 
		  </table>
	</div>
	</section>
	</body></html>

