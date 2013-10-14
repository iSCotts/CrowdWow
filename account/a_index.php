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
<script type="text/javascript">
function showsubmenu(id)
 {
 
for(i=1;i<=5;i++)
{
if(i==id)
{
document.getElementById('s'+i).style.display="inline";
} 
else 
{
document.getElementById('s'+i).style.display="none";
}
}
}
function showsubmenu2(id)
 {
 
for(i=1;i<=2;i++)
{

if(i==id)
{
document.getElementById('d'+i).style.display="inline";
} 
else 
{
document.getElementById('d'+i).style.display="none";
}
}
}
</script>
	<style>
ul, li{border:0; padding:0; margin:0; list-style:none;}

/* ----------- Navigation ----------- */
#top-navigation{
background:url(../../gmail1/img/topnav-bg.gif) repeat-x;
width:auto;
height:48px;
margin:0 auto;
}
#navigation{
background:url(../../gmail1/img/nav-bg.gif) repeat-x;
height:32px;
margin:0 auto;
width:auto;
background-color:#996600;
}
#navigation ul{
height:32px;
line-height:32px;
}
#navigation ul li{
display:inline;
}
#navigation ul li a,
#navigation ul li a:visited {
background:url(../../gmail1/img/line-a.gif) right no-repeat;
padding:0 20px;
display:block;
text-decoration:none;
float:left;
color:#4261df;
font-weight:bold;
text-shadow:#ffffff 2px 2px 2px;
}
#navigation ul li a:hover{
}

/* ----------- Sub Menu ----------- */
#a1:hover{background-color:#FFFFFF;}
#sublinks{
width:auto;
margin:0 auto;
background:#888888 url(../../gmail1/img/sublink.gif);
height:30px;
font-size:11px;

}
#sublinks ul{
height:32px;
line-height:31px;
}
#sublinks ul li{
display:inline;

}
#sublinks ul li a,
#sublinks ul li a:visited {
padding:0 20px;
display:block;
text-decoration:none;
float:left;

}
#sublinks ul li a:hover{
text-decoration:none;
background-color:#FFFFFF;
font-size:18px;
}

/* ----------- Hide Sub menu ----------- */
#s2, #s3{display:none;}
</style>
</head>
<body>

<div id="tabs" style="width:1050px; float:left; margin-bottom:70px;">
	<ul>
		<!--<li><a href="#tabs-1">Overview</a></li>-->
		<li><a href="#tabs-2">Activity</a></li>
		<li><a href="#tabs-3">Account Setting</a></li>
		<!--<li><a href="#tabs-4">Inbox</a></li>-->
		<!--<li><a href="#tabs-4">Notification Settings</a></li>-->
	</ul>
	<div id="tabs-4" >
<div>

<?php //include("inbox.php");  ?>

</div>
</div>
<div id="tabs-2" >
<div id="sublinks">
<ul >
<li><a href="#" id="a1"  onClick="javascript:showsubmenu(1)">Overview</a></li>
<li><a href="#" id="a1" onClick="javascript:showsubmenu(2)">Ideas Submitted</a></li>
<li><a href="#" id="a1"  onClick="javascript:showsubmenu(3)">Influnce Register</a></li>
<li><a href="#" id="a1"  onClick="javascript:showsubmenu(4)">Account Balance</a></li>
<li><a href="#" id="a1" onClick="javascript:showsubmenu(5)">Latest Activity</a></li>
</ul>


</div>
	<div id="s1">
		<?php include("overview1.php"); ?>
	</div>
	<div id="s2" style="display:none;">
		<?php include("ideas_sub.php");  ?>
	</div>
	<div id="s3" style="display:none;">
		<?php include("influence_reg.php");  ?>
	</div>

	<div id="s4" style="display:none;">
		<?php include("order.php");  ?>
	</div>
	<div id="s5" style="display:none;">
		<?php include("lat_activity.php");  ?>
	</div>
</div>
<div id="tabs-3" >
<div id="sublinks">
<ul >

<li><a href="#" onClick="javascript:showsubmenu2(1)">Account Info</a></li>
<li><a href="#" onClick="javascript:showsubmenu2(2)">Shipping & Billing</a></li>

</ul>
</div>


	<div id="d1">
		<?php include("a_info.php");  ?>
	</div>
	<div id="d2" style="display:none;">
		<?php include("ship.php");  ?>
	</div>
	<div id="d4" style="display:none;">
		<?php //include("a_info.php");  ?>
	</div>

</div>
<div style="height:200px">
</div>
</div>
</body>
</html>