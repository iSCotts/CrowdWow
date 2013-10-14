<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Tabs - Default functionality</title>
	<link rel="stylesheet" href="theme/jquery.ui.all.css">
	<script src="ui/jquery-1.5.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.tabs.js"></script>

	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});


	</script>
	
</head>
<body>



<div id="tabs" style="width:950px;">
	<ul>
		<li><a href="#tabs-1">Information</a></li>
		<!--<li><a href="#tabs-2">comment</a></li>-->
		<li><a href="#tabs-3">Comment</a></li>
	<!--	<li><a href="#tabs-4">Comments</a></li>-->

		
	</ul>
	<div id="tabs-1">
		<p><?php include("investor_detail.php"); ?></p>
	</div>
	<div id="tabs-3">
		<p><?php include("investor_detail3.php"); ?></p>
	</div>
<div style="height:100px;">
	</div>

</div>




</body>
</html>