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

    if (file_exists("../upload_idea/" . $_FILES["file"]["name"]))
      {
      $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload_idea/" . $_FILES["file"]["name"]);
       "Stored in: " . "../upload_idea/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	  
      
   ?>

<?php

$caterory=$_POST['category'];
$idea=$_POST['idea'];

$invest=$_POST['invest'];
$vote_idea=$_POST['vote_idea'];
$solution=$_POST['solution'];
$problem=$_POST['problem'];
$image=$_FILES["file"]["name"];
if($image=='')
{
$imageshow="";
}
else
{
 $imageshow="attach_files='$image'".",";

}

 $update12="update submit_idia set desc_idea='$idea',desc_problem='$problem',desc_solution='$solution',".$imageshow." invest='$invest',vote_idea='$vote_idea' where sub_id='$id'";

mysql_query($update12);
 

}



?>
<script>
window.location.href="success.php";
</script>
