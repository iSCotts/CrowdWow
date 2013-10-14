<?php
include("include/connect.php");
session_start();
$email=$_SESSION['email'];
$sq="select * from user where u_email='$email'";
$q=mysql_query($sq);
while($r2=mysql_fetch_array($q))
{
	$u_id=$r2['u_id'];
}
$id=$_GET['i_id2'];
if(isset($_POST['submit']))
{

 $text=$_POST['idea_problem'];
 $sql="insert into pro_naming (u_id,sub_id,pro_name) values ('$u_id','$id','$text')";
 $query=mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>infulenceit</title>
<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">
<link href="stylesheets/com.quirky.extrad6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	


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

</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 

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

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;"><div class="" style="width:981px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="page quirky-community"> 
 
<div class="tier x12 page-header"> 
<div class="column x7"> 
<div class='box'> 
<h1 class='light-sans'><a href=''>Community</a></h1> 
<p class='page-description light-sans'>Welcome to our community of people just like you. Here you can connect with hundreds of Quirky members to share ideas.</h2> 
</div> 
</div> 
</div> 
</form>							
<div class="button-holder">

</div>
<strong class="right">                                     
								
</strong>
</div> 






<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
<form name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateForm();">
<div class="tier x12" style="margin-top:-60px;"> 
<div class="column x4"> 
<div class='box search-widget'> 
<div class='hd'> 

</div> 
<div class='bd'> 


<form action="" class="search" method="get"><p> 

</form></div> 
</div> 
	
<div class='box recently-contributed'> 
<div class='hd'> 

</div> 
<div class='bd'> 

<div class='left onethird'> 

</div> 
<div class='left twothird'> 
 
</div> 
</div> 
</div> 
<?php include("top_influ.php"); ?>		
</div> 
<div class="column x8 last" style="float:right; margin-top:-438px;"> 
<div class='box browse-users'> 
<div class='hd'> 
<div class="browse-controls"> 
<div class="row" style="margin-top:51px;"> 
<?php
$pid=$_GET['pid'];
$s3="select * from product where p_id='$pid'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$pname=$r3['p_name'];
}
?>
<h2 class="view-title"><?php echo $pname; ?> Influencers</h2> 
<div class="filters-holder"> 
<div class="drop-down"> 

</div> 
</div> 
</div> 
<div class="row"> 
<div class="page-viewing"> 

 
</div> 

</div> 
</div> 
</div> 
<div class='bd'> 
<ol class="browse-users-stack"> 
<li class="browse-users-item">
<?php 
 $s="select distinct (pro_naming.u_id) from pro_naming inner join user where user.u_id=pro_naming.u_id and pro_naming.sub_id='$pid'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$uid=$r['u_id'];

$s1="select distinct (user.u_firstname) from pro_naming inner join user where user.u_id=pro_naming.u_id and pro_naming.sub_id='$pid' and user.u_id='$uid'";
$q1=mysql_query($s1);
while($r1=mysql_fetch_array($q1))
{
$fname=$r1['u_firstname'];
$lname=$r1['u_lastname'];
}
 $s2="select distinct (user_profile.image) from user_profile inner join pro_naming where user_profile.u_id='$uid' and pro_naming.sub_id='$pid'";
$q2=mysql_query($s2);
while($r2=mysql_fetch_array($q2))
{
$image=$r2['image'];



?>
<table><tr><td> 
<a href="topinfluence.php?$id=<?php echo $uid; ?>"><img class="thumb" src="upload_image/<?php echo $image; ?>" height="60" width="60" /></a> 
<?php //} ?></td><td>
<div class="info-block"> 
<h4><a href="topinfluence.php?$id=<?php echo $uid; ?>"><?php echo $fname; ?></a></h4></div><div style="float:right; padding-left:440px;text-align:right; margin-top:-21px;"><a href="inboxmsg.php?$id=<?php echo $uid; ?>">Message</a> </div> 
<?php //} ?><!--<cite class="products-influenced">37.89% Influence</cite> -->
 </td><td>
<!--<div class="tools"> 
<a href="inboxmsg.php?$id=<?php echo $uid; ?>">Message</a> 
</div>--> </td></tr></table><?php }} ?>
</li> 
</ol> 
</div> 
<div class="browse-controls"> 
<div class="page-viewing"> 

 
</div> 

</div> 
</div> 
					
</div> 
	
</div> 
</div> 
 
 
 
      
</div> 
   
  </div>
</div></div></div></div></div></div></div></div></div></div>

<div class="ftr">
<?php include("include/footer.php"); ?>
</div></body>
</html>
