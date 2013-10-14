<?php
/*$sql6="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.vote_idea,submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' limit 40";
 $query6=mysql_query($sql6);
 
 while($row6=mysql_fetch_array($query6))
 {
 $id=$row6['sub_id'];
} */

$id=$_GET['i_id2'];

$result = mysql_query("SELECT * FROM duration where p_id='$id'");

while($row = mysql_fetch_array($result))
  {
$date=$row['days'] ;
  }

?>

<html>
<head>

<script language="JavaScript">
TargetDate = "<?php echo $date; ?>";
ForeColor = "#FF00FF";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% <b>Days</b>  %%H%%: %%M%%: %%S%% ";
FinishMessage = "Complete!";
</script>
<script language="JavaScript" src="js/countdown6.js"></script>

</head>
</html>

