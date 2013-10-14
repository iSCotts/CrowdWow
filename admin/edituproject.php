<?php
include("include/connect.php");
@$id=$_GET['aid'];
$id1=$_GET['id'];
$sql="select * from duration where du_id='$id'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
  {

 $days=$row['days'] ;
 $spent=$row['spent'];
 $votes=$row['votes'];
 $percent=$row['percent'];
  }
   
  

if(isset($_POST['submit']))
{
$d=$_POST['days'];
$s=$_POST['spent'];
$v=$_POST['votes'];
$p=$_POST['per'];

$sql="update duration set days='$d',spent='$s',votes='$v',percent='$p' where du_id='$id'";
$result=mysql_query($sql);

}
?> 
<html>
<head>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
</head>
<body>


	
	<form name="useredit" action="<?php $_SERVER['HTTP_REFERER']; ?>" method="post">
	<table>
	<tr>
	<td>Date(m/d/Y)</td><td><input type="text" name="days" id="demo1" value=<?php echo $days; ?>  style="width:140px;" /> <a href="javascript:NewCal('demo1','ddmmyyyy')">
			<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">&nbsp;<span id="ptitle" style="color:#FF0000"/></td></tr>
	<tr>
	<td>Spent On</td><td><input type="text" size="40" name="spent" value="<?php echo $spent; ?>" id="lname"></td></tr>
	<tr>
	<td>Votes</td><td><input type="text" size="40" name="votes" value="<?php echo $votes; ?>" id="password"></td></tr>
	<tr>
	<td>Percentage</td><td><input type="text" size="40" name="per" value="<?php echo $percent; ?>" id="email"></td></tr>
	<td><input type="submit" name="submit" value="submit" class="btnstyle"></td>	
	</table></form></div>
	
		
		</body>
		</html>
		
		
