<?php include("include/connect.php"); 
session_start();
@$id=$_GET['sid']; 
$pid=$_GET['pid'];
$sql="select * from product where p_id='$pid' and p_status='1' ";
$query=mysql_query($sql);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" href="css/anythingzoomer.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script src="js/jquery.anythingzoomer.js"></script>
	<script>
	$(function() {

		$(".zoom").anythingZoomer();

		$('.president')
		.bind('click', function(){
			return false;
		})
		.bind('mouseover click', function(){
			var loc = $(this).attr('rel');
			if (loc && loc.indexOf(',') > 0) {
				loc = loc.split(',');
				$('.zoom').anythingZoomer( loc[0], loc[1] );
			}
			return false;
		});

	});
	</script>

        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <style>
        
            /* Demo styles */
            html,body{margin:0;}
            body{border-top:4px;}
            .content{font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}
            
            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px;}
            
        </style>
        
        <!-- load jQuery -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
       
        <!-- load Galleria -->
      

    </head>
<body id="image">
    <div class="content" style="margin:-2px;width:425px;">
          
        <!-- Adding gallery images. We use resized thumbnails here for better performance, but its not necessary -->
        <div id="galleria" style="margin-top:-23px;">
        <div class="zoom">

		<div class="small">
<?php 
while($row=mysql_fetch_array($query))
{
 $row['s_id']; 
?>
        <a href="admin/uploadimage/<?php echo $row['p_image']; ?>">
        
        <img src="admin/uploadimage/<?php echo $row['p_image']; ?>" width="500" height="290" style="margin-top:25px;"></a>
                    
                      </div>
       <div class="large">
	   <a href="admin/uploadimage/<?php echo $row['p_image']; ?>">
        
        <img src="admin/uploadimage/<?php echo $row['p_image']; ?>"></a>
	   </div> 
        </div></div>
		 <?php } ?> 
    </div>
    <script>

    // Load the classic theme
    Galleria.loadTheme('js/galleria.classic.js');
    
    // Initialize Galleria
    $('#galleria').galleria();

    </script>
    </body>
</html>