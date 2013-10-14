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
/* if ((($_FILES["file"]["type"] == "image/gif")
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
  }*/
	   $name=$_POST['name'];
	   $p_id=$_POST['pname'];
	  $s="select * from comment where p_id='$p_id'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $cid=$r['c_id'];

}
	  
 $title=$_POST['title'];
 $detail=$_POST['detail'];
 $a=date("Y/m/d");

 $v="INSERT INTO `article` (`name`, `title`, `detail`,`c_id`, `date_posted`, `p_id`) VALUES ('$name','$title','$detail','$cid','$a','$p_id')";
 mysql_query($v);
?>
 <script type="text/javascript">
window.location.href="blog.php?dm=msg";
</script>
<?php      }
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
	
	<?php echo "successfully added a blog"; }?>
	</h4>
	           
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Manage Blog</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

	<tr><td>Product Name</td>
	<td>
	<select name="pname">
		<option value="">Select</option>
		<?php
		$sql="select * from product";
		$result=mysql_query($sql);
		while($row=mysql_fetch_array($result))
		{
		?>
		<option value="<?php echo $row['p_id'];?>"><?php echo $row['p_name']; ?></option>
		<?php
		}?>
	</select> &nbsp;<span id="shop" style="color:#FF0000"/>
	</td></tr>
	<tr>
<td height="30"> Name</td>
<td><input type="text" name="name" style="width:345px;" /> &nbsp;<span id="namef" style="color:#FF0000"/></td></tr>

<tr>

<td height="30">Title</td>
<td><input type="text" name="title"  style="width:345px;" /> &nbsp;<span id="namel" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Details</td>
<td><textarea rows="10" cols="41" name="detail" > </textarea>&nbsp;<span id="email" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
