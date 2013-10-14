<?php 
include("admin/include/connect.php"); 
@$id=$_GET['sid'];
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
 $sql="insert into rating(s_id,title,p_rating,p_review) values('$id','$title','$vote','$review')";
$query=mysql_query($sql);
}
?>
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
	</form>