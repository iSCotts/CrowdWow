<?php 
include("include/connect.php");
session_start();
$sql=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname FROM user_profile
inner JOIN user where user_profile.u_id=user.u_id order by user.u_id desc limit 10");
$query=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SlideItMoo - MooTools 1.2 image slider</title>
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/com.quirky.contentd6df.css" />

<script language="javascript" type="text/javascript" src="script/mootools-1.2-core.js"></script>
<script language="javascript" type="text/javascript" src="script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="script/SlideItMoo.js"></script>
<script language="javascript" type="text/javascript">
window.addEvent('domready', function(){
	/* thumbnails example , links only */
	new SlideItMoo({itemsVisible:5, // the number of thumbnails that are visible
					currentElement: 0, // the current element. starts from 0. If you want to start the display with a specific thumbnail, change this
					thumbsContainer: 'thumbs',
					elementScrolled: 'thumb_container',
					overallContainer: 'gallery_container'});
	
	/* thumbnails example , div containers */
	new SlideItMoo({itemsVisible:5, // the number of thumbnails that are visible
					currentElement: 0, // the current element. starts from 0. If you want to start the display with a specific thumbnail, change this
					thumbsContainer: 'thumbs2',
					elementScrolled: 'thumb_container2',
					overallContainer: 'gallery_container2'});
					
	/* banner rotator example */
	new SlideItMoo({itemsVisible:1, // the number of thumbnails that are visible
					showControls:0, // show the next-previous buttons
					autoSlide:2500, // insert interval in milliseconds
					currentElement: 0, // the current element. starts from 0. If you want to start the display with a specific thumbnail, change this
					transition: Fx.Transitions.Bounce.easeOut,
					thumbsContainer: 'banners',
					elementScrolled: 'banner_container',
					overallContainer: 'banners_container'});
});
</script>
</head>

<body>

	<div>
		<div style="height:30px">
</div>
	<!--thumbnails slideshow begin-->
	<div id="gallery_container" style="height:160px;">	
		<div id="thumb_container" style="height:300px;">			
			<div id="thumbs">
			
			<table>
			<tr>
			<?php
while($row = mysql_fetch_array( $query ))
{
 $uid= $row['u_id'];
 $image= $row['image'];
?>
<td>
<table>
<tr><td>
<?php
 if($image=="")
 {
?>
<a  rel="lightbox[galerie]" target="_blank"><img src="upload_image/user_noimage.png" width="135" height="135" /></a>  
  <?php
 }
 else
 {
 ?>
<a  rel="lightbox[galerie]" target="_blank"><img src="upload_image/<?php echo $row['image']; ?>" width="135" height="135" /></a>
<?php
}
?>
</td></tr><tr><td style="padding-left:15px">
<h4><a href="topinfluence.php?$id=<?php echo $uid; ?>"><?php echo $row['u_firstname'];?> <?php echo $row['u_lastname']; ?></a></h4> 


</td>


</td></tr><tr><td style="padding-left:15px">
has earned $377.17
</td>

</tr></table>

<?php
}
?>


	</td></tr></table>
	

			</div>			
		</div>
	</div>
<div style="height:200px">
</div>


<table>
<tr>

<td valign="top" >
<div style="width:280px;">
<?php include("top_influ.php");?>
</div>
</td>  

<td valign="top" >
<div class="column x5" style="width:350px;">
<div class="invent-faq box">
<div class="bd"> 
<?php include("best_per.php");?>
<div style="height:340px;"></div>
<?php include("succ_story.php"); ?>
</div>
</div>
</div>
</td>

<td valign="top">
<?php include("leatest_comment.php");?>
</td>
</tr></table>


</div>
</div>
</div>
</div>	
</body>
</html>
