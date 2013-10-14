<?php 
include("include/connect.php"); 
session_start();
 @$id=$_GET['$id'];
 @$go=$_GET['go'];
?>
<?php 
$query1=mysql_query("select p_id from payment where sub_id='$id'");
while($row=mysql_fetch_array($query1))
{
 @$pid=$row['p_id'];
}
?>
<html>


<body>




<?php 
  $sql="SELECT payment.first_name, payment.last_name, payment.state, payment.country, submit_idia.desc_idea, submit_idia.desc_solution,submit_idia.desc_problem, submit_idia.sub_id, submit_idia.attach_files FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_id='$id'";

 $query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
$p_name=$row['first_name'];
$p_image=$row['attach_files'];
$p_solution=$row['desc_solution'];
}
?>
<table>
<tr>
<td>
<div style="width:650px">
<div style="width:625px;">

								<div style="width:625px;">
							    <p>
<?php
 if( $p_image==null || $p_image=="")
 {
 
  ?>
<img  src="upload_idea/nowallpaper-585747.jpeg"width="625px" height="300px"/> 
  <?php
 }
 else
 {
 ?>				
	<img  src="upload_idea/<?php echo $p_image;?>"width="625px" height="300px"/>				
<?php
}
?>

							 
							  </p>
							  </div>
							  <div style="width:625px">
<div style="height:20px"></div>
	<h1 class="light-sans"><a href="">
									<h3><u>ABOUT THE PROJECT&#8230;</u></h3> </a>
									</h1>						  
<p style="font-size:14px">		
Our project is co-designing a new house line of women's clothing, jewelry, and accessories to be produced in NYC and sold at our Brooklyn boutique, theBANQUET, and beyond.

Our mission has always been to create our own approach to working in Fashion, both as independent designers and business owners.Together with an ever expanding network of designers, photographers, proprietors, and patrons, we have been carving our own niche in the market. We created PLUME jewelry and Miranda Bennett Design, respectively, in 2005/2006. Though our lines have always been independent entities, we have shared resources, advice, and created as many opportunities for collaboration as possible in the years since. 

In January 2009, in the heart of the recession, we opened our own boutique, where we have sold our lines side by side, as well as the work of guest artists and artisans from New York and beyond. It has been an incredible opportunity and a dream come true. It has also been an exercise in utilizing every resource possible to feed our business and our lines. If the most recent breakdown of the economy has taught us anything, it is that we do not want to rely on credit or incur debt as we continue to grow our business. This has made our project all the more challenging, and is a large part of why we are here now, asking for your help and support. 

The next chapter of our dream is to marry our aesthetics in a line of clothing, jewelry, and accessories that we will design together, produce in New York City, and market through our shop, theBANQUET.


<div style="height:20px"></div>
</p style="font-size:14px">


<h3><u>DESIGN:</u> </h3><p style="font-size:14px">Establish theme, source inspiration images, create mood board for inspiration reference, develop color story, swatch fabrics, sketch designs, create technical drawings with product specifications

SAMPLES: Source fabric/beads/chain/notion; develop patterns, employ sample makers, attend fittings, finalize design.

MARKETING: Photo shoot! Hire models, photographer, hair and makeup; art direction; web updates; organize and host collection preview party (music, cocktails, projector), Shoot (concept, director, story board, music) and debut collection film; use collection photos to create look book; Print and distribute look book.
</p>
<p style="font-size:14px">ha ha ha</p>

<div style="height:20px"></div>
<h3><u>PRODUCTION:</u></h3>
<p style="font-size:14px"> Purchase fabric, notions, metal, chain, beads; employ a sewing room and jewelry fabricators in the Garment Center and Jewelry District; quality control and production management. <br />
 Please read our FAQ's for more specific information regarding the look and feel of the collection, ie. inspiration, silhouettes, fabrics, jewelry metals & materials.

We want this line and our shop to be something that you all can be a part of! <br />
 Any contribution amount will help us reach our goal, even $1. In addition to pledging please pass on our Kickstarter project information to your family & friends and post it on your Facebook & Twitter accounts. .</p>

<p>
 <?php echo @$p_solution; ?></p>
 </div>
</div>
</div>
	</td>
	<td valign="top">
	

						
								

<div style="width:270px; height:auto;background-color:#EAEAEA;" >
<?php

include("include/backers.php");
//include("include/pledge.php");
//include("include/contactwithus.php");
//include("include/archive.php");
?>
</div>
<div>
</div>

</td>
</tr>
</table>


</body>
</html>
