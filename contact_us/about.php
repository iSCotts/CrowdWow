<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$sql="select * from about_us where au_status='1'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
?>
<div style="width:800px;">
<font color="#0099CC" size="3px"><?php echo $row['au_title']; ?>.</font><br /><br />
<?php echo $row['about']; ?>
</div>
<?php
}
?>
</body>
</html>
