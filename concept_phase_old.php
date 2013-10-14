<?php
include("include/connect.php");
@session_start();
$email=$_SESSION['email'];
$sq="select * from user where u_email='".$email."'";
$q=mysql_query($sq);
while($r2=mysql_fetch_array($q))
{
	$u_id=$r2['u_id'];
}
$id1=$_GET['i_id3'];
?>
<?php
if(isset($_POST['submit']))
{

  $value=$_POST['r2'];

  $value1=$_POST['r3'];

$i=0;
$s="select * from question where i_id='".$id1."'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $q_id=$r['qus_id'];

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
<span class='breadcrumb-current'>Concept Phase</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<?php
include("timer7.php");
?>
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
<h2>Concept Phase</h2> 
<p><p>In this project, we want you to submit sketches, images, videos, and other visuals that illustrate design directions for W. Bond&#8217;s <a href="#">easy grip, no slip solution for heavy pots and pans and more… </a>. We’ll use the top concepts as a starting point for our final design sketches.</p> 
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
$s="select sum(pro_vote) as vo from pro_naming where sub_id='$id1'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$votes=$r['vo'];
}
$v=10-$votes;
$p=($v/10)*100;
//echo $v;
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
<?php echo $p; ?>% Influence is up for grabs
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
<a href="product_eval.php"><span class="step completed">Product Evaluation</span></a> 

</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="product_research.php"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="#"><span class="step">Concept Phase</span></a> 
<span>Time Left: <span class="countdown" rel="157153"></span></span> 
<?php
include("timer4.php");
?>
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
else
{
?>
<div class="box mSmaller filled-super-soft idea-submit-content" style="height:150px;">
<?php
//include("pi_chart.php");

?>
<div id="pieCanvas" style="position:absolute;height:15px;width:30px;margin-top:-130px; margin-left:66px;"></div>
<?php
$s4="select * from question where i_id='$id1'";
$q4=mysql_query($s4);
while($r4=mysql_fetch_array($q4))
{
 $q=$r4['qus_id'];
 $ques=$r4['question'];
 $s5="select * from answer where qus_id='$q'";
$q5=mysql_query($s5);
while($r5=mysql_fetch_array($q5))
{
 $a=$r5['ans_id'];
 $ans=$r5['answer'];
 $q1=$r5['qus_id'];
 $a_vote=$r5['answer_vote'];

//echo $ques;
}
}
?>

<script type="text/javascript">
var p = new pie();
p.add('<?php echo $ans; ?>','<?php echo $a_vote; ?>');
p.add("no",90);
p.render("pieCanvas", "Pie Graph")

</script>
<?php  ?>
</div>
<?php } ?>   
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
