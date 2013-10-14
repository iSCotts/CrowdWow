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
$sql2="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.u_id='$id' limit 40";
$query2=mysql_query($sql2);
$row2=mysql_fetch_array($query2);
$nr1=mysql_num_rows($query2);

$bal=$nr1*10;
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
$whole=$bal+($bal1)*$unit;
//echo "Your earning from inventing new ideas: $p";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class='tier x11'>
<div class='column x11 last'>
		
<div class=''>
<div class='hd'>
<h1 class='no-margin clearfix'><a href='#'>Your Payment Info</a></h1>
</div>
			
<div class='bd clearfix'>
<div class='x10 left'>
<div class='sub-box payment-info-sub-box'>
<div class='hd'>

<h3 class=' clearfix highlight'>
<span class='left'>Available Balance</span>
<span class='right'><?php echo "$".$whole.".00"; ?></span>
</h3>
</div>
<div class='bd'>
<ul class='payemnt-accordion'>
<li class=''>
<a href="#" class='payment-accordion-item-link clearfix' onclick="toggle_it('product-earnings');return false;">
<span class='left'><span id='product-earnings-toggle'></span> Product Earnings</span>
<span class='right'>$<?php echo ($bal1*$unit); ?>.00</span>

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


</div>
		
</div>
</div>

</div>


</body>
</html>
