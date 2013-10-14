<?php 
@session_start();
include("include/connect.php"); 
 @$id=$_GET['pid'];
 $uid=$_SESSION['u_id'];
if(isset($_POST['submit']))
{
$q1="select * from vote";
$q2=mysql_query($q1);
while($q3=mysql_fetch_array($q2))
{
 $vote=$q3['value'];
}
 $title=$_POST['title'];
 $review=$_POST['review'];
 $sql="insert into rating(p_id,u_id,title,p_rating,p_review) values('$id','$uid','$title','$vote','$review')";
$query=mysql_query($sql);
}
?>
<html>
<head>
<form name="form1" method="post" action="">
<table>
<tr><td>
title</td></tr>
<tr><td><input type="text" name="title" id="title"></td>  </tr>
<tr><td>
Review</td></tr>
<tr><td><input type="text"  name="review" id="review"></td></tr>
<tr>
<td>
<?php
include("rating.php");
?>	</td></tr>
<tr><td><?php 
if($_SESSION['u_id']=="")
{
?>
<a href="relogin.php"><input type="button"  name="steg1"  value='Review Submit' style="background-color:#0099FF"></a>
<?php } else { ?>
<input type="submit" name="submit"  value='Review Submit' style="background-color:#0099FF">
<?php } ?></td></tr></table>
<?php 
@$pid=$_GET['pid'];
$result = mysql_query("SELECT * FROM rating where p_id=$pid");  

echo "<table width='100%' >";

while($row = mysql_fetch_array($result))
  {
  $rating=$row['p_rating'];
  echo "<tr>";
  ?>
<td rowspan='3' width='30%'>
<?php  for($i=0;$i<$rating;$i++)
  { 
 echo "<img src='rating/star.jpg' height=20 width=20>";
  }
  ?>
</td>
<?php
  echo "<td width='70%'><b><font color='#0000CC'>". $row['title'] . "<font></b></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td  width='30%'></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row['p_review'] . "</td>";
  echo "</tr>";
  echo "<td></td>";

  }
echo "</table>";

?>
</form>
</head>
</html>