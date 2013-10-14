<?php 
include("include/connect.php");
session_start();
@$userid=$_SESSION['userid'];
@$email=$_SESSION['email'];
if(@$_GET['act']=='yes' || @$_SESSION['email']!='' )
@$sql="select * from user where u_email='$email'";
@$query=mysql_query($sql);
@$row=mysql_fetch_array($query);
$row['u_firstname']." ".$row['u_lastname'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>JavaScript Dropdown Menu Demo</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        body { font-family:Arial, Helvetica, Sans-Serif; font-size:0.75em; }
        .desc { color:#E2E2E2;}
        .desc a {color:#E2E2E2;}
        
        .dropdown dd, .dropdown dt, .dropdown ul { margin:0px; padding:0px; }
        .dropdown dd { position:relative; }
        .dropdown a, .dropdown a:visited { color:#E2E2E2; text-decoration:none; outline:none;}
        .dropdown a:hover { color:#E2E2E2;}
        .dropdown dt a:hover { color:#E2E2E2; border: 1px solid #d0c9af;}
        .dropdown dt a {background:#E2E2E2 url(arrow.png) no-repeat scroll right center; display:block; padding-right:65px;
                        border:1px solid #d4ca9a; width:200px;}
        .dropdown dt a span {cursor:pointer; display:block; padding:5px;}
        .dropdown dd ul { background:#E2E2E2 none repeat scroll 0 0; border:1px solid #d4ca9a; color:#E2E2E2; display:none;
                          left:0px; padding:5px 0px; position:absolute; top:2px; width:auto; min-width:170px; list-style:none;}
        .dropdown span.value { display:none;}
        .dropdown dd ul li a { padding:5px; display:block;}
        .dropdown dd ul li a:hover { background-color:#E2E2E2;}
        
        .dropdown img.flag { border:none; vertical-align:middle; margin-left:10px; }
        .flagvisibility { display:none;}
        
        
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>
<body>
    <dl id="sample" class="dropdown">
        <dt><a href="#" style="text-decoration:none;"><span><b><?php echo $row['u_firstname']." ".$row['u_lastname'];  ?></b></span></a></dt>
        <dd>
            <ul style="z-index:100;">
			<?php 
			 $sq="select * from user where u_email='$email'";
			$go=mysql_query($sq);
			while($r=mysql_fetch_array($go))
			{
				$id=$r['u_id'];
			}
			$s="select * from user_profile where u_id='$id'";
			$g=mysql_query($s);
			while($r1=mysql_fetch_array($g))
			{
				$image=$r1['image'];
			}
                        if($image=="")
				{ ?>
					<li><table><tr><td><a href="view_profile.php" style="width:37px;"><img src="upload_image/user_noimage.png"  width="40" height="40"/></a></td><td><font color="#330066" size="-1"><b>Hi&nbsp;<?php echo $row['u_firstname']." ".$row['u_lastname'];  ?></b>, you are currently logged in</font><img class="flag" src="br.png" alt="" /></td></tr></table></li>
				<?php	} else	{ ?>
				
<li><table><tr><td><a href="view_profile.php" style="width:37px;"><img src="upload_image/<?php echo $image; ?>"  width="40" height="40"/></a></td><td><font color="#330066" size="-1"><b>Hi&nbsp;<?php echo $row['u_firstname']." ".$row['u_lastname'];  ?></b>, you are currently logged in</font><img class="flag" src="br.png" alt="" /></td></tr></table></li>

				<?php } ?>


<li><a href="my_account.php" style="text-decoration:none;"><b>My Account</b><img class="flag" src="br.png" alt="" /></a></li>
<li><a href="view_profile.php" style="text-decoration:none;"><b>My Profile</b><img class="flag" src="gb.png" alt="" /></a></li>
<li><a href="inbox.php" style="text-decoration:none;"><b>Inbox</b><img class="flag" src="cs.png" alt="" /></a></li>
<li><a href="forum.php" style="text-decoration:none;"><b>Forum</b><img class="flag" src="jp.png" alt="" /></a></li>
<li><a href="accountbalance.php" style="text-decoration:none;"><b>Account Balance</b><img class="flag" src="us.png" alt="" /></a></li>
<li><a href="my_account.php" style="text-decoration:none;"><b>Check order status</b><img class="flag" src="fr.png" alt="" /></a></li>
<li><a href="show_cart.php" style="text-decoration:none;"><b>Add to Cart</b><img class="flag" src="de.png" alt="" /></a></li>
<li><a href="logout.php" style="text-decoration:none;"><b>Logout</b><img class="flag" src="us.png" alt="" /></a></li>

            </ul>
        </dd>
    </dl>
    <span id="result"></span>
</body>
</html>
