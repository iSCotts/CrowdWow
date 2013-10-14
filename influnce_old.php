
<?php
include("include/connect.php");
@session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Influence</title>

<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	


<link href="css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    <div class="page quirky-influence">


	<div class="page">
<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='' class='breadcrumb-link'>Influence</a>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>


<div class="tier"> 
<table class="panel-set big-idea two-ideas">
<tbody>
<tr>
<td >

<div class="tier x112">   
<div class="column x6">
<div class="action-box price-tag price-tag-10 box filled-super-soft" style="height:260px;">
<div class="">
<h2 style="font-size:20px; color: #003366;">Help Choose Our Next Product</h2>
</div>

<div class="bd">
<div class="big-counter box-section">
<span class="countdown" rel="423366"></span>
<span class="n-ideas">
<?php include("timer2.php");?>&nbsp;&nbsp;&nbsp;
<?php

 @$sql2="SELECT project_type from submit_idia where project_type='U' ";
		$query2=mysql_query($sql2);
		  @$nume=mysql_num_rows($query2);
		echo $nume;
		 ?>

 Ideas</span>
</div>
<div class="idea-details-summary sub-box box-section filled-light">
<div class="tile idea-detail most-commented" style="height:76px">
<div class="detail-icon">  
<img alt="Icon_influence"  src="images/icon_influence.png"/>
</div>
<p>

<strong class="title">
												Most Comments
</strong> 
<?php 
$s1="SELECT sub_id, count( sub_id ) FROM id_comment GROUP BY sub_id HAVING count( sub_id ) = ( SELECT max( A.CNT ) FROM ( SELECT count( sub_id ) AS CNT FROM  id_comment GROUP BY ( sub_id ) ) AS A )";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
?>
   
<a href="tackle.php?id=<?php echo $r1['sub_id']; ?>">Tackling&hellip;</a>
</p>
</div>
<div class="tile idea-detail influence-left" style="height:76px">
<div class="detail-icon pie-graph">
<img src="images/icon_pie50.png">

</div>
<p>
<strong class="title">
												Influence Left

</strong>
<a>50&#37;</a>
</p>
</div>
</div>
<a class="button icon bright big" href="evaluation.php"><span class="text">Cast Your Vote Now</span> <span class="check"></span></a>
</div>
</div>
</div>
</td> 

<td >

<div class="tier x11">   
<div class="column x6">
<div class="action-box price-tag price-tag-10 box filled-super-soft" style="height:260px;">
<div class="">
<h2 style="font-size:20px; color: #003366;">Help Choose A Hook Product</h2>
</div>
<div style="height:10px"></div>
<div class="bd">
<div class="big-counter box-section">
<span class="countdown" rel="423366"></span>
<span class="n-ideas">
<?php include("timer3.php");?>&nbsp;&nbsp;&nbsp;&nbsp;

<?php
 @$sql1="SELECT project_type from submit_idia where project_type='A' ";
		$query1=mysql_query($sql1);
		 @$nume1=mysql_num_rows($query1);
		echo $nume1;
		 ?>

 Ideas</span>
</div>
<div class="box-section" style="height:78px">
<blockquote>
<p>This weekâ€™s Quirky brief sounds simple enough: Letâ€™s make a hook product. Easy, right? Well, not quite. Letâ€™s think this through&hellip</p>
</blockquote>
</div>

<a class="button icon bright big" href="hook.php"><span class="text">Cast Your Vote Now</span> <span class="check"></span></a>       

</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>

</div>



<div class="tier x12">  
<div class="tier-hd">

<h2>Most Comments</h2>
</div>
<div class="box filled-soft bordered">
<div class="bd">
<ul class="product-stack">

<?php
@$query2=mysql_query("select distinct(sub_id) from id_comment limit 2");
while($row2=mysql_fetch_array($query2))
{
 $sub_id=$row2['sub_id'];
?>
<li class="product-item product-item-summary pad last">
<div class="detail-component product-num x5" style="width:1px;">
<a href="idea.php?i_id=<?php echo $sub_id; ?>">
<?php 
$query3=mysql_query("select desc_idea from submit_idia where sub_id='$sub_id'"); 
if($row3=mysql_fetch_array($query3)) 
echo $row3['desc_idea'];
?></a>
</div>
<div class="detail-component n-ideas" style="margin-left:250px;">
Total Comments: 
<a href="idea.php?i_id=<?php echo $sub_id; ?>">
<?php 
$query4=mysql_query("select * from submit_idia where sub_id='$sub_id'"); 
echo $nr4=mysql_num_rows($query4);
?>
</a>
</div>
<div class="right">  
<a class="button small bright" href="idea.php?i_id=<?php echo $sub_id; ?>">View All Ideas</a>
</div>
</li>
<?php
}
?>
</ul>
</div>
</div>
</div>

<div class="tier x12">
<div class="tier-hd">
<h2>Products Currently In Development</h2>                                                                                                    
</div>
<div class="box filled-super-soft bordered">

<div class="bd">
<ul class="product-stack"> 
<a href="idea.php">
<?php 
 $sql6="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' limit 40";
 $query6=mysql_query($sql6);
 while($row6=mysql_fetch_array($query6))
 {

 ?></a>
<li class="product-item"> 
<a href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><img alt="Tape Stamp" class="thumb" src="upload_idea/<?php echo $row6['attach_files'];?>" height="150" width="150" title="Tape Stamp" /></a>
<div class="info-block x5">
<cite><a title="Photo Accessories" href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['desc_idea'];?></a> by <a href="topinfluence.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['first_name'];?> <?php echo $row6['last_name'];?></a></cite>
<p>
<p>
<?php echo $row6['desc_problem'];?>
</p>
</div>
<ul class="stage-stack x4">
<li class="sub-box step">
<h4> 

<span>research</span>
<a title="product Research">product Research</a></h4>
<p class="countdown last left" rel="9966"></p> 
<a class="button small bright right" href="idea.php?i_id=<?php echo $row6['sub_id'];?>">Influence It</a></li> 
</ul>
</li>  
<?php } ?>
 


</ul>

</div>
</div>
</div>


<div style="height:30px;"></div>
</div>
</div>
</div>
</div>
  </div>
</div></div></div></div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>


</body>
</html>
