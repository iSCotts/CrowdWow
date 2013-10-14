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
		
<form name="form1" method="post" action="update_tag.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:-25px"> 
<?php 
	
 $sql=("SELECT * from tag_blog where id='$aid'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$tagg=$row1['tag'];

}
	?>	

<tr>
<td height="30">Tag Blog</td>
<td><input type="text" size="30" name="tags" value="<?php echo $tagg; ?>" /> &nbsp;<span id="email" style="color:#FF0000"/></td> </tr>

 &nbsp;<span id="repass1" style="color:#FF0000"/> </tr>

<tr>
<td></td><td height="30" ><input type="submit" name="submit"  value="Submit"></td>
</tr></table>


</form></div>

		</div>
		
	</section>
	</body></html>