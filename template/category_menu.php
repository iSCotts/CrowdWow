<?php
include('include/connect.php'); 

 @$query2="SELECT * FROM shop where s_status='1'";
 @$result = mysql_query($query2);


?>

<div class="bod_lt_rw1_sub1">Categories</div>
<div class="bod_lt_rw1_sub2">
<p style="padding:5px 0 0 0;">

<ul>
<li><a href="shop.php">All<?php 
 @$sql2="SELECT shop.s_name,product.p_name,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where product.p_status='1' and shop.s_status='1'";
		$query2=mysql_query($sql2);
		$nume=mysql_num_rows($query2);
		echo "(".$nume.")";
		 ?></a></li>
<?php
  while(@$row=mysql_fetch_array($result))
{ ?>
<li><a href="shop.php?id=<?php echo $row['s_id']; ?>"><?php echo $sname=$row['s_name'];

@$sid=$row['s_id'];
 @$sql1="SELECT * from product where s_id='$sid'and p_status='1'";
		$query1=mysql_query($sql1);
		$nume1=mysql_num_rows($query1);
		?>
		 <?php echo "(".$nume1.")";?>

</a></li> 
<?php }?>
<!--<li><a href="#">Gift Cards {3}</a></li>
<li><a href="#">Gifts And Accessories (2)</a></li>
<li><a href="#">Cellulars and Navigation (3)</a></li>
<li><a href="#">Household (6)</a></li>
<li><a href="#">Game Consoles (4)</a></li>
<li><a href="#">TV and Movies (6)</a></li>
<li><a href="#">Australia and NZ</a></li> 
<li><a href="#">Others (20)</a></li>-->
</ul>

</div>
<div class="bod_lt_rw1_sub3"></div>