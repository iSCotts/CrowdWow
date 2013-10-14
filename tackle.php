<?php
@session_start();
include('include/connect.php'); 
$s_id=$_GET['id'];
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

<div class="clear comments box">
<div class="hd h-graphic">
<h3>Comments
<?php 
@$query2=mysql_query("select * from id_comment where sub_id='$s_id'");
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
<?php 
echo "<table>";
@$query3=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_firstname,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$s_id'");
while($row3=mysql_fetch_array($query3))
{
$u_id=$row3['u_id'];
?>
<div style="border-bottom:2px solid #BABABA;">
<?php
echo "<tr><td>";
$sql4="SELECT image FROM `user_profile` WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];
 
 if($image=="")
 {
echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; 
 }
 else
 {
echo "<img src='upload_image/$image' height='40' width='40'>";
} 

}
echo "</td><td>";

echo "<font size=4 color=blue>".$row3['u_firstname']."</font><br/>";
echo $row3['comment'];
echo "</td></tr>";
echo "<tr><td colspan=2><hr></td></tr>";
?>
</div>
<?php } 
echo "</table>";

?>
	
	

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
<a href="#" onClick="openbox1('Login',1)"><input type="button" name="submit" id="submit" value="Submit Your Comment" class="btnstyle"/></a>
<?php } else { ?>
<input type="submit" name="submit" id="submit" value="Submit Your Comment" class="btnstyle"/>
<?php } ?>
 <!-- <input type="submit" name="submit" id="submit" value="Submit Your Comment" />-->
  </label>
</div>
				

</form></div>

	

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
