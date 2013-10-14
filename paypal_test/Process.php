<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing Please wait.</title>
</head>

<body onload="document.paypal_form.submit();">
<h2>Processing Transaction...</h2>
<p><strong>Please wait... please don't close this window.</strong></p>
<?php
$amount = $_REQUEST['total'];
$FirstName = $_REQUEST['FirstName'];
$Surname = $_REQUEST['Surname'];
$EmailAddress = $_REQUEST['Email'];
$reason = $_REQUEST['Reason'];

?>

<form method="post" name="paypal_form" action="https://www.paypal.com/cgi-bin/webscr">

    <input type="hidden" name="business" value="youremail@yourwebsite.com" />
    <input type="hidden" name="cmd" value="_xclick" />
    <!-- the next three need to be created -->
    <input type="hidden" name="image_url" value="http://www.yourwebsite.com/images/logo.jpg" />
    <input type="hidden" name="return" value="http://www.yourwebsite.com/success.html" />
    <input type="hidden" name="cancel_return" value="http://www.yourwebsite.com//cancel.html" />
    <input type="hidden" name="notify_url" value="http://www.yourwebsite.com/ipn.php" />
    <input type="hidden" name="rm" value="2" />
    <input type="hidden" name="currency_code" value="GBP" />
    <input type="hidden" name="lc" value="US" />
    <input type="hidden" name="bn" value="toolkit-php" />
    <input type="hidden" name="cbt" value="Continue" />
    
    <!-- Payment Page Information -->
    <input type="hidden" name="no_shipping" value="" />
    <input type="hidden" name="no_note" value="1" />
    <input type="hidden" name="cn" value="Comments" />
    <input type="hidden" name="cs" value="" />
    
    <!-- Product Information -->
    <input type="hidden" name="item_name" value="Payment for Services" />
  
    <input type="hidden" name="amount" value="<?php echo $amount; ?>"/>
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_number" value="<?php echo $reason; ?>" />
    <input type="hidden" name="undefined_quantity" value="" />
    <input type="hidden" name="on0" value="Order ID" />
    <input type="hidden" name="on1" value="" />
    <input type="hidden" name="os1" value="" />
    

    <!-- Customer Information -->
    <input type="hidden" name="first_name" value="<?php echo $FirstName; ?>" />
    <input type="hidden" name="last_name" value="<?php echo $Surname; ?>" />
    <input type="hidden" name="address1" value="Street no. 1" />
    <input type="hidden" name="address2" value="" />
    <input type="hidden" name="city" value="MyTown" />
    <input type="hidden" name="state" value="" />
    <input type="hidden" name="zip" value="10004" />
    <input type="hidden" name="email" value="<?php echo $Email; ?>" />
    <input type="hidden" name="night_phone_a" value="" />
    <input type="hidden" name="night_phone_b" value="" />
    <input type="hidden" name="night_phone_c" value="" />

<noscript><p>Your browser doesn't support Javscript, click the button below to process the transaction.</p>
<input type="submit" name="Submit" value="Process Payment" />
</noscript>
</form>
</body>
</html>
