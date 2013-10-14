<?php
include("include/connect.php");
@session_start();
$email=$_SESSION['email'];
$s="select * from user where u_email='$email'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$uid=$r['u_id'];
}
?>

<html>
<head>
<script type="text/jscript">function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?              u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<script  type="text/javascript" src="js/oooo.js"></script>
<link type="text/css" rel="stylesheet" href="css/oooo.css">
</head>

<form name="indexform" enctype="multipart/form-data" action="" method="post" style="margin-top:40px;">
	<table class="clsWithoutBorder">
        <tr>
		<td></td>
	         <td class="clsWithoutBorder">
	    	      <table class="">
    	          <tr>
				  <!--<td align="right" width="280"><h1></h1> </td>-->
				  <td align="right" width="470" >
				  <img src="images/close.png" onClick="closebox2()"  /></td>
            	  </tr>
				  </table>
				  <br />
				  <table>
				  <tr>
				  <td><b>Quick Share:</b>&nbsp;
				  <a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank"><img src="images/facebook.jpg" height="25" /></a>&nbsp;<a href="http://twitter.com/share"><img src="images/twitter_icon.png" height="25"/></a>&nbsp;
</td><td><a href="#" onClick="openbox_oo('Email Send', 1)"><img src="images/email-icon.jpg" height="25" /></a>

<div id="filter_oo"></div>
                    <div id="box_oo">
  <span id="boxtitle_oo"></span>
		<?php include("send.php"); ?> 
</div></td>
				  </tr>
                  </table><br />
				  <table>
              	  <tr>
	              <td><b>Your Link</b></td></tr><tr><td>
             
<?php
$m=$_SERVER['HTTP_HOST'];
$n=$_SERVER['REQUEST_URI'];
$o="&uid=";
$p=$uid;
?>       
    	          <input id="user_profile_attributes_first" name="fname" size="30" type="text" value="<?php echo "http://" . $m.$n.$o.$p; ?>" /></td>
        	      
            	 
				  	</td>
        	      <td height="50"><input type="button" name="submit" value="select" class="btnstyle" style="height:25px; width:70px; margin-top:3px;" />
				  </td></tr>
            	  </tr>
	              </table>      
				  <table>
				  <tr>
				  <td><b>How does this work?</b></td>
				  </tr><tr>
				  <td>If you're a registered member and currently logged in, sharing this link will earn you a whopping 10% commission on all sales you bring in for products shipping now. Spread the word and earn cash!</td>
				  </tr>
				  </table>
				      </td>
        </tr>
    </table>

</form>