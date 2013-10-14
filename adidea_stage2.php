<?php 
include("include/connect.php");
session_start();
$sub_id=$_GET['sid'];
$sql3="SELECT * FROM submit_idia WHERE sub_id='$sub_id'";
$query3=mysql_query($sql3);

while($row = mysql_fetch_array( $query3 ))
{
 $didea=  $row['desc_idea'];
 $category=$row['category'];
 $d_prob= $row['desc_problem'];
 $d_solut=$row['desc_solution'];
 $attechfile=$row['attach_files'];
}
if(isset($_POST['steg2']))
{
?>
<script type="text/javascript">
window.location.href="adidea_stage3.php?sid=<?php echo $sub_id; ?>";
</script>
<?php
}
if(isset($_POST['submit']))
{
?>
<script type="text/javascript">
window.location.href="adidea_stage01.php?sid=<?php echo $sub_id; ?>";
</script>
<?php 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Invent</title>
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
<a href='invent.php' class='breadcrumb-link'>Invent</a>
			&nbsp;/&nbsp;
<span class='breadcrumb-current'>Project Stage 2</span>
</p>

</div>

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
<script>
function add_more1_text_box(parent_id, child_name1, child_id1)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name1);
  oInput.setAttribute('id', child_id1);
  oDiv.appendChild(oInput);
} 

var child_id1 = 1;
function child1()
{ 
		return child_id1++;
}	
</script>

<div class="page quirky-idea">

 <div class="tier mSmaller x12 quirky-idea">
 </div>  


<div class="tier x12">
<div class="column x9">
<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="form-controls box mSmaller filled-bright"><strong>Preview Your Submission</strong> 
  
  <div class="button-holder"><strong>Step 2 of 3</strong>

</div>
<strong class="right">                                     
								
</strong>
</div> 





<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<form name="form1" method="post" action="" enctype="multipart/form-data">

<p class="item-title">Idea Description</p>
<p class="item-subtitle"><?php echo $didea; ?></p>

<p><a class="right" href="#"><span id="char_counter"></span></a></p>
<div class="clear"></div>
</div>
<div class="submit-item">
<p class="item-title"><b>Choose a Category</b></p>
<p class="item-subtitle"><?php echo $category; ?></p>



<div class="clear"></div>
</div>     
<div class="submit-item">  
<div class="problem_based">

<p class="item-title">Describe the Problem Youâ€™d Like to Solve</p>
<p class="item-subtitle"><?php echo $d_prob; ?></p>

										
</p>      
</div>
<div class="design_based">

<p class="item-title">Describe Your Product </p>
<p class="item-subtitle"></p>
									   
</p>      
</div>

						

<div class="clear"></div>
</div>
<div class="submit-item">
<div class="problem_based">

<p class="item-title">Describe Your Proposed Solution</p>
<p class="item-subtitle"><?php echo $d_solut; ?></p> 
</div>
<div class="design_based">

<p class="item-title">Describe your customer</p>
<p class="item-subtitle"></p> 

</div>

						

</div>
<div class="submit-item">

<p class="item-title">Describe Your Product's Key Features</p>
<p class="item-subtitle">
<?php 
$sql4="SELECT * FROM sub_product WHERE sub_id='$sub_id'";
$query4=mysql_query($sql4);
while($row4 = mysql_fetch_array( $query4 ))
{
echo $row4['desc_product'];
echo "<br>";
}

 ?>
</p>
		
<div id="add_more_div">
	  <div></div>
</div>
<a href="javascript:;"  onclick="return add_more_text_box('add_more_div','add_more[]',child());"></a>

</p>

</div>
<div class="submit-item">
 
<p class="item-title">List Some Similar Products</p>
<p class="item-subtitle">
<?php 
$sql5="SELECT * FROM sub_similar WHERE sub_id='$sub_id'";
$query5=mysql_query($sql5);
while($row5 = mysql_fetch_array( $query5 ))
{
echo $row5['desc_similar'];
echo "<br>";
}

?>
</p>
				
<div id="add_more1_div">
	  <div></div>
</div>
<a href="javascript:;"  onclick="return add_more1_text_box('add_more1_div','add_more1[]',child1());"></a>

</div>  










						
<div id="browse_files">
<label for="file"></label>
</div>   


				


				

 <div class="form-controls box filled-bright">
<strong>Step 2 of 3</strong>

<div class="button-holder">
<input type="submit" name="submit" value="Edit" class="btnstyle">
<input type="submit" name="steg2"  value='Continue' class="btnstyle"/>


</div>				
</div>
</form></div></div>

			




			

	
	<?php //include("learn/faq_a.php"); ?>
	</div></div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
