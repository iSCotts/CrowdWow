<?php
include("include/connect.php");

session_start();
 $q=$_GET["q"];
 @$m=$_GET["mode"];
?>

<?php
if($m=='pos')
{
 $sql="SELECT * FROM colors WHERE p_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
   $s_id=$row['p_id'];
  $vote_idea= $row['vote'];
  }
 $vote_idea=$vote_idea+1;
 $update="update colors set vote='$vote_idea' where p_id ='$q'";
mysql_query($update);

?>

<a  style="background-color:#666666" class="button icon bright" onClick="hiddenHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {

$sql1="SELECT * FROM colors WHERE p_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row = mysql_fetch_array($result1))
  {
 $vote_idea1= $row['vote'];
  }
 $vote_idea1=$vote_idea1-1;
 $update2="update colors set vote='$vote_idea1' where p_id ='$q'";
mysql_query($update2);
?>

	
<a  class="button icon bright" onClick="showHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>