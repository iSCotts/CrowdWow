<?php
include("include/connect.php");
 $id=$_GET['id'];
if(isset($_POST['submit']))
{

 $ptitle=$_POST['title'];
 $pcp=$_POST['detail'];

$update2="update project set pro_title='$ptitle',pro_detail='$pcp' where pro_id='$id'";
mysql_query($update2);

}

?>
<script>
window.location.href="success.php";
</script>
