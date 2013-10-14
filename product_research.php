<?php
include("include/connect.php");
session_start();
?>
<?php
$id=$_GET['id'];
 $sq="select pc_quest from product_concept where pc_quest='Yes' and sub_id='$id'";
$qud=mysql_query($sq);
$r=mysql_fetch_array($qud);
 $c=mysql_num_rows($qud);

 $sq1="select pc_quest from product_concept where pc_quest='No' and sub_id='$id'";
$qud1=mysql_query($sq1);
$r1=mysql_fetch_array($qud1);

 $c1=mysql_num_rows($qud1);
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
<span class='breadcrumb-current'>Product Research</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
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

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;"><div class="form-controls box mSmaller filled-bright" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Product Research</h2> 
<p><p>Let&#8217;s get the ball rolling on Stephen Dillard&#8217;s winning <a href="http://www.quirky.com/ideations/74258">Litter Scoop</a> submission.</p> 
<p>This is your chance to chime in and start helping shape this product from the get-go!</p></p> 
<div class="button-holder"> 
<a href="/products/152-152-litter-scoop" class="button light small"> 
							Product Overview &raquo;
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
<li class="timeline-component"> 
<h3>Evaluation</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="product_eval.php"><span class="step completed">152 Litter Scoop</span></a> 
<span>Time Left: <span class="countdown" rel="-3944876"></span></span> 
</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="#"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="/projects/1006-152-litter-scoop-Concept-Phase"><span class="step completed">Concept Phase</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Branding</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="/projects/948-152-litter-scoop-Product-Tagline"><span class="step">Product Tagline</span></a> 
<span>Time Left: <span class="countdown" rel="12004"></span></span> 
</li> 
</ol> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="/projects/992-152-litter-scoop-CMF"><span class="step completed">Cmf</span></a> 
</li> 
</ol> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="/projects/1003-152-litter-scoop-Product-Naming"><span class="step">Product Naming</span></a> 
<span>Time Left: <span class="countdown" rel="11764"></span></span> 
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


</div></div>

</form>							

<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<form name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">
<div class="clear"></div>
</div>
<div class="submit-item1" style="border-bottom:1px solid #E5E5E5;">
<p class="item-title"><b>1. Result</b></p><br /><br />


<div id="pieCanvas" style="position:absolute;height:15px;width:30px;margin-top:-210px; margin-left:260px;"></div>

<script type="text/javascript">
var p = new pie();
p.add("yes",<?php echo $c; ?>);
p.add("no",<?php echo $c1; ?>);
	
p.render("pieCanvas", "Pie Graph")

</script>
</div>
</form></div></div>

			
	</div></div>
  </div>
</div></div></div></div></div>


		
<div class="ftr">
<?php include("include/footer.php"); ?>
</div></body>
</html>
