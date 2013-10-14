<?php 
include("include/connect.php");
 $aid=$_GET['aid'];
?>
<head>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
</head>
<body>
<section id="main" class="column">
		<article class="module width_8_quarter">
		<div class="tab_container" style="width:120%">
		
<form name="form1" method="post" action="update_project_point.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	
<?php 
	
 $sql=("SELECT * from project_point where pp_id='$aid'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$res=$row1['r_percent'];
		$des=$row1['d_percent'];
		$brand=$row1['b_percent'];
                $point=$row1['points']; 
                $point1=$row1['apoints'];
}
	?>	
	<table style="padding-left:-25px"> 
<tr>
<td height="30">Project Points</td>
<td><input type="text" size="15" name="point" value="<?php echo $point; ?>" /></td></tr>
<!--<tr>
<td height="30">Admin Project Point</td>
<td><input type="text" size="15" name="apoints" value="<?php echo $point1; ?>" /></td></tr>-->
<tr>
<td height="30">Research</td>
<td><input type="text" size="15" name="research" value="<?php echo $res; ?>" /></td></tr>
<tr>
<td height="30">Design</td>
<td><input type="text" size="15" name="design" value="<?php echo $des; ?>" /></td></tr>
<tr>
<td height="30">Branding</td>
<td><input type="text" size="15" name="branding" value="<?php echo $brand; ?>" /></td></tr>
<tr>
<td></td><td height="50" style="margin-left:0px"><input name="submit" type="submit" value="Submit"></td>
</tr></table>


</form></div>

		</div>
		
	</section>
	</body></html>