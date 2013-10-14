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
 $link=$_POST['link'];
 

 $v="INSERT INTO `news` (`n_title`, `link`) VALUES ('$title','$link')";
 mysql_query($v);
?>
 <script type="text/javascript">
window.location.href="news.php?dm=msg";
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
	if(document.form1.title.value=="")
	{
		document.getElementById('ntitle').innerHTML='Please Enter news title';
		return false
	}
	else
	{
		document.getElementById('ntitle').innerHTML='';
	}
        if(document.form1.link.value=="")
	{
		document.getElementById('nlink').innerHTML='Please Enter news link';
		return false
	}
	else
	{
		document.getElementById('nlink').innerHTML='';
	}
}
</script>
</head>

<body>
<section id="main" class="column">
		<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully added a news"; }?>
	</h4>
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">ADD NEWS</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post" enctype="multipart/form-data" onsubmit="return vali();">
	
	<table style="padding-left:225px"> 
	

	

<tr>

<td height="30">Title</td>
<td><input type="text" name="title"  style="width:250px;" /> &nbsp;<span id="ntitle" style="color:#FF0000"/></td></tr>
<tr>
<td height="30">Link</td>
<td> <input type="text" name="link"  style="width:250px;" />&nbsp;<span id="nlink" style="color:#FF0000"/></td></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
