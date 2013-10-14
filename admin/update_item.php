<?php
include("include/connect.php");
$id=$_GET['id'];

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
	  
      
   ?>

<?php

$shopnam=$_POST['shopname'];
$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$bsort=$_POST['bsort'];
$ptitle=$_POST['ptitle'];
$pcp=$_POST['pcp'];
$ppp=$_POST['ppp'];
$ctm=$_POST['ctm'];
$image=$_FILES["file"]["name"];
if($image=='')
{
$imageshow="";
}
else
{
$imageshow="p_image='$image'".",";
}
 $update2="update product set s_id=$shopnam,".$imageshow." p_name='$pname',p_type='$ptype',sort='$bsort',p_title='$ptitle',p_cur_price='$pcp',p_pre_price='$ppp',commetment_limit='$ctm' where p_id='$id'";

mysql_query($update2);

}



?>
<script>
window.location.href="success.php";
</script>
