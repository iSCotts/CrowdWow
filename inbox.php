<?php

@session_start();
 

$userid=$_SESSION['u_id']; 
include('include/connect.php');

?>
<?php
// Check if delete button active, start this
if(isset($_POST['delete'])){
foreach($_POST['list'] as $val)
       {
           $delid = $val;
		  
         $sql = "DELETE FROM mail WHERE e_id='$delid'";
        $result = mysql_query($sql); 
       }

	

}

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
<script src="js/global.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- Script by hscripts.com -->
<script type="text/javascript">
function check()
{

       var chks = document.getElementsByName('tag[]');
       
         var hasChecked = false;
       for (var i = 0; i < chks.length; i++)
       {
               if (chks[i].checked==true)
               {
                       var hasChecked = true;        
           
                       break;        


                               
               }
               
       }
       if(        hasChecked == false)
               {
       
           document.getElementById('error').innerHTML = '        <div class="errorlist"><center>You Must Select a Tag</center></div>';        
                       return false;
               }

}
</script>
<script type="text/javascript">
function checkall(chk)
{

if(document.getElementById('chk').innerHTML=="Check All")
{

for (i = 0; i < chk.length; i++)
chk[i].checked = true ;
document.getElementById('chk').innerHTML='Remove All';
}
else
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
document.getElementById('chk').innerHTML='Check All';
}

}
</script>



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
<div class='breadcrumb box filled-soft' style="margin-left:30px;">

<p class='breadcrumb-links'>
<a href='inbox.php' class='breadcrumb-link'>Inbox</a>
			
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
 


 <a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="user_noimage.png" class="user-account-header-icon" src="upload_image/user_noimage.png" width="50px"  height="50px" /></a>
 <?php
 }
 else
 {
 ?>

<a href="topinfluence.php?$id=<?php echo $_SESSION['u_id'];?>"><img alt="<?php echo $image; ?>" class="user-account-header-icon" src="upload_image/<?php echo $image; ?>" width="50px"  height="50px" /></a>
<?php }
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

 $userid=$_SESSION['u_id']; 
$sql2="select mail.e_id,mail.u_id,mail.to_id,mail.from_name,mail.sub,mail.msg,mail.date,user.u_id from user inner join mail on mail.u_id=user.u_id where to_id='$userid'";
$query2=mysql_query($sql2);
 @$nr2=mysql_num_rows($query2);
while(@$row2=mysql_fetch_array($query2))
{

$eid=$row2['e_id'];

 $uid=$row2['u_id'];
 $fromname=$row2['from_name'];
$sub=$row2['sub'];
$msg=$row2['msg'];
$date=$row2['date'];

}
  
?>

<form action="" id ="frm1" method="post" name="myform">
<table>
<tr>
<td>
<div class='tier x12 user-inbox-controls' style=" margin-left:20px;">

<p class='left header'>
				Inbox (
				<?php
				
if($nr2==0)
{
echo "<font size=3 color=blue>0</font>";
}
else
{
echo "<font size=3 color=blue>".$nr2." </font>";
}
?>
				
				
				)
</p>
</div>
</td>
</tr>
<tr>
<td>
<div class='selection-tools left' style=" margin-left:50px;"> 

<input type="checkbox" onClick="syncCheckBox(this)" value="" >&nbsp;&nbsp;&nbsp;Check All/Uncheck All
&nbsp;&nbsp;&nbsp; <input name="delete" type="submit" id="delete" value="Delete" class="btnstyle">	


</div>

</td>
</tr>
</table>

<?php 

 $userid=$_SESSION['u_id']; 
 

$sql2="select mail.e_id,mail.u_id,mail.to_id,mail.from_name,mail.sub,mail.msg,mail.date,user.u_id from user inner join mail on mail.u_id=user.u_id where to_id='$userid' order by e_id desc limit 8";
$query2=mysql_query($sql2);
 @$nr2=mysql_num_rows($query2);
while($row2=mysql_fetch_array($query2))
{

$eid=$row2['e_id'];

 $uid=$row2['u_id'];
 $fromname=$row2['from_name'];
$sub=$row2['sub'];
$msg=$row2['msg'];
$date=$row2['date'];

$sql4="select * from user_profile where u_id ='$uid'";
$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{


 $image=$row4['image'];

}
  
?>

<div class='tier x12 user-inbox-tier'>
<div class='column x2 user-inbox-navigation'>

</div>    

<div class='column x12 user-inbox-list last'>
<ul>            

<li id="mail-53606" class='clearfix user-inbox-message old'>
<div class='status-checkbox left'>
<!--<input id="check1"  type="checkbox" value="" name='checkall' onclick='checkedAll(frm1);' />-->
<input name="list[]" type="checkbox" id="list" value="<?php echo $row2['e_id']; ?>">

</div>
<?php
 if($image=="")
 {
 ?>
 
<img alt="<?php echo $image;?>" class="left" height="50px" src="upload_image/user_noimage.png" width="50px" />
<?php
 }
 else
 {
 ?>
 <img alt="<?php echo $image;?>" class="left" height="50px" src="upload_image/<?php echo $image;  ?>" width="50px" />
 <?php }
?>
<div class='user-meta left'>


<a href="topinfluence.php?$id=<?php echo $uid;?>" class="user-name"><?php echo $fromname; ?></a>
<p class='timestamp'><span><?php echo $date;?></span> </p>
</div>
<div class='message-info left'>

<a href="inboxshow.php?$id=<?php echo $eid; ?>" class="message-link" style="font-weight:normal"><?php echo $sub;?></a>
<p><?php echo $msg;?> ...</p>
</div>
</li>  


	<?php }?>	
	


</ul>

</div>
</div></div> </div>
</form>
  
  
</div>
 <div style="height:100px;">
</div>


 

</div></div></div></div></div></div>
</div></div></div></div></div>	
	
  		
<div class="ftr" style="margin-top:100px;">
<?php include("include/footer.php"); ?>
</div>


</body>
</html>
