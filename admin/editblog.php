<?php 
include("include/connect.php");
include("include/header.php");
 include("include/leftsidebar.php"); 
 $aid=$_GET['aid'];
$id=$_GET['id'];
if(isset($_GET['ms']))
{
include("success.php");
}
else
{
?>


<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
	<link href="checkeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
	<link href="ckeditor/skins/kama/editor.css" rel="stylesheet" type="text/css" />
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
		
		
<form name="form1" method="post" action="update_blog.php?id=<?php echo $id; ?>&aid=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:15px"> 
<?php 
	
	$sql=("SELECT article.name,article.title,article.detail,article.p_id,product.p_name,product.p_type,product.p_status,product.p_id from article inner join product on article.p_id=product.p_id where article.p_id='$id'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$name= $row1['name'];
		$type=$row1['p_type'];
		$title=$row1['title'];
		$detail=$row1['detail'];
		$p_id=$row1['p_id'];
}
	?>	
	
		<?php
		$sql2="select * from product where p_id='$p_id'";
		$result2=mysql_query($sql2);
		while($row2=mysql_fetch_array($result2))
		{
		 $p_name=$row2['p_name'];
		 }
		?>
			<tr><td>Product Name</td>

	<td>
		<input type="text" value="<?php echo $p_name;?>" disabled="disabled">
		
	 &nbsp;<span id="shop" style="color:#FF0000"/>
	</td></tr>

<tr>
<td height="30">Name</td>
<td><input type="text" name="name" value="<?php echo $name; ?>" /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Product Type</td>
<td><input type="text" name="ptype" value="<?php echo $type;  ?>"  /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Title</td>
<td><input type="text" name="ptitle" value="<?php echo $title; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Detail</td>
<td><textarea class="ckeditor" cols="80" id="editor1" name="detail" rows="10"><?php echo $detail; ?> </textarea> &nbsp;<span id="pass" style="color:#FF0000"/></td></tr>
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>

<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
		
			
			
	
			
		</div>
		
	</section>
	</body></htm><?php } ?>