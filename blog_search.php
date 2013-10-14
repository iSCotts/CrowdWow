<?php 
include("include/connect.php");
session_start(); 
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
<p>In order to invent, influence, and earn, you first have to register for a Quirky account. Don’t worry… it’s super quick and easy.</p>
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
<table><tr><td>
<?php 
//$sql="select * from product";

if(isset($_GET['id']))
{
$id=$_GET['id'];
//$sql="select * from article where date_posted like '%$date%'";
 $sql="select product.p_image,article.name,article.title,article.p_id,article.detail,article.date_posted from product inner join article where product.p_id=article.p_id and article.art_status='1' and (article.title like '%cloak%' or article.detail like '%cloak%')";
}

else
{
$sql="select product.p_image,article.name,article.title,article.p_id,article.detail,article.date_posted from product inner join article where product.p_id=article.p_id and article.art_status='1'";
}?><div class="post-content x8">
<?php $query=mysql_query($sql);
$nr=mysql_num_rows($query);
if($nr==0)
{
echo "No tags for $id";
}
while($row=mysql_fetch_array($query))
{
?>



								
								<div class="content-head">
								
									<h1 class="light-sans" style="color:#666666">
								   Introducing&#8230;<?php echo $row['title']; ?>
									</h1>
	<div style=" margin-bottom:20px;margin-top:10px;">
	<table>
	<tr><td style=" width:10px;">By-</td>
	<td style=" width:80px;color:#000099;"><h3><?php echo $row['name']; ?></h3></td>
	<td style=" width:200px;color:#000099;"><h3><?php echo $row['date_posted']; ?></h3>

 </td>
 </tr>
 </table> </div>									
								  
								</div>
							  <p>
							  <img src="admin/uploadimage/<?php echo $row['p_image']; ?>" width="500" height="300" />
							  </p>
							  <div style="color:#000099; margin-bottom:20px; margin-top:20px;">
 <h3><?php echo $row['detail']; ?></h3>
 </div>

</div>
<div style="border-bottom:2px solid #BABABA;border-top:2px solid #BABABA;">
<a href="blog_comment.php?co_id=<?php echo $row['p_id']; ?>">
<?php 
$p_id=$row['p_id'];
$query2=mysql_query("select * from comment where p_id='$p_id'");
$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "No Comments";
}
else
{
echo "<b>".$nr2."</b> Comments";
}
?>
</a>
</div>

<?php } ?>

</td>
<td >

<?php //include("letest_tw.php");?>
<?php include("tags.php"); ?>
<?php include("connect_us.php"); ?>
<?php include("archive.php"); ?>
</td>
</tr>
</table>

</div>
  </div>
</div></div></div></div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
