    <html>
        <head>
            <title>Magic Zoom Plus: Multiple images</title>
           
            <!-- link to magiczoomplus.css file -->
            <link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
            <!-- link to magiczoomplus.js file -->
            <script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
           
        </head>
        <body>
           
            <p>Zoom into many different images.</p>
     
            <!-- define Magic Zoom Plus -->
            <a href="images/harley1c.jpg" class="MagicZoomPlus" id="Zoomer"><img src="images/harley1b.jpg" height="200" width="200"/></a> <br/>
     
            <!-- define alternate views -->
            <a href="images/harley1c.jpg" rel="zoom-id:Zoomer" rev="images/harley1b.jpg"><img src="images/harley1c.jpg" height="30" width="30"/></a>
            <a href="images/harley2c.jpg" rel="zoom-id:Zoomer" rev="images/harley2b.jpg"><img src="images/harley2c.jpg" height="30" width="30"/></a>
     
           
        </body>
    </html>
