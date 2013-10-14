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
<span class='breadcrumb-current'>Product Research Result</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<font size=4 color="magenta">Complete</font>
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
<h2>Product Research Result</h2> 
<p><p>In this project, we want you to submit sketches, images, videos, and other visuals that illustrate design directions for W. Bond&#8217;s <a href="#">easy grip, no slip solution for heavy pots and pans and more… </a>. We’ll use the top concepts as a starting point for our final design sketches.</p> 
<p>To help get the creative juices flowing check out the <a href="#"> blog </a>for some inspiration!</p></p> 
 
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
<a href="#"><span class="step  completed">Product Research</span></a> 
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
</div> 

<?php
$sql2=mysql_query("select * from question where i_id='$id1'");
while($row2=mysql_fetch_array($sql2))
{
$m=$row2['qus_id'];
?>
<script type="text/javascript" src="chart/wz_jsgraphics.js"></script>
<script type="text/javascript" src="chart/pie.js"></script>

<div class="box bordered filled-super-soft" style="height:350px;">
<div class="hd">
<div class="left x5">
<div style="margin-left:20px;margin-top:20px;"> <b><?php echo "Question :"; ?><?php echo $row2['question']; ?></b></div>
<div style="margin-left:20px;margin-top:20px;"> <b><?php echo "Result :"; ?></div>
<div id="pieCanvas<?php echo $m; ?>" ></div>


<script type="text/javascript">
var p = new pie();
<?php
$sql3=mysql_query("SELECT * FROM answer WHERE qus_id='$m'");
while($row3=mysql_fetch_array($sql3))
{
?>
p.add("<?php echo $row3['answer']; ?>",<?php echo $row3['answer_vote']; ?>);
<?php
}
?>
p.render("pieCanvas<?php echo $m; ?>", "Pie Graph")
</script>

</div>    
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
