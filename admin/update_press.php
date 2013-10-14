<?php
include("include/connect.php");
echo $id=$_GET['id'];

if(isset($_POST['submit']))
{

$title=$_POST['title'];
$link=$_POST['link'];

$update2="update press set p_title='$title',p_link='$link' where pr_id='$id'";
mysql_query($update2);

}

?>
<script>
window.location.href="success.php";
</script>
