<?php
include("include/connect.php");
echo $id=$_GET['id'];

if(isset($_POST['submit']))
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
$update2="update highlight set ".$imageshow." h_desc='$link' where h_id='$id'";
mysql_query($update2);

}

?>
<script>
window.location.href="success.php";
</script>
