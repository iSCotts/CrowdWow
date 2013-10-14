<?php 
@session_start();
include("include/connect.php");
$s_id=$_GET['sid'];
if(isset($_POST['steg1']))
{

if ($_FILES["file"]["size"] < 20000000)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {

    if (file_exists("upload_idea/" . $_FILES["file"]["name"]))
      {
      $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload_idea/" . $_FILES["file"]["name"]);
	  }
    }
  }
else
  {
  "Invalid file";
  
}
 $didea=  $_POST['idea_title'];
 $category=$_POST['shopradio'];
 $d_prob= $_POST['idea_problem'];
 $d_solut=$_POST['idea_solution'];
 $attechfile=$_FILES["file"]["name"];
 $id=$_SESSION['u_id'];
 $s_id=$_GET['sid'];
 $sql="update submit_idia set u_id='$id',project_type='A',desc_idea='$didea',category='$category',desc_problem='$d_prob',desc_solution='$d_solut',invest='$bal',attach_files='$attechfile' where sub_id='$s_id'";


$query=mysql_query($sql);

$sql2="SELECT * FROM submit_idia WHERE desc_idea='$didea'";
$query2=mysql_query($sql2);
if($row2=mysql_fetch_array($query2))
{
$sub_id=$row2['sub_id'];
}

foreach($_POST['add_more'] as $add_more)
{
$sql3="insert into sub_product (sub_id, desc_product) VALUES ('$sub_id','$add_more')";
$query3=mysql_query($sql3);
}

{
$sub_id=$row2['sub_id'];
}

foreach($_POST['add_more1'] as $add_more1)
{
$sql4="insert into sub_similar (sub_id, desc_similar) VALUES ('$sub_id','$add_more1')";
$query4=mysql_query($sql4);
}?>
<script type="text/javascript">
window.location.href="adidea_stage2.php?sid=<?php echo $sub_id; ?>";
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
<span class='breadcrumb-current'>Project Stage 1</span>
</p>
<div class="column-r x2">

 <div class="h-countdown">
   <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>
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

	
<script type="text/javascript">
function validateForm()
{
if(document.form1.idea_title.value=="")
{
document.getElementById('idea_title_a').innerHTML='<font color="red" size="2px">Please Enter Idea Description</font>';
return false;
}

if(document.form1.idea_problem.value=="")
{
document.getElementById('idea_problem_b').innerHTML='<font color="red">Please Enter Describe the Problem</font>';
return false;
}

if(document.form1.idea_solution.value=="")
{
document.getElementById('idea_solution_c').innerHTML='<font color="red">Please Enter Describe Your Proposed Solution</font>';
return false;
}

if(document.form1.file.value=="")
{
document.getElementById('file_c').innerHTML='<font color="red">Please Enter image</font>';
return false;
}

return true;
}

</script>
<div class="page quirky-idea" style="width:800px">
<div class="tier mSmaller x12 quirky-idea">

<h1><font size="5">Submit Your Idea</font></h1>
</div>

  <?php 
$sql5="SELECT * FROM project where p_status='1' ";
$query5=mysql_query($sql5);
if($row5=mysql_fetch_array($query5))
{
 $title=$row5['pro_title'];
$detail=$row5['pro_detail'];
?>
<div>
<h1><font size="+2"><?php echo $title; ?></font></h1>
</div>
<div style="margin-top:15px;">
<h2><font size="+1">The Brief</font></h2>
</div>
<div  style="margin-top:15px; margin-bottom:25px;">
<h4><?php echo $detail; ?></h4>
</div>

<?php
}
?>


 

<div class="tier x12">
<div class="column x9"> 

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;"><div class="form-controls box mSmaller filled-bright" style="width:770px">
<strong>Tell Us About Your Idea</strong>
</div>	</div></form>							
<div class="button-holder">

</div>
<strong class="right">                                     
								
</strong>
</div> 
<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<?php
$s2="select * from submit_idia where sub_id='$s_id'";
$q2=mysql_query($s2);
while($r2=mysql_fetch_array($q2))
{
?>
<form name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">

<p class="item-title"></b>140-Character Idea Description<b style="color:#FF0000">*</b></b></p>
<p class="item-subtitle">Here's your big chance to pitch the community on your idea. Be descriptive and convincing!</p>
<textarea cols="40" id="idea_title" name="idea_title" rows="20"><?php echo $r2['desc_idea']; ?></textarea>
<div class="clear"></div>
<div id="idea_title_a"></div>
</div>
<div class="submit-item1" style="border-bottom:1px solid #E5E5E5;">
<p class="item-title"><b>Choose a Category</b></p>
<p class="item-subtitle">Which of these categories best fits your idea?</p>
<?php 
$sql="SELECT * FROM shop";
$result = mysql_query($sql);
$nr=mysql_num_rows($result);
$k=0;
for($i=0;$i<ceil($nr/3);$i++)
{
echo "<table><tr>";
if($k==2)
{
$k=2;
}
else if($k==1)
{
$k=1;
}

else { $k=3;}
for($j=0;$j<$k;$j++)
{

$row = mysql_fetch_array($result);
echo "<td width='200'>";
echo "<input type='radio' value='".$row['s_name']."'  name='shopradio' />";
echo $row['s_name']; 
echo "</td>"; 
}
$k=$nr-3;
echo "</tr>"; 
}
 echo "</table>";
?>
<div class="clear"></div>

</div>     
<div class="submit-item">  
<div class="problem_based">

<p class="item-title" style="padding-top:20px;">Describe the Problem You would Like to Solve<b style="color:#FF0000">*</b></p>
<p class="item-subtitle">

										We believe the best products solve a problem, so tell us yours.
</p>      
</div>
<div class="design_based">

<p class="item-title">Describe Your Product </p>
<p class="item-subtitle">
									   Tell us a little bit about your product.
</p>      
</div>
<textarea cols="40" id="
idea_problem" name="idea_problem" rows="20"><?php echo $r2['desc_problem']; ?></textarea>
						

<div class="clear"></div>
<div id="idea_problem_b"></div>
</div>
<div class="submit-item">
<div class="problem_based">

<p class="item-title">Describe Your Proposed Solution<b style="color:#FF0000">*</b></p>
<p class="item-subtitle">How is your product idea going to solve the problem described above?</p> 
</div>

<div class="design_based">

<p class="item-title">Describe your customer</p>
<p class="item-subtitle">Who do you see buying this?</p> 

</div>
<textarea cols="40" id="idea_solution" name="idea_solution" rows="20"><?php echo $r2['desc_solution']; ?></textarea>
						
<div id="idea_solution_c"></div>
</div>
<div class="submit-item">

<p class="item-title">Describe Your Product's Key Features</p>
<p class="item-subtitle">What makes your product special?</p>
		
<div id="add_more_div">
	  <div><input type="text" id="add_more" name="add_more[]" ></div>
</div>
<a href="javascript:;"  onclick="return add_more_text_box('add_more_div','add_more[]',child());"><strong>add more</strong></a>

</p>

</div>
<div class="submit-item">
 
<p class="item-title">List Some Similar Products</p>
<p class="item-subtitle">Research what else is out there and list your product's potential competitors here.</p>
				
<div id="add_more1_div">
	  <div><input type="text" id="add_more1" name="add_more1[]" ></div>
</div>
<a href="javascript:;"  onclick="return add_more1_text_box('add_more1_div','add_more1[]',child1());"><strong>add Product</strong></a>

</div>  
<div id="browse_files">
<label for="file">Filename:<b style="color:#FF0000">*</b></label>
<input type="file" name="file" id="file" value="<?php echo $r2['attach_files']; ?>"/>
<div id="file_c"></div>  
</div>
<?php
}
?>   
<div class="form-controls box filled-bright" style="margin-top:35px;">
<strong>Step 1 of 3</strong>

<div class="button-holder">

<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" onClick="openbox1('Login',1)">
<input type="button"  name="steg1"  value='Continue' class="btnstyle"/></a>
<?php } else { ?>
<input type="submit" name="steg1"  value='Continue' class="btnstyle"/>
<?php } ?>

</div>				
</div>
</form></div></div>

			
	</div></div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
