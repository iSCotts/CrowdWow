<?php include("include/connect.php");
@session_start();
 $id=$_GET['sid'];
 @$email=$_SESSION['email'];


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.6.js" type="text/javascript"></script>
<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
 
 
<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	
	
	<div class="page">
<div class="tier mSmaller x12">
<div class="column">
<div class='breadcrumb box'>
<p class='breadcrumb-links'>
<a href='shop.php' class='breadcrumb-link'>Shop</a>
				&nbsp;/&nbsp;
<span class='breadcrumb-current'><?php
$sql3="select * from shop where s_id='$id'";
$query3=mysql_query($sql3);

while($row3=mysql_fetch_array($query3))
{	
 echo $row3['s_name']; 
}
?>
</span>
			
</p>
</div>
</div>

</div>

<div class="tier x12 shop-product-details">
<div class="column xNarrowSidebar">


 
<div class="" style="">
<?php include("template/category_menu.php");
?>
</div>



</div>

<div class="column last xWideContent">

<div class="shop-product-splash filled-super-soft box" style="margin-left:65px; width:770px;">
<?php  
//if($email!="")
//{
 include("deo.php");
include("item_detail.php");
//}
//else
//include("deo.php");


?>

		
			
</div>
<table>
<tr>
<td>		
<div class="column xMidContent" style="margin-left:65px;">

<?php
include("learn/item_menu.php");
?>
</td>
<td>
<?php
$id=$_GET['pid'];
$s="select * from submit_idia where sub_id='$id'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$uid=$r['u_id'];
}
$s1="select * from user_profile where u_id='$uid'";
$q1=mysql_query($s1);
while($r1=mysql_fetch_array($q1))
{
$im=$r1['image'];
$sp=$r1['specialties'];
}
$s2="select * from user where u_id='$uid'";
$q2=mysql_query($s2);
while($r2=mysql_fetch_array($q2))
{
$fname=$r2['u_firstname'];

}

?>
<div class="column x3 last"> 
			
<div class="box product-history filled-super-soft pad-bottom" style='text-align:center;color:#005288;'> 
<div class="hd"><h2 style="padding-bottom:0px;font-weight:bold;">Meet the Inventor</h2></div> 
<div class="bd pad"> 
<br/><a href="topinfluence.php?$id=<?php echo $uid; ?>"><img  src="upload_image/<?php echo $im; ?>" width="80" height="80" /></a><br/><br/> 
<a href="topinfluence.php?$id=<?php echo $uid; ?>" style="font-size:12px;"><?php echo $fname; ?></a><br/> 
<?php echo $sp; ?>
</div> 
</div> 


<?php
$id=$_GET['pid'];
$sid=$_GET['sid'];
$sql="select distinct(u_id) from pro_naming where sub_id='$id'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$nr=mysql_num_rows($query);
?>
<div class="box product-history filled-super-soft pad-bottom" style='text-align:center;color:#005288;'> 
<div class="hd"><h2 style="padding-bottom:0px;font-weight:bold;">More Than <?php echo $nr; ?> People</h2></div> 
<div class="bd pad"> 
<p style='margin-bottom:14px;'>helped influence this product</p> 
<a href="overview1.php?sid=<?php echo $sid; ?>&pid=<?php echo $id; ?>" class="button small bright" style="display:inline-block;float:none;padding:5px 10px;margin-top:5px;">View Product History</a> 
<div style="margin-top:10px;font-weight:bold;"> 
<a href="view_influencer.php?pid=<?php echo $id; ?>">See all the influencers</a> 
</div> 
</div> 
</div>
<?php //include("learn/faq_a.php"); ?> 
</td>
</tr>
</table>	
		
			



<div id="influence" class="tab-content">
<script src="/javascripts/dygraph.js?1303772557" type="text/javascript"></script>
<!--[if IE]><script src="/javascripts/excanvas.js"></script><![endif]-->


<div class="product-detail-stats"> 
	
		

</a>                                                                 
<div class="accordion-content">


</div>
</div>
<div class="cell accordion-item clearfix">

<a href="#" class="accordion-link left" style="width:100%;">
<div class="box mSmaller filled-super-soft">

</div>
</a>
<div class="accordion-content">
<div id="salesgraph" style="font-family:Arial;"></div>
<script>
					function draw_sales_graph() { 
						g = new Dygraph(
						    	document.getElementById("salesgraph"),

								"Date, Units\n" +
									"2011-04-05, 27\n" + 
									"2011-04-06, 7\n" + 
									"2011-04-07, 5\n" + 
									"2011-04-08, 3\n" + 
									"2011-04-09, 0\n" + 
									"2011-04-10, 0\n" + 
									"2011-04-11, 0\n" + 
									"2011-04-12, 2\n" + 
									"2011-04-13, 2\n" + 
									"2011-04-14, 1\n" + 
									"2011-04-15, 2\n" + 
									"2011-04-16, 0\n" + 
									"2011-04-17, 1\n" + 
									"2011-04-18, 0\n" + 
									"2011-04-19, 2\n" + 
									"2011-04-20, 0\n" + 
									"2011-04-21, 1\n" + 
									"2011-04-22, 2\n" + 
									"2011-04-23, 10\n" + 
									"2011-04-24, 0\n" + 
									"2011-04-25, 1\n" + 
									"2011-04-26, 1\n" + 
									"2011-04-27, 2\n" + 
									"2011-04-28, 0\n"
,
								{colors: ['#005288']}

							);
						};
						
						window.onload = draw_sales_graph;
</script>

</div> 
</div>
    
</div>

</div>
<div id="press" class="tab-content">
<div style="font-size:12px;margin-left:10px;margin-bottom:20px;">
</div>
</div>
		
<div style="margin-top:20px;clear:both;">

</div>
</div>
	

</div>
</div>
</div>



      
</div>


	
	
	
	</div>
  </div>
</div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
