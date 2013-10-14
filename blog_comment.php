<?php 
include("include/connect.php"); 
session_start();
$co_id=$_GET['co_id'];
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$website=$_POST['website'];
$comment=$_POST['comment'];
$sql2=mysql_query("insert into comment set p_id='$co_id',c_user='$username',c_email='$email',c_web='$website',c_comment='$comment'");

$sql1=mysql_query("select p_id from comment where c_email='$email'");
 while($row1=mysql_fetch_array($sql1))
 { $pid=$row1['p_id']; }
 $url="blog_comment.php?co_id=$pid";
$qq= "update user set url='$url' where c_email='$email'";
 $sql2=mysql_query($qq);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Blog</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />



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
<a href='blog.php' class='breadcrumb-link'>Blog</a>
			&nbsp;/&nbsp;
<span class='breadcrumb-current'>Blog comment</span>
</p>

</div>
<div style="height:20px;">
</div>
</div>

</div>
</div>
  
	
<div id="modal-login" class="quirky-modal" style="display: none;">
<div class='qm-box x7'>
<div class='login modal-content modal-content-qtheme box bordered'>
<div class="hd">
<h2>You Must Be Logged In&hellip;</h2>
<a onclick="jQuery.hideLoginModal(); return false;" class="close graphic" href="#"><span>Close</span></a>
</div>
<div class="bd">
<div class="x3 left">
</div>
				
<span class="division-text">or</span>

				
<div class="x3 right border-left">
<p class="facebook-connect clearfix"><span>Sign up or login using Facebook to get started on Quirky right now!</span><br/>
<fb:login-button
							   registration-url="http://www.quirky.com/facebook/register" 
							   on-login="jQuery('#modal-login-form').trigger('loginSuccessful')"
							   perms="publish_stream,email,offline_access"
							>Login with Facebook</fb:login-button>
</p>
<p class="confirmation-check clearfix">
<input type="checkbox"/> 
<span>I have read and understood Quirky's <a href="#">Terms &amp; Conditions</a></span>
</p>
<p class="prompt">
<a onclick="jQuery.switchToSignup(); return false;" href="#"><strong>Not a Member? Sign Up</strong></a>

</p>
<p>In order to invent, influence, and earn, you first have to register for a Quirky account. Donâ€™t worryâ€¦ itâ€™s super quick and easy.</p>
<p>
<a  onclick="jQuery.switchToSignup(); return false;" href="http://www.quirky.com/users/new" class="button bright small">Sign Up</a>
</p>
</div>
</div>
</div>
</div>

</div>

<div id="modal-signup" class="quirky-modal" style="display: none;">
<div class='qm-box x9'>
<?php include("user/reg.php"); ?>
</div>
</div>

<div class="qm-overlay" style="display: none;"></div>
<table><tr><td>
<?php 
//$sql="select * from product";
$sql="select product.p_image,article.name,article.title,article.p_id,article.detail,article.date_posted,article.c_id from product inner join article where product.p_id=article.p_id and article.p_id ='$co_id'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$name=$row['name'];
$p_image=$row['p_image'];
$title=$row['title'];
$detail=$row['detail'];
$date=$row['date_posted'];
}
?>
<div class="post-content x8">
								 
								<div class="content-head">

									<h1 class="light-sans" style="color:#00AEF0;font-size:26px">
									   Introducing&#8230; <?php echo $title; ?>
									</h1>
		<div style=" margin-bottom:20px;margin-top:10px;">
	<table>
	<tr><td style=" width:10px;">By-</td>
	<td style=" width:80px;color:#000099;"><h3><?php echo $name; ?></h3></td>
	<td style=" width:200px;color:#000099;"><h3><?php echo $date; ?></h3>


 </td>
 </tr>
 </table> </div>								      
								</div>
							  <p>
							  <img src="admin/uploadimage/<?php echo $p_image; ?>" width="500" height="300" />
							  <div style="color:#666666; margin-bottom:20px; margin-top:20px; width:500px;">
 <h3><?php echo $detail; ?></h3>
 </div>
</div>
<div style="border-bottom:1px groove #BABABA;border-top:1px ridge #BABABA;">
<?php 
$query2=mysql_query("select * from comment where p_id='$co_id'");
$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "<font size=4 color=blue>No Comments</font>";
}
else
{
echo "<font size=4 color=blue>".$nr2." Comments</font>";
}
?>
</div>
<?php 
$query3=mysql_query("select * from comment where p_id='$co_id'");
while($row3=mysql_fetch_array($query3))
{
?>
<div style="border-bottom:1px groove #BABABA;">
<?php
echo "<div style='height=20px'>";
echo "<font size=4>".$row3['c_user']."</font>";
echo "</div><div>";
echo $row3['c_comment'];
echo "</div>";
?>
</div>
<?php } ?>

<div class="comments-form">



<h2 style="font-size:20px;padding-top:25px;" id="leave-a-comment">Leave A Comment</h2>
<div style="padding-top:25px;">
<form action="" method="post" id="commentform">


            <div>

        	<div class="user-field"><input type="text" name="username" value="Username (required)"

            onblur="if(this.value==''){this.value='Username (required)'}"

            onfocus="if(this.value=='Username (required)'){this.value=''}"/></div>

        

        	<div class="user-field"><input type="text" name="email" value="Email (required)" 

            onblur="if(this.value==''){this.value='Email (required)'}"

            onfocus="if(this.value=='Email (required)'){this.value=''}"/></div>

        

        	<div class="user-field"><input type="text" name="website" value="Website"

            onblur="if(this.value==''){this.value='Website'}"

            onfocus="if(this.value=='Website'){this.value=''}"/></div>

        </div>
   <div style="float:left;">

    	<em><textarea cols="100" rows="20" name="comment"></textarea></em>

    </div>

    <div id="submit-comment" style="float:left;">

    	<strong><input type="submit" name="submit" value="Post Comment" class="btnstyle"/></strong>

    </div>

</form>
</div>
</div>
</td>
<td>
<?php include("tags.php"); ?>
<?php include("connect_us.php"); ?>
<?php include("archive.php"); ?>
<?php //include("top_influ.php");?>
<?php //include("template/news.php"); ?>

</td></tr>


</table>
<div class="post-footer">
</li>
</li>
</div>

</div>
</div>
</div>
	
  </div>
</div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
