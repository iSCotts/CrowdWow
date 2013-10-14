<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="theme/jquery.ui.all.css">
	<script src="ui/jquery-1.5.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.tabs.js"></script>
<script src="js/jquery.anythingzoomer.js"></script>
	<script>
	$(function() {
		$( "#tabs1" ).tabs();
	});
	</script>
</head>
<body>
<div id="tabs1" style="width:521px;">
	<ul>
		<li><a href="#tabs1-1">Highlights</a></li>
		<li><a href="#tabs1-2">Reviews</a></li>
                <li><a href="#tabs1-3">Influence & Stats</a></li>
		<li><a href="#tabs1-4">Press</a></li>
	</ul>.
	<div id="tabs1-1" >
		<p><?php include("highlight.php"); ?></p>
	</div>
	<div id="tabs1-2">
		<p><?php include("review.php"); ?></p>
	</div>
        <div id="tabs1-3" >
		<p><?php include("stats.php"); ?></p>
	</div>
	<div id="tabs1-4">
		<p><?php include("press.php"); ?></p>
	</div>
</div>
</body>
</html>