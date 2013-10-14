<?php
include("include/connect.php");
echo $aid=$_GET['aid'];

if(isset($_POST['submit']))
{


$ptitle=$_POST['title'];
$detail=$_POST['detail'];

 $update2="update about_us set au_title='$ptitle',about='$detail' where au_id='$aid'";

mysql_query($update2);

}

?>
<script>
window.location.href="editaboutus.php?ms=msg";
</script>
