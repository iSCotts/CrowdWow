<?php

@session_start();
 
 $i_id=$_GET['$id'];
$userid=$_SESSION['u_id']; 
include('include/connect.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inbox</title>

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

 <div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href="inbox.php" class='breadcrumb-link'>Inbox</a>
&nbsp;/&nbsp;
<span class='breadcrumb-current'>Message</span>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>


<div class="bod">
  <div >
  <?php 

$userid=$_SESSION['u_id']; 
$sql1="select * from user_profile where u_id='$userid'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
 $image=$row1['image'];
  
  
?>
  <div class='page quirky-user-inbox logged-out'>
<div class='tier x12 user-account-header'>
<div class='box filled-soft bordered' >
<?php
if($image=="")
{
?>
<a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="<?php echo $image; ?>" class="user-account-header-icon" src="upload_image/user_noimage.png" width="50px"  height="50px" /></a>
<?php
}
else
{
?>
<a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="<?php echo $image; ?>" class="user-account-header-icon" src="upload_image/<?php echo $image; ?>" width="50px"  height="50px" /></a>
<?php
}
?>
<h2 class='user-account-header-title'>
<?php 
}

$sql="select * from user where u_id='$userid'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
 $fname=$row['u_firstname'];
  $lname=$row['u_lastname'];
  }
?>

			Your Account: <span class='user-account-header-name'><?php echo $fname;?><?php echo $lname; ?></span>

</h2>
<a href="edit_profile.php" class="button user-account-header-edit-button bright">Edit Your Profile</a>
</div>

</div>
<!--<div class='tier x12 user-account-navigation nav'>
<div class='box tab-navigation'>
<ul class='horizontal'>
<li class='tab-navigation-item'><a href="/users/74187/dashboard"><h2>Activity</h2></a></li>
<li class='tab-navigation-item last'><a href="/users/74187/settings"><h2>Account Settings</h2></a></li>
<li class='tab-navigation-item active'><a href="/users/74187/inbox"><h2>Inbox</h2></a></li>
</ul>
</div>

</div>-->
 <?php 
  $i_id=$_GET['$id'];
 $userid=$_SESSION['u_id']; 
$sql2="select mail.e_id,mail.u_id,mail.from_name,mail.sub,mail.msg,mail.date,user_profile.image,user_profile.u_id from user_profile inner join mail on mail.u_id=user_profile.u_id where e_id='$i_id'";
$query2=mysql_query($sql2);
while($row2=mysql_fetch_array($query2))
{
 $eid=$row2['e_id'];
 $image=$row2['image'];
 $uid=$row2['u_id'];
 $fromname=$row2['from_name'];
$sub=$row2['sub'];
$msg=$row2['msg'];
$date=$row2['date'];

  }
  
?>

<div class='tier x12 user-inbox-tier'>

	
<div class='column x10 user-inbox-list last' style="font-size:16px;">
<div style="float:left;margin:20px;text-align:left;width:185px;">
<div class='column x2 user-inbox-navigation'>
<ul>
<li class=""><a href="inbox.php">Inbox</a></li>
</ul>
</div>
<?php
if($image=="")
{
?>
<a href="topinfluence.php?$id=<?php echo $uid;?>"><img alt="<?php echo $image;  ?>" height="100px" src="upload_image/user_noimage.png" width="145px" /></a>
<?php
}
else
{
?>
<a href="topinfluence.php?$id=<?php echo $uid;?>"><img alt="<?php echo $image;  ?>" height="100px" src="upload_image/<?php echo $image;  ?>" width="145px" /></a>
<?php
}
?>
<br/><a href="topinfluence.php?$id=<?php echo $uid;?>"><?php echo $fromname; ?></a>
<br/><span style="font-size:12px;color:#999;"><?php echo $date;?><br/></a></span><br/>
<!--<a href="/messages/flag/53608" class="rl" style="font-size:12px;">Report</a>-->
</div>
<div style="float:left;margin:20px 20px 20px 0px;width:500px;">
<b style="color:#59118E;"><?php echo $sub;?></b>
<p style="font-size:16px;margin-top:20px;"><?php echo $msg;?></p>

<?php

 $userid=$_SESSION['u_id']; 
$sql5="select * from user where u_id ='217'";
$query5=mysql_query($sql5);
while($row5=mysql_fetch_array($query5))
{


 $fromname=$row5['u_firstname'].$row5['u_lastname'];
}



$sql4="select * from user where u_id ='$uid'";
$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{


 $toname=$row4['u_firstname'].$row4['u_lastname'];

}
if(isset($_POST['submit']))
{

 $sub1=$_POST['subject'];
 $msg1=$_POST['message'];



$sql="insert into mail (u_id,to_id,to_name,from_name,sub,msg,date) values ('$userid','$uid','$toname','$fromname','$sub1','$msg1',CURDATE())";
$query=mysql_query($sql);
}
?>


				
<div id="send-message" >

<h2 style="margin-top:30px;">Reply</h2>
<form action="" class="new-message" id="message-form" method="post" onsubmit="">
<input id="message_subject" name="subject" type="hidden" value="Re: <?php echo $sub;?>" />
<textarea cols="40" id="message_body" name="message" rows="20"></textarea><br/>
<!--<a class="button send-button bright" href="#" onclick="jQuery('#message-form').startWaiting(); new Ajax.Request('/messages/create/74187', {asynchronous:true, evalScripts:true, parameters:Form.serialize('message-form')}); return false;">Reply</a>-->
<a class="button send-button bright"> <input type="submit" name="submit" value="reply" id="submit" class="btnstyle"/> </a> 
</form></div>
</div>
</div>
</div>

</div>

   <div style="height:100px;">
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
