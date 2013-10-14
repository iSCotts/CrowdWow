<?php
include("include/connect.php");
 $id=$_GET['id'];
if(isset($_POST['submit']))
{

 $tag_b=$_POST['tags'];
 $update2="update tag_blog set tag='$tag_b' where id='$id'";


mysql_query($update2);
}

?>
<script>
window.location.href="success.php";
</script>
