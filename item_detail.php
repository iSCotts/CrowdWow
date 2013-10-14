<html>
<head>
<link type="text/css" rel="stylesheet" href="css/lightbox-form.css">
        <script src="js/lightbox-form.js" type="text/javascript"></script>
		<script src="js/lightbox-form1.js" type="text/javascript"></script>
<script src="js/lightbox-form.js" type="text/javascript"></script>
		<script src="js/lightbox-form2.js" type="text/javascript"></script>

</head>
<?php include("include/connect.php");

@$id=$_GET['sid'];
session_start();
 @$email=$_SESSION['email'];
$s="select * from user where u_email='$email'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$uid=$r['u_id'];
}
?>
<?php  
@$pid=$_GET['pid']; 
$query="select * from product where p_id='$pid'";
@$sql=mysql_query($query);
if(@$row=mysql_fetch_array($sql))
{
$p_name=$row['p_name'];
$p_type=$row['p_type'];
$p_title=$row['p_title'];
$p_cur_price=$row['p_cur_price'];
$p_pre_price=$row['p_pre_price'];
}
?>

<div class="product-details presale">
<?php if($p_type=='Presale')
{?>
<p style="color:#FF00FF"><img src="images/icon_pie50.png"/><?php echo $p_type; ?></p>
<?php
}
else if($p_type=='Shipping Now')
{?>
<p style="color:#FF00FF"><img src="images/icon_shipping_now.png"/><?php echo $p_type; ?></p>
<?php
}
else
{?>
<p style="color:#FF00FF"><img src="images/icon_production.png"/><?php echo $p_type; ?></p>
<?php
}
?>
<p class="tagline" style="font-size:20px;"><?php echo @$p_name; ?></p>
<a class="price" href="/products/89-Vesta-Hot-Pot-Bowl"><?php echo @$p_cur_price; ?></a>
<p class="msrp">
<?php echo @$p_pre_price; ?>
</p>

<div class="clear"></div>
			
<!--<p class="product-state">Presale</p>-->
<div class="commitments">
<?php if($p_type=='Presale') { 
$query1=mysql_query("select * from product where p_id='$pid'");
while($row1=mysql_fetch_array($query1))
{
 $comm=$row1['commitment']; 
$c_limit=$row1['commetment_limit'];
if($c_limit=='0')
{
 $c_limit1=1500;
}
else
{
$c_limit1=$c_limit;
}
}
?>
<p>Commitments:<?php echo $comm; ?>/<?php echo $c_limit1; ?> </p>
<?php 
}
@$sql2=mysql_query("select * from rating where p_id='$pid'");
@$nr2=mysql_num_rows($sql2);
?>
</span></p>
</div>
<?php if($email!="")
{
  $comm=$comm+1;
  $query2=mysql_query("update product set commitment='$comm' where p_id='$pid'");

?>
<form action="" class="new-cart-item" id="new-cart-item" method="post">
<input id="cart_item_product_id" name="cart_item[product_id]" type="hidden" value="89" />
<a href="add_to_cart.php?pid=<?php echo $_GET['pid'];  ?>&sid=<?php  echo $_GET['sid']; ?>"  ><img src="images/cartbutton.png" /></a>
</form>

<?php
 }
 else
 { 
?>
<form action="" class="new-cart-item" id="new-cart-item" method="post">
<input id="cart_item_product_id" name="cart_item[product_id]" type="hidden" value="89" />
<a href="#" onClick="openbox1('Login',1)"><img src="images/cartbutton.png" /></a>
</form>
<?php 
}
?>
<br />
<?php
if($_SESSION['email']=="")
{
?>
<a class="qshare button copy-share" style="background-color:#b9e5fb;color:#005288;padding:10px;font-weight:bold;font-size:14px;text-align:center; width:138px;" "#"  onClick="openbox1('Login', 1)"> 
					Spread the word and earn 10% on sales! 
</a>
<?php
}
else
{
?>
<a class="qshare button copy-share" style="background-color:#b9e5fb;color:#005288;padding:10px;font-weight:bold;font-size:14px;text-align:center; width:138px;" "#"  onClick="openbox2('Spread the word and get paid!', 1)"> 
					Spread the word and earn 10% on sales! 
</a>
<?php 
}
?>
<div id="filter2"></div>
<div id="box2">
  <span id="boxtitle2"></span>
		<?php include("mailpop.php"); ?> 
</div>
</div>
</html>