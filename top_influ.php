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

<div class='box latest-comments' style="width:270px;"> 		
<div>
<h3>Top Influencers </h3> 
</div> 
 <ul class='user-list' style="margin-top:0px;"> 
<?php 
@$query2=mysql_query("select * from id_comment limit 5");
?>
</h3>
</div>
<?php 
echo '<table border="0" cellpadding:"0" cellspacing="0">';

$sql=("SELECT user.u_firstname,user.u_lastname,user.u_id,user.u_balance,user_profile.image FROM user
inner JOIN user_profile on user.u_id=user_profile.u_id where user.u_balance>'0' order by  user.u_balance desc limit 5");
$query=mysql_query($sql);
while($row = mysql_fetch_array( $query ))
{
 $fname=  $row['u_firstname'];
 $lname=  $row['u_lastname'];
 $img=  $row['image'];
 $u_id= $row['u_id'];

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
<a href="topinfluence.php?$id=<?php echo $u_id; ?>&&go='top'" class="thumb"><?php echo "<img src='upload_image/$img' height='40' width='40'>";?></a>
<?php } 

}
echo '</td><td style="border-bottom:solid 1px #cccccc; width:240px; padding-bottom:5px; padding-top:5px;">';

 ?>
<a href="topinfluence.php?$id=<?php echo $u_id; ?>&&go='top'"><?php echo "<font size=3px color=#00a4e4>".$row['u_firstname'].$row['u_lastname']."</font><br/>";?></a>
<?php 
$s="select * from user where u_id='$u_id'";
$q=mysql_query($s);
$r=mysql_fetch_array($q);
$b=$r['u_balance'];
$c=($b*35)/100;
?>
<?php echo "has earned: $$c";
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




</div>
</div> 
</body>
</html>
