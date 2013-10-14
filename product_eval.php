<?php
include("include/connect.php");
session_start();
$email=$_SESSION['email'];
$sq2="select * from user where u_email='$email'";
$go=mysql_query($sq2);
$r1=mysql_fetch_array($go);
$uid=$r1['u_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">

<div class="page"> 
<div class="tier x12"> 
<div class="column"> 
<div class='breadcrumb box filled-soft'> 
<p class='breadcrumb-links'> 
<a href='influnce.php' class='breadcrumb-link'>Influence</a> 
				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Product Research</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<?php
include("timer6.php");
?>
<p id="project-countdown" class="countdown" rel="75291"></p> 
</div> 
</div> 
</div> 


    




<div class="page quirky-idea">

  

<div class="tier mSmaller x12 quirky-idea">

<!--<font style="font-size:26px">Submit Your Idea</font>
--></div>
<div class="tier x12">
<div class="column x9"> 

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Personal Upkeep</h2> 
<p><p>Hey inventors! We&#8217;ve covered a lot of territory in briefs past, from taking care of pets to organizing kitchens and closets. Let&#8217;s take it back to basics for this one and focus on how you can better take care of yourself.</p> 
<p>This week&#8217;s brief is aimed at making personal maintenance easier.</p> 
<p>Personal hygiene is all about cleaning and grooming ourselves to maintain good health. For many, that involves trimming or removing extra hair, nails, and dead skin. In short, things that make you go &#8220;ick&#8221; if left unchecked for too long. This can get personal and everyone is different, so pay attention to your own daily routine and see where there&#8217;s room for improvement.</p> 
<p>We&#8217;re open to everything, from the insanely simple (nail clippers, tweezers) to insanely useful gadgets (electric shavers, massaging foot baths). Just keep it within our general parameters of under $150 and no integrated software.</p> 
<p>As you think about your submission, try to balance market need with a fresh approach. If it&#8217;s a task that a lot of people do, there might be a wide audience for your product, but there might also be a lot of products which already address the same issue. If it&#8217;s a task that very few people do, you might submit a very unique idea, but there&#8217;d be no market for it.</p> 
<p>Perform your own <a href="http://aquirkyblog.com/2011/02/what-does-quirky-look-for/"><span class="caps">DMV</span></a> (design potential, marketability and viability) to give your idea some tough love. Don&#8217;t be disheartened if it&#8217;s not an immediate winner. You have a whole week to think about it and refine your first thought before submitting.</p> 
<p>You can enter one product idea for free, and deadline is Mon, July 18, at noon ET. Think your idea would really &#8220;clean up&#8221;? Submit now.</p></p> 
<div class="button-holder"> 
<a href="#" class="button light small"> 
							Product Overview &raquo;
</a> 
</div> 
</div> 
<div class="bd"> 
<h2>The Winners!</h2> 
<div class="sub-box box-section filled-super-soft idea-item"> 
<?php 
$id=$_GET['i_id'];
$sq="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.vote_idea,submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.sub_id='$id' limit 40";
 $query6=mysql_query($sq);
 $row6=mysql_fetch_array($query6);


?>
<a href="idea.php?i_id=<?php echo $id; ?>"><img alt="Tape Stamp" class="thumb" src="upload_idea/<?php echo $row6['attach_files'];?>" height="150" width="150" title="Tape Stamp" /></a>
<div class="info-block x5">
<?php
 
$sq1="select * from user_profile where u_id='$uid'";
$go1=mysql_query($sq1);
$r2=mysql_fetch_array($go1);
$image=$r2['image'];
if($image=="")
{
?>
<cite><font size="+1"><a title="Photo Accessories" href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['desc_idea'];?></a><br /><br /><img src="upload_image/user_noimage.png" height="50" width="50"/> by <a href="topinfluence.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['first_name'];?> <?php echo $row6['last_name'];?></a></font></cite>
<p>
<p>
<?php echo $row6['desc_problem'];?>
</p>
<?php 
}
else
{
?>
<cite><font size="+1"><a title="Photo Accessories" href="idea.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['desc_idea'];?></a><br /><br /><img src="upload_image/<?php echo $image; ?>" height="50" width="50" /> by <a href="topinfluence.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['first_name'];?> <?php echo $row6['last_name'];?></a></font></cite>
<p>
<p>
<?php echo $row6['desc_problem'];?>
</p>
<?php
}
?>
</div> 
</div> 
 

</div> 
 
</div> 
</div> 
<div class="column-r x3"> 
<div class="pillar x3"> 
<div class="box squared product-timeline filled-super-soft"> 
<div class="hd"> 
<h2>Product Timeline</h2> 
</div> 
<div class="bd"> 
<ul class="timeline-stack"> 
<li class="timeline-component"> 
<h3>Evaluation</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="product_eval.php"><span class="step completed">Personal Upkeep</span></a> 
<span>Time Left: <span class="countdown" rel="-1391005"></span></span> 
</li> 
</ol> 
</li> 
			
			
</ul> 
</div> 
</div> 
				
				
</div> 
</div> 
</div> 
	
</div> 
 
<div class="tier x12"> 
<div class="column x8">      
		
		
<div id="ideations-grid"> 
<div class="box browse-controls"> 
<div class="filter row clearfix"> 
		


</div> 
</div> 
 
<div class=""> 
<ul id="ideation-grid-items" class="idea-item-modules xFull"> 
<li class="idea-item"> 
<div class="box bordered filled-super-soft"> 
<div class="hd"> 
<div class="left x5"> 
<?php 
echo "<table>";
@$query3=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_firstname,user.u_lastname,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$id'");
while($row3=mysql_fetch_array($query3))
{
$u_id=$row3['u_id'];
?>
<!--<div style="border-bottom:2px solid #BABABA;">-->
<?php
echo "<tr><td>";
$sql4="SELECT image,u_id FROM user_profile WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];

 if($image=="")
 {
echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; 

 }
 else
 {

 echo "<img src='upload_image/$image' height='40' width='40'>";
} 

}
echo "</td><td>";

echo "<font size=4 color=blue>".$row3['u_firstname'].$row3['u_lastname']."</font><br/>";
echo $row3['comment'];
echo "</td></tr>";
echo "<tr><td colspan=2><hr></td></tr>";
?>
</div>
<?php } 
echo "</table>";

?>
 
 
	
</cite> 
				
</div> 

			
			
</div>  


 
 
</ul> </div></div></div></div></div></div>
	
<div id="scroll-loading" style="display: none; width: 100%; text-align: center;"> 

</div> 
<script type="text/javascript"> 
	jQuery(document).ready(function($) {
		var infiniteDiv = $("#ideation-grid-items");
		infiniteDiv.bind('willAppendMoreData', function() {
			$('#scroll-loading').fadeIn("fast");
		});
		infiniteDiv.bind('moreDataAppended', function() {
			$('#scroll-loading').fadeOut("fast");
		});
	});
</script> 
</div> 
<script src="/javascripts/jquery.ba-bbq.min.js?1313598201" type="text/javascript"></script> 
<script type="text/javascript"> 
	jQuery(document).ready(function($) {
		var unbindLocalEvents = function() {
			$(document).unbind("gridPageChange");
			$(document).unbind("gridFilterChange");
			$(document).unbind("gridSortChange");
			$(document).unbind("gridDisplayAll");
		};
		var defaults = {"filters":["all","random"],"page":1,"infinite":false,"per_page":10}
		unbindLocalEvents();
		$(document).bind("gridPageChange", function(e, data) {
			var options = defaults;
			options.page = data.page;
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridDisplayAll", function(e, data) {
			var options = defaults;
			options.per_page = 24;
			options.infinite = true;
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridFilterChange", function(e, data) {
			var options = defaults;
			options.page = 1;
			var sort = "random"
			options.filters = [data.filter, sort];
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridSortChange", function(e, data) {
			var options = defaults;
			options.page = 1;
			var filter = "all"
			options.filters = [filter, data.sort];
			$(document).trigger("updateGridDisplay", options);
		});
		
 
	});
</script> 
 
 

</div> 
 
</div> 
</div> 
</div> 
      
</div> 
</div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
