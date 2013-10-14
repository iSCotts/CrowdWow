<?php
include("include/connect.php");
echo $aid=$_GET['aid'];

if(isset($_POST['submit']))
{

$pname=$_POST['pname'];
$name=$_POST['name'];
$ptype=$_POST['ptype'];
$ptitle=$_POST['ptitle'];
$detail=$_POST['detail'];

 $update2="update article set name='$name',title='$ptitle',detail='$detail' where artid='$aid'";

mysql_query($update2);

}

?>
<script>
window.location.href="editblog.php?ms=msg";
</script>
