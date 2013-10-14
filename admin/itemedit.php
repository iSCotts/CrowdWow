<?php 
include("include/connect.php");
 $p_id=$_GET['aid'];


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
if(document.form1.ctm.value=="")
{
document.getElementById('cm').innerHTML='Please enter commentment limit';
return false;
}
else {
document.getElementById('cm').innerHTML='';

}

}
</script>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />


</head>

<body>
<section id="main" class="column">
		
	
		<article class="module width_7_quarter">
	
		<div class="tab_container" style="width:100%">
		
		
<form name="form1" method="post" action="update_item.php?id=<?php echo $p_id; ?>"  enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:-35px"> 
	
	<tr><td>Shop Name</td>

	<td>
	<select name="shopname">
    	<?php 
	
	$sql2=("SELECT shop.s_id,shop.s_name,product.p_id FROM product inner join shop Where shop.s_id=product.s_id and product.p_id ='$p_id'");
    $query2=mysql_query($sql2);
    while($row2=mysql_fetch_array($query2))
		{
        echo  $s_id=$row2['s_id'];
		 }

	  echo  $sql="select * from shop";
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{
		 $sid=$row['s_id'];
		?>
		<option value="<?php echo $sid; ?>" <?php if($s_id==$sid) { echo "selected"; } ?>  ><?php echo $row['s_name']; ?></option>
		<?php }?>
	</select> &nbsp;<span id="shop" style="color:#FF0000"/>
	</td></tr>
	<?php 
	
	$sql=("SELECT * FROM product Where p_id='$p_id'");
    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query))
		{
		$sid=$row['p_id']; 

	?>
<tr>
<td height="30">Product Name</td>
<td><input type="text" name="pname" size="45" value="<?php echo $row['p_name']; ?>" /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<tr>
<td height="30" width="40px">Image</td><td><input type="file" size="45" name="file"><img src="uploadimage/<?php  echo $row['p_image'];  ?>" width="50" height="50"/></td></tr> <tr>
<td height="30">Product Type</td>
<td><input type="text" name="ptype" size="45" value="<?php echo $row['p_type']; ?>"  /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>

<tr>
<td height="30">Sort by</td>
<td><input type="text" name="bsort" size="45" value="<?php echo $row['sort']; ?>"  /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Product Title</td>
<td><input type="text" name="ptitle" size="45" value="<?php echo $row['p_title']; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Product current price</td>
<td><input type="text" name="pcp" size="45" value="<?php echo $row['p_cur_price']; ?>" /> &nbsp;<span id="pass" style="color:#FF0000"/></tr>
<tr>
<td height="30">Product privous price</td><td><input type="text" size="45" name="ppp" value="<?php echo $row['p_pre_price']; ?>" />
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>
<tr>
<td height="30">Commitment Limit</td><td><input type="text" size="45" name="ctm" value="<?php echo $row['commetment_limit']; ?>" />
 &nbsp;<span id="cm" style="color:#FF0000"/> </tr><?php }?>
<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
		
			
			
	
			
		</div>
		
	</section>
	</body></htm>