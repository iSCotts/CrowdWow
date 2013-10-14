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
mysql_query("DELETE FROM submit_idia WHERE sub_id='$did'");
?>
<script type="text/javascript">
window.location.href="amanage_project.php?dm=msg";
</script>
<?php
}

if(isset($_GET['mode']))
{
$mode=$_GET['mode'];
if($mode=='act')
{
$sid=$_GET['sid'];
$sql2="update submit_idia set sub_status='1' where sub_id='$sid'";

$query2=mysql_query($sql2);





}
if($mode=='deact')
{
$sid=$_GET['sid'];
 $sql2="update submit_idia set sub_status='0' where sub_id='$sid'";
//exit;
$query2=mysql_query($sql2);

}
?>
<script type="text/javascript">
window.location.href="amanage_project.php?sm=msg";
</script>
<?php
}
?>
<?php 
if(isset($_POST['submit']))
{
 $status =$_POST['status'];

}
?>

	<?php include("include/leftsidebar.php"); ?>
<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<script type="text/javascript">

function deleteid(did) 
{

	var answer = confirm("DO you want to delete");
	if (answer==true)
	{
	window.location.href = "amanage_project.php?did="+did;
	return true;
	}
	else
	{
		return false;
	}
	
	
}

</script>
<script>
	function changesta(id,mode)
{
var r=confirm("do you want to change Status");
if (r==true)
  {
   window.location.href='amanage_project.php?sid='+id+'&mode='+mode;
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
var googlewin=dhtmlwindow.open("googlebox", "iframe", "aeditproject.php?aid="+id, "Edit Ad Details", "width=500px,height=400px,resize=1,scrolling=1,center=1")

googlewin.onclose=function(){ 
window.location.reload(true);
return true;
}
}
</script>
<script>
	function search1(id)
{

   window.location.href='amanage_project.php?sid='+id;
 
}
</script>
</script>
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
		<script>
	function search1(id)
{

   window.location.href='amanage_project.php?sid='+id;
 
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
	<h3 class="tabs_involved">Admin Project Management</h3>
		
		</header>
		

		<div class="tab_container" style="width:100%" >
		<?php
	
	//$tbl_name="shop inner join product on shop.s_id=product.s_id";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM submit_idia where project_type='A'";
	@$total_pages = mysql_fetch_array(mysql_query($query));
	  $total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "amanage_project.php"; 	//your file name  (the name of this file)
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

$result = mysql_query("SELECT * from submit_idia where project_type='A' order by sub_id desc LIMIT $start, $limit ");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   				<th width="100" >Category</th>	
				<th width="100" >Idea</th>	
    			 <th width="100" >Image</th>
				 <th width="100" >Invest</th>
    			 <th width="100" >Total Votes</th>
    			 <th width="100" >Total Comments</th>
				    <th width="90" >Fund</th>
				     <th width="90" >Duration</th>
                                        <th width="90" >Research</th>  
                                        <th width="90" >Design</th>
                                     <th width="90" >Themes</th>
                                        <th width="90" >CMF Color</th>
                                        <th width="90" >Stages</th>
					<!--<th  width="60">Project Status</th>-->
                                        <th  width="60">Status</th>
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
				</tr>  
				<?php
				$i=1;
				while(@$row=mysql_fetch_array($result))
                 {
				 ?>
		 		 <tr>
		
	<td width="55"><?php echo $row['category'] ;?></td>
	  <td width="55"><?php echo substr($row['desc_idea'],0,10) ;?></td>
	  <!-- <td width="55"><?php //echo $row['attach_files'] ;?></td>-->
	  <td><img src="../upload_idea/<?php echo $row['attach_files']; ?>"  height="40" width="40" /></td>
	  <td width="55"><?php echo $row['invest'] ;?></td>
           
	  <td width="55"><?php echo $row['vote_idea'] ;?></td>
	  	  <td width="55"><a href="../idea.php?i_id=<?php echo $row['sub_id']; ?>" target="_blank"> View</a></td>

      <td><?php $id1=$row['sub_id'];
  $query12=mysql_query("select amount from backers where sub_id='$id1'");
  $sum = 0;
  while($row12=mysql_fetch_array($query12))
  {
  $amount=$row12['amount'];
  $sum=$sum+$amount;
  }
  

	  ?><?php echo $sum;?></td>
<td><a href="influence_stat.php?id=<?php echo $row['sub_id']; ?>" >Devlopment Duration</a></td>
<td><a href="question1.php?id=<?php echo $row['sub_id']; ?>" >Choose Question</a></td>
<td><a href="design.php?id=<?php echo $row['sub_id']; ?>" >Choose Designe</a></td>
<td><a href="themes.php?id=<?php echo $row['sub_id']; ?>" >Choose Themes</a></td>
<td><a href="colors.php?id=<?php echo $row['sub_id']; ?>" >Choose Colors</a></td>

<?php
$sub_id=$row['sub_id'];
$sql6="select * from duration  where p_id='$sub_id' and spent='evaluation'";
$query6=mysql_query($sql6);
$nr6=mysql_num_rows($query6);
while($row6=mysql_fetch_array($query6))
{
$days1=$row6['days'];
$status=$row6['status'];
$sp=$row6['spent'];
}
$sql7="select * from duration  where p_id='$sub_id' and spent='research'";
$query7=mysql_query($sql7);
while($row7=mysql_fetch_array($query7))
{
$days2=$row7['days'];
}
$sql8="select * from duration  where p_id='$sub_id' and spent='design'";
$query8=mysql_query($sql8);
while($row8=mysql_fetch_array($query8))
{
$days3=$row8['days'];
}
$sql9="select * from duration  where p_id='$sub_id' and spent='branding'";
$query9=mysql_query($sql9);
while($row9=mysql_fetch_array($query9))
{
$days4=$row7['days'];
}

$starttime=strtotime($t1);
 $endtime=strtotime($days1);
 $t=date("m/d/Y");
 $t1=date("m/d/Y",strtotime($days1));
 $t2=date("m/d/Y",strtotime($days2));
 $t3=date("m/d/Y",strtotime($days3));
 $t4=date("m/d/Y",strtotime($days4));
//$endtime can be any format as well as it can be converted to secs
 $curdate=date("m/d/Y");
 $curtime=strtotime($curdate);
 $timediff = $endtime-$curtime;
   $days=intval($timediff/86400);
   $remain=$timediff%86400;
   $hours=intval($remain/3600);
   $remain=$remain%3600;
   $mins=intval($remain/60);
   $secs=$remain%60;
 
//$days is what you need
 
/* if($days>='0')
{
// this is just an output that tells the difrence
$timediff=$days.'days';  
}
else
{
$timediff="complete";
}*/
if($nr6=="")
{
$ti='new';
}
else if($t<$t1 && $t<$t2 && $t<$t3 && $t<$t4)
{
$ti='evaluation';
}
else if($t>$t1 && $t<$t2 && $t<$t3 && $t<$t4 && $status=='1' && $sp=='evaluation')
{
$ti='evaluation complete';
}
else if($t>$t1 && $t<$t2 && $t<$t3 && $t<$t4)
{
$ti='research';
}
else if($t>$t1 && $t>$t2 && $t<$t3 && $t<$t4)
{
$ti='design';
} 
else if($t>$t1 && $t>$t2 && $t>$t3 && $t<$t4)
{
$ti='branding';
} 
else
{
$ti='complete';
}
?>

<?php
if($ti=='evaluation complete')
{
?>
           <td width="55"><font color="red"><b><?php echo $ti; ?></b></font></td>
<?php 
}
else
{ 
?>
           <td width="55"><font color="green"><b><?php echo $ti; ?></b></font></td>
<?php
}
?>
	<!--<td width="55"><?php /*    
	   if($sum =="0")
	   {
	   echo "New";
	   }
	   elseif($sum==0||$row['invest']==0)
	   {
	   echo "New";
	   }
	   elseif($row['invest']>$sum||$row['invest']!=0)
	   {
	   echo "On Hold";
	   }
	   elseif($row['invest']<=$sum||$row['invest']!=0)
	   {
	   echo "Complete";
	   }
	   */
	   
	   ?></td>-->
            
	  <td class="cursor">
	 <?php if($row['sub_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['sub_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['sub_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	 <td class="cursor"> <a onClick="openmypage(<?php echo $row['sub_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['sub_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++;  }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
		
	<div style="margin-left:350px;">
<?php echo $pagination; ?>
</div>			
	
			
		</div>
		
	</section>
	</body></html>