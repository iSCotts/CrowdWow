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

</head>
<form name="form1" method="post" action="">
<table>
<tr><td>
Title</td></tr>
<tr><td><input type="text" name="title" id="title" size="28"></td>  </tr>
<tr><td>
Review</td></tr>
<tr><td><textarea name="review" id="review" style="width:250px;"></textarea></td></tr>
<tr>
<td>
<?php
include("rating.php");
?>	</td></tr>
<tr><td><?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" onClick="openbox1('Login',1)"><input type="button"  name="steg1"  value='Review Submit' class="btnstyle"/></a>
<?php } else { ?>
<input type="submit" name="submit" style="font-size:12px; font-weight:normal;"  value='Review Submit' class="btnstyle"/>
<?php } ?></td></tr></table>
<?php 
@$pid=$_GET['pid'];
$result = mysql_query("SELECT * FROM rating where p_id=$pid");  

echo "<table width='100%' >";

while(@$row = mysql_fetch_array($result))
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
   echo "<td><span>". $row['p_review'] ."</span></td>";
  echo "</tr>";
   echo "<tr>";
  echo "<td width='30%'>";
  echo "<b>";
  echo "Reviewed By:";
  echo "</b>";
 
  $uid=$row['u_id'];
  $s="select * from user where u_id='$uid'";
  $q=mysql_query($s);
  $r=mysql_fetch_array($q);
  echo " " . $r['u_firstname'] . "</td>";
  echo "</tr>";

  }
echo "</table>";

?>
</form>

</html>