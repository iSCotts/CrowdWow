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
 $title=$_POST['title'];
 $link=$_POST['link'];
 

 $v="INSERT INTO `press` (`p_id`, `p_title`, `p_link`) VALUES ('$p_id','$title','$link')";
 mysql_query($v);
 ?>
 <script type="text/javascript">
window.location.href="press.php?dm=msg";
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
  <?php */?>

  
  

	 

<head>
<script type="text/javascript">
function vali()
{
	if(document.form1.title.value=="")
	{
		document.getElementById('ptitle').innerHTML='Please Enter press title';
		return false
	}
	else
	{
		document.getElementById('ptitle').innerHTML='';
	}
        if(document.form1.link.value=="")
	{
		document.getElementById('plink').innerHTML='Please Enter press link';
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
	
	<?php echo "successfully added a press news"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Manage Press</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onSubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

	

<tr>

<td height="30">Title</td>
<td><input type="text" name="title"  style="width:340px;" /> &nbsp;<span id="ptitle" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Link</td>
<td> <input type="text" name="link"  style="width:340px;" />&nbsp;<span id="plink" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="30" style="margin-left:0px"><input type="submit" name="submit"  value="submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
<div style="margin-top:50PX;">		
<?php include("managepress.php"); ?>		
	</div>	
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
