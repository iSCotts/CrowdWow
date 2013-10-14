<?php 
include("include/connect.php");
?>

<div class="bod_rt_btm_rt_rw3_top">IN NEWS </div>
      <div class="bod_rt_btm_rt_rw3_btm">
<?php 
 $sql="select * from news where n_status='1'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$title=$row['n_title'];
$link=$row['link'];
?>
<span class="nws"><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></span>
<?php } ?>
</div>