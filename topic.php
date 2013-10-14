<?php
@session_start();
include('include/connect.php'); 
 $o_id=$_GET['id'];
  $uid=$_SESSION['u_id'];

if(isset($_POST['submit']))
{

  $title=  $_POST['topic_title'];
  $title1=  $_POST['topic_desc'];
 

 $sql="insert into topic (u_id,topic_title,topic_desc,o_id,date) VALUES ('$uid','$title','$title1','$o_id',CURDATE())";
$query=mysql_query($sql);
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Topic</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<script src="js/lightbox-form2.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>

<div class="bod">

<div class="page quirky-influence">
<div class="tier mSmaller x12">
<div class='breadcrumb box left filled-soft'>
<p class='breadcrumb-links'>
<a href='community.php' class='breadcrumb-link'>Community</a>
				&nbsp;/&nbsp;

<a href='forum.php' class='breadcrumb-link'>Forum</a>
				&nbsp;/&nbsp;
<span class="breadcrumb-current">Topic</span></p>
</div>
</div>

<div style="height:50px;">
</div>  
	

    
	
<div class="tier x12">
<div class="column x8">
  <div id="comments-grid-frame">

<div class="clear comments box">
<div class="hd h-graphic">
<h3>Topic</h3>
</div>

<div class="tier x12 topic-container">
<div class="responses" style="width:650px;">
<form action="" class="new-topic" id="createTopic" method="post"><fieldset>
<h2>Topic Title</h2>
<input class="x8" id="topic_title" name="topic_title" size="30" type="text" /><br/>
<h2>Topic Description</h2>
<textarea class="x8" cols="10" id="topic_description" name="topic_desc" rows="8"></textarea><br/>
<?php
if($_SESSION['u_id']=="")
{
?>
<a href="#" onclick="openbox1('Login',1)"><input type="button" name="submit" id="submit" value="Submit Your Topic" /></a>
<?php } else { ?>
<input type="submit" name="submit" id="submit" value="Submit Your Topic" class="btnstyle"/>
<?php } ?>
</fieldset>

</form></div>

</div>  



	
	



	

</div>

</div>
		
</div>
		

</div>
</div>

	
  </div>
</div>
</div>
</div></div></div></div>	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
