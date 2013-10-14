<?php include("include/connect.php");

@$id=$_GET['sid'];
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
<a href='#' class='breadcrumb-link'>Shop</a>
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
<ul class="shop-nav filled-soft">

<li>
<?php //include("leftshop.php");
?>


</li>
</ul>
 
<div class="questions-box box" style="display:none">

</div>


<div class="product-stats box bordered">
<h5 class="presale">Presale</h5>
<p>We’re still collecting pre-order commitments on this product. Once we hit this product’s presale threshold, we’ll move it into production. By getting in early, you’ll get a price break AND earn influence. Plus, we won’t charge your credit until the product is real and ready to ship.<br/>
<a href="/learn">More on committing...</a></p>    
</div>
</div>

<div class="column last xWideContent">

<div class="shop-product-splash filled-super-soft box">
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
		
<div class="column xMidContent">

<?php
include("learn/item_menu.php");
?>
			
		
			



<div id="influence" class="tab-content">
<script src="/javascripts/dygraph.js?1303772557" type="text/javascript"></script>
<!--[if IE]><script src="/javascripts/excanvas.js"></script><![endif]-->


<div class="product-detail-stats"> 
	
		
<div class="cell accordion-item clearfix">
<a href="#" class="accordion-link left" style="width:100%;">
<div class="box mSmaller filled-super-soft">

</div>
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
	
<div class="column x3 last">

			
<div class="shipping-faq box">
<h3><a href="/learn#faq">Shopping FAQ's</a></h3>
<ul class="basic-stack-list">  
<li>
<a class='accordion-link' href="#"> 
							What is a product commitment?
</a>
<div class='accordion-content' style="display:none;">
<p>When you click on the "Commit Now" button you are saying that you will purchase the product if it gets made. Your credit card will not be charged until the product is ready to ship to you, and you can cancel your commitment at any time by clicking on the "Orders" tab under the "My Account" page. If you commit to a product in Pre-sales and then complete your order when the product is ready to ship, you will earn a small percentage of that product's profits in perpetuity. Why fear commitment with all that good stuff?</p>
</div>   

</li>
<li>
<a class='accordion-link' href="#"> 
							When will my product arrive?
</a>
<div class='accordion-content' style="display:none;">
<p>If a product is On Sale and in our warehouse, the order will ship by the following business day, assuming there isn't a bottleneck at our warehouse. If the product is On Sale but still in production, it'll likely take a few weeks to a few months. If the product is in Pre-sales, it will have to reach its commitment threshold before proceeding to production. One thing we want to emphasize: if the product is not yet in inventory, your credit card will be authorized, but it won't be charged until your order is getting ready to ship!</p>
</div>   
</li>
<li>   
<a class='accordion-link' href="#"> 
							How long does something stay in pre-sale?
</a>
<div class='accordion-content' style="display:none;">
<p>The timeframe changes for each item. We set a different commitment threshold for each product based on anticipated costs and market demand. An item will remain in Pre-sales until it reaches this threshold, at which point it will go into production and be listed as On Sale.</p>

</div>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>



      
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
