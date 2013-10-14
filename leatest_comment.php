<div class='box latest-comments' style="width:270px;"> 		
<div>
<h3>Latest Comments</h3> 
</div> 
 <ul class='user-list'> 
<?php 
@$query2=mysql_query("select * from id_comment limit 5");
?>
</h3>
</div>
<?php 
echo '<table border="0" cellpadding:"0" cellspacing="0">';
@$query3=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_firstname,user.u_lastname,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id limit 5");
while($row3=mysql_fetch_array($query3))
{
$u_id=$row3['u_id'];
?>

<?php
echo '<tr><td style="border-bottom:solid 1px #cccccc; padding-bottom:5px; padding-top:5px;">';
$sql4="SELECT image FROM `user_profile` WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];
 
 if($image=="")
 {?>
<a href="evaluation.php" class="thumb"><?php echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; ?></a>
 <?php }
 else
 {?>
<a href="evaluation.php" class="thumb"><?php echo "<img src='upload_image/$image' height='40' width='40'>";?></a>
<?php } 

}
echo '</td><td style="border-bottom:solid 1px #cccccc; width:250px; padding-bottom:5px; padding-top:5px;">';

 ?>
<a href="evaluation.php"> <?php echo "<font size=3 color=#00a4e4>".$row3['u_firstname'].$row3['u_lastname']."</font><br/>";?></a>
<?php echo $row3['comment'];
echo '</td></tr>';
echo '<tr><td colspan=2></td></tr>';
?>

<?php } 
echo "</table>";

?>
</ul>
</div> 

</div>
</div>
