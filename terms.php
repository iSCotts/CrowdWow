<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
<div class="bod">
  <div class="bod_rt">
    
	<?php 
	$sql="select * from t_and_c where tc_status='1'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	echo $terms=$row['terms'];
	 ?>
	</div>
  </div>
</div></div></div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
