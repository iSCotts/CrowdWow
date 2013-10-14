<?php 
include("include/connect.php"); 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	 <?php

include("include/connect.php");
echo $uid=@$_GET['uid'];
	
echo  $pid =@$_GET['pid'];
  $email=@$_SESSION['email'];
 
 
$sql1="select  add_to_cart from user where u_email='$email'";	
$query1=mysql_query($sql1);
$row1=mysql_fetch_array($query1);
 @$add_to_cart=$row1['add_to_cart'];
 $b=explode(",",$add_to_cart);
$c=count($b);

 /*echo "<table border='1'>
<tr>
<th>Product_ID</th>

</tr>";
  echo "<tr>";
  echo "<td>" . $row1['add_to_cart'] . "</td>";
  echo "</tr>";
  echo "</table>";
*/
?>


 <div align="right">
<table width="500" height="78" border="2"align="center" bordercolor="#3333FF" style="border:groove">
<tr>

<td width="100"><font size="+2"><b>ProductName</b></font></td>
<td width="100"><font size="+2"><b>Quantity</b></font></td>
<td width="100"><font size="+2"><b>Price</b></font></td>
<td width="100"><font size="+2"><b>Edit</b></font></td>
</tr>
<?php
for($i=0;$i<$c;$i++)
{
$k=0;
for($m=0;$m<$i;$m++)
{
if($b[$i]==$b[$m])
{
$k=1;
}
}
if($k!=1)
{
?>

<?php 
  $p_id=$b[$i]; ?>  
<?php 
$sel="select * from product where p_id='$p_id'";
$quer=mysql_query($sel);
$row=mysql_fetch_array($quer);
@$p_image=$row['p_image'];
?>
<?php 

 //if($b[$i]!=@$b[$i+2])
//{

?>
<tr>
<td width="100">

<font size="+1"> <img src="admin/uploadimage/<?php echo $p_image; ?>" height="100" width="100"  />
<?php 
  @$p_name=$row['p_name'];

  ?>
<?php echo $p_name; ?>   </font></td>



<?php
//@$quantity=$row[''];
?>
<td width="100">

<font size="+1">
<?php
$n=0;
for($j=0;$j<$c;$j++)
{
if($b[$i]==$b[$j])
{
$n=$n+1;
//exit;
}
}
 echo $n;
 ?></font></td>



<?php
@$p_cur_price=$row['p_cur_price'];
@$price=$p_cur_price*$n;
?>
<td width="100">

<font size="+1">
<?php echo "$";
 echo  $price;
 ?></font></td>
 
 <td width="100"><font size="+1">
<a href="delete.php?pid=<?php  echo $row['p_id']; ?>"><input type="button" value="delete" class="btnstyle"/></a>
</font></td>
 
</tr>
<?php }
?>
<?php
} 
?>  
</table>
<a href="edit_cart.php" ><input type="button" name="button" class="btnstyle"  value="Edit Cart"/></a>&nbsp;&nbsp;&nbsp;<a href="proceed_to_checkout.php"><input type="button" name="button" class="btnstyle"  value="Proceed To Checkout"/></a>
 </div></div></div></div>

<div class="post-content x8">
</div>
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div>
<div class="ftr" style="margin-top:100px;">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
