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

<div id="tabs" style="width:980px;">
	<ul>
		<li><a href="#tabs-1">About Us</a></li>
		<li><a href="#tabs-2">Contact Us</a></li>
		
		
	</ul>
	<div id="tabs-1" >
		<p><?php include("about.php"); ?></p>
	</div>
	<div id="tabs-2">
		<p><?php include("contact.php"); ?></p>
	</div>
	

</div>




</body>
</html>