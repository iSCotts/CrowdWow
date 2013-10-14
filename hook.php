<?php
include('include/connect.php'); 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hook</title>

<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">
<link href="stylesheets/com.quirky.extrad6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	


<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function showHint(str,divid)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(divid).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","vote_idea.php?mode=pos&q="+str,true);
xmlhttp.send();
}

function hiddenHint(str,divid)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(divid).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","vote_idea.php?q="+str,true);
xmlhttp.send();
}


</script>

</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
   
   
   <div class="">
	
<div id="fb-root"></div>

<noscript>
<div id="unsupported-modal" class="quirky-modal">
<div class='qm-box x7'>
<div class='modal-content modal-content-qtheme box bordered'>
<div class="hd">
<h2>You Must Have JavaScript Enabled&hellip;</h2>
</div>
<div class="bd">
<h2>
            You must have JavaScript enabled to use this website. If you have questions
            about how to enable JavaScript on your
            browser, please read <a href="http://www.google.com/support/bin/answer.py?hl=en&answer=23852">this tutorial</a>,
            or call Quirky Customer Service at 1-866-5QUIRKY.
</h2>
</div>
</div>
</div>
</div>
<div class="qm-overlay"></div>

</noscript><div id="modal-signup" class="quirky-modal" style="display: none;">
<div class='qm-box x12'>
<?php include("user/reg.php"); ?>
</div>
</div>
<div class="qm-overlay" style="display: none;"></div>



<div class="tier x15">
<div class="top-scribble"></div>



</li>
<div id="cart-dropdown-container">
<div id="cart-dropdown-top"></div>
<div class="h-dropdown" id="cart-dropdown" style="">
<table id="cart-dropdown-table">

<tr>
<th colspan=2 style="text-align: left;">
          Product Name
</th>
<th>
          Quantity
</th>
<th>
          Price
</th>
</tr>
    
</table>
<div class="button-holder">

      
<div class="right" style="margin-left: 10px;">
<a href="/checkout" class="button bright right">Proceed To Checkout</a>
</div>
<div class="right">
<a href="/cart_items" class="button soft right">Edit Cart</a>
</div>
<div class="clear">
</div>
</div>

</div>
</div>

</li>
</ul>
      
</div>
<div class="column-r x7">
<div class="row clearfix">
<p class="announcement">&nbsp;</p>

			
				
</div>
</div>
</div>
 
 
 <div class="page">
<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='influnce.php' class='breadcrumb-link'>Influence</a>
			

				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Hook</span>
</p>
</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>


<div class="tier x12">
<div class="column x7">
<div class="box your-overview">
<div class="hd" style="width:600px;">
<h2 style="font-size:20px;">Hook</h2>
            <p><p>It&#8217;s time to air out your ideas, inventors. With your help, we&#8217;re going to tackle bad smells.</p> 
<p>This week&#8217;s brief is all about preventing and treating bad odor.</p> 
<p>We&#8217;re going to be open to it all. Air fresheners might be your first idea, but it&#8217;s not the only answer. We&#8217;d love to make something that&#8217;s new and exciting. Here&#8217;s some guidance to get you thinking out of the box.</p> 
<p>Where does odor start? Look at the situations in your daily life to see if you can identify a problem. It can range from playing sports to smoking cigarettes, from cooking dinner to taking care of babies &amp; pets, and so on. Once you figure out where odor control is needed, you can brainstorm different products to help in that situation.</p> 
<p>To help, here&#8217;s a list of inspiration products that work in a variety of ways:</p> 
<p>-Box of baking soda that traps odors in your fridge<br /> 
-Diaper trash cans that trap smells with airtight lids<br /> 
-Garbage bags which neutralize odors by incorporating a special ingredient<br /> 
-Gym bags that allow sweat-soaked clothing to dry</p> 
<p>These are existing products, so use them for starting points and brainstorm something new. For this round, focus on physical product ideas. Avoid ideas for a new air freshening chemical. We don&#8217;t have a team of scientists (yet).</p> 
<p>Our usual parameters apply: consumer products that would retail for less than $150 and not require integrated software. And as always, <a href="http://aquirkyblog.com/2011/02/what-does-quirky-look-for/"><span class="caps">DMV</span></a> (design potential, marketability and viability) will tell us which ideas would be a smart business decision.</p> 
<p>You can submit one idea for free, and the deadline is Mon, July 4, at noon ET. Think your idea would bring a breath of fresh air to the marketplace? Submit now!</p></p> 

<div class="button-holder">
<a href="/products/134-product-0134" class="button light small">
							<!-- Product Overview &raquo; -->
</a>
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

<h3>Evaluation</h3>
<ol class="timeline-component-steps">




</ol>
</li>
			
			
</ul>
</div>
</div>
				

<div class="box simple-info dot-side">
<div class="hd">
<h3 class="no-bg no-padding">How does voting work?</h3>
</div>

<div class="bd">  
<p>Community members are given an unlimited number of votes. Use them wisely! We are counting on you to bubble up the best product ideas this week. Plus, the amount of influence you can earn is directly tied to how many votes you cast. <a>More on voting influence</a></p>
</div>
</div>
					
				
</div>
</div>
</div>
	
</div>

<div class="tier x12">
<div class="column x8">      
		
		
<div id="ideations-grid">


<div class="">
  <ul id="ideation-grid-items" class="idea-item-modules xFull"><li class="idea-item">
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


?>

<div class="box bordered filled-super-soft">
<div class="hd">
<div class="left x5">
<h3><a href="idea.php?i_id=<?php echo $row['sub_id']; ?>"><b><?php echo $row['desc_idea']; ?></b> <span class="more">&raquo;</span></a></h3>
<cite>               


<?php

$sql4="SELECT image FROM `user_profile` WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];
 
 if($image=="")
 { ?>
<a href="topinfluence.php?$id=<?php echo $u_id; ?>"><?php echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; ?></a>
 <?php }
 else
 {?>
<a href="topinfluence.php?$id=<?php echo $u_id; ?>"><?php echo "<img src='upload_image/$image' height='40' width='40'>";?></a>
<?php } 

}

?>




						by:<a href="topinfluence.php?$id=<?php echo $u_id; ?>"> <?php echo $row['u_firstname'] ." ".$row['u_lastname']; ?></a></cite></div>
<a href="idea.php?i_id=<?php echo $row['sub_id']; ?>"><img class="thumb" src="upload_idea/<?php echo $row['attach_files']; ?> "height="100" width="150" alt=""/></a></div>
<div class="ft">

<a class="n-comments" href="idea.php?i_id=<?php echo $row['sub_id']; ?>"><img src="images/icon_small_comments1.png" />&nbsp;&nbsp;Comments

<?php 
 $s_id=$row['sub_id'];
@$query2=mysql_query("select * from id_comment where sub_id='$s_id'");
 @$nr2=mysql_num_rows($query2);

?>
<?php
		if($nr2==0)
{
echo "<font size=3 color=blue>(0)</font>";
}
else
{
echo "<font size=3 color=blue>(".$nr2." )</font>";
}
	?>




</a>
<a class="rate-this" href="idea.php?i_id=<?php echo $row['sub_id']; ?>">Total Votes <font size=3 color=blue>(<?php echo $row['vote_idea']; ?>)</font></a> 

<div class="right">
<div id="ideation-64601-vote-button-3" >

<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" class="button icon bright" onClick="openbox1('Login',1)"><span class="text">Vote For This Idea</span> <span class="check"></span></a></div>
<?php } else { ?>

<div id="<?php echo  $s_id; ?>">
<?php
$query11="select u_id from submit_idia where sub_id='$sub_id'";
$result11=mysql_query($query11);
if($row11=mysql_fetch_array($result11))
{ $users_id=$row11['u_id']; }
$user_match=0;
$b=explode(",",$users_id);
$c=count($b);
		for(@$i=0;$i<$c;$i++)
		{
		if(@$b[$i]==$_SESSION['u_id']) 
		{
$user_match=1;
                }}
if($user_match=='1')
{
$user_match;
if($_SESSION['u_id']!=$b[0])
{
?>
<a  style="background-color:#666666" class="button icon bright" onclick="hiddenHint(<?php echo $s_id; ?>,<?php echo $s_id; ?>)" >
<span class="text">Take your Vote</span>
<?php } } else { ?>
<a  class="button icon bright" onclick="showHint(<?php echo  $s_id; ?>,<?php echo  $s_id; ?>)" >
<span class="text">Vote For This Idea</span> 
<?php }  ?>

<span class="check"></span></a>
</div>
<?php } ?>

</div>       
</div>
</div>
<?php } } ?>


</li>
</ul>
	
<div id="scroll-loading" style="display: none; width: 100%; text-align: center;">
<img alt="Loading" src="/images/loading.gif?1305144385" />
</div>

</div>



	


<div class="row" style="padding-top:10px;"></div>

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
