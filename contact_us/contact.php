<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div style="width:800px;">
<?php
$sql="select * from contact_us where cu_status='1'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
echo $row['contact'];
}
?>
</div>
</body>
</html>
