<?php
include('include/connect.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div><div class="bod">
  <div class="bod_rt" style="margin-bottom:125px;">
<div style="width:500px; height:400px; padding:70px; padding-top:150px;">	
<h3>Search Results:</h3><br /><br />
<?php
if(isset($_POST['search']))
{
$search=$_POST['testsearch'];
if(!$search=='')
{
$sea="select * from product where p_name like '%$search%' or p_title like '%$search%'";
$query_sea=mysql_query($sea);
 $num=mysql_num_rows($query_sea);
if($num>0)
{
    while($row=mysql_fetch_array($query_sea))
    {?>
		
       <h3>
	   <br />
	   <a href="<?php echo $row['url']; ?>"><?php echo "Quirky"; ?></a>	   
	   -- <a href="<?php echo $row['url']; ?>"><?php echo $row['p_name']; ?></a>
	   <a href="<?php echo $row['url']; ?>"><?php echo $row['p_title']; ?></a>
	   </h3><br />
	   <?php echo "quirky is a social product development company. Your product ideas come in, our 
community works on them, we sell your product worldwide"; ?>
	   <br />
	   <?php echo "" ?>
	   <br />
	   <hr/>
	   <?php
    } 
}
$sea="select * from user where u_firstname like '%$search%' or u_lastname like '%$search%' or u_email like '%search%'";
$query_sea=mysql_query($sea);
 $num=mysql_num_rows($query_sea);
if($num>0)
{
    while($row=mysql_fetch_array($query_sea))
    {?>
		
       <h3>
	   <br />
	   <a href="<?php echo $row['url']; ?>"><?php echo "Quirky"; ?></a>	   
	   -- <a href="<?php echo $row['url']; ?>"><?php echo $row['u_firstname']; ?></a>
	   <a href="<?php echo $row['url']; ?>"><?php echo $row['u_lastname']; ?></a>
	   </h3><br />
	   <?php echo "quirky is a social product development company. Your product ideas come in, our 
community works on them, we sell your product worldwide"; ?>
	   <br />
	   <?php echo "" ?>
	   <br />
	   <hr/>
	   <?php
    } 
}
$sea="select * from menu where m_name like '%$search%'";
$query_sea=mysql_query($sea);
 $num=mysql_num_rows($query_sea);
if($num>0)
{
    while($row=mysql_fetch_array($query_sea))
    {?>
		
       <h3>
	   <br />
	   <a href="<?php echo $row['url']; ?>"><?php echo "Quirky"; ?></a>	   
	   -- <a href="<?php echo $row['url']; ?>"><?php echo $row['m_name']; ?></a>
	   </h3><br />
	   <?php echo "quirky is a social product development company. Your product ideas come in, our 
community works on them, we sell your product worldwide"; ?>
	   <br />
	   <?php echo "" ?>
	   <br />
	   <hr/>
	   <?php
    } 
}
$sea="select * from article where name like '%$search%' or title like '%search%' or detail like '%search%'";
$query_sea=mysql_query($sea);
 $num=mysql_num_rows($query_sea);
if($num>0)
{
    while($row=mysql_fetch_array($query_sea))
    {?>
		
       <h3>
	   <br />
	   <a href="<?php echo $row['url']; ?>"><?php echo "Quirky"; ?></a>	   
	   -- <a href="<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a>
	   <a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a>
	   </h3><br />
	   <?php echo "quirky is a social product development company. Your product ideas come in, our 
community works on them, we sell your product worldwide"; ?>
	   <br />
	   <?php echo "" ?>
	   <br />
	   <hr/>
	   <?php
    } 
}
$sea="select * from comment where c_user like '%$search%' or c_email like '%search%' or c_web like '%search%' or c_comment like '%search%'";
$query_sea=mysql_query($sea);
 $num=mysql_num_rows($query_sea);
if($num>0)
{
    while($row=mysql_fetch_array($query_sea))
    {?>
		
       <h3>
	   <br />
	   <a href="<?php echo $row['url']; ?>"><?php echo "Quirky"; ?></a>	   
	   -- <a href="<?php echo $row['url']; ?>"><?php echo $row['c_user']; ?></a>
	   <a href="<?php echo $row['url']; ?>"><?php echo $row['c_web']; ?></a>
	   </h3><br />
	   <?php echo "quirky is a social product development company. Your product ideas come in, our 
community works on them, we sell your product worldwide"; ?>
	   <br />
	   <?php echo "" ?>
	   <br />
	   <hr/>
	   <?php
    } 
}
}
else
{
		echo "<font size=4 >"."We couldn't find what you're looking for..try again?</font>";
}
}

?>
</div></div></div>

<div class="ftr">
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
