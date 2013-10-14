
<?php
include("include/connect.php");
session_start();
$userid=$_SESSION['u_id'];
$sql="SELECT shop.s_name, product.p_name, product.p_image, product.p_type, product.p_title, product.p_cur_price, product.p_pre_price, product.p_status, product.p_id, product.s_id, product.p_cur_price, rating.p_id
FROM shop
INNER JOIN product ON shop.s_id = product.s_id
INNER JOIN rating
WHERE rating.p_id =product.p_id and rating.u_id='$userid'";
$query=mysql_query($sql);
while ($r=mysql_fetch_array($query))
{
 $pname=$r['p_name'];
 $ptype=$r['p_type'];
 $price=$r['p_cur_price'];
}
?>
<div style="float:left;">
<table cellspacing="0" bordercolor="#cccccc" border="2" width="930">
<tr height="50">
<th>Product Name</th>
<th>Product Type</th>
<th>Price</th>
</tr>
<tr height="50">
<td><?php echo $pname; ?></td>
<td><?php echo $ptype; ?></td>
<td><?php echo $price; ?></td>
</tr>
</table>

</div>