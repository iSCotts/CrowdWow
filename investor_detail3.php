<?php
 @session_start();
include("include/connect.php"); 
 @$id=$_GET['$id'];
 @$go=$_GET['go'];
 $uid=$_SESSION['u_id'];
?>
<?php 
$query1=mysql_query("select p_id from payment where sub_id='$id'");
while($row=mysql_fetch_array($query1))
{
 @$pid=$row['p_id'];
}
?>
<?php 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$website=$_POST['website'];
$comment=$_POST['comment'];
$sql2=mysql_query("insert into comment set p_id='$pid',u_id='$uid',c_user='$username',c_email='$email',c_web='$website',c_comment='$comment'");
}
?>



<html>
<head>
<link type="text/css" rel="stylesheet" href="css/lightbox-form.css">
        <script src="js/lightbox-form.js" type="text/javascript"></script>
		<script src="js/lightbox-form1.js" type="text/javascript"></script>

</head>
<body>

<div style="padding:20px 20px 0 8px; ">
<div style="border-bottom:1px groove #BABABA;">
<?php 
@$query2=mysql_query("select * from comment where p_id='$pid'");
$nr2=mysql_num_rows($query2);

?>
<?php
		if($nr2==0)
{
echo "<font size=5 color=blue>No comment</font>";
}
else
{
echo "<font size=5 color=blue>Comment-".$nr2." </font>";
}
	?>
</div>	

<?php 
echo "<table>";
@$query3=mysql_query("select comment.c_comment,comment.p_id,user.u_firstname,user.u_lastname,user.u_id from comment inner join user on comment.u_id=user.u_id where comment.p_id='$pid'");
while($row3=mysql_fetch_array($query3))
{
 $u_id=$row3['u_id'];
?>
<!--<div style="border-bottom:2px solid #BABABA;">-->
<?php
echo "<tr><td>";
$sql4="SELECT image FROM `user_profile` WHERE  u_id='$u_id'";
@$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
 $image=$row4['image'];
 
 if($image=="" )
 {
echo "<img src='upload_image/user_noimage.png' height='40' width='40'>"; 
 }
 else
 {
echo "<img src='upload_image/$image' height='40' width='40'>";
} 

}
echo "</td><td>";

echo "<font size=4 color=blue>".$row3['u_firstname'].$row3['u_lastname']."</font><br/>";
echo $row3['c_comment'];
echo "</td></tr>";
echo "<tr><td colspan=2><hr></td></tr>";
?>
</div>
<?php } 
echo "</table>";

?>



<h2 id="leave-a-comment">Leave A Comment</h2>
<div style="padding-top:30px;">
<form action="" method="post" id="commentform">

<div style="width:200px;"> 
            <div>

        	<div class="user-field"><input type="text" name="username" value="Username (required)" style=" color:#666666"

            onblur="if(this.value==''){this.value='Username (required)'}"

            onfocus="if(this.value=='Username (required)'){this.value=''}"/></div>

        

        	<div class="user-field"><input type="text" name="email" value="Email (required)" style=" color:#666666"

            onblur="if(this.value==''){this.value='Email (required)'}"

            onfocus="if(this.value=='Email (required)'){this.value=''}"/></div>

        

        	<div class="user-field"><input type="text" name="website" value="Website" style=" color:#666666"

            onblur="if(this.value==''){this.value='Website'}"

            onfocus="if(this.value=='Website'){this.value=''}"/></div>


<div style="float:left; width:400px;">

    	<em><textarea cols="90" rows="8" name="comment"></textarea></em>
</div>


    <div id="submit-comment" style="float:left; width:200px; height:40px;">
         <?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" onClick="openbox1('Login',1)"><input type="button"  name="steg1"  value='Review Submit' class="btnstyle"></a>
<?php } else { ?>
    	<strong><input type="submit" name="submit" value="Post Comment" class="btnstyle" /></strong>
<?php } ?>
</div>
<div style="height:150px"></div>
</div>
</div>


</form>
</div>
</div>
</div>
</div>
</body>
</html>
