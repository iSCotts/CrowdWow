<?php
include("include/connect.php");
@$id=$_GET['aid'];
$sql="select * from shop where s_id='$id'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
@$fname=$row['s_name'] ;
 }
if(isset($_POST['submit']))
{
$sname=$_POST['sname'];

$sql="update shop set s_name='$sname' where s_id='$id' ";
$result=mysql_query($sql);
}
?> 
<html>
<body>
<?php include("shopform.php");  ?>
</div>
</body>
</html>
		
		

