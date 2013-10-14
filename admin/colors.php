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



 $p_id=$_GET['id'];
 $name=$_POST['name'];
 $image=$_FILES["file"]["name"];
 
 $v="INSERT INTO `colors` (`p_id`,`cl_name`,`color`) VALUES ('$p_id','$name','$image')";
 mysql_query($v);
 ?>
 <script type="text/javascript">
window.location.href="colors.php?dm=msg";
window.location.href="<?php echo $_SERVER['HTTP_REFERER']; ?>";
</script>
<?php } ?>

<head>
<script type="text/javascript">
function vali()
{
	
     if(document.form1.days.value=="")
	{
		document.getElementById('ptitle').innerHTML='Please Enter the color';
		return false
	}
	else
	{
		document.getElementById('ptitle').innerHTML='';
	}
	if(document.form1.days2.value=="")
	{
		document.getElementById('ptitle2').innerHTML='Please Enter the second design';
		return false
	}
	else
	{
		document.getElementById('ptitle2').innerHTML='';
	}
	if(document.form1.days3.value=="")
	{
		document.getElementById('ptitle3').innerHTML='Please Enter the third design';
		return false
	}
	else
	{
		document.getElementById('ptitle3').innerHTML='';
	}
	if(document.form1.days4.value=="")
	{
		document.getElementById('ptitle4').innerHTML='Please Enter the fourth design';
		return false
	}
	else
	{
		document.getElementById('ptitle4').innerHTML='';
	}

}
</script>
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added a color"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add Colors</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

<tr>

<td height="30">Name:</td>
<td><input type="text" name="name" id="name"  style="width:140px;" /> </td></tr>	

<tr>

<td height="30">Design:</td>
<td><input type="file" name="file" id="file"  style="width:180px;" /> </td></tr>

<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
<div style="margin-top:50PX;">		
<?php include("manage_colors.php"); ?>
	
</div>	
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
