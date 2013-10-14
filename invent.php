<?php 
include("include/connect.php");
session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Invent</title>

<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php //include("javascripts/script.php"); ?>
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
<a href='' class='breadcrumb-link' style=" font-size:14px">Invent</a>
			
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
    <div class="page quirky-invent">
<div class="tier x12 page-header">
<div class="column">
<div class="box">


<p class="page-description light-sans"; style="font-size:17px">Together, we develop two new products every week. One could be anything; the other is based on a brief we provide you.
</p>
</div>
</div>
</div> 
	
<div class="tier x12">   
<div class="column x6">
<div class="action-box price-tag price-tag-10 box filled-super-soft" style="height:260px;">
<div class="">

<span class="idea-icon"></span>
<h2 style="padding-left:10px"> <img alt="Clock_icon"  src="images/icon_idea2.png" width="50" height="50" /> <font style="font-size:20px;color: #003366;">Submit Any Idea</font></h2>

<div class="h-countdown">
<h1 style="padding-left:20px"><img alt="Clock_icon" src="images/clock_icon.png" /></h1>
<?php include("timer2.php");?>
<p class="countdown" rel="290150"></p>
</div>
</div>  

<div class="bd pad">
<div class="box-section">
<p>It's time for product evaluation -- our weekly quest to identify the best new product idea in the world and push it through our crazy&hellip;</p>
<div style="height:30px"></div>
</div>
<a href="idea_stage1.php" class="button bright">Submit Any Idea</a>
</div>
</div>
</div>  
<div class="column x6 last">
<div class="action-box price-tag price-tag-free box filled-bright" style="height:260px;">
<div class="">
<div style="padding-top:38px"></div>
<font style="font-size:20px;color: #003366;padding-left:15px">Submit A 

<?php
$sql="select pro_title from project where p_status='1'";

$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
 $title=  $row['pro_title'];


 echo $title ; 
  
  }
?>
 Product</font>
<div class="h-countdown">
<h1 style="padding-left:12px"><img alt="Clock_icon" src="images/clock_icon.png" /></h1>
<?php include("timer3.php");?>
<p class="countdown" rel="290150"></p>
</div>
</div> 
<div class="bd pad">
<div class="box-section">
<p>There hasn’t been much innovation in garment upkeep since the invention of the lint brush. This week, we’re going to change that&hellip;</p>
<div style="height:20px"></div>
</div>  
<a href="adidea_stage1.php" class="button bright">Submit To This Project</a>

</div>
</div>
</div>
<?php @include("topinfluencer.php"); ?>
<?php include("need_help.php");?>
<div class="column x3 last">
 

<table>
<tr><td valign="top" >
<?php include("top_influ.php");?>

</td>  
</td>
<td valign="top" >
<div class="column x5" >
<div class="invent-faq box" >

<div class="bd" style="padding-left:52px" > 

<?php include("leatest_comment.php");?>
</div>
</div>
</div>
</td>
<td valign="top" >
<?php include("learn/submit_faq.php");?>
<div style=" padding-left:60px"><?php include("warried_video.php");?></div>
</td>
</tr></table>
<div class="best-practices box" style="display:none">
<div class="hd">
<h3>Best Practices</h3>
</div>
<div class="bd">
<ul class="user-list">
<li class="user">
<a href="/learn" class="thumb"><img alt="Icon_idea2" src="/images/icon_idea2.png?1304015757" /></a>                        
<div class="info-block">
									Read The Project Descriptions Carefully

<h4><strong><a href="learn#practices">more</a></strong></h4>
</div>
</li>
<li class="user">
<a href="/learn" class="thumb"><img alt="Icon_idea2" src="/images/icon_idea2.png?1304015757" /></a>                        
<div class="info-block">
									Write an Eye Catching / Descriptive Headline
<h4><strong><a href="learn#practices">more</a></strong></h4>
</div>
</li> 
<li class="user">
<a href="/learn" class="thumb"><img alt="Icon_idea2" src="/images/icon_idea2.png?1304015757" /></a>                        
<div class="info-block">
									Don't Name Your Own Product

<h4><strong><a href="learn#practices">more</a></strong></h4>
</div>
</li>
</ul>
</div>
</div>
</div>       
</div></div></div>

      <?php //include("learn/index.php"); ?>
</div>
  </div></div>
</div></div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>

</body>
</html>
