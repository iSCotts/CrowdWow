<?php
include("include/connect.php");

session_start();
$u_id=$_SESSION['u_id'];
 $q=$_GET["q"];
 @$m=$_GET["mode"];
?>

<?php
if($m=='pos')
{
$sql="SELECT * FROM pro_naming WHERE pro_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
   $s_id=$row['pro_id'];
  $vote_idea= $row['pro_vote'];
   $uid=$row['u_id'];
  }
 $vote_idea=$vote_idea+1;
 $update="update pro_naming set u_id='".$uid.",".$u_id."',pro_vote='$vote_idea' where pro_id ='$q'";
mysql_query($update);

?>

<a  style="background-color:#666666" class="button icon bright" onClick="hiddenHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {

$sql1="SELECT * FROM pro_naming WHERE pro_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row = mysql_fetch_array($result1))
  {
 $vote_idea1= $row['pro_vote'];
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
 $update="update pro_naming set u_id='$user_id',pro_vote='$vote_idea1' where pro_id ='$q'";
mysql_query($update);
?>

	
<a  class="button icon bright" onClick="showHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>