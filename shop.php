<?php
include("include/connect.php");
session_start();
$id=$_GET['id'];
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shop</title>

<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

    function rollover(id,p_type) {
	

        //alert(ptype);
		 document.getElementById(id).innerHTML= p_type;

    }
	    function rollout(id) {

        //alert(id);
		 document.getElementById(id).innerHTML= "";

    }

</script>
<?php 
if(isset($_GET['id']))
{
$pid2=$_GET['pid'];
$s3="select * from product inner join shop where product.s_id=shop.s_id ";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$pid1=$r3['p_id'];
}
?>
<script type="text/javascript">
function change(str)
{
	//alert(str);
	window.location.href="shop.php?id=<?php echo $id; ?>" +"&pid=<?php echo $pid1; ?>" + "&ptype="+str;
}


</script>
<?php
}
else
{
?>
<script type="text/javascript">
function change(str)
{
	//alert(str);
	window.location.href="shop.php?ptype="+str;
}


</script>
<?php
}
?>



<?php 
if(isset($_GET['id']))
{
$pid2=$_GET['pid'];
$s3="select * from product inner join shop where product.s_id=shop.s_id ";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$pid3=$r3['p_id'];
}
?>
<script type="text/javascript">
function change1(str1)
{
	//alert(str);
	window.location.href="shop.php?id=<?php echo $id; ?>" +"&pid=<?php echo $pid3; ?>" + "&psort="+str1;
}


</script>
<?php
}
else
{
?>
<script type="text/javascript">
function change1(str1)
{
	//alert(str);
	window.location.href="shop.php?psort="+str1;
}


</script>
<?php
}
?>
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div>

<div class="bod">
  <div class="bod_rt">

<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='' class='breadcrumb-link' style=" font-size:14px">Shop</a>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>







  <div class="bod_rt">
    
	
<div class="">
	<div class="header" id="loginHeader" style="margin-top:30px;">

</div>

<div id="fb-root"></div>

<div class="page">

<div id="modal-login" class="quirky-modal" style="display: none;">
<div class='qm-box x7'>
<div class='login modal-content modal-content-qtheme box bordered'>
<div class="hd">
<h2>You Must Be Logged In&hellip;</h2>
<a onclick="jQuery.hideLoginModal(); return false;" class="close graphic" href="#"><span>Close</span></a>
</div>
<div class="bd">
<div class="x3 left">
<form action="http://www.quirky.com/session" id="modal-login-form" method="post"><p class="flash-text"></p>
<p>
<label>Email</label>

<input id="email" name="email" type="text" />
</p>
<p>
<label>Password</label>
<input id="password" name="password" type="password" />
</p>
<p>
<a href="#" class="login-button button bright small submitLink">Log In</a>
<a href="http://www.quirky.com/forgot_password">Forgot Password?</a>
</p>
</form></div>
				
<span class="division-text">or</span>

				
<div class="x3 right border-left">
<p class="facebook-connect clearfix"><span>Sign up or login using Facebook to get started on Quirky right now!</span><br/>
<fb:login-button
							   registration-url="http://www.quirky.com/facebook/register" 
							   on-login="jQuery('#modal-login-form').trigger('loginSuccessful')"
							   perms="publish_stream,email,offline_access"
							>Login with Facebook</fb:login-button>
</p>
<p class="confirmation-check clearfix">
<input type="checkbox"/> 
<span>I have read and understood Quirky's <a href="#">Terms &amp; Conditions</a></span>
</p>
<p class="prompt">
<a onclick="jQuery.switchToSignup(); return false;" href="#"><strong>Not a Member? Sign Up</strong></a>

</p>
<p>In order to invent, influence, and earn, you first have to register for a Quirky account. Donâ€™t worryâ€¦ itâ€™s super quick and easy.</p>
<p>
<a  onclick="jQuery.switchToSignup(); return false;" href="http://www.quirky.com/users/new" class="button bright small">Sign Up</a>
</p>
</div>
</div>
</div>
</div>

</div>

<div id="modal-signup" class="quirky-modal" style="display: none;">
<div class='qm-box x9'>
<?php include("user/reg.php"); ?>
</div>
</div>

<div class="qm-overlay" style="display: none;"></div>
<div class="page quirky-shop">
<div class="tier x12">
<div class="column xNarrowSidebar">
<div>
<?php include("template/category_menu.php");
?>
</div>
<?php include("pre_sale.php"); ?>
</div>

<div class="column last xWideContent" >
<div style=" margin-left:80px;">
<div class="shop-splash box" style="position:relative ; ">
<div style="padding-left:55px">
<?php
if(isset($_GET['id']))
{
@$id=$_GET['id'];
$status="shop.s_id=$id and product.p_status='1'";
include("single_image.php"); 
}
else
{
$status="product.p_status='1'";
include("single_image.php"); 
}
?>

</div>
<div class="product-details" style="width:182px;margin:50px 10px 0px 0px;">
<h3 class="product-title light-sans"></h3>
<p class="msrp">
	
</p>
</div>
</div>
<div id="products-display-frame">
<div class="browse-controls shop-browse box">
<table><tr>
<div class="row">
<form method="post">
<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filter by:</strong><select name="filler" id="fill" onchange="change(this.value);">
<option value="">--select type--</option>
<option value="All">All</option>
<option value="Presale">Presale</option>
<option value="In Production">In Production</option>
<option value="Shipping Now">Shipping Now</option>
</select>

<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sort by:</strong><select name="sort_filler" id="sort_fill" onchange="change1(this.value);">
<option value="">--select type--</option>
<option value="Featured">Featured</option>
<option value="Newest">Newest</option>
<option value="Most Popular">Most Popular</option>
</select>
</form>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$page_name="shop.php"; //  If you use this code with a different page ( or file ) name then change this 
@$start=$_GET['start'];

$eu = ($start - 0); 
$limit = 9;                                 
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

@$query="select * from shop where s_id='$id'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{?>
<h2><?php  echo $row['s_name'] ;?> <span class="text-soft"></span></h2>
<?php }
 @$sql2="SELECT * from product where product.s_id='$id' and p_status='1'";
// @$sql2="SELECT shop.s_name,product.p_name,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where  product.p_status='1' and shop.s_status='1'";
		$query2=mysql_query($sql2);
		$nume=mysql_num_rows($query2);
		?>
		<h2> <span class="text-soft"><?php echo "($nume)";?></span></h2>
	
	<?php

	@$type=$_GET['type'];
	if($type=='all')
	{
	$type="";
	}
	//------------------------------------------
	$psort=$_GET['psort'];
	$ptype=$_GET['ptype'];
		if($psort=='Featured')
		{
			$sq="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and sort='Featured' limit $eu, $limit ";
			$que=mysql_query($sq);
		}
		else if($psort=='Newest')
		{
			$sq="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and sort='Newest' limit $eu, $limit ";
			$que=mysql_query($sq);
		}
		else if($psort=='Most Popular')
		{
			$sq="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and sort='Most Popular' limit $eu, $limit ";
			$que=mysql_query($sq);
		}
		else if($ptype=='All')
		{
			$sq="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' limit $eu, $limit ";
			$que=mysql_query($sq);
		}
		else if($ptype=='')
		{
			$sq="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' limit $eu, $limit ";
			$que=mysql_query($sq);
		}
		else if($ptype=='Presale')
		{
			$sq="select * from product inner join shop on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and product.p_type='Presale' limit $eu, $limit";
			$que=mysql_query($sq);
		}
		else if($ptype=='In Production')
		{
			$sq="select * from product  inner join shop on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and product.p_type='In Production' limit $eu, $limit";
			$que=mysql_query($sq);
		}
		else
		{
			$sq="select * from product inner join shop on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and product.p_type='Shipping Now'";
			$que=mysql_query($sq);
		}
	
 /* @$sql="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' and p_type like '%$type%' limit $eu, $limit ";*/



		//$sql1=mysql_query($sql);
		
		
		while($r=mysql_fetch_array($que))
		{
		?>
		
</div>
</div>
<div id="products-display" >
<ul id="products-display-list"   >
<li class="product-grid-item product" style="padding:6px 0;">
<span style="padding-left:60px">
<a href="item.php?sid=<?php echo $id; ?>&pid=<?php echo $r['p_id']; ?>" ><img src="admin/uploadimage/<?php echo $r['p_image']; ?>"  height="150" width="190" onMouseOver="rollover(<?php echo $r['p_id']; ?>,'<?php echo $r['p_type']; ?>')" onMouseOut="rollout(<?php echo $r['p_id']; ?>)"/></a>
</span>
<div class="product-details" style="padding-left:60px">
<div class="sale-status-tooltip">
</div>
<h3 class="product-title light-sans"><?php echo $r['p_name'] ;?></h3>
<p class="tagline"><?php echo $r['p_title'] ;?></p>
<p class="price">
<?php echo $r['p_cur_price'] ;?>
<p class="msrp">
</p>
<div style="color:#CC3399;  height:5px; width:auto;" id="<?php echo $r['p_id']; ?>"></div>
</p>
<?php }?>
</li>

</ul>

<?php
if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td >";
if($back >=0) { 
print "<a href='$page_name?start=$back & id=$id & type=$type'><font face='Verdana' size='2'><img src='images/control_page_arrow_left.png'></font></a>"; 
} 

echo "</td><td >";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo "<a href='$page_name?start=$i & id=$id & type=$type'><font face='Verdana' size='2'>$l</font></a>";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}       
$l=$l+1;
}


echo "</td><td >";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
print "<a href='$page_name?start=$next & id=$id & type=$type'><font face='Verdana' size='2' ><img src='images/control_page_arrow_right.png' style='padding_left:40px'></font></a>";} 
echo "</td></tr></table>";

}
}

else
{
$page_name="shop.php"; 
@$start=$_GET['start'];

$eu = ($start - 0); 
$limit = 9;                                 
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

?>
<h2>All <span class="text-soft"></span></h2>

<?php 

 @$sql2="SELECT shop.s_name,product.p_name,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where product.p_status='1' and shop.s_status='1'";
		$query2=mysql_query($sql2); 
		$nume=mysql_num_rows($query2);
		?>
		<h2> <span class="text-soft"><?php echo "($nume)";?></span></h2>
	
	<?php

	@$type=$_GET['type'];
	if($type=='all')
	{
	$type="";
	}
	//-----------------------------all
	$psort=$_GET['psort'];
	 $ptype=$_GET['ptype'];
	 	if($psort=='Featured')
		{
			$sq="select * from product where product.p_status='1' and sort='Featured' limit $eu,$limit";
			$que=mysql_query($sq);
		}
		else if($psort=='Newest')
		{
			$sq="select * from product where product.p_status='1' and sort='Newest' limit $eu,$limit";
			$que=mysql_query($sq);
		}
		else if($psort=='Most Popular')
		{
			$sq="select * from product where product.p_status='1' and sort='Most Popular' limit $eu,$limit";
			$que=mysql_query($sq);
		}
		else if($ptype=='All')
		{
			$sq="select * from product where product.p_status='1' limit $eu,$limit";
			$que=mysql_query($sq);
		}
		else if($ptype=='')
		{
			$sq="select * from product where product.p_status='1' limit $eu,$limit";
			$que=mysql_query($sq);
		}
		else if($ptype=='Presale')
		{
			$sq="select * from product where product.p_status='1' and p_type='Presale' limit $eu, $limit";
			$que=mysql_query($sq);
		}
		else if($ptype=='In Production')
		{
			$sq="select * from product where product.p_status='1' and p_type='In Production' limit $eu, $limit";
			$que=mysql_query($sq);
		}
		else
		{
			$sq="select * from product where product.p_status='1' and p_type='Shipping Now' limit $eu, $limit";
			$que=mysql_query($sq);
		}
		
	/*@$sql="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where product.p_status='1' limit $eu, $limit ";*/


		/*$sql1=mysql_query($sql);*/
		
		
		while($r=mysql_fetch_array($que))
		{
		?>
		
</div>
</div>


<div id="products-display" >
<ul id="products-display-list"   >
<li class="product-grid-item product" style="padding:6px 0;">
<!--<span style="padding-left:60px"><img src="admin/uploadimage/<?php //echo $r['p_image']; ?>"  height="100" width="150" /></span>-->
<span style="padding-left:60px">
<a href="item.php?sid=<?php echo $r['s_id']; ?>&pid=<?php echo $r['p_id']; ?>"><img id="txtIndex" src="admin/uploadimage/<?php echo $r['p_image']; ?>" onMouseOver="rollover(<?php echo $r['p_id']; ?>,'<?php echo $r['p_type']; ?>')" onMouseOut="rollout(<?php echo $r['p_id']; ?>)"  height="150" width="190" /></a>
</span>
<div class="product-details" style="padding-left:60px">
<div class="sale-status-tooltip">
</div>
<h3 class="product-title light-sans"><?php echo $r['p_name'] ;?></h3>
<p class="tagline"><?php echo $r['p_title'] ;?></p>
<p class="price">
<?php echo $r['p_cur_price'] ;?>
<p class="msrp">
</p>
<div style="color:#CC3399;  height:5px; width:auto;" id="<?php echo $r['p_id']; ?>"></div>
</p>
<?php }?>
</li>

</ul>

</tr>
<tr>
<?php
if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td >";
if($back >=0) { 
print " <span class='pagination'><a href='$page_name?start=$back'><font face='Verdana' size='2'>Prev</font></a></span>"; 
} 

echo "</td><td >";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <span class='pagination'><a href='$page_name?start=$i '><font face='Verdana' size='2'>$l</font></a> </span>";
}
else { echo " <span class='pagination'><font face='Verdana' size='4' color=red>$l</font></a> </span>";}       
$l=$l+1;
}


echo "</td><td >";

if($this1 < $nume) { 
print " <span class='pagination'><a href='$page_name?start=$next '><font face='Verdana' size='2' >Next</font></a></span>";} 
echo "</td></tr></table>";

}
} 
?>
</tr>
</table>
</div>
</div>
</div>	
</div>	
</div> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	</div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>