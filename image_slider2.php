<?php 
 
$sql=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname, user.u_balance FROM user_profile inner JOIN user on user_profile.u_id=user.u_id where user.u_balance>'0' order by user.u_id desc limit 10");
$query=mysql_query($sql);
?>

<?php include("slider.php"); ?>

<div style="height:50px; "></div>
<table>
<tr>
<td valign="top" >
<div style="width:300px;">
<?php include("hot_topics.php");?>
</div>
</td> 
  

<td >
<div class="column x5" style="width:275px;">

<?php include("leatest_comment.php");?>
<div style="height:350px; width:300px;"></div>

</div>
</div>
</div>
</td>
<td >
<?php include("best_per.php");?></td>
</tr>
</table>

<table>
<tr>
<td>
<?php include("succ_story.php"); ?>
</td>
</tr>
</table>
