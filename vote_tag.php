<?php
include("include/connect.php");

session_start();
 $q=$_GET["q"];
 @$m=$_GET["mode"];
$u_id=$_SESSION['u_id'];
?>

<?php
if($m=='pos')
{
$sql="SELECT * FROM pro_tag WHERE tag_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
   $s_id=$row['tag_id'];
  $vote_idea= $row['tag_vote'];
  $uid=$row['u_id'];
  }
 $vote_idea=$vote_idea+1;
$update="update pro_tag set u_id='".$uid.",".$u_id."',tag_vote='$vote_idea' where tag_id ='$q'";
mysql_query($update);

?>

<a  style="background-color:#666666" class="button icon bright" onClick="hiddenHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {

$sql1="SELECT * FROM pro_tag WHERE tag_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row1 = mysql_fetch_array($result1))
  {
 $vote_idea1= $row1['tag_vote'];
$u_id1= $row['u_id'];
  }
$b=explode(",",$u_id1);
$c=count($b);
		for(@$i=0;$i<$c;$i++)
		{
		if(@$b[$i]!=$u_id) 
		{
                $d .=$b[$i].",";
                }}

$user_id = substr($d,0,-1);

 $vote_idea1=$vote_idea1-1;
 $update2="update pro_tag set u_id='$user_id',tag_vote='$vote_idea1' where tag_id ='$q'";
mysql_query($update2);
?>

	
<a  class="button icon bright" onClick="showHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>