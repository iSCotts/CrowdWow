 <?php

@session_start();
 

 @$userid=$_SESSION['u_id']; 
include('include/connect.php'); 

@$sql="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id  ";


$sql1=mysql_query($sql);
 $nr2 = mysql_num_rows($sql1);

 $usid=$_GET['$id'];
 $go=$_GET['go'];
 @$query3="SELECT * FROM user where u_id='$usid'";
@$result = mysql_query($query3);
while(@$row=mysql_fetch_array($result))
{  $u_firstname=$row['u_firstname'];
$u_lastname=$row['u_lastname'];
}

 @$query2="SELECT * FROM user_profile where u_id='$usid'";
@$result = mysql_query($query2);
while(@$row=mysql_fetch_array($result))
{
 $specialties=$row['specialties'];
 $gender=$row['gender'];
  @$website=$row['website'];
 @$ma_product =$row['ma_product'];
 @$f_product =$row['f_product'];
 @$hometown=$row['hometown'];
 @$about_me =$row['about_me'];
 @$use_alies  =$row['use_alies'];
 @$image  =$row['image'];
 }
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">    
            /* CSS Document */
div.pagination {
	padding: 3px;
	margin: 3px;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;

	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #EEE;
	
		color: #DDD;
	}
	

        </style>

</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='community.php' class='breadcrumb-link'>Community</a>
			

				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Topinfluence</span>
</p>
</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>
  
  	
	<script type="text/javascript"> 
	jQuery(document).ready(function($) {  
		
		$(document).bind('loginSuccessful', function() {
			$.get('/users/flyout', null, function(data) {
				$('#user-login-flyout').html(data);
				jQuery("#loggedMenu").mouseup(function(){
					return false
				});
			});
		});
	}); 
	
	
</script>

</li>
<!--
<li id="menu-cart-button" class="cart">

<a href="/cart_items" class="counter">
<span id="cart-count">0</span>
</a>
-->
<div id="cart-dropdown-container">
<div id="cart-dropdown-top"></div>
<div class="h-dropdown" id="cart-dropdown" style="">
<table id="cart-dropdown-table">

<tr>
<th colspan=2 style="text-align: left;">
          Product Name
</th>
<th>
          Quantity
</th>
<th>
          Price
</th>
</tr>
    
</table>
<div class="button-holder">

      
<div class="right" style="margin-left: 10px;">
<a href="/checkout" class="button bright right">Proceed To Checkout</a>
</div>
<div class="right">
<a href="/cart_items" class="button soft right">Edit Cart</a>
</div>
<div class="clear">
</div>
</div>
<script>
      jQuery(document).ready(function($) {
        var dropdownOpen = false;
        var currentTimeout = null;
        $("#menu-cart-button").live("hover", function(e, data) {
          if ($('#cart-dropdown-table').find('.cart-dropdown-item').length > 0) {
            $(document).trigger('showCartDropdown', {clickClose: true});
          }
        });
        $(document).bind('showCartDropdown', function(e, data) {
          if (!data) {
            data = {};
          }
          if (!dropdownOpen) {
            dropdownOpen = true;
            $("#cart-dropdown-container").fadeIn('fast', function() {
              if (data.clickClose) {
                var fadeOutDrop = function(e, data) {
                  if($(e.target).parents("#cart-dropdown-container").length == 0){
                    $(document).unbind('click', fadeOutDrop);
                    $(document).trigger('hideCartDropdown');
                  }
                }
                jQuery(document).bind('click', fadeOutDrop);
              }
              if (data.timedClose) {
                var closeCount = 5000;
                if (data.timedCloseCount) {
                  closeCount = data.timedCloseCount;
                }
                if (currentTimeout) {
                  clearTimeout(currentTimeout);
                }
                currentTimeout = setTimeout(function() {
                  $(document).trigger('hideCartDropdown');
                }, closeCount);
              }

            });
          }
        });
        $(document).bind('hideCartDropdown', function(e, data) {
          if (dropdownOpen) {
            dropdownOpen = false;
            $("#cart-dropdown-container").fadeOut('fast');
          }
        });
        $(document).bind('cartUpdated', function(e, data) {
          $(document).trigger('hideCartDropdown');
          $('#cart-dropdown-table').find('.cart-dropdown-item').remove();
          if (!data || (data.items.length < 1)) {
            return;
          }
          data.items.forEach(function(item) {
            var newRow = $('<tr class="cart-dropdown-item"></tr>');
            var rowImage = $('<td style="text-align: left;"><image src="' + item.cart_item.image_icon + '" /></td>');
            newRow.append(rowImage);
            var rowName = $('<td class="cart-field cart-field-name">' + item.cart_item.product_name + '</td>');
            newRow.append(rowName);
            var rowQuantity = $('<td class="cart-field cart-field-quantity">' + item.cart_item.quantity + '</td>');
            newRow.append(rowQuantity);
            var rowTotal = $('<td class="cart-field cart-field-total">$' + item.cart_item.total + '</td>');
            newRow.append(rowTotal);

            $('#cart-dropdown-table').append(newRow);
          });
          $(document).trigger('showCartDropdown', {timedClose: true});
        });

      });
</script>
</div>
</div>

</li>
</ul>
      
</div><!--
<div class="column-r x7">
<div class="row clearfix">

<p class="announcement">
	Latest:
<span id="ticker-item-container">
<span class="ticker-item" style="display: none;">
<a href="http://aquirkyblog.com/2011/05/this-weeks-quirky-brief-were-making-hooks/" target="_blank">Get Hooked on This Week's Brief</a>
</span>
<span class="ticker-item" style="display: none;">
<a href="http://aquirkyblog.com/2011/04/town-meeting-on-may-17th/" target="_blank">Next Town Meeting: May 17th</a>

</span>
<span class="ticker-item" style="display: none;">
<a href="http://aquirkyblog.com/2011/04/introducing-ridge/" target="_blank">The Ridge Kitchen Rail System</a>
</span>
<span class="ticker-item" style="display: none;">
<a href="http://aquirkyblog.com/2011/04/introducing-fender/" target="_blank">The Fender iPad 2 Bumper</a>
</span>
</span>
</p>

		
				
<form action="/search" class="search" method="get"><p>
<input class="empty clearable" id="query" name="query" type="text" value="Search" />
<button type="submit" title="Search" class="graphic">
<span>Search</span>

</button>
</p>
</form></div>	
<div class="row last">
<ul class="horizontal nav light-sans">
<li><a href="/products">Shop</a></li>
<li><a href="/ideas">Invent</a></li>
<li><a href="/projects">Influence</a></li>
<li><a href="/learn">Learn</a></li>
<li><a href="/community">Community</a></li>
<li class="last"><a href="http://aquirkyblog.com">Blog</a></li>

</ul>
</div>-->
</div>
</div>
</div>
<link title="Quirky Ideas :: product 0134 :: product evaluation" rel="alternate" type="application/atom+xml" href="http://www.quirky.com/projects/795.atom" />


<div class="page">

<div class="tier mSmaller x12">
<div class='box global-pagination right'>

<div>
<?php
if($go=='top')
{
?>
<a href="invent.php" class="button bright back">Go Back</a>
<?php
}
else
{
?>
<a href="community.php" class="button bright back">Go Back</a>
<?php
}
?>


</div>
</div>
</div>

<div class="tier x12 page-header">

<div class="column x7">
<div class='box'>
<h1 class='bold-sans' style=" font-weight:bold; color:#0033FF;"><a href="">



Welcome- <?php /*echo $username*/ echo @$u_firstname;  ?> <?php /*echo $username*/ echo @$u_lastname;  ?>

</a>
</h1>
</div>
</div>
</div>

<div class="tier x12 user-profile-panel">
<div class='box x12 filled-soft bordered'>
<div class='user-profile-panel-left'>
	<?php
 if($image==null || $image=="")
 {
  echo "<img src='upload_image/user_noimage.png' height='' width='205'>"; 
 }
 else
 {
 ?>				
	<img alt="<?php /*echo $username*/ echo @$image;  ?>" class="user-profile-panel-image" src="upload_image/<?php /*echo $username*/ echo @$image;  ?>" width="205px" />				
<?php
}
?>

			
<?php
if($_SESSION['u_id']=="")
{
?>
			
<a href="#" class="button bright" onclick="openbox1('Login',1)">Send 
 <?php /*echo $username*/ echo @$u_firstname;  ?> <?php /*echo $username*/ //echo @$u_lastname;  ?> a Message</a>
<?php } else { ?>
<a href="inboxmsg.php?$id=<?php echo $usid ?>&$go=<?php echo 'top';?>" class="button bright">Send 
 <?php /*echo $username*/ echo @$u_firstname;  ?> <?php /*echo $username*/ //echo @$u_lastname;  ?> a Message</a>
 <?php } ?>
<!--
<a class="button light-alt" href="#" onclick="scroll_to('influenced-products'); return false;">Products Influenced: 10</a>
			-->
</div>
<div class='user-profile-panel-right'>
<table class='user-profile-table' style="width:100%;">
<tr>
<th><h4 class='user-profile-table-header bold-sans'>Specialties</h4></th>
<th><h4 class='user-profile-table-header'>Info</h4></th>
</tr>
<tr>
<td>

<ul class='user-profile-specialities-list'>
<li class='user-profile-specialities-list-item'><a href="/users/browse?capacity=gdssgdeg"><?php /*echo $username*/ echo @$specialties;  ?></a></li>
</ul>
</td>
<td>
<table class='user-profile-table split-profile'>
<tr>
<th><h5 class='user-profile-table-header'>Gender:</h5></th>
<th><h5 class='user-profile-table-header'>First Product:</h5></th>
</tr>
<tr>
<td><a class='user-profile-table-link' href='#'><?php /*echo $username*/ echo @$gender;  ?></a></td>
<td><a class='user-profile-table-link' href='#'><?php /*echo $username*/ echo @$f_product;  ?></a></td>

</tr>
<tr>
<th><h5 class='user-profile-table-header'>Website:</h5></th>
<th><h5 class='user-profile-table-header'>Most Admired Product:</h5></th>
</tr>
<tr> 
<td class='user-profile-table-link'><?php /*echo $username*/ echo @$website;  ?></td>
<td><a class='user-profile-table-link' href='#'></a><?php /*echo $username*/ echo @$ma_product;  ?></td>
</tr>
</table>
</td>
</tr>
				           

<tr>
<th></th>
<th><h4 class='user-profile-table-header margin'>Hometown</h4></th>
</tr>
<tr>
<td style="width:180px;">
						   
</td>
<td>
<?php /*echo $username*/ echo @$hometown;  ?>
</td>
						
						
						
</tr>
<tr>
<th><!-- <h4 class='user-profile-table-header margin'>Badges</h4> --></th>
<th><h4 class='user-profile-table-header margin'>About Me</h4></th>

</tr>
<tr>
<td style="width:180px;">
<!-- <div class='user-profile-badge-panel filled-light'>
<img class='user-profile-badge' src='http://placehold.it/30x30'></img>
<img class='user-profile-badge' src='http://placehold.it/30x30'></img>
<img class='user-profile-badge' src='http://placehold.it/30x30'></img>
<img class='user-profile-badge' src='http://placehold.it/30x30'></img>
<img class='user-profile-badge' src='http://placehold.it/30x30'></img>
</div> -->
</td>
<td>
							
<!-- truncated prop -->
<p id="answer-887416-body-trunc" class="user-profile-about-text">
<?php /*echo $username*/ echo @$about_me; ?>
</p>

<!-- full prop -->
								
								
<div id="answer-887416-body" class='user-profile-about-text' style="display:none;">
<p><?php /*echo $username*/ echo @$about_me;  ?></p>

<a href="#" onclick="$('answer-887416-body').hide();$('answer-887416-body-trunc').show(); return false;" style="float:right;padding:10px;font-size:12px;"><b> less</b></a>
</div>

</td>
						
						
						
</tr>
						
</table>



</div>
</div>
</div>




<div class="tier x12 user-profile-boxes">
<div class='column x8'>
<div class='box user-products-panel clear' style="margin-bottom:10px;" id="influenced-products">
<div class='hd'>
<?php
$sq="select * from submit_idia inner join payment on submit_idia.sub_id=payment.sub_id inner join product on submit_idia.sub_id=product.p_id  where submit_idia.u_id='$usid'";
$qu=mysql_query($sq);
$ro=mysql_fetch_array($qu);
$nur=mysql_num_rows($qu);

$sq1="SELECT shop.s_name, product.p_name, product.p_image, product.p_type, product.p_title, product.p_cur_price, product.p_pre_price, product.p_status, product.p_id, product.s_id, product.p_cur_price, pro_naming.sub_id,pro_naming.u_id 
FROM shop
INNER JOIN product ON shop.s_id = product.s_id
INNER JOIN pro_naming
ON pro_naming.sub_id =product.p_id and pro_naming.u_id='$usid' or pro_naming.u_id='$userid' ";
$qu1=mysql_query($sq1);
$nur1=mysql_num_rows($qu1);
?>
<h3><a href='#'>Products Influenced <span class='count'>(<?php echo $nur1; ?>)</span></a></h3>
</div>
			
<div class='cell empty last'>
<p> 
<?php /*echo $username*/ echo @$u_firstname;  ?> <?php /*echo $username*/ echo @$u_lastname;  ?> 
<?php include("image_slider4.php"); ?></p>

</div>
			
</div>
<div id='web-user-74187-dev-products'>
<div class='box user-products-dev-panel clear'>
<div class='hd'>
<?php
$sql16="select * from submit_idia inner join payment on submit_idia.sub_id=payment.sub_id where submit_idia.u_id='$usid' and submit_idia.sub_status='1' limit 40"; 
$query16=mysql_query($sql16);
$row16=mysql_fetch_array($query16);
$nr16=mysql_num_rows($query16);
?>
<h3><a href='#'>Products in Development:(<?php echo $nr16; ?>) <span class='count'>

 

</span></a></h3>
</div>
	
	
<!--<div class='cell empty last'>
<p><?php
//echo  @$_SESSION['email'];
?> currently has no active products in development.</p>-->
<?php 
 /*$sql6="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.u_id='$usid' limit 40";
*/
/*$sql6="select distinct payment.first_name,payment.last_name,payment.sub_id,submit_idia.u_id,submit_idia.attach_files,submit_idia.sub_id,submit_idia.desc_idea from payment inner join submit_idia on payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' limit 5";
*/
$sql6="select * from submit_idia inner join payment on submit_idia.sub_id=payment.sub_id where submit_idia.u_id='$usid' and submit_idia.sub_status='1' limit 40"; 
$query6=mysql_query($sql6);
 $nr6=mysql_num_rows($query6);
 while($row6=mysql_fetch_array($query6))
 {
 
 ?>

<div class='bd'>
<ul class='product-progress-list'>
<li class='box product-progress-item filled-soft'>
<div class='tile product-progress-item-left'>


<h4><?php echo $row6['desc_idea'];?></h4>

<p>by <a href="topinfluence.php?i_id=<?php echo $row6['sub_id'];?>"><?php echo $row6['first_name'];?> <?php echo $row6['last_name'];?></a></p>
<p class='product-description'>

</p>
<p>
<a href="idea.php?i_id=<?php echo $row6['sub_id'];?>" class="product-overview-link">View Product Overview &gt;</a>
</p>
</div>
<div class='tile last'>
<ul class="stage-stack x4" style="width:124px;">
<li class="sub-box step"> 
<a href="idea.php?i_id=<?php echo $row6['sub_id'];?>" class="button medium bright right">Product Overview</a>
</li> 

</ul>
</div>
</li>
</ul>
</div>
<?php } ?>
<!--</div>-->
	
</div>

</div>
</div>


	
<div class='column x4 last' >
<div class='box user-props' id="web-user-74187-props">


<div >
<div class="hd">
<h3><a href='#'>Props </a></h3>

</div>
<?php
	
	//$tbl_name="shop inner join product on shop.s_id=product.s_id";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM props where tou_id = '$usid'";
	@$total_pages = mysql_fetch_array(mysql_query($query));
	  $total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "topinfluence.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\"> prev</a>";
		else
			$pagination.= "<span class=\"disabled\"> prev</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span style=\"visibility:hidden\" class=\"current\">$counter</span>";
				else
					$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span style=\"visibility:hidden\" class=\"current\">$counter</span>";
					else
						$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span style=\"visibility:hidden\" class=\"current\">$counter</span>";
					else
						$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span style=\"visibility:hidden\" class=\"current\">$counter</span>";
					else
						$pagination.= "<a style=\"visibility:hidden\" href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next </a>";
		else
			$pagination.= "<span class=\"disabled\">next </span>";
		$pagination.= "</div>\n";		
	}

?>	





<?php
 $usid=$_GET['$id'];
 @$userid=$_SESSION['u_id']; 
$sql4="SELECT user.u_firstname, user.u_lastname,props.u_id,user.u_id,props.prop_comment,props.prop_id ,props.date FROM user inner JOIN props ON user.u_id=props.u_id WHERE props.tou_id = '$usid' ORDER BY props.prop_id DESC LIMIT $start, $limit";


 $query4=mysql_query($sql4);
 $nr2=mysql_num_rows($query6);
 while(@$row4=mysql_fetch_array($query4))
 {
 $id=$row4['u_id'];
 $name= $row4['u_firstname'];
 $lname= $row4['u_lastname'];
 $p_comment= $row4['prop_comment'];
 $date= $row4['date'];

?>

<?php
 $sql3="SELECT user_profile.image,props.u_id,user_profile.u_id,props.prop_id FROM user_profile inner JOIN props ON user_profile.u_id=props.u_id where props.u_id=$id ORDER BY props.prop_id DESC LIMIT $start, $limit ";


 $query3=mysql_query($sql3);
 //echo $nr3=mysql_num_rows($query3);
 if(@$row3=mysql_fetch_array($query3))
 {
 @$image1=$row3['image'];

 
?>

<table>
<tr>
<td>			

<?php
 if($image1=="")
 {
 echo "<img src='upload_image/user_noimage.png' height='50' width='50'>"; 
 ?>

 <?php
 }
 else
 {
 ?>		
<img alt="<?php echo @$image1;  ?>" class="" src="upload_image/<?php echo @$image1;  ?>" width="50px" height="50"/>	

<?php }
?>

<?php
 } 
 ?>	
</td>

<td>



<a href="topinfluence.php?$id=<?php echo $id;?>"> <?php echo $name= $row4['u_firstname'];?><?php echo $lname= $row4['u_lastname'];  ?></a>

&nbsp;&nbsp;| &nbsp;&nbsp;
					
<?php echo $date;  ?>

<br />


<?php echo $p_comment;   ?>

				



</td>
</tr>
</table>


<?php } ?> 
	
<div>
<?php echo $pagination; ?>
</div>


</div>



<?php

 $usid=$_GET['$id'];

if(isset($_POST['save']))
{

 @$x3=$usid;
 @$x4=$_POST['comment'];
 @$userid=$_SESSION['u_id']; 
 $x2= @$userid;
{
 
 
 $sql="INSERT INTO props ( u_id,tou_id, prop_comment,date)
VALUES('$x2','$x3','$x4',CURDATE())";
$query=mysql_query($sql);
}
}
?>	
<script type="text/javascript">
function validateForm()
{
if(document.myForm.comment.value=="")
{
document.getElementById('com').innerHTML='Please enter comment';
return false;
}
else {
document.getElementById('com').innerHTML='';

}
}
</script>	

<div class='box user-props-give filled-bright' >
<form action="" id="giveProps" method="post"  name="myForm"  onsubmit="return validateForm();"><h4 class='give-props-header'>Show the love. Give some props:</h4>
<table>
<tr>
<td>

<textarea name="comment" id="leaveYComment" class="give-props-entry"></textarea><span id="com" style="color:#FF0000"/>
</td>
</tr>
</table>

<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" onClick="openbox1('Login',1)"><input type="button" value="Give props" name="save" class="btnstyle"/></a>
<?php } else { ?>

<input type="submit" value="Give props" name="save" class="btnstyle"/>
<?php } ?>

</form></div>
</div>
</div> 
</div>
      
</div>

	
	
	<?php //include("learn/index.php"); ?>
	</div></div></div></div>
  
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
<script type="text/javascript">
	  jQuery(document).ready(function(){
  jQuery(".user_drop").live("click", function(e){
    e.preventDefault();
    jQuery(document).trigger('hideCartDropdown');
    jQuery("#loggedMenu").toggle();
    jQuery(".hub").toggleClass("menu-active");
	});
	
	jQuery("#loggedMenu").mouseup(function(){
		return false;
	});
	
	jQuery(document).mouseup(function(e){
		if(jQuery(e.target).parent("a.user_drop").length == 0){
			jQuery("#loggedMenu").hide();
			jQuery(".hub").removeClass("menu-active");
			
		}
	});
  jQuery(document).bind('showCartDropdown', function(e, data) {
    jQuery("#loggedMenu").hide();
  });

		(function($){
			$._qIsLoggedIn = true;
		})(jQuery);
							jQuery(document).bind('cartUpdated', function(e, data) {
								jQuery('#cart-count').html(data.total_items);
							});
jQuery(document).ready(function($){
	var fadeOutFunction = function() {
		var $ = jQuery;
		var tickerItem = $(this);
		setTimeout( function() {
			tickerItem.fadeOut("slow", function() {
				if ($(this).is(":last-child")) {
					$(this).parent().children(":first-child").fadeIn("slow", fadeOutFunction);
				} else {
					$(this).next().fadeIn("slow", fadeOutFunction);
				}
			});
		}, 3000);
	}
	$("#ticker-item-container").children(":first-child").fadeIn("slow", fadeOutFunction);
});
 
	  });
</script>

</body>
</html>
