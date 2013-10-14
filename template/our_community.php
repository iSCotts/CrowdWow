<?php 
include("include/connect.php"); 

?>
<html>
<head>
</head>
<body>
<div class="bod_rt_btm_lt_top_toplt">Featured influencer</div>
<div class="bod_rt_btm_lt_top_toprt">Our community</div>
</div>
<div class="bod_rt_btm_lt_top_mid">
<div class="bod_rt_btm_lt_top_mid_lt">
<div class="bod_rt_btm_lt_top_mid_ltlt">
<?php
$s="select MAX(invest) as inv from submit_idia";
$q=mysql_query($s);
$r=mysql_fetch_array($q);
$rs=$r['inv'];
$p=($rs*35)/100;
//echo "Your earning from inventing new ideas: $p";
$sql="select * from submit_idia where invest='$rs'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$id=$row['u_id'];
?>
<?php 

$sql2="select * from user_profile where u_id='$id'";
$query2=mysql_query($sql2);
while($row2=mysql_fetch_array($query2))
{
$image=$row2['image'];

if($image=="")
{
?>
<a href="topinfluence.php?$id=<?php echo $id; ?>"><img src="upload_image/user_noimage.png" width="50" height="50" /></a>
<?php
}
else
{
?>
<a href="topinfluence.php?$id=<?php echo $id; ?>"><img src="upload_image/<?php echo $image;  ?>" width="50" height="50" /></a>
<?php }} ?></div>


<div class="bod_rt_btm_lt_top_mid_ltrt"><?php 

$sql1="select * from user where u_id='$id'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
?>
<?Php
echo $fname=$row1['u_firstname'];
echo " ";
echo $lname=$row1['u_lastname'];
}
?> has <br />influenced product. 
 <br /> 
 Total earned: <span style="font-weight:bold;"><?php echo "$".$p.".00"; ?></span> 
 </div>
</div>
<div class="bod_rt_btm_lt_top_mid_rt">Connect with other members of <br />
 the Quirky community in this section.<br />
 <h1><a href="community.php">Go to Community&raquo;</a></h1><br />
</div>

</body>
</html>