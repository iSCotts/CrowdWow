<?php 
include("include/connect.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>

<div class='box latest-comments' style="width:278px;"> 		
<div>
<h3>Hot Topics<p style="float:right"><a href="forum.php" style="color:#00a4e4;">Forum</a></p></h3>
</div> 
 <ul class='user-list' style="margin-top:0px;"> 
<?php 
//@$query2=mysql_query("select * from topic_comment limit 5");
?>
</h3>
</div>
<?php 
echo '<table border="0" cellpadding:"0" cellspacing="0">';

$sql=("SELECT user.u_firstname,user.u_lastname,user.u_id,topic.topic_desc,topic.topic_title FROM user
inner JOIN topic where user.u_id=topic.u_id order by  u_id desc limit 4");
$query=mysql_query($sql);
while($row = mysql_fetch_array( $query ))
{
 $fname=  $row['u_firstname'];
 $lname=  $row['u_lastname'];
 $t=$row['topic_title'];
 $u_id= $row['u_id'];
$d=$row['topic_desc'];
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
<a href="topinfluence.php?$id=<?php echo $u_id; ?>&&go='top'" class="thumb"><?php echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; ?></a>
 <?php }
 else
 {?>
<a href="topinfluence.php?$id=<?php echo $u_id; ?>&&go='top'" class="thumb"><?php echo "<img src='upload_image/$image' height='40' width='40'>";?></a>
<?php } 

}
echo '</td><td style="border-bottom:solid 1px #cccccc; width:230px; padding-bottom:5px; padding-top:5px;">';

 ?>
<a href="topinfluence.php?$id=<?php echo $u_id; ?>&&go='top'"><?php echo "<font size=3 color=blue>".$row['u_firstname'].$row['u_lastname']."</font><br/>";?>
<?php echo "$t";?></a>
<?php echo "<br>";
echo "$d";
echo '</td></tr>';
echo '<tr><td>';

 echo '</td></tr>';
echo '<tr><td colspan=2></td></tr>';
?>

<?php } 
echo '</table>';

?>
</ul>
</div> 

</div>
</div>




</div>
</div> 
</body>
</html>

