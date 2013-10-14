<?php
include("include/connect.php");
session_start();
$email=$_SESSION['email'];
$sql="select * from user where u_email='$email'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$id=$row['u_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>

</head>

<body>



<div class="bod">
  <div>

<div class='tier x12'>
<div class='column x12 last'>
		
<div class='box bordered squared no-padding account-box shipping-info clearfix clear'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'>Your Saved Shipping Addresses</a></h3>
</div>
<div class='bd clearfix'>
<div class='x6 left'>
<div id='addresses' class='address-block' style="padding-top:5px;">
<h4 style="text-align:center;color:#c7c8ca;padding-top:20px;font-size:16px;">
<?php 
$s="select * from product_payment where u_id='$id'";
$q=mysql_query($s);
$r=mysql_fetch_array($q);

?>
<table>
<tr>
<td><label><b><font color="#003333">First Address</font></b></label></td>
<td><?php echo $r['address_a']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Second Address</font></b></label></td>
<td><?php echo $r['address_b']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">City</font></b></label></td>
<td><?php echo $r['city']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">State</font></b></label></td>
<td><?php echo $r['state']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Country</font></b></label></td>
<td><?php echo $r['country']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Zip Code</font></b></label></td>
<td><?php echo $r['zip_code']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Phone No.</font></b></label></td>
<td><?php echo $r['phone_no']; ?></td>
</tr>

</table>
</h4>

</div>

</div>
<div class='x6 right' style="padding-bottom:20px;">
<div class='address-block'>
							
<div id='new-address' style='display:none;'>
<div class="box" style="padding:10px;margin:5px;border:1px solid #eee;">

							

							
</div>
</div>
							
<div id='existing-address'></div>
</div>
</div>
</div>
</div>
		
<div class='box bordered squared no-padding account-box shipping-info clearfix clear'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'>Your Saved Billing Information</a></h3>

</div>
<div class='bd clearfix'>
<div class='x6 left'>
<div class='cell empty last'>
<p><?php 
$s="select * from product_payment where u_id='$id'";
$q=mysql_query($s);
$r=mysql_fetch_array($q);

?>
<table>
<tr>
<td><label><b><font color="#003333">Coupon Code</font></b></label></td>
<td><?php echo $r['coupon_code']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Card Type</font></b></label></td>
<td><?php echo $r['credit_card']; ?></td>
</tr>
<tr>
<td><label><b><font color="#003333">Card No.</font></b></label></td>
<td><?php echo $r['card_number']; ?></td>
</tr>

</table>
</p>
</div>
</div>
<div class='x6 right'>
</div>
</div>
</div>
		
		
</div>
</div>
</div>
      


</div>
