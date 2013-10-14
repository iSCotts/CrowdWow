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
            window.location.href="forget_pass.php?$msg=Please enter email id !";
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
            window.location.href="forget_pass.php?$msg=The given email id does not exist.";
</script>
<?php

                       }
               }
               else
{
?>
<script type="text/javascript">
            window.location.href="forget_pass.php?$msg=Please enter valid email id.";
</script>
<?php
         }      

       }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
<div style=" width:400px; height:220px; margin-left:265px; margin-top:50px; margin-bottom:50px; background-color: #DFEFFF; border:1px; border-style:solid; border-color:#0000FF; padding:15px;">
<div style="height:50px;">
<h3>Forget passward ?</h3>
</div>
<hr>
<div style="height:50px;">
<p>Locked out of the lab? Just enter your email and  we'll send </br>you a new password right away.</p>
</div>
<hr>
<div>
<form id="form" action="" method="post"  >
<label style="margin-left:50px;">Email

</label><br>
<input type="text" name="u_email" id="email" height="100px" width="100px" />
</label>
<input type="submit" name="submit" value="Submit" class="btnstyle">

<div  style="margin-left:10px; margin-bottom:10px; margin-top:10px; color:#FF0000;"><font><?php if(isset($_GET['$msg'])) echo $_GET['$msg']; ?></font></div>
</form>
</div>
</div>
  </div>
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
