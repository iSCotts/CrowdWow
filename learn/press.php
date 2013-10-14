<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<div id="" class="">
<div style="font-size:12px;margin-left:10px;margin-bottom:20px;">
<?php
$id=$_GET['pid'];
 $sql="select * from press where p_id='$id' and pr_status='1'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$title=$row['p_title'];
$link=$row['p_link'];

?>
<a href="<?php echo $link; ?>"><font color="#0066FF"><?php echo $title;?><?php echo "<br><br>"; ?></font></a>
<?php
}
?>
</div>
</div>


</body>
</html>
