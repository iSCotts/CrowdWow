<?php
include('include/connect.php'); 
session_start();
if(isset($_GET['act'])=="logoutsusscessfully")
{
session_destroy();
}

 @$query2="SELECT * FROM shop ";
 @$result = mysql_query($query2);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
<?php /*?><div class="hdr_btm_btm"><div class="hdr_btm_btm_lt"><a href="#">Quirky.com</a> &raquo; <a href="shop.php">Shop</a></div>
<div class="hdr_btm_btm_md">
<?php
  while(@$row=mysql_fetch_array($result))
{ ?>
<a href="#"><?php echo $sname=$row['s_name']; ?></a> 
<?php }?>
<br />
</div>
<div class="hdr_btm_btm_rt"><form action="" method="get"><input name="" type="text" class="tctara" value="Search" /><input name="" type="" class="btn" /></form></div>
</div><?php */?>
</div>
</div><div class="bod"><div class="bod_lt"><div class="bod_lt_rw1">
<?php include("template/category_menu.php"); ?>
</div><div class="bod_lt_rw2"><div class="bod_lt_rw2_mid"><p class="hddngg">Help us choose the next <br />
  great product
</p>
<p class="cntntnt">Help us choose the next great  product</p>
<div class="bod_lt_rw2_mid_btm"><a href="influnce.php">Vote Now</a></div>
</div>
</div><div class="bod_lt_rw3">
<?php include("template/connect_us.php"); ?>
  </div>
  <div class="bod_lt_rw4"><div class="bod_lt_rw4_top">Our Story</div>
  <div class="bod_lt_rw4_mid"><?php include("video.php"); ?></div><div class="bod_lt_rw4_btm"></div>
  </div></div> 
  <div class="bod_rt"><div class="bod_rt_top"><div class="bod_rt_top_top">Our products come from people just like you. <span class="bl">Come influence us!</span></div>
  <div class="bod_rt_top_btm">
  <div class="bod_rt_top_btm_lt"><?php include("index_slide.php"); ?></div>
  <div class="bod_rt_top_btm_rt">
    Featured Product:
    <div class="bod_rt_top_btm_rt_prod">
    <span class="prod"><p style="padding:5px 0">Product 0120</p>

    </span>
    <p style="padding:0 0 5px 0"><span class="hdng">COLLAPSIBLE WINE RACK!</span>
    </p>
    <p>This rack contracts and expands as your wine inventory fluctuates - using valuable counter space only when needed!<br />
 <div class="bod_rt_top_btm_rt_prod_lt"><span class="infl"><a href="influnce.php">Influence Us</a></span></div>
  <div class="bod_rt_top_btm_rt_prod_rt"><img src="images/prod_pic.jpg" width="58" height="61" border="0" /></div>  
  <div class="bod_rt_top_btm_rt"><span class="seeall"><a href="shop.php">See all Products Â»</a></span><br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>     
 
    </p>
  </div></div>
  </div></div>
<div class="bod_rt_btm"><div class="bod_rt_btm_lt"><div class="bod_rt_btm_lt_top">
<div class="bod_rt_btm_lt_top_top">
<?php include("template/our_community.php"); ?>
</div>
<div class="bod_rt_btm_lt_top_btm"></div>
</div>
<div class="bod_rt_btm_lt_mid">
<?php include("template/learn_more.php"); ?>
</div>
<div class="bod_rt_btm_lt_btm"><span class="heddng">Lorem Ipsum</span><br />
  <p><span class="contnnt">In case you are unfamiliar with dummy text, it is a collection of words which do not necessar
    ily mean anything but they seem to be valid text. Dummy text is more technically known as    &ldquo;Lorem Ipsum&ldquo; and has many online generators; you can now see where &ldquo;Lipsum&rdquo; gets
    its name from.<br />
    <br />
    Dummy text is used to fill out the text areas in website prototypes so that developers can
      show them to their clients. It helps visualize the absolute final result of the site. With Lipsum,
      you can specify the number of paragraphs, words, bytes, or lists you require in the dummy
      text.<br />
      <br />
      You do this all on the site&rsquo;s homepage, click on the &ldquo;Generate Lorem Ipsum&rdquo; button and
      achieve your dummy text which you can copy and use for free. Your entered specifications
      are listed at the end of the text.</span></p>
  <p><span class="contnnt">In case you are unfamiliar with dummy text, it is a collection of words which do not necessar
    ily mean anything but they seem to be valid text. Dummy text is more technically known as    &ldquo;Lorem Ipsum&ldquo; and has many online generators; you can now see where &ldquo;Lipsum&rdquo; gets
    its name from.<br />
    <br />
Dummy text is used to fill out the text areas in website prototypes so that developers can
      show them to their clients. It helps visualize the absolute final result of the site. With Lipsum,
      you can specify the number of paragraphs, words, bytes, or lists you require in the dummy
      text.<br />
      <br />
You do this all on the site&rsquo;s homepage, click on the &ldquo;Generate Lorem Ipsum&rdquo; button and
      achieve your dummy text which you can copy and use for free. Your entered specifications
      are listed at the end of the text.</span></p>
</div></div><div class="bod_rt_btm_rt"><div class="bod_rt_btm_rt_rw1"><div class="bod_rt_btm_rt_rw1_top"></div><div class="bod_rt_btm_rt_rw1_mid"><div class="bod_rt_btm_rt_rw1_mid_top"><div class="bod_rt_btm_rt_rw1_mid_top_lt"><span class="sbmt">Submit</span> your
genius idea
<span class="qrky"></span></div>
    <div class="bod_rt_btm_rt_rw1_mid_top_rt"><img src="images/bulb.jpg" width="74" height="104" /></div>
    </div><div class="bod_rt_btm_rt_rw1_mid_mid">Have a great idea bouncing <br />
      around in your head? Send it<br />
      our way!</div>
	  <div class="bod_rt_btm_rt_rw1_mid_mid1"><a href="idea_stage1.php">Submit Your Idea</a></div>
    <div class="bod_rt_btm_rt_rw1_mid_btm"></div></div><div class="bod_rt_btm_rt_rw1_btm"></div></div><div class="bod_rt_btm_rt_rw2"><div class="bod_rt_btm_rt_rw2_top">RETAIL PARTNERS</div>
    <div class="bod_rt_btm_rt_rw2_mid"><img src="images/bedbathbeyond.jpg" width="198" height="87" style="padding:6px 0 0 12px" /><img src="images/hsn.jpg" style="padding:6px 0 0 12px;" /></div>
    <div class="bod_rt_btm_rt_rw2_btm"></div>
    </div>
    <div class="bod_rt_btm_rt_rw3">
	<?php include("template/news.php"); ?>
      </div>
    </div></div></div></div></div></div></div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>

</body>
</html>
