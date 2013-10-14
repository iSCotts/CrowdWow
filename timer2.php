<?php
$result = mysql_query("SELECT * FROM timer");

while($row = mysql_fetch_array($result))
  {
$date=$row['date'] ;
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
<script language="JavaScript" src="js/countdown.js"></script>

</head>
</html>