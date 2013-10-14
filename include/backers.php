<?php 
@session_start();
include("include/connect.php"); 
 @$id=$_GET['$id'];
 @$go=$_GET['go'];
?>

<div style=" width:270px;">
<h1>
<div style="padding:20px 0 10px 25px;font-size:26px;">
<?php 
$query3=mysql_query("select * from backers where sub_id='$id'");
echo $nr3=mysql_num_rows($query3);
?>
</div>
</h1>
<h2><div style="padding:1px 0 10px 25px;">
Backers</div>
</h2>
<h1>
<div style="padding:20px 0 10px 25px;font-size:26px;">
<?php 
$query2=mysql_query("select amount from backers where sub_id='$id'");
$sum = 0;
while($row2=mysql_fetch_array($query2))
{
 $amount=$row2['amount'];
 $sum=$sum+$amount;
}
echo "$".$sum;
?>
</div>
</h1>
<h2>
<div style="padding:1px 0 10px 25px;">
pledged of $
<?php 
$query1=mysql_query("select invest from submit_idia where sub_id='$id'");
while($row=mysql_fetch_array($query1))
{
 echo @$invest=$row['invest'];
}
?>

 goal</div>
</h2>
<h1>
<div style="padding:20px 0 10px 25px;font-size:26px;">
<?php
$sql6="select * from duration  where p_id='$id'";
$query6=mysql_query($sql6);
while($row6=mysql_fetch_array($query6))
{
$days1=$row6['days'];
}

$starttime=strtotime($t1);
 $endtime=strtotime($days1);
//$endtime can be any format as well as it can be converted to secs
 $curdate=date("m/d/Y");
 $curtime=strtotime($curdate);
 $timediff = $endtime-$curtime;
   $days=intval($timediff/86400);
   $remain=$timediff%86400;
   $hours=intval($remain/3600);
   $remain=$remain%3600;
   $mins=intval($remain/60);
   $secs=$remain%60;
 
//$days is what you need
 
 
// this is just an output that tells the difrence
$timediff=$days.'days';  
?>
<?php echo $timediff; ?>
</div>
</h1>
<h2><div style="padding:1px 0 10px 25px;">
days to go</div>
</h2>
</div>

<div>
<div style=" width:270px;height:10px;background-color:white;">
</div>
<?php
if($_SESSION['u_id']=="")
{
?>
<div style=" width:270px;padding:18px 0px 18px 5px;cursor:pointer;" onClick="openbox1('Login',1)">
<?php } else { ?>
<div style=" width:270px;padding:18px 0px 18px 5px;cursor:pointer;" onclick="window.location.href='pledge.php?sub_id=<?php echo $id; ?>';">
<?php } ?>
<div >
<h5><u>Pledge For Project</u></h5>
</div>
<div class="">
<p style="font-size:14px">THE SHOUT OUT We'll go public with our gratitude for your support with a post on our Face Book page  and our blog!</p>
</div>
<div class="">

<img alt="Backer" class="backer-tag" src="images/backer.png" height="19"  width="20" />
<?php echo $nr3; ?> BACKERs
</div>
</div>
</div>


