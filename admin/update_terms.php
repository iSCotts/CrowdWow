<?php
include("include/connect.php");
echo $aid=$_GET['aid'];

if(isset($_POST['submit']))
{


$ptitle=$_POST['title'];
$detail=$_POST['detail'];

 $update2="update t_and_c set tc_title='$ptitle',terms='$detail' where tc_id='$aid'";

mysql_query($update2);

}

?>
<script>
window.location.href="editterms.php?ms=msg";
</script>
