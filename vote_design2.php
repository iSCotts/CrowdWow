<?php
include("include/connect.php");

session_start();
 $q=$_GET["q"];
 @$m=$_GET["mode"];
?>

<?php
if($m=='pos')
{
$sql="SELECT * FROM themes WHERE t_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
   $s_id=$row['t_id'];
  $vote_idea= $row['vote1'];
  $vote_idea2= $row['vote2'];
  $vote_idea3= $row['vote3'];
   $theme1=$row['theme1'];
   $theme2=$row['theme2'];
   $theme3=$row['theme3'];
  }
 $vote_idea=$vote_idea+1;
 $vote_idea2=$vote_idea2+1;
 $vote_idea3=$vote_idea3+1;
 /*$update="update themes set vote1='$vote_idea',vote2='$vote_idea2',vote3='$vote_idea3' where t_id ='$q'";
mysql_query($update);*/
/*$update="update themes set vote='$vote_idea' where t_id ='$q' and theme1='$theme1'";
mysql_query($update);*/
$update="update themes set vote2='$vote_idea2' where t_id ='$q' and theme2='$theme2'";
mysql_query($update);
/*$update="update themes set vote3='$vote_idea3' where t_id ='$q' and theme3='$theme3'";
mysql_query($update);*/
?>

<a  style="background-color:#666666" class="button icon bright" onClick="hiddenHint2(<?php echo $s_id ?>,<?php echo $s_id; ?>)" >
<span class="text">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {

$sql1="SELECT * FROM themes WHERE t_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row = mysql_fetch_array($result1))
  {
 $vote_idea1= $row['vote1'];
 $vote_idea12= $row['vote2'];
 $vote_idea13= $row['vote3'];
  }
 $vote_idea1=$vote_idea1-1;
 $vote_idea12=$vote_idea12-1;
 $vote_idea13=$vote_idea13-1;
 $update2="update themes set vote2='$vote_idea12' where t_id ='$q'";
mysql_query($update2);
?>

	
<a  class="button icon bright" onClick="showHint(<?php echo $s_id; ?>,<?php echo $s_id; ?>)" >
<span class="text">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>