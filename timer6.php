<?php
$id=$_GET['i_id'];
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
<script language="JavaScript" src="js/countdown4.js"></script>

</head>
</html>