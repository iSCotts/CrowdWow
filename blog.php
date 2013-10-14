<?php 
include("include/connect.php"); 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Blog</title>


<link href="stylesheets/com.quirky.contentd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.tc.toolsd6df.css?1303335970" media="screen" rel="stylesheet" type="text/css" />
<style type="text/css">    
            /* CSS Document */
div.pagination {
	padding: 3px;
	margin: 30px;
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


<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
<div class="bod">
  <div class="bod_rt">


<div class="tier x12">
<div class="column">
<div class='breadcrumb box filled-soft'>

<p class='breadcrumb-links'>
<a href='' class='breadcrumb-link'>Blog</a>
			
</p>

</div>
</div>
<div class="column-r x3">

  <div class="h-countdown">
    <p id="project-countdown" class="countdown" rel="416290"></p>
</div>
</div>
</div>
</div><div class="bod">
  <div class="bod_rt" >
<div id="modal-login" class="quirky-modal" style="display: none;">
<div class='qm-box x7'>
<div class='login modal-content modal-content-qtheme box bordered'>
<div class="hd">
<h2>You Must Be Logged In&hellip;</h2>
<a onclick="jQuery.hideLoginModal(); return false;" class="close graphic" href="#"><span>Close</span></a>
</div>
<div class="bd">
<div class="x3 left">
</div>
				
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
<p>In order to invent, influence, and earn, you first have to register for a Quirky account. DonÃ¢â‚¬â„¢t worryÃ¢â‚¬Â¦ itÃ¢â‚¬â„¢s super quick and easy.</p>
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
<?php //include("user/reg.php"); ?>
</div>
</div>
	<?php
	/*
		Place code to connect to your DB here.
	*/
	//$con=mysql_connect("localhost","root","");
     //$da=mysql_select_db("quirky_new",$con);	// include your code to connect to DB.

	//$tbl_name="shop inner join product on shop.s_id=product.s_id";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM product inner join article where product.p_id=article.p_id ";
	$total_pages = mysql_fetch_array(mysql_query($query));
	 $total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "blog.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
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
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
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
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
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

<table><tr><td>
<table style="width:700px"><tr><td>
<?php 
//$sql="select * from product";

if(isset($_GET['date']))
{
$date=$_GET['date'];
//$sql="select * from article where date_posted like '%$date%'";
$sql="select product.p_image,article.name,article.title,article.p_id,article.detail,article.date_posted from product inner join article where article.date_posted like '%$date%' and product.p_id=article.p_id and article.art_status='1' LIMIT $start, $limit";
}

else
{
$sql="select product.p_image,article.name,article.title,article.p_id,article.detail,article.date_posted from product inner join article where product.p_id=article.p_id and article.art_status='1' LIMIT $start, $limit";
}?><div class="post-content x">
<font size="+2"; color="#666666"><?php $query=mysql_query($sql);
$nr=mysql_num_rows($query);
if($nr==0)
{
echo "No archives on $date";
}
while($row=mysql_fetch_array($query))
{
?></font>

  <div class="content-head">
	<h1 class="light-sans" style="color:#00AEF0;font-size:26px;">
	
	  <div style="height:20px">
	  
	  </div>
	  
		 Introducing&#8230;<?php echo $row['title']; ?>
		   </h1>
	         <div style=" margin-bottom:20px;margin-top:10px;">
	<table>
	<tr><td style=" width:10px;">By-</td>
	<td style=" width:80px;color:#000099;"><h3><?php echo $row['name']; ?></h3></td>
	<td style=" width:200px;color:#000099;"><h3><?php echo $row['date_posted']; ?></h3>
 </td>
 </tr>
 </table>
         </div>									
			</div>
				<p>
				  <a href="blog_comment.php?co_id=<?php echo $row['p_id']; ?>"><img src="admin/uploadimage/<?php echo $row['p_image']; ?>" width="500" height="300" /></a>
					</p>
					  <div style="color:#666666; margin-bottom:20px; margin-top:20px; width:500px;">
 <h ><?php echo $row['detail']; ?></h>
  </div>
   </div>
    <div style="border-bottom:1px ridge #BABABA;border-top:1px ridge #BABABA; width:500px;">
     <a href="blog_comment.php?co_id=<?php echo $row['p_id']; ?>">
<?php 
$p_id=$row['p_id'];
$query2=mysql_query("select * from comment where p_id='$p_id'");
$nr2=mysql_num_rows($query2);
if($nr2==0)
{
echo "No Comments";
}
else
{
echo "<b>".$nr2."</b> Comments";
}
?>
</a>
</div>

<?php } ?>
</td>

  </tr>
    </table>
	</td>
	<td style="padding-bottom:0px">
		<table>
	<tr><td><?php include("tags.php"); ?></td></tr>
    <tr><td><?php include("connect_us.php"); ?></td></tr>
      <tr><td><?php include("archive.php"); ?></td></tr>
      </table>
	  </td>
	  </tr></table>
<div style="margin-left:350px;">
  <?php echo $pagination; ?>
    </div>		
      </div>
        </div>
          </div>
		    </div>
		      </div>
		        </div>
		          </div></div>
		          </div>
	
<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>