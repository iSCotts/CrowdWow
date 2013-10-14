<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<!-- graph code begins here-->
<script type="text/javascript" src="js/wz_jsgraphics.js"></script>
<script type="text/javascript" src="js/line.js">

<!-- Line Graph script-By Balamurugan S http://www.sbmkpm.com/ //-->
<!-- Script featured/ available at Dynamic Drive code: http://www.dynamicdrive.com //-->

</script>

<div id="lineCanvas" style="overflow: auto; position:relative;height:300px;width:400px; margin-left:150px;">Unit

<script type="text/javascript">

var g = new line_graph();
<?php

$sql="select * from graph ";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
   $unit=$row['unit'];
  $date=$row['date'];

?> 

g.add('<?php echo $date; ?>', <?php echo $unit; ?>);
<?php } ?>


g.render("lineCanvas", "Month <br>Unit Graph-2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

</script>
</div>

</body>
</html>
