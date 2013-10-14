<?php

include("include/connect.php");
include("include/header.php");

$q=$_GET["q"];
?>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section id="main" class="column">
		
<?php
$result = mysql_query("SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$q'");

	?>		
			<table width="1263" height="46" cellspacing="0" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th >S.No.</th>
					<th width="74" >ShopName</th>
    				<th width="94" >ProductName</th>
					
					<th width="98" >Image</th>  
    				<th width="68" >Type</th> 
    			 
    			 <th width="62" >Title</th> 
				  <th width="62" > CurrentPrice</th> 
				   <th width="102" >PerivousPrice</th> 
					<th  width="60">Status</th>
					<th width="60">Edit</th> 
					<th width="60" >Delete</th>  
				</tr> 
				<?php
				$i=1;
				while($row=mysql_fetch_array($result))
                 {
				 ?>
		 <tr>
		
	<td width="55"><?php echo $i; ?></td>
	 <td><?php echo $row['s_name'] ;?></td>
  <td><?php echo $row['p_name'] ;?></td>
  <td><img src="uploadimage/<?php echo $row['p_image']; ?>"  height="40" width="80" /></td>
  <td><?php echo $row['p_type'] ;?></td>
    <td><?php echo $row['p_title'] ;?></td>
	  <td><?php echo $row['p_cur_price'] ;?></td>
	   <td><?php echo $row['p_pre_price'] ;?></td>

	  
	  <td class="cursor">
	 <?php if($row['p_status']==1)
	 {
	 ?>
	  <a onClick="changesta(<?php echo $row['p_id']; ?>, 'deact')" ><img src="images/check.png" /></a>
	  <?php
	  }
	  else
	  {
	  ?>
	  <a onClick="changesta(<?php echo $row['p_id']; ?>, 'act')"><img src="images/no.png" /></a>
	  <?php }?></td>
	 <td class="cursor"> <a onClick="openmypage(<?php echo $row['p_id']; ?>)" ><img src="images/edit.png"   /></a></td>
	<td class="cursor"><a  onClick="deleteid(<?php echo $row['p_id']; ?>)"><img src="images/delete.png"  /></a></td>
			  </tr> <?php $i++; }?>
 
				 
			<tbody> 
			</tbody> 
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
