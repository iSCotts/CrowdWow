<?php
include("include/connect.php");
 $id=$_GET['id'];

if(isset($_POST['submit']))
{

$title=$_POST['ntitle'];
$link=$_POST['nlink'];

$update2="update news set n_title='$title',link='$link' where n_id='$id'";
mysql_query($update2);

}

?>
<script>
window.location.href="success.php";
</script>
