<?php
include("include/connect.php");
session_start();
 $id1=$_GET['i_id2'];
$email=$_SESSION['email'];
$sq="select * from user where u_email='$email'";
$q=mysql_query($sq);
while($r2=mysql_fetch_array($q))
{
	$u_id=$r2['u_id'];
}

if(isset($_POST['submit']))
{

 $text=$_POST['idea_problem'];
 $sql="insert into pro_tag (u_id,sub_id,tag_name) values ('$u_id','$id1','$text')";
 $query=mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>infulenceit</title>
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
xmlhttp.open("GET","vote_tag.php?mode=pos&q="+str,true);
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
xmlhttp.open("GET","vote_tag.php?q="+str,true);
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

<div class="page"> 
<div class="tier x12"> 
<div class="column"> 
<div class='breadcrumb box filled-soft'> 
<p class='breadcrumb-links'> 
<a href='/projects' class='breadcrumb-link'>Influence</a> 
				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Tagline</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<p id="project-countdown" class="countdown" rel="75291"></p> 

<?php
$s6="select * from duration where p_id='$id1' and spent='branding'";
$q6=mysql_query($s6);
$r6=mysql_fetch_array($q6);
include_once('counfuncation.php');
?>

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
</div> 
</div> 
</div> 


    
	<script src="/javascripts/jquery.tools.min.js?1304015757" type="text/javascript"></script>
<script>
function add_more_text_box(parent_id, child_name, child_id)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name);
  oInput.setAttribute('id', child_id);
  oDiv.appendChild(oInput);
} 

var child_id = 1;
function child()
{ 
		return child_id++;
}	
</script>




<div class="page quirky-idea">

  

<div class="tier mSmaller x12 quirky-idea">

<!--<font style="font-size:26px">Submit Your Idea</font>
--></div>
<div class="tier x12">
<div class="column x9"> 

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;"><div class="" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Tagline</h2> 
<p><p>In this phase, we are asking you to come up with the product tagline for the packaging. This is a SUPER important aspect of our brand image, and is very visible at retail.</p> 
<p>It needs to embody everything that Quirky stands for as a brand, be eye-catching and ‘sticky’. It has to draw people in while also describing the product solution.</p>
<p>Please refer back to the CMF to get a strong idea for this product look.</p>
<p>Some of our tag lines directly describe the product’s functionality in an irreverent way that is borderline snarky, such as Mugstir’s ‘Spoon That Hangs On Your Mug’ or Cordies’ ‘Keep Your Cables On The Table’.</p>
<p>Some of our tag lines are super short and punchy: Space Bar’s ‘More Space. More Ports’.</p>
<p>Some are somewhat abstract but employ literary devices such as rhythm and alliteration: Broom Groomer’s ‘Bye Bye Bunnies’.</p>
<p>Some play on/rip off somewhat famous lines, sayings, phrases etc, like Mantis’ ‘Let There Be Light’.</p>
<p>One last thing: we reserve the right to NOT pick a tagline if it does not make the cut.</p>
<p>Anyway, you get the idea… go to it!</p>
<div class="button-holder"> 
<a href="/products/152-152-litter-scoop" class="button light small"> 
							Product Overview &raquo;
</a> 
</div> 
</div> 
<div class="bd idea-details-summary sub-box box-section filled-super-soft"> 
<div class="tile idea-detail votes-left"> 
<div class="detail-icon"> 
<img alt="User_icon_voted" src="images/user_icon_voted.png?1313794130" /> 
</div> 
<p class="short"> 
<strong class="title">     
<span id="vote-counter">
<?php 
$s="select sum(tag_vote) as vo from pro_tag where sub_id='$id1'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$votes=$r['vo'];
}
$s3="select * from duration where p_id='$id1' and spent='branding'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$v1=$r3['votes'];
}
$v=$v1-$votes;
$p=($v1/$v)*100;
echo $v;
?>
</span> Vote(s) Left for this project
</strong> 

</strong> 
</p> 
</div> 
<div class="tile idea-detail influence-left"> 
<div class="detail-icon pie-graph"> 
<img alt="Icon_pie25" src="images/icon_pie25.png?1313794130" /> 
</div> 
<p class="short"> 
<sup class="help-icon" title="Influence is a real-time measure of your contributions to a project. You can earn influence either by submitting a winning idea, or by supporting and refining that winning idea."><span>?</span> 
		
</sup> 
<strong class="title"> 
5% Influence is up for grabs
</strong> 
</p> 
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
<li class=""> 
<a href="#"><span class="step completed">Product Evaluation</span></a> 

</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="product_res_result.php??i_id3=<?php echo $id1; ?>"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="concept_phase_result.php?i_id3=<?php echo $id1; ?>"><span class="step completed">Concept Phase</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Branding</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="/projects/1003-152-litter-scoop-Product-Naming"><span class="step">Product Tagline</span></a> 
<span>Time Left: <span class="countdown" rel="69722"></span><br/>
  <?php 
		
		 $etime=$r6['days'];
		$difference11=countdowen1($etime); 
		
		 
		 $days_left1 = floor($difference11/60/60/24); 
 		 $hours_left1 = floor(($difference11 - $days_left1*60*60*24)/60/60);
 		 $minutes_left1 = floor(($difference11 - $days_left1*60*60*24 - $hours_left1*60*60)/60);
 		 $sec_left1=floor(($difference11 - $days_left1*60*60*24 - $hours_left1*60*60-$minutes_left1*60));

	?>
	<span style="color:magenta;" id="d1<?php echo $r6['du_id']; ?>" ><?php echo $days_left1 ?> Days</span>
                              <span style="color:magenta;" id="h21<?php echo $r6['du_id']; ?>" >
                            <?php  echo $hours_left1 ?></span>:<span style="color:magenta;" id="m1<?php echo $r6['du_id']; ?>">
                            <?php  echo $minutes_left1 ?></span>:<span style="color:magenta;" id="s1<?php echo $r6['du_id']; ?>" >
                            <?php  echo $sec_left1; ?></span>
	 <script type="text/javascript">
function timer_waq1<?php echo $r6['du_id']; ?>()

{

	day=parseInt(document.getElementById("d1<?php echo $r6['du_id']; ?>").innerHTML);
	hr=parseInt(document.getElementById("h21<?php echo $r6['du_id']; ?>").innerHTML);
	mn=parseInt(document.getElementById("m1<?php echo $r6['du_id']; ?>").innerHTML);
	sc=parseInt(document.getElementById("s1<?php echo $r6['du_id']; ?>").innerHTML);
		if(sc!=0)
			document.getElementById("s1<?php echo $r6['du_id']; ?>").innerHTML=sc-1;
		else
			{
				document.getElementById("s1<?php echo $r6['du_id']; ?>").innerHTML=59;
					if(mn!=0)
						document.getElementById("m1<?php echo $r6['du_id']; ?>").innerHTML=mn-1;
					else
						{
						document.getElementById("m1<?php echo $r6['du_id']; ?>").innerHTML=59;
							if(hr!=0)
								document.getElementById("h21<?php echo $r6['du_id']; ?>").innerHTML=hr-1;
							else{
								}
						}
			}

}

setInterval("timer_waq1<?php echo $r6['du_id']; ?>()",1000); 



timer_waq1<?php echo $r6['du_id']; ?>();

          </script>


</li> 
</ol> 
</li> 
</ul> 
</div>
				
				
</div> 
</div> 
</div> 
	
</div>


</div>	</div></form>							
<div class="button-holder">

</div>
<strong class="right">                                     
								
</strong>
</div> 






<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<form name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="submit-item1" style="border-bottom:1px solid #E5E5E5;">
<p class="item-title"><b>Please suggest the tag?</b></p>
<div style="width:350px;"><textarea cols="10" id="idea_problem" name="idea_problem" rows="5"></textarea></div>

</div>
<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" class="" onClick="openbox1('Login',1)"><span class="text"><input type="button" name="submit" value="Continue" class="btnstyle"/></span> <span class="check"></span></a></div>
<?php } else { ?>
<div align=""><input type="submit" name="submit" value="Continue" class="btnstyle"/></div>
<?php } ?>
</form></div></div>

	<div class="tier x12">
<div class="column x8">      
		
		
<div id="ideations-grid">


<div class="">
  <ul id="ideation-grid-items" class="idea-item-modules xFull"><li class="idea-item">
<?php 
 $query="SELECT user.u_firstname, user.u_lastname,user.u_id,pro_tag.sub_id,pro_tag.tag_name,pro_tag.tag_id,pro_tag.tag_vote FROM user
inner JOIN pro_tag on user.u_id=pro_tag.u_id where pro_tag.sub_id='$id1' ";

$result = mysql_query($query); 



while($row = mysql_fetch_array($result))
  {
  $u_id=$row['u_id'];
 $sid=$row['sub_id'];
 $pname=$row['tag_name'];
 $fname=$row['u_firstname'];
 $lname=$row['u_lastname'];
 $pid=$row['tag_id'];

?>

<div class="box bordered filled-super-soft">
<div class="hd">
<div class="left x5">
<h3><a href="idea.php?i_id=<?php echo $sid; ?>"><b><?php echo $pname; ?></b> <span class="more">&raquo;</span></a></h3>
<cite>               






						by:<a href="idea.php?i_id=<?php echo $sid; ?>"><?php echo $fname ." ".$lname; ?></a></cite></div>
<?php

 $s1="select * from tag_comment where p_id='$id1' and tag_id='$pid'";
$q1=mysql_query($s1);
$nr1=mysql_num_rows($q1);

?>
<h3 style="width:248px;"><a href="idea1.php?d_id=<?php echo $sid; ?>&id=<?php echo $pid ?>" style="text-decoration:none;"><img src="images/icon_small_comments1.png"/>Comments(<?php if($nr1==0){echo "0";}else { echo $nr1; } ?>)&nbsp;&nbsp;</a>Total Votes <font size=3 color=blue>(<?php echo $row['tag_vote']; ?>)</font></h3>

</div>
<div class="ft">



<div class="right">
<div id="ideation-64601-vote-button-3" >


<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" class="button icon bright" onClick="openbox1('Login',1)"><span class="text" style="width:182px;">Vote For This Idea</span> <span class="check"></span></a></div>
<?php } else {  ?>

<div id="<?php echo  $pid; ?>">
<?php
$query11="select u_id from pro_tag where sub_id='$id1' and tag_id='$pid'";
$result11=mysql_query($query11);
if($row11=mysql_fetch_array($result11))
{  $users_id=$row11['u_id']; }
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
<a  style="background-color:#666666" class="button icon bright" onclick="hiddenHint(<?php echo $pid; ?>,<?php echo $pid; ?>)" >
<span class="text" style="width:182px;">Take your Vote</span>
<span class="check"></span></a></div>
<?php  } } else { ?>
<a  class="button icon bright" onclick="showHint(<?php echo  $pid; ?>,<?php echo  $pid; ?>)" >
<span class="text" style="width:182px;">Vote For This Idea</span> 
<span class="check"></span></a>
</div>
<?php } } ?>

</div>       
</div>
</div>
<?php } ?>
</div>
</div>
</div> 

	
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
</div></body>
</html>
