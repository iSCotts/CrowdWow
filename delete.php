<?php 
include("include/connect.php"); 
session_start();
?>
<?php


session_start();
	
$pid =@$_GET['pid'];
$email=@$_SESSION['email'];
 
$sql="select add_to_cart from user where u_email='$email'";	
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$add_to_cart=$row['add_to_cart'];
$b=explode(",",$add_to_cart);
$c=count($b);

?>

<?php
$x='';
for($i=0;$i<$c;$i++)

{
if($b[$i]!=$pid)
{
$x=$x.','.$b[$i];
}
}
 
@$y=substr($x,1);

$s="update user set add_to_cart='$y' where u_email='$email'";	
$q=mysql_query($s);
//$r=mysql_fetch_array($q);
?>
<script type="text/javascript">
window.location.href="show_cart.php";
</script>
