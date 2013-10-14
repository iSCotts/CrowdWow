<?php include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />

<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="column x4 sidebar" style="width:290px;">
				<span class="tb-t"></span>
				<div class="tb-c" style="height:550px">
					<div class="box">
						<h3>Tags</h3>

						

                            	
                            	<?php 
							
							$sql="select * from tag_blog ";
							$query=mysql_query($sql);
							while($row=mysql_fetch_array($query))
							{
							$id=$row['id'];
							$tag=$row['tag'];
							?>
	<li><a href="blog_search.php?id=<?php echo $tag; ?>" class='tag-link-232' title='25 topics' style='font-size: 11.770491803279pt;'><?php echo $tag; ?></a></li>
			<?php } ?>
												
					</div>
				</div></div>


</body>
</html>
