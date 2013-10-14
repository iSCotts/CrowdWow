<?php
include ("include/connect.php");
@session_start();
$reg_email='^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$';
if(isset($_POST['submit']))
{
 $send_email=$_POST['u_email'];


       if($send_email=="")
{
?>
<script type="text/javascript">
            window.location.href="forget_pass.php?msg=Please enter email id !";
</script>
<?php
}
       else
          {
             if(ereg($reg_email,$send_email))
               {
			      
                       $sql="SELECT * FROM user WHERE u_email='$send_email'";          
                       $res=mysql_query($sql) or die(mysql_error());
                       $row=mysql_fetch_array($res);
                       $rcount=mysql_num_rows($res);

					
                       if($rcount>0)
{
                            $email1=base64_encode($send_email);
                            $app="http://www.perflance.com/demo/quirky_new";        
                            require("request_mail.php");
}
                       else
                       {
?>
<script type="text/javascript">
            window.location.href="forget_pass.php?msg=The given email id does not exist.";
</script>
<?php

                       }
               }
               else
{
?>
<script type="text/javascript">
            window.location.href="forget_pass.php?msg=Please enter valid email id.";
</script>
<?php
         }      

       }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.textbox { background-color:#0066FF; }
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="stylesheet" href="css/logincss.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
<div id="stylized" class="myform" style=" margin-top:20px;">
<form id="form" action="" method="post"  >

<h1>Forgot Password ?</h1>
<p><br>
<font color="#FF0000" ></font>
</p>
Locked out of the lab? Just enter your email and </br> we'll send you a new password right away.
<p><br>
<font color="#FF0000"></font>
</p>

<label>Email

</label><br>
<input type="text" name="u_email" id="email" height="100px" width="100px" />
</label>
<input type="submit" name="submit" value="submit" class="textbox" style="color:#FFFFFF; width:100px;">



<div class="spacer" style="margin-left:20px; margin-bottom:10px;"><font style="color:#FF0000; font-weight:bold"><?php if(isset($_GET['msg'])) {  echo $_GET['msg']; } ?></font></div>

</form>
</div>
</div>
<div style="height:370px;"></div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
