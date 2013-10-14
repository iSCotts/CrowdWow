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
 $query="SELECT user.u_firstname, user.u_lastname,user.u_id,submit_idia.vote_idea, submit_idia.desc_idea,submit_idia.sub_id,submit_idia.project_type,submit_idia.attach_files FROM user
inner JOIN submit_idia
ON user.u_id=submit_idia.u_id where project_type='U' and sub_status='1'";
$result = mysql_query($query); 



while($row = mysql_fetch_array($result))
  {
  $u_id=$row['u_id'];
  $sub_id=$row['sub_id'];
  
 $query1="select days from duration where spent='evaluation' and p_id='$sub_id'";
$result1=mysql_query($query1);
while($row1=mysql_fetch_array($result1))
{
$exp_date=$row1['days'];
$cur_date=date("m/d/y");
if($cur_date < $exp_date)
{

 @$sql2="SELECT project_type from submit_idia where project_type='U' and sub_id='$sub_id' ";
		$query2=mysql_query($sql2);
		  @$nume=mysql_num_rows($query2);
		echo $nume;
}}}		 ?>

 Ideas</span>
</div>
<div class="idea-details-summary sub-box box-section filled-light">
<div class="tile idea-detail most-commented" style="height:76px">
<div class="detail-icon">  
<img alt="Icon_influence"  src="images/icon_influence.png"/>
</div>
<p>

<strong class="title">
												
</strong> Most Comments
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
$query="SELECT user.u_firstname, user.u_lastname,user.u_id,submit_idia.vote_idea,  submit_idia.desc_idea,submit_idia.sub_id,submit_idia.project_type,submit_idia.attach_files FROM user
inner JOIN submit_idia
ON user.u_id=submit_idia.u_id where project_type='A' and sub_status='1'";
$result = mysql_query($query); 



while($row = mysql_fetch_array($result))
  {
  $u_id=$row['u_id'];
  $sub_id=$row['sub_id'];
  
$query1="select days from duration where spent='evaluation' and p_id='$sub_id'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
$exp_date=$row1['days'];
$cur_date=date("m/d/y");
if($cur_date < $exp_date)
{

 @$sql1="SELECT project_type from submit_idia where project_type='A' and sub_id='$sub_id'";
		$query1=mysql_query($sql1);
		 @$nume1=mysql_num_rows($query1);
		echo $nume1;
}}		 ?>

 Ideas</span>
</div>
<div class="box-section" style="height:78px">
<blockquote>
<p>This week Quirky brief sounds simple enough: Let's make a hook product. Easy, right? Well, not quite. Let's think this through&hellip</p>
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
@$query2=mysql_query("select * from submit_idia ");
while($row2=mysql_fetch_array($query2))
{
 $sub_id=$row2['sub_id'];
}
?>
<li class="product-item product-item-summary pad last">
<div class="detail-component product-num x5" style="width:200px;">
<a href="idea.php?i_id=<?php echo $sub_id; ?>">
<?php 
 $s="select max(vote_idea) from submit_idia where project_type='A' ";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $vote=$r['max(vote_idea)'];
}
 $sql5="select desc_idea from submit_idia where vote_idea='$vote' and project_type='A'";
$query5=mysql_query($sql5); 
$row5=mysql_fetch_array($query5); 

echo $sub_id3=$row5['sub_id'];
echo $row5['desc_idea'];
?></a>
</div>
<div class="detail-component n-ideas" style="margin-left:250px;">
Total Comments: 
<a href="idea.php?i_id=<?php echo $sub_id3; ?>">
<?php 
$query4=mysql_query("select * from submit_idia where project_type='A'"); 
echo $nr4=mysql_num_rows($query4);
?>
</a>
</div>
<div class="right">  
<a class="button small bright" href="view_eval.php">View All Ideas</a>
</div>
<?php
@$query2=mysql_query("select * from submit_idia");
while($row2=mysql_fetch_array($query2))
{
 $sub_id=$row2['sub_id'];
}
?>
<li class="product-item product-item-summary pad last">
<div class="detail-component product-num x5" style="width:200px;">
<a href="idea.php?i_id=<?php echo $sub_id; ?>">
<?php 
 $s="select max(vote_idea) from submit_idia where project_type='U' ";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $vote=$r['max(vote_idea)'];
}

$sql3="select desc_idea,sub_id from submit_idia where vote_idea='$vote' and project_type='U'";
$query3=mysql_query($sql3); 
$row3=mysql_fetch_array($query3);

 $sub_id4=$row3['sub_id'];
echo $row3['desc_idea'];

?></a>
</div>
<div class="detail-component n-ideas" style="margin-left:250px;">
Total Comments: 
<a href="idea.php?i_id=<?php echo $sub_id4; ?>">
<?php

$query4=mysql_query("select * from submit_idia where project_type='U'"); 
echo $nr4=mysql_num_rows($query4);
?>
</a>
</div>

<div class="right">  
<a class="button small bright" href="view_user_eval.php">View All Ideas</a>
</div>
</li>
<?php

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

<?php 
/* $sql6="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.vote_idea,submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id inner join duration on submit_idia.sub_id=duration.p_id where submit_idia.sub_status='1'  and duration.spent='research' order by sub_id desc limit 40"; */
 
/* $sql6="SELECT * from submit_idia inner join duration on submit_idia.sub_id=duration.p_id inner join user on user.u_id=submit_idia.u_id where submit_idia.sub_status='1'  and duration.spent='research' order by submit_idia.sub_id desc limit 40";
*/


$sql26="SELECT * from submit_idia inner join duration on submit_idia.sub_id=duration.p_id  where submit_idia.sub_status='1'  and duration.spent='research' order by submit_idia.sub_id desc limit 40";
$query26=mysql_query($sql26);
while($row26=mysql_fetch_array($query26))
{
$sid=$row26['sub_id'];
 $s11="select * from duration where p_id='$sid' order by du_id desc limit 1 ";
$q11=mysql_query($s11);
while($r11=mysql_fetch_array($q11))
{
 $spe=$r11['spent'];
 $prid=$r11['p_id'];
 $day=date("m/d/Y",strtotime($r11['days']));
 $cdate=date("m/d/Y");
 if($cdate>=$day)
 {
 $s12="update duration set status='2' where p_id='$prid' and spent='research'";
 $q12=mysql_query($s12);
 
 }
else
{
 $s13="update duration set status='1' where p_id='$prid' and spent='research'";
 $q13=mysql_query($s13);

}
}
}

$sql6="SELECT * from submit_idia inner join duration on submit_idia.sub_id=duration.p_id  where submit_idia.sub_status='1'  and duration.spent='research' and duration.status!='2' order by submit_idia.sub_id desc limit 40";

 $query6=mysql_query($sql6);
 
 while($row6=mysql_fetch_array($query6))
 {
 $uid=$row6['u_id'];
 $sub_id=$row6['sub_id'];
$spent=$row6['spent'];


$query18="select days from duration where spent='evaluation' and p_id='$sub_id'";
$result18=mysql_query($query18);
$row18=mysql_fetch_array($result18);
  $exp_date=$row18['days'];
$ex=strtotime($exp_date);
$cur_date=date("m/d/y");
$da=strtotime($cur_date);
 $query19="select days from duration where spent='branding' and p_id='$sub_id'";
$result19=mysql_query($query19);
$row19=mysql_fetch_array($result19);
$b_date=$row19['days'];

 $bdate=strtotime($b_date);

if($da > $ex)
{
//echo $sub_id;
 ?>
<li class="product-item"> 
<a href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><img alt="Tape Stamp" class="thumb" src="upload_idea/<?php echo $row6['attach_files'];?>" height="150" width="150" title="Tape Stamp" /></a>
<div class="info-block x5">

<?php
$s9="select * from user where u_id='$uid'";
$q9=mysql_query($s9);
while($r9=mysql_fetch_array($q9))
{
?>

<cite><a title="Photo Accessories" href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['desc_idea'];?></a> by <a href="topinfluence.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $r9['u_firstname'];?> <?php echo $r9['u_lastname'];?></a></cite>
<?php
}
?>
<p>
<p>
<?php echo $row6['desc_problem'];?>
</p>
</div>
<ul class="stage-stack x4">

<?php                                            
/*$sub_id=$row6['sub_id'];
$sql1="select * from product_concept  where sub_id='$sub_id' and pc_quest='Yes'";
$query1=mysql_query($sql1);
$row1=mysql_fetch_array($query1);
$nr1=mysql_num_rows($query1);
*/
$date=date('m/d/Y');
$id5=$row6['sub_id'];
 $s5="select * from duration where p_id='$id5' and spent='evaluation'";
$q5=mysql_query($s5);
$r5=mysql_fetch_array($q5);
 $vote=$r5['days'];
 $s6="select * from duration where p_id='$id5' and spent='research'";
$q6=mysql_query($s6);
$r6=mysql_fetch_array($q6);
 $vote1=$r6['days'];
$s7="select * from duration where p_id='$id5' and spent='design'";
$q7=mysql_query($s7);
$r7=mysql_fetch_array($q7);
 $vote2=$r7['days'];
 

$s8="select * from duration where p_id='$id5' and spent='branding'";
$q8=mysql_query($s8);
$r8=mysql_fetch_array($q8);
 $vote3=$r8['days'];
include_once('counfuncation.php');
?>




<?php 
$vote11=countdowen($vote1); 
$date11=countdowen($date); 
if($vote11 > $date11)
{
?>

<li class="sub-box step">
<h4> 
<span>research  <?php //echo $etime=$r6['days']; ?></span>
<a href="product_res.php?i_id3=<?php echo $row6['sub_id'];?>" title="product Research">product Research</a></h4>
 

  <?php 
		
		 $etime=$r6['days'];
		$difference1=countdowen($etime); 
		
		 
		 $days_left = floor($difference1/60/60/24); 
 		 $hours_left = floor(($difference1 - $days_left*60*60*24)/60/60);
 		 $minutes_left = floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60)/60);
 		 $sec_left=floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60-$minutes_left*60));

	?>
	<span style="color:magenta;" id="d<?php echo $r6['du_id']; ?>" ><?php echo $days_left ?> Days</span>
                              <span style="color:magenta;" id="h2<?php echo $r6['du_id']; ?>" >
                            <?php  echo $hours_left ?></span>:<span style="color:magenta;" id="m<?php echo $r6['du_id']; ?>">
                            <?php  echo $minutes_left ?></span>:<span style="color:magenta;" id="s<?php echo $r6['du_id']; ?>" >
                            <?php  echo $sec_left; ?></span>
	 <script type="text/javascript">
function timer_waq<?php echo $r6['du_id']; ?>()

{

	day=parseInt(document.getElementById("d<?php echo $r6['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h2<?php echo $r6['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m<?php echo $r6['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s<?php echo $r6['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s<?php echo $r6['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s<?php echo $r6['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m<?php echo $r6['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m<?php echo $r6['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h2<?php echo $r6['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq<?php echo $r6['du_id']; ?>()",1000); 



timer_waq<?php echo $r6['du_id']; ?>();

          </script>



<a class="button small bright right" href="product_res.php?i_id3=<?php echo $row6['sub_id'];?>"><font color="#FFFFFF">Influence It</font></a>
</li>

<?php }
$vote12=countdowen($vote2); 
if($vote12 > $date11)
{
 ?>
<li class="sub-box step">
<h4>
<span>product design <?php //echo $etime=$r7['days']; ?></span>
<a href="concept_phase.php?i_id3=<?php echo $row6['sub_id']; ?>" title="concept phase">concept phase</a></h4>

  <?php 
		 $etime=$r7['days'];
		 $difference1=countdowen($etime); 
		 $days_left = floor($difference1/60/60/24); 
 		 $hours_left = floor(($difference1 - $days_left*60*60*24)/60/60);
 		 $minutes_left = floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60)/60);
 		 $sec_left=floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60-$minutes_left*60));
  ?>

	         <span style="color:magenta;" id="d<?php echo $r7['du_id']; ?>" ><?php echo $days_left ?> Days</span>
                              <span style="color:magenta;" id="h2<?php echo $r7['du_id']; ?>" >
                            <?php  echo $hours_left ?></span>:<span style="color:magenta;" id="m<?php echo $r7['du_id']; ?>">
                            <?php  echo $minutes_left ?></span>:<span style="color:magenta;" id="s<?php echo $r7['du_id']; ?>" >
                            <?php  echo $sec_left; ?></span>
	 <script type="text/javascript">
function timer_waq<?php echo $r7['du_id']; ?>()

{

	day=parseInt(document.getElementById("d<?php echo $r7['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h2<?php echo $r7['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m<?php echo $r7['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s<?php echo $r7['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s<?php echo $r7['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s<?php echo $r7['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m<?php echo $r7['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m<?php echo $r7['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h2<?php echo $r7['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq<?php echo $r7['du_id']; ?>()",1000); 



timer_waq<?php echo $r7['du_id']; ?>();

          </script>




<a class="button small bright right" href="concept_phase.php?i_id3=<?php echo $row6['sub_id']; ?>"><font color="#FFFFFF">Influence It</font></a>
</li>
<?php } 

$vote13=countdowen($vote3); 
if($vote13 > $date11)
{
?>
<li class="sub-box step">
<h4>
<span>branding  <?php //echo $etime=$r8['days']; ?></span>
<a href="product_naming.php?i_id2=<?php echo $row6['sub_id']; ?>" title="product naming">Product Naming</a></h4>


  <?php 
		
		 $etime=$r8['days'];
		$difference1=countdowen($etime); 
		
		 
		 $days_left = floor($difference1/60/60/24); 
 		 $hours_left = floor(($difference1 - $days_left*60*60*24)/60/60);
 		 $minutes_left = floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60)/60);
 		 $sec_left=floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60-$minutes_left*60));

	?>
	<span style="color:magenta;" id="d<?php echo $r8['du_id']; ?>" ><?php echo $days_left ?> Days</span>
                              <span style="color:magenta;" id="h2<?php echo $r8['du_id']; ?>" >
                            <?php  echo $hours_left ?></span>:<span style="color:magenta;" id="m<?php echo $r8['du_id']; ?>">
                            <?php  echo $minutes_left ?></span>:<span style="color:magenta;" id="s<?php echo $r8['du_id']; ?>" >
                            <?php  echo $sec_left; ?></span>
	 <script type="text/javascript">
function timer_waq2<?php echo $r8['du_id']; ?>()

{

	day=parseInt(document.getElementById("d<?php echo $r8['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h2<?php echo $r8['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m<?php echo $r8['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s<?php echo $r8['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s<?php echo $r8['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s<?php echo $r8['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m<?php echo $r8['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m<?php echo $r8['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h2<?php echo $r8['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq2<?php echo $r8['du_id']; ?>()",1000); 



timer_waq2<?php echo $r8['du_id']; ?>();

          </script>



<a class="button small bright right" href="product_naming.php?i_id2=<?php echo $row6['sub_id']; ?>"><font color="#FFFFFF">Influence It</font></a>
</li>

<li class="sub-box step">
<h4>
<span>branding</span>
<a href="product_tag.php?i_id2=<?php echo $row6['sub_id']; ?>" title="tagline">Tagline</a></h4>


  <?php 
		
		 $etime=$r8['days'];
		$difference11=countdowen1($etime); 
		
		 
		 $days_left1 = floor($difference11/60/60/24); 
 		 $hours_left1 = floor(($difference11 - $days_left1*60*60*24)/60/60);
 		 $minutes_left1 = floor(($difference11 - $days_left1*60*60*24 - $hours_left1*60*60)/60);
 		 $sec_left1=floor(($difference11 - $days_left1*60*60*24 - $hours_left1*60*60-$minutes_left1*60));

	?>
	<span style="color:magenta;" id="d1<?php echo $r8['du_id']; ?>" ><?php echo $days_left1 ?> Days</span>
                              <span style="color:magenta;" id="h21<?php echo $r8['du_id']; ?>" >
                            <?php  echo $hours_left1 ?></span>:<span style="color:magenta;" id="m1<?php echo $r8['du_id']; ?>">
                            <?php  echo $minutes_left1 ?></span>:<span style="color:magenta;" id="s1<?php echo $r8['du_id']; ?>" >
                            <?php  echo $sec_left1; ?></span>
	 <script type="text/javascript">
function timer_waq1<?php echo $r8['du_id']; ?>()

{

	day=parseInt(document.getElementById("d1<?php echo $r8['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h21<?php echo $r8['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m1<?php echo $r8['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s1<?php echo $r8['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s1<?php echo $r8['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s1<?php echo $r8['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m1<?php echo $r8['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m1<?php echo $r8['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h21<?php echo $r8['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq1<?php echo $r8['du_id']; ?>()",1000); 



timer_waq1<?php echo $r8['du_id']; ?>();

          </script>


<a class="button small bright right" href="product_tag.php?i_id2=<?php echo $row6['sub_id']; ?>"><font color="#FFFFFF">Influence It</font></a>
</li>

<li class="sub-box step">
<h4>
<span>branding</span>
<a href="product_cmf.php?i_id2=<?php echo $row6['sub_id']; ?>" title="tagline">Product cmf</a></h4>




  <?php 
		
		 $etime=$r8['days'];
		$difference1=countdowen2($etime); 
		
		 
		 $days_left = floor($difference1/60/60/24); 
 		 $hours_left = floor(($difference1 - $days_left*60*60*24)/60/60);
 		 $minutes_left = floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60)/60);
 		 $sec_left=floor(($difference1 - $days_left*60*60*24 - $hours_left*60*60-$minutes_left*60));

	?>
	<span style="color:magenta;" id="d2<?php echo $r8['du_id']; ?>" ><?php echo $days_left ?> Days</span>
                              <span style="color:magenta;" id="h22<?php echo $r8['du_id']; ?>" >
                            <?php  echo $hours_left ?></span>:<span style="color:magenta;" id="m2<?php echo $r8['du_id']; ?>">
                            <?php  echo $minutes_left ?></span>:<span style="color:magenta;" id="s2<?php echo $r8['du_id']; ?>" >
                            <?php  echo $sec_left; ?></span>
	 <script type="text/javascript">
function timer_waq<?php echo $r8['du_id']; ?>()

{

	day=parseInt(document.getElementById("d2<?php echo $r8['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h22<?php echo $r8['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m2<?php echo $r8['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s2<?php echo $r8['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s2<?php echo $r8['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s2<?php echo $r8['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m2<?php echo $r8['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m2<?php echo $r8['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h22<?php echo $r8['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq<?php echo $r8['du_id']; ?>()",1000); 



timer_waq<?php echo $r8['du_id']; ?>();

          </script>

<a class="button small bright right" href="product_cmf.php?i_id2=<?php echo $row6['sub_id']; ?>"><font color="#FFFFFF">Influence It</font></a>
</li>
<?php } ?>
</li> 
</ul>
</li>  
<?php } } ?>

</ul>

</div>
</div>
</div>
<?php
$sql7="select days from duration inner join submit_idia where duration.p_id=submit_idia.sub_id and duration.spent='evaluation'";
$query7=mysql_query($sql7);
$row7=mysql_fetch_array($query7);

 $time=$row7['days'];
$c_time=date("d/m/Y");
 $sql8="SELECT DISTINCT * 
FROM submit_idia
INNER JOIN duration ON submit_idia.sub_id = duration.p_id
WHERE duration.days <  '$c_time' AND duration.spent='evaluation' AND submit_idia.vote_idea<10 and submit_idia.sub_status='2' limit 40 ";
$query8=mysql_query($sql8);
?>
<div class="tier x12">
<div class="tier-hd">
<h2>Products In The Works
<small class="wtf" title="These products have not yet completed the Quirky process, but do not have any projects open for community participation at this time."><font color="#00CCFF">what does this mean?</font></small>
</h2>

</div>
 
<?php
while($row8=mysql_fetch_array($query8))
{


 $time1=$row8['start_date'];
 $vote=$row8['vote_idea'];
$sub_id=$row8['sub_id'];
 
$starttime=strtotime($time1);
 $endtime=strtotime($time);
//$endtime can be any format as well as it can be converted to secs
 
 $timediff = $endtime-$starttime;
    $days=intval($timediff/86400);
    
    $remain=$timediff%86400;
   $hours=intval($remain/3600);
   $remain=$remain%3600;
   $mins=intval($remain/60);
   $secs=$remain%60;
 
//$days is what you need
 
 
// this is just an output that tells the difrence
 $timediff=$days.'days'; 
 
$sql17="update submit_idia set sub_status='2' where sub_id='$sub_id'";
$query17=mysql_query($sql17);


?>
<div class="box filled-super-soft bordered">
<div class="bd">
<ul class="product-stack"> 
<li class="product-item"> 
<a href="idea.php?i_id=<?php echo $row8['sub_id'];?>"><img alt="Tape Stamp" class="thumb" src="upload_idea/<?php echo $row8['attach_files'];?>" height="150" width="150" title="Tape Stamp" /></a>
<div class="info-block x5">
<?php
 $sql11="select * from payment where sub_id='$sub_id'";
$query11=mysql_query($sql11);
$row11=mysql_fetch_array($query11);
?>
<cite><a title="Photo Accessories" href="idea.php?i_id=<?php echo $row8['sub_id'];?>"><?php echo $row8['desc_idea'];?></a> by 
<a href="topinfluence.php?i_id=<?php echo $row11['sub_id'];?>"><?php echo $row11['first_name'];?> </a></cite>
<p>

<p><span class="caps"></span> <span class="caps"></span></p>

</p>	
</div>
<ul class="stage-stack x4">
<li class="sub-box step">
<h4>
<span><a title="Tape Stamp Overview">There are no active projects</a></span>
</h4> 
<p class="text-soft">
										Check back soon or join the conversation on the product overview page.
</p>
<a href="idea.php?i_id=<?php echo $row8['sub_id'];?>" class="button small bright right" title="Tape Stamp Overview">Product Overview</a>
</li>  
</ul>
</li> 
</div>
</div>
<?php
}
?>
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
