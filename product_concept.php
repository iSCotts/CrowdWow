<?php
include("include/connect.php");
session_start();
$id1=$_GET['i1_id'];
if(isset($_POST['submit']))
{
 
 $radio=$_POST['r1'];
 $text=$_POST['idea_problem'];
 $sql="insert into product_concept (sub_id,pc_quest,pc_comment) values ('$id1','$radio','$text')";
 $query=mysql_query($sql);
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
<span class='breadcrumb-current'>Product Research</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<?php
include("timer4.php");
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

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;"><div class="form-controls box mSmaller filled-bright" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Product Research</h2> 
<p><p>In this project, we&#8217;ll need you to answer some key research questions about Nick LaPoulas&#8217;s <a href="#">Expandable Kitchen Utensil Holder</a> so we can further define this product.</p> 
<p>This is your chance to chime in and start helping shape this product from the get-go!</p></p> 
<div class="button-holder"> 
<a href="#" class="button light small"> 
							Product Overview &raquo;
</a> 
</div> 
</div> 
<div class="bd idea-details-summary sub-box box-section filled-super-soft"> 
<div class="tile idea-detail influence-left"> 
<div class="detail-icon pie-graph"> 
<img alt="Icon_pie25" src="images/icon_pie25.png?1312502484" /> 
</div> 
<p class="short"> 
<sup class="help-icon" title="Influence is a real-time measure of your contributions to a project. You can earn influence either by submitting a winning idea, or by supporting and refining that winning idea."><span>?</span> 
		
</sup> 
<strong class="title"> 
5% Influence is up for grabs
</strong> 
</p> 
</div> 
 
 
<div class="tile idea-detail big-countdown"> 
<p> 
<span class="countdown" rel="75291"> 
							   
</span> 
<span class="countdown-extended">left</span> 
<strong class="title"> 
											Take this survey and earn influence
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
<li class="expanded">
<?php  
$id2=$_GET['i1_id'];
?>
<a href="product_eval.php?i_id=<?php echo $id2;  ?>"><span class="step completed">Product Evaluation</span></a> 
<span>Time Left: <span class="countdown" rel="-573347"></span></span> 
</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="#"><span class="step">Product Research</span></a> 
<span>Time Left: <span class="countdown" rel="75291"></span></span> 
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




<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<form name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">
<div class="clear"></div>
</div>
<div class="submit-item1" style="border-bottom:1px solid #E5E5E5;">
<p class="item-title"><b>1. Is this helpful for you?</b></p>
<div style="padding:0 20px;"><input type="radio" name="r1" value="Yes" />Yes
<input type="radio" name="r1" value="No" />No</div>
</div><br/>








<div class="clear"></div>
<div class="submit-item1" style="border-bottom:1px solid #E5E5E5;">
<p class="item-title"><b>2. Any other comments you would like to make?</b></p>
<div><textarea cols="40" id="idea_problem" name="idea_problem" rows="20"></textarea></div>

</div>
<div align="right"><input type="submit" name="submit" value="Continue"/></div>
</form></div></div>

			
	</div></div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div></body>
</html>
