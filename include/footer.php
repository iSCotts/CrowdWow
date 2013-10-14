<?php include("include/connect.php");

$query="select * from logo ";
@$sql=mysql_query($query);
if(@$row=mysql_fetch_array($sql))
{
 $go=$row['logo'];
$fev=$row['fevicon'];
}
?>
<html>
<body>
<div class="ftr_innr">
<div class="ftr_innr_top">
<div class="ftr_innr_top_lt">
<div class="ftr_innr_top_lt_lt"><a href="index.php" style="text-decoration:none;"><img src="admin/uploadimage/<?php echo @$go; ?>"  height="50" width="100" /></a></div>
<div class="ftr_innr_top_lt_rt">Questions? <span class="callus">Call us!</span> Mon-Fri 8am-9pm EST<br />
      <p class="ph">1-866-5</p></div>
	  </div>
<div class="ftr_innr_top_rt"><div class="ftr_innr_top_rt_lt">
<span class="ftrlnkcol1"><a href="shop.php">Shop</a></span>
<span class="ftrlnkcol1"><a href="contact_us.php">About Us</a></span>
<span class="ftrlnkcol1"><a href="learn.php">FAQ</a></span>
</div>
<div class="ftr_innr_top_rt_mid">
<span class="ftrlnkcol1"><a href="learn.php">Our Process</a></span>
<span class="ftrlnkcol1"><a href="blog.php">Blog</a></span>
<span class="ftrlnkcol1"><a href="contact_us.php">Contact Us</a></span>
</div>
<div class="ftr_innr_top_rt_rt">
<span class="ftrlnkcol1"><a href="community.php">Our Community</a></span>
<span class="ftrlnkcol1"><a href="terms.php">Terms & Conditions</a></span>
</div>
</div></div>
<div class="ftr_innr_btm">&copy; Copyright 2009 &ndash; 2011 Quirky Incorporated</div>
    </div>
</body></html>