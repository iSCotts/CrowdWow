<?php
include('include/connect.php'); 
session_start();
 @$username=$_SESSION['email'];
 @$userid=$_SESSION['u_id'];
if(isset($_POST['save']))
{


 @$check= "select * from user_profile where u_id='$userid'" ;
$go=mysql_query($check);
$row=mysql_fetch_array($go);
{


}
@$rowcount = mysql_num_rows($go);


if ($_FILES["file"]["size"] < 20000000)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    "Return Code: " . $_FILES["file"]["error"] . "<br />";
	
    }
  else
    {
    if (file_exists("upload_image/" . $_FILES["file"]["name"]))
      {
     $_FILES["file"]["name"] . " already exists. ";
	
      }
    else 
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload_image/" . $_FILES["file"]["name"]);
      "Stored in: " . "upload_image/" . $_FILES["file"]["name"];
	 
      }
    }
  }
else
  {
  
  
  }

 $x2= $_SESSION['u_id'];
 @$x4=$_POST['gender'];
 @$x5= $_POST['website'];
 @$x6=$_POST['maproduct'];
 @$x7=$_POST['product'];
 @$x8=$_POST['hometown'];
 @$x9=$_POST['me'];
 @$x10=$_POST['tags'];
 @$x11=$_POST['login'];
 @$x12=$_FILES["file"]["name"];
if($x12=='')
{
$a1="use_alies='$x11'";
}
else
{
$a1=" use_alies='$x11',image='$x12'"; 
}
if($rowcount!='0')
{
@$sql2="update user_profile set gender='$x4',website='$x5',ma_product='$x6',f_product='$x7',hometown='$x8',about_me='$x9',specialties='$x10',$a1 where u_id='$userid'LIMIT 1";
mysql_query($sql2);
}

else
{
 $sql="INSERT INTO user_profile ( u_id, gender,website,ma_product,f_product,hometown,about_me,specialties,use_alies,image)
VALUES('$x2','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$x11','$x12')";
$query=mysql_query($sql);
}
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
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">
    
	
	
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

</li><!--
<li id="menu-cart-button" class="cart">
<a href="/cart_items" class="counter">
<span id="cart-count">0</span>
</a>-->
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
      
</div>
<!--
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
<a href="view_profile.php" class="button bright back" name="">View Profile</a>
</div>
</div>

<div class="tier x12 page-header">
<div class="column x7">

<div class='box'>
<h1 class='bold-sans'>
<a href="">
<?php 
@$userid=$_SESSION['u_id']; 
$sql4="select * from user where u_id ='$userid'";
$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{


 $toname=$row4['u_firstname'].$row4['u_lastname'];

}

echo "Welcome ". $toname;

?></a>
</h1>
				
</div>
</div>
</div>






<style>
			.profile-info {color:#46166b;font-size:12px;font-weight:bold;padding:5px;}
</style>
<?php
@$userid=$_SESSION['u_id'];
 $query2="SELECT * FROM user_profile where u_id='$userid'";
$result = mysql_query($query2);
while($row=mysql_fetch_array($result))
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
}?>


</div>
<div>
<form action="" enctype="multipart/form-data" id="editProfile" method="post">

<div class="tier x12 user-profile-panel">

<div class='box x12 filled-soft bordered' style="margin-bottom:18px;">
<div class='user-profile-panel-left' style="padding:35px 15px;width:222px;">


<div>
<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">Change Your Photo</h1>
<?php
 if($image==null || $image=="")
 {
  echo "<img src='upload_image/user_noimage.png' height='' width='205'>"; 
 }
 else
 {
 ?>
<img alt="<?php /*echo $username*/ echo @$image;  ?>" class="user-profile-panel-image" src="upload_image/<?php  echo @$image;  ?>" width="205px" />
<?php
}
?>
<div style="border-bottom:1px solid #ccc;width:95%;float:right;"></div>

</div>


<div style='padding-left:10px;margin-top:10px;'>
<input id="file" name="file"  type="file" value="<?php /*echo $username*/ echo @$image;  ?>"  /> <br/>

</div>
					
<div style='padding-left:10px;'>
<div style="font-weight:bold;font-size:12px;">Upload Photo
</div>
						

</div>

				

					
<div style='padding-left:10px;margin-top:20px;'>
						
</div>

<div class='user-profile-panel-right' style="padding-left:30px;float:left; margin-left:250px; margin-top:-274px;">

<div>
<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">Info</h1>

<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<table style="margin-top:10px;">
<tr>
<td class="profile-info">Gender:</td>
<td>
<select id="gender" include_blank="true" name="gender">
<option value="">Select</option>
<option value="male"  <?php if($gender=='male') { echo "selected";} ?> >Man</option>
<option value="female"<?php if($gender=='female') { echo "selected";} ?>>Woman</option></select><br/>
</td>
</tr>
<tr>

<td class="profile-info">Website:</td>
<td>
<input class="" id="answers__text" name="website" size="60" type="text" value="<?php /*echo $username*/ echo @$website;  ?>" />

</td>
</tr>
<tr>
<td class="profile-info">Most Admired Product:</td>
<td>
<input class="" id="answers__text" name="maproduct" size="60" type="text" value="<?php /*echo $username*/ echo @$ma_product;  ?>" />

</td>
</tr>

<tr>
<td class="profile-info">First Product:</td>
<td>
<input class="" id="answers__text" name="product" size="60" type="text" value="<?php /*echo $username*/ echo @$f_product;  ?>" />

</td>
</tr>
<tr>
<td class="profile-info">Hometown:</td>
<td>
<input class="" id="hometown" name="hometown" size="60" type="text" value="<?php /*echo $username*/ echo @$hometown;  ?>" />
</td>
</tr>
</table>


</div>
				
<div style="margin-top:20px;">
<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">About Me</h1>
<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">

<textarea class="box" id="answers__text" name="me" style="margin-bottom:10px;margin-top:10px;"><?php /*echo $username*/ echo @$about_me; ?></textarea>

						
</div>

</div>
				
<div style="margin-top:15px;">
<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">Specialties</h1>
<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">

<textarea name='tags' class='box' style="margin-top:10px;margin-bottom:10px;"><?php /*echo $username*/ echo @$specialties;  ?></textarea>
</div>
</div>
				
<div style="margin-top:15px;">

<h1 style="font-size:16px;font-weight:bold;color:#009FDA;padding-bottom:1px;padding-left:2px;">Privacy</h1>
<div style="border-bottom:1px solid #ccc;width:100%;float:right;"></div>
<div style="font-size:12px;margin-top:10px;">
					   While we’d prefer that all Quirky members use their real names, we offer an alias option for those who’d prefer more anonymity. Aliases must be between 4-50 characters and consist of letters and numbers (no special characters, spaces, dashes, underscores, etc.).
</div>
<div style="font-size:12px;margin-top:10px;">
<input id="user_alias" name="user" style="display:inline;width:auto;" type="checkbox" value="1" /> <b style="color:#00a4e4">Use Alias:</b>
<input type='text' value='<?php /*echo $username*/ echo @$use_alies;  ?>'  name='login' style='display:inline;' size='40'></input>
</div>
</div>
<input type="submit" value="save" name="save" class="btnstyle"/>				
</div>
</div></div></div>		
</form>
</div>
<div class='account-action-buttons clearfix'>
<!--<a class="button bright big" href="#" onclick="jQuery('#edit-profile.php').submit();; return false;">Save</a>
<a href="/users/74187/settings" class="button cancel big">Cancel</a> -->


<div class="clear"></div>
</div>
</div>
</div>


      
</div>
	
	
	<?php //include("learn/index.php"); ?>
	</div>
  </div>
</div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>

<script type="text/javascript">
	  jQuery(document).ready(function(){
jQuery(document).ready(function() {
	jQuery('.clearField').clearField();
});
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
