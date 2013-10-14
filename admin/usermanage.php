<?php 
session_start();
if(isset($_SESSION['password'])=="")
{
?>
<script>
window.location.href="index.php";
</script>
<?php
}
include("include/connect.php");
include("include/header.php");

 
 if(isset($_GET['did']))
 {
$did=$_GET['did'];
mysql_query("DELETE FROM user WHERE u_id='$did'");
?>
<script type="text/javascript">
window.location.href="usermanage.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
echo $sql2="update user set u_status='1' where u_id='$sid'";

$query2=mysql_query($sql2);





}
if($mode=='deact')
{
$sid=$_GET['sid'];
echo $sql2="update user set u_status='0' where u_id='$sid'";
//exit;
$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="usermanage.php?sm=msg";
</script>
<?php
}
?>

	<?php include("include/leftsidebar.php"); ?>
<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />
<style type="text/css">    
            /* CSS Document */
div.pagination {
	padding: 3px;
	margin: 3px;
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

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<script type="text/javascript">
<!--
function deleteid(did) 
{
//alert(did);
	var answer = confirm("DO you want to delete");
	if (answer==true)
	{
	window.location.href = "usermanage.php?did="+did;
	return true;
	}
	else
	{
		return false;
	}
	
	
}
//-->
</script>
<script>
	function changesta(id,mode)
{
var r=confirm("do you want to change Status");
if (r==true)
  {
   window.location.href='usermanage.php?sid='+id+'&mode='+mode;
  }
else
  {
   return false;			
  }
}
</script>
<script type="text/javascript">
function openmypage(id)
{
var googlewin=dhtmlwindow.open("googlebox", "iframe", "useredit.php?aid="+id, "Edit Ad Details", "width=400px,height=300px,resize=1,scrolling=1,center=1", "recal")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
window.location.reload(true);
return true;
}
}
</script>
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section id="main" class="column">
		
	<?php if(isset($_GET['dm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully deleted"; ?>
	</h4>
		<?php } ?>
		<?php  if(isset($_GET['sm']))	
	{ ?>
	<h4 class="alert_success">
	
	<?php echo "successfully status change"; ?>
	</h4>
		<?php } ?>
		<article class="module width_3_quarter">
		<header>
	<h3 class="tabs_involved">User Managment</h3>
		
		</header>

		<div class="tab_container" style="width:100%">
		
		<?php
	
	//$tbl_name="shop inner join product on shop.s_id=product.s_id";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM user";
	$total_pages = mysql_fetch_array(mysql_query($query));
	 $total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "usermanage.php"; 	//your file name  (the name of this file)
	$limit = 8; 								//how many items to show per page
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
		
		<?php 

$result = mysql_query("SELECT u_id,u_email,u_firstname,u_lastname,u_doj,u_status FROM user order by u_id desc LIMIT $start, $limit");
 $no=mysql_num_rows($result);

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2"> 

				<tr> 
   					
    				<th width="111">First Name</th> 
    				<th width="122">Last Name</th> 
    				<th width="102">Email</th> 
    			          <th width="95">Date</th> 
				  <th width="95">Earning</th>
                                        <th width="95">Influence Points</th> 
					<th width="60">Status</th> 
					<th width="60" >Edit</th> 
					<th width="60">Delete</th> 
				</tr> 
				<?php
				$i=1;
				while($row = mysql_fetch_array($result))
  {?>
		 <tr>
		
	<td width="55"><?php echo $row['u_firstname'] ;?></td>

  <td><?php echo $row['u_lastname'] ;?></td>
    <td><?php echo $row['u_email'] ;?></td>
	  <td><?php echo $row['u_doj'] ;?></td>
	  <?php
	  $id=$row['u_id'];
 $s="select * from submit_idia where u_id='$id'";
 $q=mysql_query($s);
 $r=mysql_fetch_array($q);
$rs=$r['invest'];
$p=($rs*35)/100;
?>
	  <td><?php echo "$".$p.".00"; ?></td>
          <td> <?php
             $s1="select sum(pro_points) as un from pro_naming where u_id='$id'";
             $q1=mysql_query($s1);
             while($r1=mysql_fetch_array($q1))
             {
                $usid=$r1['un'];
                
             }
             $s2="select * from pro_naming where u_id='$id'";
             $q2=mysql_query($s2);
             $nr2=mysql_num_rows($q2);
            if($nr2=="")
            {
              echo "0";
            }
           else
            {           
             echo $usid;
             }
             echo "%";
           ?>
            </td>
	 <td class="cursor"> 
	 <?php if($row['u_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['u_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['u_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	  <td class="cursor"><a onClick="openmypage(<?php echo $row['u_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	   <td class="cursor"><a  onClick="deleteid(<?php echo $row['u_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
				
	
			
		</div><!-- end of .tab_container -->
		<div style="margin-left:350px;">
<?php echo $pagination; ?>
</div>	
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>
	