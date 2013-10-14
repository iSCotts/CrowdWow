<?php 
include("include/connect.php"); 
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
<?php 
$sql="select * from product";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
?>
<div class="post-content x8" style="padding-top:50px;">
								 
								<div class="content-head">

									<h1 class="light-sans" style="color:#666666">
									   Introducing&#8230;<?php echo $row['p_name']; ?>
									</h1>
									  
								</div>
							  <p>
							  <img src="admin/uploadimage/<?php echo $row['p_image']; ?>" width="500" height="300" />
							  </p>
<p style="color:#666666">So you did it. You just shelled out several hundred bucks for the iPad 2. You want the world to know, but you also want protect it. The Smart Cover is great and all, but it leaves the back of your ‘Pad a little, well, naked. Other cases cover the entire iPad 2, but you haven’t found one that’s quite your cup of tea. What to do? </p>
<p style="color:#666666">We have a solution: Fender, a clear plastic bumper that protects your iPad 2’s sides and corners, without encasing the entire unit. Fender complements and is fully functional with the Apple Smart Cover, for times when you also need front coverage.</p>
<p style="color:#666666">Rene Diaz (&#8220;Gyro&#8221;) submitted this idea to our iPad 2 accessories brief, Vincent Vedie contributed the design, and 636 influencers chipped in to make it a reality. Fender is now available in the Quirky store for $18 presale ($20 retail) with a threshold of 1000. Congratulations to all!</p>


<p style="color:#666666">Features:<br />
 &#8211; Made of clear frosted ABS plastic with grey rubber corners and a thin grey rubber border on the back.<br />
 &#8211; Snaps in place to fit the iPad 2.<br />
 &#8211; Rubber corners protect from bumps and falls, while a rubber border grips tabletops.<br />
 &#8211; Fully functional with the Apple Smart Cover.</p>

<p style="color:#666666">Dimensions:<br />
 7.5&#8243; x 9.75&#8243; (designed to fit the iPad 2)</b></p>
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


</div>
  </div>
</div></div></div></div></div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
