<p style="font-size:14px; color:#666666">
<?php
$pid=$_GET['pid'];
$sql="select * from highlight where p_id='$pid' and h_status='1'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$image=$row['h_image'];
$desc=$row['h_desc'];
?>

<?php
echo $desc;
?>

<?php 
echo "<br>";
echo "<br>";
if($image!="")
{
?>
<img src="admin/uploadimage/<?php echo $row['h_image']; ?>"  height="200" width="180" />
<?php
}
}
?>
</p>


