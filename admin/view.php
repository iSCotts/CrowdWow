<?php 
include("include/connect.php");
 
$sub_id=$_GET['aid'];
 
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

<link rel="stylesheet" href="../../google/css/layout.css" type="text/css" media="screen" />


</head>

<body>
<section id="main" class="column">
		
	
		<div class="tab_container" style="width:100%">
		
		
<form name="form1" method="post" action=""  enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:-35px"> 
	
	<tr>

	<td>
	<?php 
 $sql3="SELECT * FROM submit_idia WHERE sub_id='$sub_id'";
$query3=mysql_query($sql3);

while($row = mysql_fetch_array( $query3 ))
{
 $sub=$row['sub_id'];
 $didea=  $row['desc_idea'];
 $category=$row['category'];
 $d_prob= $row['desc_problem'];
 $d_solut=$row['desc_solution'];
 $invet=$row['invest'];
 $attach=$row['attach_files'];
 
}
?>
<tr>
<td height="30"><b>Idea Description</b></td>
<td><?php echo $didea; ?> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
 <tr>
<td height="30"><b>Choose a Category</b></td>
<td><?php echo $category; ?> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>

<tr>
<td height="30"><b>Describe the Problem</b></td>
<td><?php echo $d_prob; ?> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30"><b>Describe Your Proposed</b></td>
<td><?php echo $d_solut; ?> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30"><b>Proposed Cost</b></td>
<td><?php echo $invet ?> &nbsp;<span id="pass" style="color:#FF0000"/></tr>

<td height="30"><b>Image</b></td>
<td><img src="../upload_idea/<?php echo $attach; ?>"  height="40" width="80" /></td> &nbsp;<span id="pass" style="color:#FF0000"/></tr>

<tr>
<td height="30"><b>Describe Your Product's</b></td></td><td>

<?php 
 $sql4="SELECT * FROM sub_product WHERE sub_id='$sub_id'";
$query4=mysql_query($sql4);
while($row4 = mysql_fetch_array( $query4 ))
{
echo $row4['desc_product'];

}

 ?>
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>
 
 

<tr>
<td height="30"><b>List Some Similar Products</b></td><td>
 <?php 
$sql5="SELECT * FROM sub_similar WHERE sub_id='$sub_id'";
$query5=mysql_query($sql5);
while($row5 = mysql_fetch_array( $query5 ))
{
echo $row5['desc_similar'];

}

?>&nbsp;<span id="cm" style="color:#FF0000"/> </tr>
<tr>
<td></td><td height="30" style="margin-left:0px"></td>
</tr></table>


</form></div>
	
		
				 
		
			
			
	
			
		</div>
		
	</section>
	</body></htm>