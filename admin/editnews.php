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
		
	
		<article class="module width_7_quarter">
	
		<div class="tab_container" style="width:100%">
		
		
<form name="form1" method="post" action="update_news.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:15px"> 
<?php 
	
	$sql=("select * from news where n_id='$aid'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$nid=$row1['n_id'];
		$title=$row1['n_title'];
		$link=$row1['link'];
		
}
	?>	
	
		<?php /*
		$sql2="select * from product where p_id='$p_id'";
		$result2=mysql_query($sql2);
		while($row2=mysql_fetch_array($result2))
		{
		 $p_name=$row2['p_name'];
		 }
		*/?>
			

<tr>
<td height="50">Title</td>
<td><input type="text" name="ntitle" size="35" value="<?php echo $title;  ?>"  /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="50">Link</td>
<td><input type="text" name="nlink" size="35" value="<?php echo $link; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>

<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
		
			
			
	
			
		</div>
		
	</section>
	</body></htm>