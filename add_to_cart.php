<?php
session_start();
include("include/connect.php");
echo $uid=@$_GET['uid'];
	
 $pid =@$_GET['pid'];
 $email=@$_SESSION['email'];

/*echo '$uid';*/

 $quer= "select add_to_cart from user where u_email='$email'";	
$sql=mysql_query($quer);
while($row=mysql_fetch_array($sql))
{
$add_to_cart=$row['add_to_cart'];

}
if($add_to_cart=="")
{ 
 $ins="update user set add_to_cart='".$pid."' where u_email='".$_SESSION['email']."'";
$query=mysql_query($ins);
}
else
{
 $ins="update user set add_to_cart='".$add_to_cart.",".$pid."' where u_email='".$_SESSION['email']."'";
$query=mysql_query($ins);
}


if($query) 
{
//echo "1 product added";

}
?>
<script>
window.location.href="item.php?pid=<?php echo $_GET['pid']; ?>&sid=<?php echo $_GET['sid']; ?>";
</script>
