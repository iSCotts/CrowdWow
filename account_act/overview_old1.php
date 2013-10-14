<?php
include("include/connect.php");
@session_start();
 @$userid=$_SESSION['u_id']; 
?>
<?php 

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
//echo "Your earning from inventing new ideas: $p";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>

<div class='tier x12'>
<table>
<tr>
<td>

<div class='column x4'>
<div class='box bordered squared no-padding account-balance'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href="accountbalance.php">Account Balance</a></h3>
</div>
<div class='bd'>
<div class='cell'>
<p><span class='left right-link' title='Your available balance is the amount of real money you’ve earned on Quirky.'>Available Balance</span> <span class='account-balance-line-value'><?php echo "$".$p.".00"; ?></span></p>
</div>
<div class='cell'>


<div class='cell last'>
<p><a href="accountbalance.php">See Balance Details &raquo;</a></p>
</div>
</div>
</div>

<div class='box bordered squared no-padding active-projects'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'><span class='left'>Your Active Products</span> <span class='active-projects-count'></span></a></h3>

</div>
<?php 
 $sql="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' limit 4";
  $query=mysql_query($sql);
 while($row=mysql_fetch_array($query))
 {

$idia=$row['desc_idea']; 

 ?>
<div class='bd'>
<div class='cell active-project'>

<p><a href="idea.php?i_id=<?php echo $row['sub_id'];?>" class=""><?php echo $row['desc_idea'];  ?></a></p>
<hr/>
<p class='active-project-step clearfix' style="padding-left:5px;padding-bottom:5px;">
<a href=""><span class='active-project-step-title'>Concept Phase</span> <span class='active-project-countdown countdown' rel='43608'><strong>
</strong>Complete</span></a>
</p>
</div>

<?php } ?>
</div>
</div>
		

<div class='box bordered squared recently-launched-products'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'>Recently Launched Products</a></h3>
</div>

<div class='bd'>
<ul class="product-list">
<?php
@$userid=$_SESSION['u_id']; 
 @$sql="SELECT * from product where p_status='1' limit 4";
$sql1=mysql_query($sql);
while($r=mysql_fetch_array($sql1))
		{
		 $name=$r['p_name'];
	
		?>
<li class="clearfix">
<div class="info">

<p class="title"><a href="item.php?sid=<?php echo $r['s_id']; ?>&pid=<?php echo $r['p_id']; ?>"><?php echo $name;  ?></a></p>
<p class="price"><a href="item.php?sid=<?php echo $r['s_id']; ?>&pid=<?php echo $r['p_id']; ?>">$<?php echo $r['p_cur_price'];  ?></a></p>
<a href="/products/139-Sliders-BBQ-Skewers/overview">Learn More »</a>
</div>
<div class="image"><a href="item.php?sid=<?php echo $r['s_id']; ?>&pid=<?php echo $r['p_id']; ?>"><img alt="Product__small_shop_01" src="admin/uploadimage/<?php echo $r['p_image']; ?>"  height="100" width="150"  /></a></div>

</li>
<?php  } ?>
</ul>
</div>
</div>
	



</div>
</td>
<td>
<div class='tier x7'>
<div class='box bordered latest-activity squared'>
<div class='hd clearfix'>
<h3><a href='#'>Your Latest Activity</a></h3>
</div>
<div class='bd'>
		
		
		
		
<div class=' '>
<table>
<tr>

<td>			
<div class='latest-activity-item-timestamp'>
<!--<p class='date'>07/04/11</p>-->

</div>

<?php
 $userid=$_SESSION['u_id']; 
 @$sql1="SELECT * from id_comment where u_id='$userid' order by sub_id desc ";
$sql2=mysql_query($sql1);
while($r1=mysql_fetch_array($sql2))
		{
		 $com=$r1['comment'];
	
	 $sub=$r1['sub_id'];
	
?>			
<div>

<p class='latest-activity-item-head'>You Commented on <a href="idea.php?i_id=<?php echo $sub; ?>"><font style="color:#666666">
<?php
	 $sub=$r1['sub_id'];
 @$sql1="SELECT desc_idea from submit_idia where sub_id='$sub'";
 $query1=mysql_query($sql1);
while ($r3=mysql_fetch_array($query1))
	{
	echo $r3['desc_idea'];
	}
?>	
</font></a></p>
<p class='latest-activity-item-body'>
							<?php echo $com;  ?>

</p>

</div>
<hr / style="width:530px;">
<?php } ?>

</td>

</tr>
</table>		
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
</div>


</body>
</html>
