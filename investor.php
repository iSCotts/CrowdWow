<?php 
include("include/connect.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Investor</title>
<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">
<link href="stylesheets/com.quirky.extrad6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div>

<div class="bod">
  <div class="bod_rt">

<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='' class='breadcrumb-link'>Investor</a>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>



<div class="bod">
  <div class="bod_rt">
<div id='main'style='width:1000px; padding-top:20px;'>
<p><!--<a class="right" href="#"></a>-->



<?php 

/* $query="SELECT payment.first_name, payment.last_name, payment.state, payment.country, submit_idia.desc_idea,submit_idia.invest, submit_idia.desc_solution,submit_idia.u_id,submit_idia.desc_problem, submit_idia.sub_id,submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1'";
*/
 $query="SELECT * FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id inner join product ON submit_idia.sub_id=product.p_id where submit_idia.sub_status='1' and product.p_type='Shipping Now' or product.p_type='In Production'";


$result = mysql_query($query); 
 $nr=mysql_num_rows($result);
 

echo "<table  style='padding-left:120px;'>";
for($i=0;$i<$nr/2;$i++)
{
echo "<tr>";
for($j=0;$j<2;$j++)
{
$row = mysql_fetch_array($result);
$id=$row['u_id'];
$id1=$row['sub_id'];
  echo "<td>";
if($row['desc_idea']!="" )
  {

  echo "<div id='maindiv'style='width:415px;height:auto;'>";
  echo "<table >";
  echo "<tr>";
   for($k=0;$k<1;$k++)
   {
   echo "<td>";
   echo "<div id='mdiv' style='width:210px;height:auto;padding:1px;background-color: #FFFFFF; overflow: hidden;border:5px solid silver;
    position: relative;' >";
  echo "<table  >";
  echo "<tr>";
  //echo "<td width='70%'><img upload_idea/".$row['attach_files']."/></td>";
  "<td> "?>
  <div style="height:175px; width:232px;">


    <?php
 if( $row['attach_files']==null || $row['attach_files']=="")
 {
 // echo "<img src='upload_idea/nowallpaper-585747.jpeg' height='175' width='232'>"; 
  ?>
 <a href="investor_detail1.php?$id=<?php echo $row['sub_id']; ?>&go=top" ><img  src="upload_idea/nowallpaper-585747.jpeg"width="232px" height="175px"/></a> 
  <?php
 }
 else
 {
 ?>				
	<a href="investor_detail1.php?$id=<?php echo $row['sub_id']; ?>&go=top" ><img  src="upload_idea/<?php echo $row['attach_files'];?>"width="232px" height="175px"/></a>				
<?php
}
?>

  </div>
  <?php echo "</td>";
  
  echo "</tr>";
  echo "<tr style='height:25px;'>";
   
  echo "<td ><b><h6><font style='color:#0000CC;font-size:15px;font-weight:bold;	'>" . substr($row['desc_idea'],0,30) . "<font></h6></b></td>";
  echo "</tr>";
  echo "<tr style='height:25px;'>";
   $s="select * from user where u_id='$id'";
  $q=mysql_query($s);
  $r=mysql_fetch_array($q);
  echo "<td>By-<font style='font-size:11px;font-weight:bold;	'>" . $r['u_firstname']." " .$r['u_lastname'] . "<font></td>"; 
  echo "</tr>";
  echo "<tr style='height:25px;'>";
  echo "<td><font style='font-size: small;'>" . substr($row['desc_problem'],0,30) . "<font></td>";
  echo "</tr>";
  echo "<tr style='height:25px;'>";
  echo "<td><font style='font-size:11px;font-weight:bold;	'>" . $row['state'] ." ".$row['country'] . "<font></td>";
  echo "</tr>";
   $id1=$row['sub_id'];
  $query2=mysql_query("select amount from backers where sub_id='$id1'");
  $sum = 0;
  while($row2=mysql_fetch_array($query2))
  {
  $amount=$row2['amount'];
  $sum=$sum+$amount;
  }
  $invest=$row['invest'];
  $percent=$sum*100/5000;
  echo "<td id='t1' style='padding:1px;'>";
  //echo "<hr>";
?>
<?php
$sql5="select * from submit_idia  where sub_id='$id1'";
$query5=mysql_query($sql5);
while($row5=mysql_fetch_array($query5))
{
$t1=$row5['start_date'];
}
$sql6="select * from duration  where p_id='$id1'";
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
<div style="background-color:#000066; width:200px; height:10px; padding:1px 0px 1px 1px;">
	<img src="bar.php?s=0&e=100&c=<?php echo $percent; ?>&p=1" height="10" width="200"/>
</div>
  <?php
  echo "<table >";
  echo "<tr style='height:25px;'>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . $percent. " % <font></td>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . $sum . "<font></td>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . $timediff . "<font></td>";
  echo "</tr>";
  
  echo "<tr style='height:25px;'>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . 'FUND' . "<font></td>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . 'PLED' . "<font></td>";
  echo "<td style='width:70px;'><font style='font-size:11px;font-weight:bold;	'>" . 'DAYS LEFT' . "<font></td>";
  echo "</tr>";
  echo "</table>";
 

  echo "</td>";
  
  echo "</table>";
  echo "</div>";
  echo "</td>";
  
  
  echo "<td valign='top'>";
   echo "<div id='m2div' style='width:180px;height:auto;padding-left:15px;'>";
  echo "<table  >";
  
 echo "<tr>";
	echo "<td style='height:50px;'>"."<td>";
  echo "</tr>";
  
    echo "<tr>";
    echo "<td style=' border-bottom: 1px solid #CCCCCC;
    color: #333333;
    font-family: Helvetica,Arial,Sans-Serif;
    font-size: 14px;
    font-weight: bold;
    margin: 0 0 10px;
    text-transform: uppercase;'>PROJECT OF THE DAY" . "</td>";
	 echo "</tr>";
   echo "<tr>";

   
  echo "<td> "; ?><a href="investor_detail1.php?$id=<?php echo $row['sub_id']; ?>&go=top" ><?php echo $row['desc_solution'];?></a><?php  echo "</td>";
  echo "</tr>";
    
  
  
  
  echo "</table>";
  echo "</div>";
  echo "</td>";
  }
  echo "</tr>";
  echo "</table>";
  echo "</div>";
  }
  echo "</td>";
  }
  echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
?>
</p>
</div>
 
</div>
  </div>
</div></div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
