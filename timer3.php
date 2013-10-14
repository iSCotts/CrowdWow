<?php
$result = mysql_query("SELECT * FROM timer");

while($row = mysql_fetch_array($result))
  {
$submit_project=$row['submit_project'] ;
  }
?>
<html>
<head>
<script language="JavaScript">
TargetDate = "<?php echo $submit_project; ?>";
ForeColor = "#FF00FF";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% <b>Days</b>  %%H%%: %%M%%: %%S%% ";
FinishMessage = "Complete!";
</script>
<script language="JavaScript" src="js/countdown1.js"></script>
</head>
</html>