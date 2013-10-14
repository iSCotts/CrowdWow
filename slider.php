<?php include("include/connect.php");?>
<?php 
 
$sql=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname, user.u_balance, user.url FROM user_profile inner JOIN user on user_profile.u_id=user.u_id where user.u_balance order by user.u_id Asc ");
@$query=mysql_query($sql);

 ?>
 <?php 
 
$sql1=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname, user.u_balance, user.url FROM user_profile inner JOIN user on user_profile.u_id=user.u_id where user.u_balance order by user.u_id Asc ");
@$query1=mysql_query($sql1);
?>
<?php
$sql2=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname, user.u_balance, user.url FROM user_profile inner JOIN user on user_profile.u_id=user.u_id where user.u_balance order by user.u_id Asc ");
@$query2=mysql_query($sql2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Carousel Component Example - Auto Play</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.6.0/build/utilities/utilities.js&2.6.0/build/container/container_core-min.js"></script> 
	<script type="text/javascript" src="js/carousel.js"></script>

	
	<link href="css/carousel.css" rel="stylesheet" type="text/css">




<script type="text/javascript">

var imageList = [
  <?php
  

  
 while($result=mysql_fetch_array($query))
 {
 if($result['image']=="")
 {
 ?>
				 "upload_image/user_noimage.png",
<?php } else { ?>
				 "upload_image/<?php echo $result['image']; ?>",
				 
<?php } } ?>				 
				 ];
var username = [
  <?php
 while($result1=mysql_fetch_array($query1))
 {
 ?>
				 "<?php echo $result1['u_firstname']; ?>&nbsp;<?php echo $result1['u_lastname']; ?> <br><p>$<?php echo $result1['u_balance']; ?></p>",
				 
<?php } ?>				 
				 ];
var link1 = [
  <?php
 while($result2=mysql_fetch_array($query2))
 {
 ?>
				 "<?php echo $result2['url']; ?>",
				 
<?php } ?>				 
				 ];
 
var lastRan = -1;

var fmtItem = function(imgUrl, url, title, index) {

  	var innerHTML = 
  		'<a style="height:220px;width:160px;" id="dhtml-carousel-a-'+index+'" href="' + 
  		url + 
  		'"><img id="dhtml-carousel-img-' + index + '" src="' + 
  		imgUrl +
		'" width="' +
		130 +
		'" height="' +
		135+
		'"/>' + 
  		title + 
  		'<\/a>';
  
	return innerHTML;
};


var loadInitialItems = function(type, args) {

	var start = args[0];
	var last = args[1]; 

	load(this, start, last);	
};


 var loadNextItems = function(type, args) {	

	var start = args[0];
	var last = args[1]; 
	var alreadyCached = args[2];
	
	if(!alreadyCached) {
		load(this, start, last);
	}
};


var loadPrevItems = function(type, args) {
	var start = args[0];
	var last = args[1]; 
	var alreadyCached = args[2];
	
	if(!alreadyCached) {
		load(this, start, last);
	}
};

var load = function(carousel, start, last) {
	
	
for(var i=start;i<=last;i++) {

		var liItem = carousel.addItem(i, fmtItem(imageList[i],link1[i],username[i], i));

	}
}

var handlePrevButtonState = function(type, args) {

	var enabling = args[0];
	var leftImage = args[1];
	if(enabling) {
		leftImage.src = "images/left-enabled.gif";	
	} else {
		leftImage.src = "images/left-disabled.gif";
	}
	
};

var carousel; // for ease of debugging; globals generally not a good idea

length1 = link1.length-1;
var pageLoad = function() 
{
	carousel = new YAHOO.extension.Carousel("dhtml-carousel", 
		{
			numVisible:        4,
			animationSpeed:   0.7,
			scrollInc:         3,
			navMargin:         40,
			prevElement:     "prev-arrow",
			nextElement:     "next-arrow",
			loadInitHandler:   loadInitialItems,
			loadNextHandler:   loadNextItems,
			loadPrevHandler:   loadPrevItems,
			prevButtonStateHandler:   handlePrevButtonState,
			autoPlay: 4000,
			size:length1,
			wrap:true
		}
	);
	

};


YAHOO.util.Event.addListener(window, 'load', pageLoad);
YAHOO.util.Event.addListener("stop-button", 'click', stopAutoPlay);
YAHOO.util.Event.addListener("start-button", 'click', startAutoPlay);

</script>
</head>

<body>
<!-- Carousel Structure -->
<div id="dhtml-carousel" class="carousel-component">
	
	<div class="carousel-clip-region" style="height:220px;">
		<ul class="carousel-list">
		</ul>
	</div>
	
</div>


</div> 

</body>
</html>