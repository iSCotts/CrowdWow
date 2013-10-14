<?php

 	$a=$_POST['toname'];
	$emailsubject="Scopedeal- ".date("Y/m/d H:i:s"); 
	$headers.="From: " . $_REQUEST['frmname']."\n";
	$headers.="Reply-To: " . $_REQUEST['toname']."\n";

	 //echo $a="Email " . $_REQUEST['toname']."\n";

	//$mail.="Email " . $_REQUEST['toname']."\n";
	$message.="Comment: " . $_REQUEST['description']."\n";
	//$message.="User IP: " . $_SERVER['REMOTE_ADDR']."\n";
	$message.="Site: ". $_SERVER['HTTP_REFERER']."\n\n";
	
	mail($a,$emailsubject,$message,$headers);
	
	//$name=$_REQUEST['name'];
	 $email=$_REQUEST['toname'];
	
	 $msg=$_REQUEST['description'];
	
	$ip=$_SERVER['REMOTE_ADDR'];
	$site=$_SERVER['HTTP_REFERER'];
	
	?>

