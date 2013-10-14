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
 if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
   "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
     "Upload: " . $_FILES["file"]["name"] . "<br />";
    "Type: " . $_FILES["file"]["type"] . "<br />";
    "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
     "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("uploadimage/" . $_FILES["file"]["name"]))
      {
      $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploadimage/" . $_FILES["file"]["name"]);
       "Stored in: " . "uploadimage/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	  $shopid=$_POST['shopname'];
	  $pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$bsort=$_POST['bsort'];
$ptitle=$_POST['ptitle'];
$pcp=$_POST['pcp'];
$ppp=$_POST['ppp'];
$ctm=$_POST['ctm'];
$image=$_FILES["file"]["name"];
 $v="insert into product (s_id,p_name,p_image,p_type,sort,p_title,p_cur_price,p_pre_price,commetment_limit,p_status) values ('$shopid','$pname','$image','$ptype','$bsort','$ptitle','$pcp','$ppp','$ctm','1')";
 mysql_query($v);

$sql1=mysql_query("select p_id from product where p_name='$pname'");
 while($row1=mysql_fetch_array($sql1))
 { $pid=$row1['p_id']; }
 $url="item.php?sid=$shopid&pid=$pid";
$qq= "update product set url='$url' where p_name='$pname'";
 $sql2=mysql_query($qq);
      }
   /*?>}
	

	
	
  }
else
  {
  echo "Invalid file";
  }
  }
  <?php */?>

  
  

	 

<head>
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
if(document.form1.bsort.value=="")
{
document.getElementById('bsort').innerHTML='Please enter sort by';
return false;
}
else {
document.getElementById('bsort').innerHTML='';

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
document.getElementById('cm').innerHTML='Please enter commentment limit ';
return false;
}
else {
document.getElementById('cm').innerHTML='';

}

}
</script>
</head>

<body>
<section id="main" class="column">
		
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add New User</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="addshopiteam.php" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	<tr><td>Shop Name</td>
	<td>
	<select name="shopname">
		<option value="">Select</option>
		<?php
		$sql="select * from shop";
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{
		?>
		<option value="<?php echo $row['s_id'];?>"><?php echo $row['s_name']; ?></option>
		<?php
		}?>
	</select> &nbsp;<span id="shop" style="color:#FF0000"/>
	</td></tr>
<tr>
<td height="30">Product Name</td>
<td><input type="text" size="28" name="pname"  /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>
<tr>
<tr>
<td height="30" width="40px">Image</td><td><input type="file" size="28" name="file" id="file"  />
</td></tr><tr>
<td height="30">Product Type</td>
<td>
	<select name="ptype">
		<option value="">Select</option>
		<option value="Presale">Presale</option>
		<option value="Shipping Now">Shipping Now</option>
		<option value="In Production">In Production</option>

	</select> &nbsp;<span id="namel" style="color:#FF0000"/>
</td></tr>
<tr>
<td height="30">Sort by</td>
<td>
	<select name="bsort">
		<option value="">Select</option>
		<option value="Featured">Featured</option>
		<option value="Newest">Newest</option>
		<option value="Most Popular">Most Popular</option>

	</select>
&nbsp;<span id="bsort" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Product Title</td>
<td><input type="text" size="28" name="ptitle"  /> &nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Product current price</td>
<td><input type="text" size="28" name="pcp"  /> &nbsp;<span id="pass" style="color:#FF0000"/></tr>
<tr>
<td height="" width="150px">Product privous price</td><td><input type="text" size="28" name="ppp"  />
 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>
<tr>
<td height="30">Commitment Limit</td>
<td><input type="text" size="28" name="ctm"  /> &nbsp;<span id="cm" style="color:#FF0000"/></tr>
<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
