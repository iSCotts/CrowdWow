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
		
		
<form name="form1" method="post" action="update_project.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:-25px"> 
<?php 
	
	$sql=("SELECT * from project where pro_id='$aid'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$title=$row1['pro_title'];
		$detail=$row1['pro_detail'];
	
}
	?>	
	
		


<tr>
<td height="30">Title</td>
<td><input type="text" size="48" name="title" value="<?php echo $title; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Detail</td>
<td><textarea rows="10"  cols="35" name="detail" ><?php echo $detail; ?> </textarea> &nbsp;<span id="pass" style="color:#FF0000"/></td></tr>
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>

<tr>
<td></td><td height="30" ><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
	
			
			
	
			
		</div>
		
	</section>
	</body></html>