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
	   //$name=$_POST['name'];
	   //$p_id=$_POST['pname'];
	 /* $s="select * from comment where p_id='$p_id'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $cid=$r['c_id'];

}
*/
 $p_id=$_GET['id'];
//echo  $title=$_POST['title'];
 $link=$_POST['link'];
$image=$_FILES["file"]["name"];
 

 $v="INSERT INTO `highlight` (`p_id`, `h_image`, `h_desc`) VALUES ('$p_id','$image','$link')";
 mysql_query($v);
 ?>
 <script type="text/javascript">
window.location.href="highlight.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
   <?php   }
   /*?>}
	

	
	
  }
else
  {
  echo "Invalid file";
  }
  }
  <?php */
  else
  {
  $id=$_GET['id'];

if(isset($_POST['update']))
{
if ($_FILES["file"]["size"] < 2000000000)
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
?>
<?php
$hid=$_GET['hid'];
$title=$_POST['title'];
$link=$_POST['link'];
$image=$_FILES["file"]["name"];
if($image=='')
{
$imageshow="";
}
else
{
$imageshow="h_image='$image'".",";
}
 $update2="update highlight set ".$imageshow." h_desc='$link' where h_id='$hid'";
mysql_query($update2);

}
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
        if(document.form1.link.value=="")
	{
		document.getElementById('plink').innerHTML='Please Enter highlight features';
		return false
	}
	else
	{
		document.getElementById('plink').innerHTML='';
	}
}
</script>
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added a highlight"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add Highlights</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-right:325px; margin-top:20px;"> 
	

	

<tr>
<td height="30">Features:</td>
<?php
$h_id=$_GET['hid'];
if(isset($_GET['id'])&& ($_GET['hid']))
{
?>
<td> <textarea class="ckeditor" cols="80" id="editor1" name="link" rows="10"><?php $s="select * from highlight where h_id='$h_id'"; $q=mysql_query($s); $r=mysql_fetch_array($q); echo $r['h_desc']; ?></textarea>&nbsp;<span id="plink" style="color:#FF0000"/></td></tr>
<?php 
}
else
{
?>
<tr>
<td> <textarea class="ckeditor" cols="80" id="editor1" name="link" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. </textarea>&nbsp;<span id="plink" style="color:#FF0000"/></td></tr>
<?php
}
?>
<tr>
<td height="30">Image:</td>
<?php
if(isset($_GET['id']) && ($_GET['hid']))
{
?>
<td><input type="file"  name="file"><img src="uploadimage/<?php $s1="select * from highlight where h_id='$h_id'"; $q1=mysql_query($s1); $r1=mysql_fetch_array($q1);  echo $r1['h_image'];  ?>" width="50" height="50"/> &nbsp;<span id="ptitle1" style="color:#FF0000"/></td></tr>
<?php
}
else
{
?><tr>
<td><input type="file"  name="file"> &nbsp;<span id="ptitle1" style="color:#FF0000"/></td></tr>
<?php
}
?>
<tr>
<td></td><?php
if(isset($_GET['id']) && ($_GET['hid']))
{
?>
<td height="30" style="margin-left:0px"><input type="submit" name="update"  value="update"><a href="highlight.php?id=<?php echo $_GET['id']; ?>"><input type="submit" name="back"  value="Back"></a></td>
<?php
}
else
{
?>
<td height="30" style="margin-left:30px"><input type="submit" name="submit"  value="submit"></td>
<?php
}
?>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
<div style="margin-top:50PX;">		
<?php include("managehighlight.php"); ?>		
	</div>	
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
