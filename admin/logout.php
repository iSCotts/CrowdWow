<?php
@session_start();
if($_SESSION['admin']!='')
{
$admin=$_SESSION['admin'];
$_SESSION=array();
session_unset();
session_destroy();
?>
<script>
window.location.href="index.php";
</script>
<?php
}
else
{
?>
<script>
window.location.href="index.php";
</script>
<?php
}
?>
 
 