<?php 

session_start();
$id=$_GET['id'];
if(isset($_SESSION['password'])=="")
{
?>
<script>
window.location.href="index.php";
</script>
<?php
}
include("include/connect.php");
include("include/header.php");
	 include("include/leftsidebar.php"); ?>
<?php

if(isset($_POST['submit']))
{
$query2=mysql_query("select * from question where i_id='$id'");
$count=mysql_num_rows($query2);
if($count==0)
{
$ques_name="Q1";
}
else
{
$aa=$count+1;
echo $ques_name="Q".$aa;
$count=$count+1;
}

$qus=$_POST['question'];
$ans=$_POST['add_more'];
$ans1=$_POST['answer1'];
$id=$_GET['id'];
$sql="insert into question(ques_name,question,i_id,answer_type) values('$ques_name','$qus','$id','$ans1')";
mysql_query($sql);
$s="select * from question where question='$qus'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$qid=$r['qus_id'];
}
$m=1;
foreach($_POST['add_more'] as $add_more)
{
$ans_name="A".$m;
$sql1="insert into answer(ans_name,qus_id,answer) values('$ans_name','$qid','$add_more')";
mysql_query($sql1);
$m++;
}
?>
<script type="text/javascript">
window.location.href="question1.php?id=<?php echo $id; ?>&dm=msg";
</script>
<?php
}
?>
<head>
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
    oInput.setAttribute('size', '51');
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
</head>

<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully add user"; }?>
	</h4>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">Add Question</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		
<form name="form1" action="" method="post">
	
	<table style="padding-left:225px"> 
<tr>
<td height="30">Question</td>
<td><textarea name="question"  cols="40" rows="5"></textarea></td></tr>

<tr>
<td height="30" style="vertical-align:top;">Answer</td>
<td><div id="add_more_div"><input type="text"  name="add_more[]" id="add_more" size="51"  /></div><a href="javascript:;"  onclick="return add_more_text_box('add_more_div','add_more[]',child());"><strong>add more</strong></a></td></div></tr>
<tr>
<td height="30">Answer Type</td>
<td><select name="answer1" >
<option>Select Answer</option>
<option value="single">Single Type</option>
<option value="multiple">Multiple Type</option>
</select></td>
<tr>
<td height="50" style="margin-left:0px"><input name="submit" type="submit" value="Submit"></td>
</tr></table>
</form></div>
				 
		
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>