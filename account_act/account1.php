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

<div>

<div id="tabs" style="width:950px;">
	<ul>
		<li><a href="#tabs-1">Overview</a></li>
		<li><a href="#tabs-2">Ideas Submitted</a></li>
		<li><a href="#tabs-3">Influence Register</a></li>
		<li><a href="#tabs-4">Account Balance</a></li>

		
		<li><a href="#tabs-5">Latest Activity</a></li>

	</ul>
	<div id="tabs-1">
		<p><?php include("overview.php"); ?></p>
	</div>
	<div id="tabs-2">
		<p><?php include("ideas_sub.php"); ?></p>
	</div>
	<div id="tabs-3">
		<p><?php include("influence_reg.php");  ?></p>
	</div>
	<div id="tabs-4">
		<p><?php include("order.php");  ?></p>
	</div>
	
	<div id="tabs-5">
		<p><?php include("lat_activity.php");  ?></p>
	</div>
</div>
<div style="height:30px">
</div>


</div>



</body>
</html>