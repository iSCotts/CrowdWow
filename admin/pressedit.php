<?php 
include("include/connect.php");
 $aid=$_GET['aid'];


?>


<head>
<script type="text/javascript">
function vali()
{
	if(document.form1.title.value=="")
	{
		document.getElementById('ptitle').innerHTML='Please Enter press title';
		return false
	}
	else
	{
		document.getElementById('ptitle').innerHTML='';
	}
        if(document.form1.link.value=="")
	{
		document.getElementById('plink').innerHTML='Please Enter press link';
		return false
	}
	else
	{
		document.getElementById('plink').innerHTML='';
	}
}
</script>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />


</head>

<body>
<section id="main" class="column">
		
	
		<article class="module width_7_quarter">
	
		<div class="tab_container" style="width:100%">
		
		
<form name="form1" method="post" action="update_press.php?id=<?php echo $aid; ?>"  enctype="multipart/form-data" >
	
	<table style="padding-left:15px"> 
<?php 
	
	$sql=("select * from press where pr_id='$aid'");

    $query=mysql_query($sql);
    while($row1=mysql_fetch_array($query))
		{
		
		$prid=$row1['pr_id'];
		$title=$row1['p_title'];
		$link=$row1['p_link'];
		
}
	?>	
	
		<?php /*
		$sql2="select * from product where p_id='$p_id'";
		$result2=mysql_query($sql2);
		while($row2=mysql_fetch_array($result2))
		{
		 $p_name=$row2['p_name'];
		 }
		*/?>
			

<tr>
<td height="50">Title</td>
<td><input type="text" name="title" size="30" value="<?php echo $title;  ?>"  /> &nbsp;<span id="ptitle" style="color:#FF0000"/></td></tr>
<tr>
<td height="50">Link</td>
<td><input type="text" name="link" size="30" value="<?php echo $link; ?>" /> &nbsp;<span id="plink" style="color:#FF0000"/></td></tr>

<tr>
<td></td><td height="50" style="margin-left:0px"><input type="submit" name="submit"  value="Save"></td>
</tr></table>


</form></div>
				 
		
			
			
	
			
		</div>
		
	</section>
	</body></htm>