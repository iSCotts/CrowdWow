<?php 
include("include/connect.php"); 
@session_start();
$uid=@$_GET['uid'];
$u_id=$_SESSION['u_id'];
$pid =@$_GET['pid'];
$email=@$_SESSION['email'];
?>
<?php
if(isset($_POST['submit']))
{
$u=$_GET['unit'];
$pid=$_GET['p_id'];
$date=date("M");
$sql1="select  add_to_cart from user where u_email='$email'";	
$query1=mysql_query($sql1);
$row11=mysql_fetch_array($query1);
@$add_to_cart=$row11['add_to_cart'];
$b=explode(",",$add_to_cart);
$c=count($b);
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
 $p_id=$b[$i];   
$sel="select * from product where p_id='$p_id'";
$quer=mysql_query($sel);
$row=mysql_fetch_array($quer);
$n=0;
for($j=0;$j<$c;$j++)
{
if($b[$i]==$b[$j])
{
$n=$n+1;
}
}
$query12=mysql_query("insert into checkout (u_id,p_id,unit,ck_date) values ('$u_id','$p_id','$n','$date')");
?>
<script type="text/javascript">
window.location.href="proceed_to_checkout.php";
</script>
<?php 
}
}



$q=mysql_query($s);
}?>
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
  <div class="bod_rt" style="margin-bottom:130px;">
    
	
		 <?php

include("include/connect.php");
$sql1="select  add_to_cart from user where u_email='$email'";	
$query1=mysql_query($sql1);
$row1=mysql_fetch_array($query1);
 @$add_to_cart=$row1['add_to_cart'];
 $b=explode(",",$add_to_cart);
$c=count($b);
if($add_to_cart=="")
{
?>
<font style="float:right; padding-right:270px; font-size:18px; margin-bottom:128px; margin-top:10px;" >
<?php 
echo "No cart items present";?></font>
<?php 
}
else
{
?>
<div align="right">
<table width="500" height="78" border="2"align="center" bordercolor="#3333FF" style="border:groove">
<tr>
<td width="100"><font size="+2"><b>ProductName</b></font></td>
<td width="100"><font size="+2"><b>Quantity</b></font></td>
<td width="100"><font size="+2"><b>Price</b></font></td>
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
$p_id=$b[$i];   
$sel="select * from product where p_id='$p_id'";
$quer=mysql_query($sel);
$row=mysql_fetch_array($quer);
@$p_image=$row['p_image'];
?>
<tr>
<td width="100">

<font size="+1"> <img src="admin/uploadimage/<?php echo $p_image; ?>" height="100" width="100"  />
<?php 
  @$p_name=$row['p_name'];

  ?>
<?php echo $p_name; ?>   </font></td>

<td width="100">

<font size="+1">
<?php
$n=0;
for($j=0;$j<$c;$j++)
{
if($b[$i]==$b[$j])
{
$n=$n+1;
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
</tr>
<?php }
?>
<?php
} 
?>  
</table><form name="form1" method="post" action="show_cart.php">
<a href="edit_cart.php" ><input type="button" name="button" class="btnstyle"  value="Edit Cart"/></a>&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" class="btnstyle"  value="Proceed To Checkout"/>
<?php } ?></form> </div></div></div></div>

<div class="post-content x8">
</div>
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
