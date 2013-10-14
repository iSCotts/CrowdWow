<?php
@session_start();
include('include/connect.php'); 

 $o_id=$_GET['o_id'];
 $t_id=$_GET['t_id'];
 $u_id=$_SESSION['u_id'];

if(isset($_POST['submit']))
{

 $comment=  $_POST['comment'];
 //$category=$_POST['shopradio'];


 $sql="insert into topic_comment (topic_comments,t_id,u_id,o_id,date) VALUES ('$comment','$t_id','$u_id','$o_id',CURDATE())";
$query=mysql_query($sql);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Topic</title>
<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">
<link href="stylesheets/com.quirky.extrad6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["comment"].value
if (x==null || x=="")
  {
  alert("comment must be filled out");
  return false;
  }
}
</script>

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
xmlhttp.open("GET","vote_idea.php?q="+str,true);
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
    
	<div class="page quirky-influence">
<div class="tier mSmaller x12">
<div class='breadcrumb box left filled-soft'>
<p class='breadcrumb-links'>
<a href='community.php' class='breadcrumb-link'>Community</a>
				&nbsp;/&nbsp;

<a href='forum.php' class='breadcrumb-link'>Forum</a>
				&nbsp;/&nbsp;
<span class="breadcrumb-current">Topic Comment</span></p>
</div>
</div>
<div class="tier x12">
<div class="column x8">
  <div id="comments-grid-frame">



<?php

$sql12="select u_id from topic where t_id='$t_id'";
$query12=mysql_query($sql12);
while($row12=mysql_fetch_array($query12))
{
 $uid=$row12['u_id'];
}

$sql="select user.u_firstname,user.u_lastname,user_profile.image from user inner join user_profile on user.u_id=user_profile.u_id where user.u_id='$uid'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
 $first=$row['u_firstname'];
$last=$row['u_lastname'];
$image1=$row['image'];
 }
   ?>

</hr>
<div class="panel-set yTierPanel filled-soft" style="height:230px;">
<div class="tier x12">
<div class="column x8"  style="width:1030px;">
<div class="user-idea-summary box filled-soft squared"  style="width:1030px;">

<div class="hd"  style="width:625px;">

<!--<img class="thumb" src="http://s3.amazonaws.com/kore/production/profiles/avatars/99915/three6/beer_and_cat.jpg" alt=""/>-->
<?php 
if($image1=="")
{
?>
<img class="thumb" alt=""  src="upload_image/user_noimage.png" width="40px" height="40px" />
<?php
}
else
{
?>
<img class="thumb" alt=""  src="upload_image/<?php /*echo $username*/ echo @$image1;  ?>" width="40px" height="40px" />
<?php } ?>
<h2>

<a href="/users/73655"><?php echo $first; ?><?php echo $last; ?></a> 
							</h2>
<div class="">
<span class="st_sharethis" displayText="ShareThis"></span></div>
</div>
<div class="bd big-text"  style="width:625px; height:1000px;"><h1>Topic:</h1>
<p>
<?php
$sql1="select topic_title from topic where t_id='$t_id'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
echo $title=$row1['topic_title'];
}
 
   ?>
</p>

</div>

</div>
</div>
</div>




<div style=" height:350px; width:300px;float:; margin-left:650px; margin-top:-260px;">


<div class="meet-the-inventor box dot-side" >
<div class="">
<h3 class="no-bg no-padding">Meet The Inventor</h3>
</div>

<div style=" height:20px;"></div>
</div>
</div>
</div>
</div>
	
<div class="tier x12">
<div class="column x8">
			
			     
<div class="problem box big-text">
<div class="hd h-graphic">
<h3>Topic Description:</h3>
</div>
<div class="bd">   
<p><p>
<?php
@$sql="select topic_desc from topic where t_id='$t_id'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
echo @$prob=$row['topic_desc'];


 }  ?>
</p></p>
</div>
</div>  
</div>
</div>  





<div class="clear comments box">
<div class="hd h-graphic">
<h3>Responses
<?php /* 
@$query2=mysql_query("select * from id_comment where sub_id='$s_id'");
@$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "<font size=3 color=blue>(0)</font>";
}
else
{
echo "<font size=3 color=blue>(".$nr2." )</font>";
}*/
?>
</h3>
</div>

<div id="big-comment-form">
		
<form action="" class="comment-form" id="new-comment" method="post" name="myForm"  onsubmit="return validateForm()"><div class="form-controls">
<h4>Leave a Response</h4>
</div>
<textarea cols="40" id="comment_body" name="comment" rows="20"></textarea>

<div class="form-controls">
  <label><?php
if($_SESSION['u_id']=="")
{
?>
<a href="#" onclick="openbox1('Login',1)"><input type="button" name="submit" id="submit" value="Submit Your Response" /></a>
<?php } else { ?>
<input type="submit" name="submit" id="submit" value="Submit Your Response" />
<?php } ?>
 <!-- <input type="submit" name="submit" id="submit" value="Submit Your Comment" />-->
  </label>
</div>
				

</form></div>

<?php 
echo "<table>";
@$query3=mysql_query("select topic_comment.topic_comments,topic_comment.date,topic_comment.u_id,user.u_firstname,user.u_lastname,user.u_id from topic_comment inner join user on topic_comment.u_id=user.u_id where topic_comment.o_id='$o_id' and topic_comment.t_id='$t_id' order by tc_id desc limit 5");
while($row3=mysql_fetch_array($query3))
{
 $u_id1=$row3['u_id'];
?>
<!--<div style="border-bottom:2px solid #BABABA;">-->
<?php
echo "<tr><td>";
$sql4="select * from user_profile where u_id='$u_id1'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];
}
 if($image=="")
 {
?>
<img src="upload_image/user_noimage.png" height="30px;" width="30px;">

<?php 
  }
 else
 {
?>
 <img src="upload_image/<?php echo $image; ?>" height="30px;" width="30px;">
<?php 
 

}
echo "</td><td>";

echo "<font size=4 color=blue>".$row3['u_firstname'].' '.$row3['u_lastname']."</font><br/>";
echo $row3['topic_comments'];
echo "</td></tr>";
echo "<tr><td colspan=2><hr></td></tr>";
?>
</div>
<?php } 
echo "</table>";

?>
	
	



	

</div>

</div>
		
</div>
		

</div>
</div>
	
  </div>
</div></div></div></div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
