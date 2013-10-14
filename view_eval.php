<?php
include("include/connect.php");
@session_start();

 $id=$_GET['i_id'];
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
<div class="bod">
  <div class="bod_rt">

<div class="page"> 
<div class="tier x12"> 
<div class="column"> 
<div class='breadcrumb box filled-soft'> 
<p class='breadcrumb-links'> 
<a href='influnce.php' class='breadcrumb-link'>Influence</a> 
				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Product Evaluation</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<p id="project-countdown" class="countdown" rel="75291"></p> 
</div> 
</div> 
</div> 


    




<div class="page quirky-idea">

  

<div class="tier mSmaller x12 quirky-idea">

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="" style="width:900px">
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<h2>Product Evaluation</h2> 
<p><p>It&#8217;s time for product evaluation &#8212; our weekly quest to identify the best new product idea in the world and push it through our crazy design process. In just a few weeks, one of these ideas will become a part of the Quirky lineup. But for now, it&#8217;s up to you to help our staff decide which idea should take this week&#8217;s crown.</p></p> 
<div class="button-holder"> 


</div> 
</div> 
<div class="bd"> 
<h2>Please Stand By For a Winner...</h2> 
</div> 
 
</div> 
</div> 
<div class="column-r x3"> 
<div class="pillar x3"> 
<div class="box squared product-timeline filled-super-soft"> 
<div class="hd"> 
<h2>Product Timeline</h2> 
</div> 
<div class="bd"> 
<ul class="timeline-stack"> 
<li class="timeline-component"> 
<h3>Evaluation</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="#"><span class="step current">Product Evaluation</span></a> 

</li> 
</ol> 
</li> 
			
			
</ul> 
</div> 
</div> 
				
				
</div> 
</div> 
</div> 
	
</div> 
 
<div class="tier x12"> 
<div class="column x8">      
		
		
<div id="ideations-grid"> 
<div class="box browse-controls"> 
<div class="filter row clearfix"> 
		

</div> 
	
 
	
	
</div> 
 
<div class="idea-item"> 
<ul id="ideation-grid-items" class="idea-item-modules xFull"> 
<li class="idea-item"> 
<div class="box bordered filled-super-soft"> 
<div class="hd"> 
<div class="left x5"> 
<?php 
$sql="select distinct submit_idia.desc_idea,submit_idia.sub_id,submit_idia.attach_files,submit_idia.u_id from submit_idia inner join payment where project_type='A'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$id1=$row['sub_id'];
?>
<h3><a href="idea.php?i_id=<?php echo $row['sub_id']; ?>"><?php echo $row['desc_idea']; ?></a> <span class="more">&raquo;</span></h3> 
<cite> 
<img style="width:30px; height:30px;" src="upload_idea/<?php echo $row['attach_files']; ?>"/> 
<br />
<?php 
 $sql1="select distinct payment.first_name from payment inner join submit_idia  where payment.sub_id='$id1'";
$query1=mysql_query($sql1);
while($row1=mysql_fetch_array($query1))
{
?>


                by:<a href="view_profile1.php?userid1=<?php echo $row['u_id']; ?>"> 

<?php echo $row1['first_name']; ?></a>     
 
 
<?php } ?>	
</cite> <div class="ft"> </div>
<?php } ?>	</div> 

			
			
</div>  



<div class="right"> 

</div>       
</div> 
</div> 
</li> 
 
</ul> 
	
 </form>
	
</div>
</div>
</div>  
   
  </div>  </div>  </div>  </div>  </div>  </div> 
</div></div></div></div></div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
