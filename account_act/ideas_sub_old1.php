<?php
include("include/connect.php");
@session_start();
 @$userid=$_SESSION['u_id']; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="tier x12 page-header">
<div class="column x12">
<div class='box'>
<h1 class='light-sans'><a href=''>Your Idea Submissions</a></h1>
<p class='page-description light-sans'>Here's a list of all the ideas you’ve submitted for evaluation by the Quirky community</h2></p>
</div>
</div>
</div>
	
<div class="tier x12 idea-table">
<table width='930' border="1" >

<tr>
<th class='alt' width="400"><p><span class='left'>Your Submissions</span> <span class=''>(2)</span></p></th>

<th class='icon' width="150"><p><span class='rating'> &nbsp;&nbsp;&nbsp;Comment</span></p></th>
<th class='icon alt' width="150" ><p><span class='votes'> &nbsp;&nbsp;&nbsp; Votes</span></p></th>
<th class='icon' width="150"><p><span class='comment'> &nbsp;&nbsp;&nbsp;Invest</span></p></th>

</tr>

<?php 
 @$userid=$_SESSION['u_id']; 
 $sql="SELECT * FROM submit_idia  where sub_status='1' and u_id='$userid' limit 4";
  $query=mysql_query($sql);
 while($row=mysql_fetch_array($query))
 {
 $sub=$row['sub_id']; 
$idia=$row['desc_idea']; 
$vote=$row['vote_idea']; 
$invest=$row['invest']; 

 ?>			
			

<tr>

<td>

<span class='left'>

<?php echo $idia; ?></span>

<span class='right'>


</span>
</td>

<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php

 $sub=$row['sub_id'];
@$query2=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_id,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$sub'");
 @$nr2=mysql_num_rows($query2);

?>
<?php
		if($nr2==0)
{
echo "0";
}
else
{
echo "$nr2";
}
	
 
 ?></td>
<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vote; ?></td>
<td >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $invest; ?></td>

</tr>

<?php } ?>

</table>
	

</div>



</body>
</html>
