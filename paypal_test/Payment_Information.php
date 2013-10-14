<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$amount = $_REQUEST['amount'];
$newamount =$amount + $amount / 100 * 2.6 + 0.30;
$amount = round($newamount, 2);

?>
<body>
<form id="form1" name="form1" method="post" action="Process.php">
<table width="685" border="0" align="center">
  <tr>
    <td width="293">Amount to Pay (Including Paypal fees)</td>
    <td width="376">
      <label>
        <input type="hidden" name="total" id="total" Value="<?php echo $amount; ?>" />
        £
        <input type="text" name="total" id="total" Value="<?php echo $amount; ?>" disabled="disabled"/>
      </label>
    </td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><label>
      <input type="text" name="FirstName" id="FirstName" />
    </label></td>
  </tr>
  <tr>
    <td>Surename</td>
    <td><input type="text" name="Surname" id="Surname" /></td>
  </tr>
  <tr>
    <td>Email Address</td>
    <td><input type="text" name="Email" id="Email" /></td>
  </tr>
  <tr>
    <td>Payment Reason</td>
    <td><textarea name="Reason" cols="50" id="Reason"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="Submit" name="Submit" id="Submit" value="Continue" /></td>
  </tr>
</table>
</form>
</body>
</html>