<?php 
include("admin/include/connect.php"); 
@$id=$_GET['pid'];
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
 $sql="insert into rating(p_id,title,p_rating,p_review) values('$id','$title','$vote','$review')";
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
include("index1.php");
?>	</td></tr>
<tr><td><input type="submit" value="Review submit" name="submit"></td></tr></table>
<?php 
@$pid=$_GET['pid'];
$result = mysql_query("SELECT * FROM rating where p_id=$pid");  

echo "<table width='100%' border='2'>";

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