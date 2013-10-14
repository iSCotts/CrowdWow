<?php
include("include/connect.php");
@session_start();
 @$userid=$_SESSION['u_id']; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class='tier x11' style="margin-right:50px;">
<div class='box bordered latest-activity squared'>
<div class='hd clearfix'>
<h3><a href='#'>Your Latest Activity</a></h3>
</div>
<div class='bd'>
		
		
		
		
<div class=' ' >
<table>

<tr>
<td>
<?php
 $userid=$_SESSION['u_id']; 
 @$sql1="SELECT * from id_comment where u_id='$userid' order by sub_id desc ";
$sql2=mysql_query($sql1);
while($r1=mysql_fetch_array($sql2))
		{
		 $com=$r1['comment'];
	
	 $sub=$r1['sub_id'];
	
?>		
<div class=''>
		
<div class='latest-activity-item-timestamp'>
<!--<p class='date'>07/01/11</p>
<p class='time'>06:18 PM</p>-->
</div>
		
<div>
<p class='latest-activity-item-head'>You Commented on <a href="idea.php?i_id=<?php echo $sub; ?>"><font style="color:#666666">
<?php
	 $sub=$r1['sub_id'];
 @$sql1="SELECT desc_idea from submit_idia where sub_id='$sub'";
 $query1=mysql_query($sql1);
while ($r3=mysql_fetch_array($query1))
	{
	echo $r3['desc_idea'];
	}
?>	
</font></a></p>
<p class='latest-activity-item-body'>
							<?php echo $com;  ?>

</p>
</div>
		
</div>
<hr / style="width:850px;">
<?php } ?>
</td>
</tr>
</table>		
</div>
</div>
</div>
</div>


</body>
</html>
