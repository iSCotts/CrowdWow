<?php
include('include/connect.php'); 
session_start();
$s_id=$_GET['i_id'];
 $uid=$_SESSION['u_id'];

if(isset($_POST['submit']))
{

 $comment=  $_POST['comment'];
 //$category=$_POST['shopradio'];


 $sql="insert into id_comment (comment,sub_id,u_id) VALUES ('$comment','$s_id','$uid')";
$query=mysql_query($sql);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>idea</title>
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
<a href='influnce.php' class='breadcrumb-link'>Influence</a>
				&nbsp;/&nbsp;

<a href='evaluation.php' class='breadcrumb-link'>Product Evaluation</a>
				&nbsp;/&nbsp;
<span class="breadcrumb-current">Idea</span></p>
</div>
</div>
<div class="tier x12">
<div class="column x8">
  <div id="comments-grid-frame">



<?php

$sql12="select u_id from submit_idia where sub_id='$s_id'";
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
$image=$row['image'];
 }
   ?>

<div class="panel-set yTierPanel filled-soft" style="height:230px;">
<div class="tier x12">
<div class="column x8"  style="width:1030px;">
<div class="user-idea-summary box filled-soft squared"  style="width:1030px;">




<div class="hd"  style="width:625px;">
<!--<img class="thumb" src="http://s3.amazonaws.com/kore/production/profiles/avatars/99915/three6/beer_and_cat.jpg" alt=""/>-->
<?php
if($image=="")
{
?>
<img class="thumb" alt=""  src="upload_image/user_noimage.png" width="40px" height="40px" />
<?php 
}
else
{
?>
<img class="thumb" alt=""  src="upload_image/<?php  echo $image;  ?>" width="40px" height="40px" />
<?php } ?>
<h2>

<a href="topinfluence.php?$id=<?php echo $uid; ?>"><?php echo $first; ?><?php echo $last; ?></a> 
							big idea&hellip;
</h2>
<div class="">
<span class="st_sharethis" displayText="ShareThis"></span>
</div>
</div>
<div class="bd big-text"  style="width:625px;">
<p>
<?php
$sql1="select * from colors where cl_id='$cid'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
echo $vote=$row1['vote'];
}
 
   ?>
</p>
<div class="box-section">
<a class="n-comments" href="#comments-grid-frame">

<?php 
@$query2=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_id,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$s_id'");
@$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "<font size=3 color=blue>(0)</font>";
}
else
{
echo "<font size=3 color=blue>(".$nr2.") </font>";
}
?>
 Comments
</a>




<a class="n-comments" href="#comments-grid-frame">
<?php
$i_id121=$_GET['i_id'];
$sql121="select * from submit_idia where sub_id='$i_id121'";
$query121=mysql_query($sql121);
while($row121=mysql_fetch_array($query121))
{
$vote121=$row121['vote_idea'];
}
?>
<font size=3 color=blue>(<?php echo $vote121; ?>)</font>  Total Votes
</a>



</div>
<div class="tile idea-detail votes-left">
<div class="detail-icon">
<img alt="User_icon_voted" src="images/user_icon_voted.png"/>
</div>
<p class="short">
<strong class="title">     
<span id="vote-counter">
<?php
$i_id2=$_GET['i_id'];
 $s1="select sum(votes) as v from duration  where p_id='$i_id2'";
$q1=mysql_query($s1);
while($r1=mysql_fetch_array($q1))
{
 $votes=$r1['v'];
}
echo "("."$votes".")"."votes left for this project.";
?>
</span>

</strong>
</p>
</div>


</div>
<div class="ft"  style="width:625px;">

<div class="button-holder"> 
<div id="ideation-73693-vote-button-1" >



<?php
$sql11="select sub_id from submit_idia where sub_id='$s_id'";
$query11=mysql_query($sql11);
while($row11=mysql_fetch_array($query11))
{
 ?>
<?php 
if($_SESSION['u_id']=="")
{
?>
</div>
<?php } else { ?>
<div id="<?php echo $row11['sub_id']; ?>">


</div>
<?php } ?>




</div>

<?php } ?>

</div>
</div>
</div>
</div>
</div>




<div style=" height:350px; width:300px;float:; margin-left:650px; margin-top:-260px;">


<div class="meet-the-inventor box dot-side" >
<div class="">
<h3 class="no-bg no-padding">Meet The Inventor</h3>
</div>
<div class=""> 
<ul class="user-list">
<li class="user">    
<!--<img class="thumb" src="http://s3.amazonaws.com/kore/production/profiles/avatars/99915/thumb/beer_and_cat.jpg" alt="" style="margin-bottom:10px;"/>-->
<?php
if($image=="")
{
?>
<a href="topinfluence.php?$id=<?php echo $uid; ?>"><img class="thumb" alt=""  src="upload_image/user_noimage.png" width="140px" height="160px" /></a>
<?php 
}
else
{
?>
<a href="topinfluence.php?$id=<?php echo $uid; ?>"><img class="thumb" alt=""  src="upload_image/<?php /*echo $username*/ echo @$image;  ?>" width="140px" height="160px" /></a>
<?php } ?>

<div class="info-block">
<h4>
<a href="topinfluence.php?$id=<?php echo $uid; ?>">
<?php
$sql="select user.u_firstname,user.u_lastname,user_profile.image from user inner join user_profile on user.u_id=user_profile.u_id where user.u_id='$uid'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
echo $first=$row['u_firstname'];
echo $last=$row['u_lastname'];
$image=$row['image'];
}
 
   ?>


</a>
</h4>
<!--<p class="tag-cloud"> 
<a href="/users/browse?capacity=wannabeinventor">wannabeinventor</a>,  

</p>-->
</div>
</li>
</ul>  
</div>
<div style=" height:20px;">
</div>


</div>
</div>






			
</div>
</div>
	
<div class="tier x12">
<div class="column x8">
			
			     
<div class="problem box big-text">
<div class="hd h-graphic">
<h3>The Problem</h3>
</div>
<div class="bd">   
<p><p>
<?php
@$sql="select desc_problem,desc_solution,sub_id from submit_idia where sub_id='$s_id'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
echo @$prob=$row['desc_problem'];


 }  ?>
</p></p>

</div>
</div>  

</div>
</div>  
<div class="solution box big-text"  style="width:625px;">
<div class="">
<h3>The Solution</h3>
</div>
<div class="bd">   
<p><p>
<?php
@$sql="select desc_problem,desc_solution,sub_id from submit_idia where sub_id='$s_id'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
echo @$sol=$row['desc_solution'];


}   ?>
</p></p>

</div>
</div>  

<div class="column x4">
<div class="key-features box">
<div class="hd h-graphic">
<h3>Key Features</h3>

</div>
<div class="bd">
<ul class="bullet-list"> 
<li>
<?php 
$sql5="SELECT desc_product FROM sub_product WHERE sub_id='$s_id'";
$query5=mysql_query($sql5);
while(@$row5 = mysql_fetch_array( $query5 ))
{
echo $row5['desc_product'];
echo "<br>";
}

 ?>
</li>
</ul>
</div>
</div>
</div>

<div class="column x4 last">
<div class="comparisons box">
<div class="hd h-graphic">
<h3>Comparisons</h3>
</div>
<div class="bd">
<ul class="bullet-list">
<li>
<?php 
$sql6="SELECT desc_similar FROM sub_similar WHERE sub_id='$s_id'";
$query6=mysql_query($sql6);
while(@$row6 = mysql_fetch_array( $query6 ))
{
echo $row6['desc_similar'];
echo "<br>";
}

?>
</li>
<li></li>
</ul>
</div>
</div>
</div>
		
</div>
</div>




<div class="clear comments box">
<div class="hd h-graphic">
<h3>Comments
<?php 
@$query2=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_id,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$s_id'");
@$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "<font size=3 color=blue>(0)</font>";
}
else
{
echo "<font size=3 color=blue>(".$nr2." )</font>";
}
?>
</h3>
</div>

<div id="big-comment-form">
		
<form action="" class="comment-form" id="new-comment" method="post" name="myForm"  onsubmit="return validateForm()"><div class="form-controls">
<h4>Leave a Comment</h4>
</div>
<textarea cols="40" id="comment_body" name="comment" rows="20"></textarea>

<div class="form-controls">
  <label><?php
if($_SESSION['u_id']=="")
{
?>
<a href="#" onClick="openbox1('Login',1)"><input type="button" name="submit" id="submit" class="btnstyle" value="Submit Your Comment" /></a>
<?php } else { ?>
<input type="submit" name="submit" id="submit" class="btnstyle" value="Submit Your Comment" />
<?php } ?>
 <!-- <input type="submit" name="submit" id="submit" value="Submit Your Comment" />-->
  </label>
</div>
				

</form></div>

<?php 
echo "<table>";
@$query3=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_firstname,user.u_lastname,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$s_id'");
while($row3=mysql_fetch_array($query3))
{
$u_id=$row3['u_id'];
?>
<!--<div style="border-bottom:2px solid #BABABA;">-->
<?php
echo "<tr><td>";
$sql4="SELECT image,u_id FROM `user_profile` WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];

 if($image!=""&&$image!=null)
 {

 echo "<img src='upload_image/$image' height='40' width='40'>";
 }
 else
 {

echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; 
} 

}
echo "</td><td>";

echo "<font size=4 color=blue>".$row3['u_firstname'].$row3['u_lastname']."</font><br/>";
echo $row3['comment'];
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
