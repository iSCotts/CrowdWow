<?php
include("include/connect.php");
 $id=$_GET['id'];
if(isset($_POST['submit']))
{

 $r=$_POST['research'];
 $d=$_POST['design'];
 $b=$_POST['branding'];
 $p=$_POST['point'];
 $p1=$_POST['apoints'];
 $update2="update project_point set points='$p',r_percent='$r',d_percent='$d',b_percent='$b' where pp_id='$id'";


mysql_query($update2);
}

?>
<script>
window.location.href="success.php";
</script>
