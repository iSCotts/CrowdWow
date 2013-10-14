<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>

<body>


<section id="main" class="column">
		
		<article class="module width_3_quarter">
		<header>
		
		</header>
	 

		<div class="tab_container" style="width:100%" >
		
<?php $result = mysql_query("select * from overview");

	?>		
			<table width="976" bordercolor="#CCCCCC" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th height="50">Subjects</th>
					
    				<th width="94" >Topics</th>
					
					<th width="98" >Posts</th>  
    				<th width="68" >Latest Posts</th> 
    			 
    			</tr>  
				<?php
				$i=1;
				while($row=mysql_fetch_array($result))
                 {
				 ?>
		 		 <tr>
<?php 	$s1="select * from topic";
  $q1=mysql_query($s1);
	$r1=mysql_fetch_array($q1);
	
	?>
	<td width="55" height="50"><font color="#003399" size="+1"><b><?php echo $row['subjects']; ?></b></font></td>
	  <td>
<?php 	    
  $s5="select * from topic where o_id='$i'";
  $q5=mysql_query($s5);
  $r5=mysql_num_rows($q5);
  
?>
	  
	  <font color="#0066FF"><b><?php echo $r5 ;?></b></font></td>
  <td>
  <?php
  
  $s="select * from topic_comment where o_id='$i'";
  $q=mysql_query($s);
  $row1=mysql_fetch_array($q);
  $r=mysql_num_rows($q);
  ?>
  
  <font color="#0066FF"><b><?php echo $r; ?></b></font></td>
  
  <td>
  <?php
  //echo $id=$_GET['id'];
  $sql1="select * from topic where o_id='$i' order by t_id desc limit 1";
  $query1=mysql_query($sql1);
  $row1=mysql_fetch_array($query1);
  $s6="select * from topic where o_id='$i' order by t_id desc limit 1";
  $q6=mysql_query($s6);
  $r6=mysql_fetch_array($q6);
  $t=$r6['topic_title'];
  ?>
  <?php echo $row1['date'] ;?><?php echo "<br>"; ?><font color="#0033CC"><?php echo "Under"." "; ?></font><a href="Topic_comment.php?o_id=<?php echo $i; ?>&& t_id=<?php $s10="select * from topic where topic_title='$t'"; $q10=mysql_query($s10); $r10=mysql_fetch_array($q10); echo $r10['t_id']; ?>"><font color="#66CCCC"><?php echo $r6['topic_title']; ?></font></a></td>
    
	  
	 </td>
	 			  </tr><?php $i++; ?> <?php } ?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>