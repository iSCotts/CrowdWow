<?php 
include("include/connect.php");
include("include/header.php");

 
 
?>
<?php
if(isset($_POST['submit']))

{
if (@$_FILES["file"]["size"] < 20000000)
  {
  if ($_FILES["file"]["error"]>0)
    {
     "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
     "Upload: " . $_FILES["file"]["name"] . "<br />";
     "Type: " . $_FILES["file"]["type"] . "<br />";
     "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
     "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
       $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" .$_FILES["file"]["name"]);
       "Stored in: " . "upload/".$_FILES["file"]["name"];
     
   
 
$sql="update logo set logo='".$_FILES["file"]["name"]."'";
 $query2=mysql_query($sql);
 
 ?>
  <script type="text/javascript">
window.location.href="logo.php?dm=msg";
</script>
<?php
}
 }
  }
else
  {
  echo "Invalid file";
  }
  }
?> 




	<?php include("include/leftsidebar.php"); ?>
<html>	
<head>


<script type="text/javascript" src="js/dhtmlwindow.js"></script>


<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section id="main" class="column">
		<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully logo change"; }?>
	</h4>
	
	
	
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Logo Setting</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
</div>
				 
		
		<form>
		<table>
		<tr>
		<td>
		<select name="Shopname">
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
	</select>
		
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
	
