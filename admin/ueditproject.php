<?php 
include("include/connect.php");
  $aid=$_GET['aid'];


?>


<head>
<script type="text/javascript">
function vali()
{
var returnStatus = 1;

	if (document.form1.selectedIndex == 0) {
		document.getElementById('shop').innerHTML='Please enter shopname';
		
		return false;
	}
	else
	{
	document.getElementById('shop').innerHTML='';
	}

if(document.form1.pname.value=="")
{
document.getElementById('namef').innerHTML='Please enter productname';
return false;
}
else {
document.getElementById('namef').innerHTML='';

}

if(document.form1.ptype.value=="")
{
document.getElementById('namel').innerHTML='Please enter product type';
return false;
}
else {
document.getElementById('namel').innerHTML='';

}
if(document.form1.ptitle.value=="")
{
document.getElementById('email').innerHTML='Please enter product title';
return false;
}
else {
document.getElementById('email').innerHTML='';

}

if(document.form1.pcp.value=="")
{
document.getElementById('pass').innerHTML='Please enter product current price';
return false;
}
else {
document.getElementById('pass').innerHTML='';

}
if(document.form1.ppp.value=="")
{
document.getElementById('repass1').innerHTML='Please enter product perivous price ';
return false;
}
else {
document.getElementById('repass1').innerHTML='';

}

}
</script>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />


</head>

<body>
<section id="main" class="column">
		
	
		<article class="module width_8_quarter">
	
		<div class="tab_container" style="width:120%">
		
		
<form name="form1" method="post" action="uupdate_project.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:-25px">
	

	
	
	
	
	 
<?php 
	
 $sql=("SELECT * from submit_idia where sub_id='$aid'");

    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query))
		{
		
	?>	
	<tr>
<td height="30">Category</td><td><input type="text" size="45" name="category" value="<?php echo $row['category']; ?>" />
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>
<tr>
	
<tr>
<td height="30">Idea</td>
<td><input type="text" name="idea" size="45" value="<?php echo $row['desc_idea']; ?>" /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<tr>
<td height="30" width="40px">Image</td><td><input type="file" size="45" name="file"><img src="../upload_idea/<?php  echo $row['attach_files'];  ?>" width="50" height="50"/></td></tr> 
<td height="30">Invest</td>
<td><input type="text" name="invest" size="45" value="<?php echo $row['invest']; ?>"  /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Vote_idea</td>
<td><input type="text" name="vote_idea" size="45" value="<?php echo $row['vote_idea']; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Problem</td>
<td><input type="text" name="problem" size="45" value="<?php echo $row['desc_problem']; ?>" /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Solution</td>
<td><input type="text" name="solution" size="45" value="<?php echo $row['desc_solution']; ?>" /> &nbsp;<span id="pass" style="color:#FF0000"/></tr>	
		



<?php } ?>
<tr>
<td></td><td height="30" ><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
	
			
			
	
			
		</div>
		
	</section>
	</body></html>