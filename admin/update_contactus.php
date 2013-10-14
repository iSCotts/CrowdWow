<?php
include("include/connect.php");
echo $aid=$_GET['aid'];

if(isset($_POST['submit']))
{


$ptitle=$_POST['title'];
$detail=$_POST['detail'];

 $update2="update contact_us set cu_title='$ptitle',contact='$detail' where cu_id='$aid'";

mysql_query($update2);

}

?>
<script>
window.location.href="editcontactus.php?ms=msg";
</script>
