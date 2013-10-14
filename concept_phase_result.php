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
<a href='concept_phase.php?id1=<?php echo $idl; ?>' class='breadcrumb-link'>Concept Phase Result</a>
</p> 
</div> 
</div> 

<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<span id="cntdwn4" style="background-color:white; color:#FF00FF"><font size="+1"><b>Completed</b></font></span>
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
<font size="+2" color="#000099">Concept Phase</font>
<p></p><p>In this project, we want you to submit sketches, images, videos, and other visuals that illustrate design directions for <a href="#">Steffani Adaska’s <span class="caps">BBQ</span> Oil Brush</a>. We’ll use the top concepts as a starting point for our final design sketches.</p>
<p>Have fun!</p><p></p>
<div style="padding-top:10px;" class="row"></div>
<font size="+2" color="#000099">The Winners!</font><br/><br/>
<?php
 $s10="SELECT * FROM `design` WHERE  vote=(select max(vote) from `design` where p_id='".$_GET['i_id3']."' ) and p_id='".$_GET['i_id3']."' ";
$q10=mysql_query($s10);
$r10=mysql_fetch_array($q10);

//echo $name=$r7['d_name'];
$sid=$r10['p_id'];
 $did=$r10['d_id'];
  $dgn=$r10['design'];
  $dname=$r10['d_name'];
 
?>
<table>
<tr>
<td><img src="admin/uploadimage/<?php echo $r10['design']; ?>" style="width:255px;height:200px;"></td><td style="padding-left:75px;"><b><font color="#000099"><?php echo $dname; ?></font></b></td>
</tr>
</table>

</div> 
<div class="bd idea-details-summary sub-box box-section filled-super-soft"> 


 
 
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
<a href="product_research.php?i_id3=<?php echo $id1; ?>"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
 
<ol class="timeline-component-steps"> 
<li class="timeline-component">
<a href="#"><span class="step completed">Concept Phase</span></a> 

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
<h3 style="width:230px;"><img src="images/icon_small_comments1.png"/>Comments(<?php echo $nr2; ?>)
Total Votes <font size=3 color=blue>(<?php echo $r7['vote']; ?>)</font></h3>





<?php 
if($_SESSION['u_id']=="")
{
?>



<span class="check"></span></a>
</div>
<?php } ?>
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
