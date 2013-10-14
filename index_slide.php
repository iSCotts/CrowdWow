<?php

include('include/connect.php'); 


 @$query2="SELECT shop.s_id,product.p_id,shop.s_name,product.p_image,product.p_status,product.p_title from shop inner join product on shop.s_id=product.s_id where product.p_status='1'";
 @$result = mysql_query($query2);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>s3Slider jQuery plugin</title>
<!-- CSS -->
<style type="text/css" media="screen">
#slider1 {
    width: 540px; /* important to be same as image width */
    height: 280px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}

#slider1Content {
    width: 720px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
}
.slider1Image {
    float: left;
    position: relative;
	display: none;
}
.slider1Image span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 694px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.clear {
	clear: both;
}
.slider1Image span strong {
    font-size: 14px;
}
.left {
	top: 0;
    left: 0;
	width: 110px !important;
	height: 280px;
}
.right {
	right: 0;
	bottom: 0;
	width: 90px !important;
	height: 290px;
}
ul { list-style-type: none;}
</style>
<!-- JavaScripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 4000 
        });
    });
</script>
</head>

<body >

    
    
    <div id="slider1" >
        <ul id="slider1Content" ><?php
			while(@$row=mysql_fetch_array($result))
			{
		@$row['p_image'];
			?>
		
            <li class="slider1Image">
			
                <a  href="item.php?sid=<?php echo $row['s_id']?>&pid=<?php echo $row['p_id']?>"><img src="admin/uploadimage/<?php /*echo $username*/ echo @$row['p_image'];  ?>" alt="<?php /*echo $username*/ echo @$row['p_image'];  ?>" height="280px;" width="540px;" /></a>
                <span class="right" style="height:260px;"><?php /*echo $username*/ echo @$row['p_title'];  ?></span></li>
				<?php
				}
				
				?>
				
            <!--<li class="slider1Image">
                <a href=""><img src="admin/uploadimage/2.jpg" alt="2" /></a>
                <span class="right"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...</span></li>
            <li class="slider1Image">
                <img src="admin/uploadimage/3.jpg" alt="3" />
                <span class="right"><strong>Title text 2</strong><br />Content text...</span></li>
            <li class="slider1Image">
                <img src="admin/uploadimage/4.jpg" alt="4" />
                <span class="left"><strong>Title text 2</strong><br />Content text...</span></li>
            <li class="slider1Image">
                <img src="admin/uploadimage/5.jpg" alt="5" />
                <span class="right"><strong>Title text 2</strong><br />Content text...</span></li>-->
            <div class="clear slider1Image"></div>
        </ul>
    </div>
  <!-- // slider -->

</body>
</html>
