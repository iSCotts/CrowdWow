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

<div id="tabs" style="width:1001px; float:left; margin-bottom:153px; margin-top:30px;">
	<ul>
		<li><a href="#tabs-1">Overview</a></li>
		<li><a href="#tabs-2">Free-For-All</a></li>
		<li><a href="#tabs-3">Products</a></li>
		<li><a href="#tabs-4">Process</a></li>
        
		<li><a href="#tabs-5">Community</a></li>
		<li><a href="#tabs-6">Site/Tech</a></li>
		<li><a href="#tabs-7">Tips & Tricks</a></li>
		<li><a href="#tabs-8">Rants & Raves</a></li>
	</ul>
	<div id="tabs-1">
		<p><?php include("overview.php"); ?></p>
	</div>
	<div id="tabs-2">
		<p><?php include("free1.php"); ?></p>
	</div>
	<div id="tabs-3">
		<p><?php include("product.php");  ?></p>
	</div>
	<div id="tabs-4">
		<p><?php include("process.php");  ?></p>
	</div>
	<div id="tabs-5">
		<p><?php include("community1.php");  ?></p>
	</div>
    <div id="tabs-6">
		<p><?php include("tech.php"); ?></p>
	</div>
    <div id="tabs-7">
		<p><?php include("tips.php"); ?></p>
	</div>
    <div id="tabs-8">
		<p><?php include("rants.php"); ?></p>
	</div>

</div>
<div style="height:200px">
</div>
</div>



</body>
</html>