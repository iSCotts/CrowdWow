<?php include("include/connect.php"); 
session_start();
@$id=$_GET['sid']; 
$sql="select * from product where s_id='$id' and p_status='1'";
$query=mysql_query($sql);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
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
        <script src="js/galleria-1.2.3.min.js"></script>

    </head>
<body>
    <div class="content" style="margin:-2px;width:425px;">
          
        <!-- Adding gallery images. We use resized thumbnails here for better performance, but its not necessary -->
        
        <div id="galleria" style="margin-top:-23px;">
<?php 
while($row=mysql_fetch_array($query))
{
 $row['s_id']; 
?>
        <a href="admin/uploadimage/<?php echo $row['p_image']; ?>">
        
        <img src="admin/uploadimage/<?php echo $row['p_image']; ?>"></a>
    <?php } ?>                  
                      </div>
        
        
    </div>
    <script>

    // Load the classic theme
    Galleria.loadTheme('js/galleria.classic.js');
    
    // Initialize Galleria
    $('#galleria').galleria();

    </script>
    </body>
</html>