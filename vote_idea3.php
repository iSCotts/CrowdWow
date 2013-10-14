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
$sql="SELECT * FROM design WHERE d_id = '".$q."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
     $vote= $row['vote'];
 $uid=$row['u_id'];
  }
 $vote=$vote+1;
  $update="update design set u_id='".$uid.",".$u_id."',vote='$vote' where d_id ='$q'";
mysql_query($update);

?>

<a  style="background-color:#666666" class="button icon bright" onclick="hiddenHint(<?php echo $q; ?>,<?php echo $q; ?>)">
<span class="text" style="width:200px;">Take your Vote</span> 

<span class="check"></span></a>

<?php 
} else {
$sql1="SELECT * FROM design WHERE d_id = '".$q."'";
$result1 = mysql_query($sql1);
while($row = mysql_fetch_array($result1))
  {
 $vote_idea1= $row['vote'];
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
 $update2="update design set u_id='$user_id',vote='$vote_idea1' where d_id ='$q'";
mysql_query($update2);
?>

	
<a  class="button icon bright" onclick="showHint(<?php echo $q; ?>,<?php echo $q; ?>)" >
<span class="text" style="width:200px;">Vote For This Idea</span> 

<span class="check"></span></a>

<?php } ?>