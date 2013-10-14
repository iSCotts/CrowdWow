<?php
include("include/connect.php");

session_start();
 $q=$_GET["q"];
 @$m=$_GET["mode"];
?>

<?php
if($m=='pos')
{
 $sql="SELECT * FROM design WHERE p_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
  $s_id=$row['p_id'];
  $vote_idea= $row['vote'];
   
  }
 $vote_idea=$vote_idea+1;
$update="update design set vote='$vote_idea' where p_id ='$q'";
mysql_query($update);
?>

<a  style="background-color:#666666" class="button icon bright" onClick="hiddenHint(<?php echo $s_id ?>,<?php echo $s_id; ?>)" >
<span class="text">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {

$sql1="SELECT * FROM themes WHERE t_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row = mysql_fetch_array($result1))
  {
 $s_id=$row['p_id'];
  $vote_idea1= $row['vote'];
   }
 $vote_idea1=$vote_idea1-1;
  $update2="update design set vote='$vote_idea' where p_id ='$q'";
mysql_query($update2);
?>

	
<a  class="button icon bright" onClick="showHint(<?php echo $s_id; ?>,<?php echo $s_id; ?>)" >
<span class="text">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>