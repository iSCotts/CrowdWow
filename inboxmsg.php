<?php

@session_start();
 
 $i_id=$_GET['$id'];
  $g_id=$_GET['$go'];
$userid=$_SESSION['u_id']; 
include('include/connect.php'); 


$sql1="select * from user where u_id ='$userid'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{


 $fromname=$row1['u_firstname'].$row1['u_lastname'];
}




if(isset($_POST['submit']))
{
 $too=$_POST['too'];
 $sub1=$_POST['subject'];
 $msg1=$_POST['message'];



$sql="insert into mail (u_id,to_id,to_name,from_name,sub,msg,date) values ('$userid','$i_id','$too','$fromname','$sub1','$msg1',CURDATE())";
$query=mysql_query($sql);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Learn</title>

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
</div>

<div class="bod">
  <div class="bod_rt">

 


<div>
<?php
  $g_id;
if($g_id=='top')
{
?>
  
  <div class="page quirky-user-info">

<div class="tier mSmaller x12">
<div class='breadcrumb box filled-soft left'>
<p class='breadcrumb-links'>
<a href="community.php" class="breadcrumb-link">Community</a>
				&nbsp;/&nbsp;
<a href="tpoinfluence.php" class="breadcrumb-link">Top Influence</a>
				&nbsp;/&nbsp;

<a href="" class="breadcrumb-link">Message Send</a>
				<!--&nbsp;/&nbsp;-->
<!--<span class='breadcrumb-current'>Send Message</span>-->
</p>
</div>
<div class='box global-pagination right'>
<a href="topinfluence.php?$id=<?php echo $i_id;?>" class="button bright back">Go Back</a>
</div>
</div>
<?php
}
else
{
?>
 <div class="page quirky-user-info">

<div class="tier mSmaller x12">
<div class='breadcrumb box filled-soft left'>
<p class='breadcrumb-links'>
<a href="view_profile.php" class="breadcrumb-link">View profile</a>
				&nbsp;/&nbsp;


<a href="" class="breadcrumb-link">Message Send</a>
				<!--&nbsp;/&nbsp;-->
<!--<span class='breadcrumb-current'>Send Message</span>-->
</p>
</div>
<div class='box global-pagination right'>
<a href="view_profile.php" class="button bright back">Go Back</a>
</div>
</div>
<?php
}
?>
<script type="text/javascript">
function validateForm()
{
if(document.myForm.subject.value=="")
{
document.getElementById('som').innerHTML='Please enter subject';
return false;
}
else {
document.getElementById('som').innerHTML='';

}
if(document.myForm.message.value=="")
{
document.getElementById('com').innerHTML='Please enter message';
return false;
}
else {
document.getElementById('com').innerHTML='';

}
}
</script>	

<div class="tier x12">
<div class='column x8'>

<div id="send-message" class='modal-content box bordered message-box'>
<div class="hd">
<h2> Send New Message</h2>
</div>
<div class="bd">
<form action="" id="newt" method="post" name="myForm"  onsubmit="return validateForm()"><p>

<?php
 $i_id=$_GET['$id'];
$sql1="select * from user where u_id ='$i_id'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
 $fname=$row1['u_firstname'];
 $lname=$row1['u_lastname'];

}

?>

<label for='to'>To</label>
<input type='text' name='too' id='to' value='<?php echo $fname;?><?php echo $lname;?>' readonly/>
</p>
<p>
<label for='subject'>Subject</label>
<input id="message_subject" name="subject" size="30" type="text" value="" /><span id="som" style="color:#FF0000"/>
</p>
<p>

<label for='message'>Message</label>
<textarea cols="40" id="message_body" name="message" rows="20"></textarea><span id="com" style="color:#FF0000"/>
</p>
				
<div class=''>
<div class="">
<!--<a href="http://www.quirky.com/users/4446" class="button cancel">Cancel</a>
<a class="button send-button bright" href="#" onclick="jQuery('#message-form').startWaiting(); new Ajax.Request('/messages/create/4446', {asynchronous:true, evalScripts:true, parameters:Form.serialize('message-form')}); return false;">Send Message</a>-->
 <input type="submit" name="submit" value="Send Message" id="submit" class="btnstyle"/>  
</div>
</div>
</form></div>
</div>
</div>

</div>

</div>






      
</div>

  
  



</div>
</div></div></div>
</div></div></div></div></div>	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
