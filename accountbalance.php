<?php 
include("include/connect.php"); 
session_start();
$email=$_SESSION['email'];
$sql="select * from user where u_email='$email'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
 $id=$row['u_id'];
 $s="select * from submit_idia where u_id='$id'";
 $q=mysql_query($s);
 $r=mysql_fetch_array($q);
$rs=$r['invest'];
$p=($rs*35)/100;
$s1="select * from project_point";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$res=$r1['r_percent'];
$des=$r1['d_percent'];
$brand=$r1['b_percent'];
$total=$res+$des+$brand;
$bal1=($total*$rs)/100;
 $sql6="select distinct(p_id) from checkout where u_id='$id'";
$query6=mysql_query($sql6);
while($row6=mysql_fetch_array($query6))
{
 $p_id=$row6['p_id'];

}
$sql5="select sum(unit) as un from checkout where u_id='$id' and p_id='$p_id'";
$query5=mysql_query($sql5);
$row5=mysql_fetch_array($query5);
 $unit=$row5['un'];
$sql2="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.u_id='$id' limit 40";
$query2=mysql_query($sql2);
$row2=mysql_fetch_array($query2);
$nr1=mysql_num_rows($query2);

$bal=$nr1*10;

$whole=$bal+($bal1)*$unit;
//echo "Your earning from inventing new ideas: $p";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Account Balance</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<script src="js/lightbox-form2.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>

<div class="bod">
  <div >
  <div class='tier x12'>
<div class='column x12 last'>
		
<div class='box bordered squared no-padding account-box payment-info clearfix clear'>
<div class='hd'>
<h3 style="width:400px; padding-left:220px; margin-left:160px;"><a href='#'>Your Payment Info</a></h3>
</div>
			
<div>
<div>
<div class='sub-box payment-info-sub-box' style="width:500px; padding-left:220px;">
<div class='hd'>

<h3 class=' clearfix highlight'>
<span class='left'>Available Balance</span>
<span class='right'>
$<?php echo $whole; ?>.00

</span>
</h3>
</div>
<div class='bd'>
<ul class='payemnt-accordion'>
<li class=''>
<?php
$s1="select * from project_point";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$res=$r1['r_percent'];
$des=$r1['d_percent'];
$brand=$r1['b_percent'];
$total=$res+$des+$brand;
$bal1=($total*$rs)/100;
?>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('product-earnings');return false;">
<span class='left'><span id='product-earnings-toggle'></span> Product Earnings</span>
<span class='right'>$<?php echo $bal1*$unit; ?>.00</span>

</a>
										
<div class='payment-accordion-item-body clearfix' id="product-earnings" style="display:none;">
</div>
</li>
								
<li class=''>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('payouts');return false;">
<span class='left'><span id='payouts-toggle'></span> Payout Requests</span>
<span class='right'>$0.00</span>
</a>
										
<div class='payment-accordion-item-body' id='payouts' style="display:none;">

</div>
</li>
								
<li class=''>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('purchases');return false;">
<span class='left'><span id='purchases-toggle'></span> Product Purchases</span>
<span class='right'>$0.00</span>
</a>
<div class='payment-accordion-item-body' id ='purchases'>
</div>
</li>
									
<li class=''>
<?php
$sql2="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.u_id='$id' limit 40";
$query2=mysql_query($sql2);
$row2=mysql_fetch_array($query2);
$nr1=mysql_num_rows($query2);

$bal=$nr1*10;
?>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('ideas');return false;">
<span class='left'><span id='ideas-toggle'></span> Idea Submissions</span>
<span class='right'><?php echo "$".$bal.".00"; ?></span>
</a>
<div class='payment-accordion-item-body' id ='ideas'>
</div>
</li>
									
<li class=''>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('credits');return false;">
<span class='left'><span id='credits-toggle'></span> Account Credits</span>

<span class='right'>$0.00</span>
</a>
<div class='payment-accordion-item-body' id ='credits'>
</div>
</li>
</ul>
</div>
</div>
</div>
<!--<script src="/javascripts/potential-earnings.js?1311185793" type="text/javascript"></script>		
<div class='x6 last right'>
<div class='sub-box pending'>
<div class='hd'>
<h3 class='clearfix'>
<span class='left'>Potential Earnings</span>

<span class='right' id='total-pending'>
$0.00
</span>
</h3>
</div>
<div class='bd potential-earnings' id='web-user-74432-potential-earnings'>
<ul class='payemnt-accordion remote-search-original-list' style='min-height: 145px;' id='potential-earnings-list'>
</ul>
<div id="remote-search-results">
<div id='search-spinner'><img alt="Loading" src="/images/loading.gif?1311185793" />Searching...</div>
</div>
<div class='potential-earnings-nav'>
<div class='search-box'>
<input autocomplete="off" class="empty" data-url="/users/74432/search_influenced_products?partial=potential_earning_result&amp;states%5B%5D=sales&amp;states%5B%5D=presales&amp;states%5B%5D=in_production" id="search-box" name="q" type="text" value="Search" />
</div>
<div id='potential-earnings-controls'>

<a href="" class="remote-search-results-close"><img src='/images/arrow-blue-l-small.png'/> Back</a>
</div>
</div>
</div>
<a href="/users/74432/potential_earnings.csv" class="button potential-earnings-download bright">Download Potential Earnings (CSV)</a>
</div>
</div>
-->				
<div class='x12 clear'>
<div class='payment-info-block' style="padding-left:160px; width:700px;">
<h4>Payouts</h4>
<p><font color="blue">

									You’ll be eligible to withdraw your earnings once you’ve made more than $75.00 and completed the  Payee Information Form</a>. Send any questions relating to payments to us.
</font></p>
							
</div>
</div>
					
				
<!-- 				
<div class='x12 clear'>
<div class='payment-info-block'>
<h4>Credit Card Information</h4>
<p>You have not yet saved a credit card.</p>
<p><a href='#'>Add a new credit card</a></p>
</div>
</div>
								 -->
</div>
</div>
		
</div>
</div>

</div>

	<?php //include("learn/index.php"); ?>
	
  </div>
</div>
</div>
</div></div></div></div>	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
