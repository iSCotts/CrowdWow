<?php
include("include/connect.php");
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

</head>



<table width="100px"><tr><td>
<div style="width:227px">
<div class="product-stats box bordered">
<h4>The Quirky Product States</h4>

<h5 class="presale">Presale</h5>
<p style="font-size:13px;color:#666666">We’re still collecting pre-order commitments on this product. Once we hit this product’s presale threshold, we’ll move it into production. By getting in early, you’ll get a price break AND earn influence. Plus, we won’t charge your credit until the product is real and ready to ship.
<a href="learn.php">More on committing...</a></p>
<h5 class="production">In Production</h5>
<p style="font-size:13px;color:#666666">We’ve sold enough units to move this product into production. We’re currently going through manufacturing and posting updates regularly. Once the product is real and ready to ship, we’ll shoot you an e-mail to confirm your order. Just like with Presale, your credit card won’t be charged until that time. <a href="learn.php">More on manufacturing...</a></p>
<h5 class="shipping">Shipping Now</h5>
<p style="font-size:13px;color:#666666">This is a real live product, and it’s ready to ship. Once you complete your order, we’ll usually be ready to ship it within 24 hours. <a href="learn.php"><font size="3px">More on shipping...</font></a></p>
</div>
<?php include("shipping_faq.php"); ?>
</div>
</td></td></table>

</html>
