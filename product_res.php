<?php
include("include/connect.php");
@session_start();
$email=$_SESSION['email'];
$sq="select * from user where u_email='".$email."'";
$q=mysql_query($sq);
while($r2=mysql_fetch_array($q))
{
	$u_id=$r2['u_id'];

$id1=$_GET['i_id3'];
?>
<?php
if(isset($_POST['submit']))
{

  $value=$_POST['r2'];

  $value1=$_POST['r3'];
  $value22=$_POST['r22'];
  if(!$value && !$value1 && !$value22) 
    {
    $msg="please answer all Questions";
    
    
    }
  else{

$i=0;
$s="select * from question where i_id='".$id1."'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $q_id=$r['qus_id'];

$s7="insert into research (p_id,qus_id,u_id) values ('$id1','$q_id','$u_id')";
$q7=mysql_query($s7);

 $s1="select * from answer where qus_id='".$q_id."'";
$q1=mysql_query($s1);
while($r1=mysql_fetch_array($q1))
{
$aid=$r1['ans_id'];
$avote=$r1['answer_vote'];
$qid1=$r1['qus_id'];

$avote=$avote+1;
 $_POST['r2'.$i];


 $s2="update answer set answer_vote='".$avote."' where qus_id='".$q_id."' and ans_id='".$aid."' and answer='".$_POST['r2'.$i]."'";
$q2=mysql_query($s2); 



foreach($_POST['r3'] as $v3)
{
 $s2="update answer set answer_vote='".$avote."' where qus_id='".$q_id."' and ans_id='".$aid."' and answer='".$v3."'";
$q2=mysql_query($s2);
 

}
}
$i=$i+1;
}
$msg="Your response submitted successfully";
}
    
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>infulenceit</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="chart/wz_jsgraphics.js"></script>
<script type="text/javascript" src="chart/pie.js"></script>

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
xmlhttp.open("GET","vote_design.php?mode=pos&q="+str,true);
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
xmlhttp.open("GET","vote_design.php?q="+str,true);
xmlhttp.send();
}
function showHint2(str,divid)
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
xmlhttp.open("GET","vote_design2.php?mode=pos&q="+str,true);
xmlhttp.send();
}
function hiddenHint2(str,divid)
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
xmlhttp.open("GET","vote_design2.php?q="+str,true);
xmlhttp.send();
}
function showHint3(str,divid)
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
xmlhttp.open("GET","vote_design3.php?mode=pos&q="+str,true);
xmlhttp.send();
}

function hiddenHint3(str,divid)
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
xmlhttp.open("GET","vote_design3.php?q="+str,true);
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
$s6="select * from duration where p_id='$id1' and spent='research'";
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


<p id="project-countdown" class="countdown" rel="75291"></p> 
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

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Product Research</h2> 
<p><p>In this project, we want you to submit sketches, images, videos, and other visuals that illustrate design directions for W. Bond&#8217;s <a href="#">easy grip, no slip solution for heavy pots and pans and more </a>. We w'll use the top concepts as a starting point for our final design sketches.</p> 
<p>To help get the creative juices flowing check out the <a href="#"> blog </a>for some inspiration!</p></p> 
<div class="button-holder"> 
<a href="#" class="button light small"> 
							Product Overview &raquo;
</a> 
</div> 
</div> 
<div class="bd idea-details-summary sub-box box-section filled-super-soft"> 
<div class="tile idea-detail votes-left"> 
<div class="detail-icon"> 
<img alt="User_icon_voted" src="images/user_icon_voted.png?1314105190" /> 
</div> 

<?php
$id1=$_GET['i_id3'];
 $s8="select distinct(u_id) from research where p_id='$id1'";
$q8=mysql_query($s8);
 $nr8=mysql_num_rows($q8);
$s3="select * from duration where p_id='$id1' and spent='research'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$v1=$r3['votes'];
$per=$r3['percent'];
}
$v=($v1-$nr8);
$p=($nr8/$v1)*100;
$p1=$per-$p;


?>
<p class="short"> 
<strong class="title">     
<span id="vote-counter"><?php echo $v; ?></span> Vote(s) Left for this project
</strong> 
</p> 
</div> 
<div class="tile idea-detail influence-left"> 
<div class="detail-icon pie-graph"> 
<img alt="Icon_pie25" src="images/icon_pie25.png?1314105190" /> 
</div> 
<p class="short"> 
<sup class="help-icon" title="Influence is a real-time measure of your contributions to a project. You can earn influence either by submitting a winning idea, or by supporting and refining that winning idea."><span>?</span> 
		
</sup> 
<strong class="title"> 
<?php echo $p1; ?>% Influence is up for grabs
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
<li class="expanded"> 
<a href="#"><span class="step">Product Research</span></a> 
<span>Time Left: <span class="countdown" rel="157153"></span><br/>

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
	
</div>


</div>	</div></form>							
<div class="button-holder">

</div>
<strong class="right">                                     
								
</strong>
</div> 

<?php
 $time2=date("m/d/Y");
 $time1=date('m/d/Y', strtotime($time2));
$sql10="select * from duration where p_id='$id1' and spent='branding'";
$query10=mysql_query($sql10);
$row10=mysql_fetch_array($query10);
 $time3=$row10['days'];
 $time=date('m/d/Y', strtotime($time3));
if($time1<$time)
{
?>


<div class="box mSmaller filled-super-soft idea-submit-content"> 

<form name="form1" method="post" action="">
<div class="right">
<div id="ideation-64601-vote-button-3" >
<table style="width:740px;">
<font size='4' style="color:red;margin-left:120px;"><?php echo $msg;?></font>
<?php

$i=0;
$sq="select * from question where i_id='$id1'";
$qu=mysql_query($sq);
while($r=mysql_fetch_array($qu))
{
echo "<tr><td>";
$qid=$r['qus_id'];
$ans_type=$r['answer_type'];
echo "<b>Question:</b>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "</td>";
echo "<td>";
echo $question=$r['question'];
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Answer:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "</td>";
echo "<td>";
$sq1="select * from answer where qus_id='$qid'";
$qu1=mysql_query($sq1);

while($r1=mysql_fetch_array($qu1))
{

if($ans_type=='single')
{

echo "<input type='radio' name='r2".$i."' id='r2' value='". $r1['answer'] ."' />";

} else
 {
echo "<input type='checkbox' name='r3[]' value='". $r1['answer'] ."' />";
}

echo $answer=$r1['answer'];
echo "<br/>";

}

echo "<br/>";
echo "</td></tr>";
$i=$i+1;
}

?>
</table>
</div>
<div style="padding-left:400px;">

<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#"  onClick="openbox1('Login',1)">
<input type="button"  name="submit"  value='submit' class="btnstyle"></a>
<?php } else { ?>
<input type="submit" name="submit"  value='submit' class="btnstyle">
<?php } ?>

</div>
</form>
</div>
<?php
}
?>
 
</div>    
</div>
</div>
</div></div>
  </div>
</div></div></div></div></div>

<div class="ftr" style="margin-top:55px;">
<?php include("include/footer.php"); ?>
</div></body>
</html>
