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
xmlhttp.open("GET","vote_idea3.php?mode=pos&q="+str,true);
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
xmlhttp.open("GET","vote_idea3.php?q="+str,true);
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
<a href='concept_phase.php?id1=<?php echo $idl; ?>' class='breadcrumb-link'>Concept Phase</a>
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 

<?php
$s6="select * from duration where p_id='$id1' and spent='design'";
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
$s="select sum(vote) as vo from design where p_id='$id1'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$votes=$r['vo'];
}
$s3="select * from duration where p_id='$id1' and spent='design'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$v1=$r3['votes'];
$per=$r3['percent'];
}
$v=$v1-$votes;
$p1=($votes/$v1)*100;
$p=$per-$p1;
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
<a href="#"><span class="step completed">Product Evaluation</span></a> 

</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="product_res_result.php?i_id3=<?php echo $id1; ?>"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="#"><span class="step">Concept Phase</span></a> 
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

?>


<div class="box mSmaller filled-super-soft idea-submit-content"> 

<form name="form1" method="post" action="">
<div class="right">
<div id="ideation-64601-vote-button-3" >
<table style="width:740px;">
<tr><td>
<?php
 $s7="select * from design where p_id='$id1'";
$q7=mysql_query($s7);
while($r7=mysql_fetch_array($q7))
{
//echo $name=$r7['d_name'];
$sid=$r7['p_id'];
 $did=$r7['d_id'];
?>

<div class="box bordered filled-super-soft">
<div class="hd">
<div class="left x5">

<?php 
 @$query2=mysql_query("select design_comment.dcmmnt,design_comment.d_id,user.u_id,user.u_id from design_comment inner join user on design_comment.u_id=user.u_id where design_comment.d_id='$did'");
@$nr2=mysql_num_rows($query2);
if($nr2==0)
{
 "<font size=3 color=blue>(0)</font>";
}
else
{
"<font size=3 color=blue>(".$nr2." )</font>";
}
?>



<a href="idea3.php?d_id=<?php echo $did; ?>"><img src="admin/uploadimage/<?php echo $r7['design']; ?>" style="width:255px;height:200px;"></a><br>
<h3 style="width:230px;"><a href="idea3.php?d_id=<?php echo $did; ?>"><b><?php echo $r7['d_name']; ?></b> </a></h3>
<h3 style="width:230px;"><a href="idea3.php?d_id=<?php echo $did; ?>&id1=<?php echo $id1; ?>"><img src="images/icon_small_comments1.png"/>Comments(<?php echo $nr2; ?>)
</a>Total Votes <font size=3 color=blue>(<?php echo $r7['vote']; ?>)</font></h3>





<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" class="button icon bright" onClick="openbox1('Login',1)"><span class="text" style="width:195px;">Vote For This Idea</span> <span class="check"></span></a></div>
<?php } else { ?>

<div id="<?php echo  $did; ?>">
<?php
$query11="select u_id from design where p_id='$id1' and d_id='$did'";
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
<a  style="background-color:#666666" class="button icon bright" onclick="hiddenHint(<?php echo $did; ?>,<?php echo $did; ?>)" >
<span class="text" style="width:195px;">Take your Vote</span>
<?php } } else { ?>
<a  class="button icon bright" onclick="showHint(<?php echo  $did; ?>,<?php echo  $did; ?>)" >
<span class="text" style="width:195px;">Vote For This Idea</span> 
<?php }  ?>

<span class="check"></span></a>
</div>
<?php } ?>

</div>       
</div>
</div>

</div>
</div>
</div>



</td></tr>

</table>
</div>
</div>
</form>
</div>



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
