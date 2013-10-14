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

if (isset($_POST['submit'])) 
{
 $detail=$_POST['detail'];
 $title=$_POST['title'];
 $v="INSERT INTO `t_and_c` (`tc_title`,`terms`) VALUES ('$title','$detail')";
 mysql_query($v);

?>
 <script type="text/javascript">
window.location.href="terms.php?dm=msg";
</script>
 <?php
 }
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

	if (document.form1.shopname.selectedIndex == 0) {
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
</head>

<body>
<section id="main" class="column">
		<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added terms and conditions"; }?>
	</h4>
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add T & C</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	
<tr>
<td height="30" width="50">Title</td>
<td><input type="text" name="title">&nbsp;<span id="email" style="color:#FF0000"/></td></tr>

<tr>
<td height="30" width="50">T & C</td>
<td><textarea class="ckeditor" cols="80" id="editor1" name="detail" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. </textarea>&nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
