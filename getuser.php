<?php
include("include/connect.php");
@session_start();
 $q=$_GET["q"];
if(isset($_GET['id']))
{
$id=$_GET['id'];
$page_name="shop.php"; //  If you use this code with a different page ( or file ) name then change this 
@$start=$_GET['start'];

$eu = ($start - 0); 
$limit = 9;                                 
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

@$query="select * from shop where s_id='$id'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{?>
<h2><?php  echo $row['s_name'] ;?><span class="text-soft"></span></h2>
<?php }
 @$sql2="SELECT * from product where product.s_id='$id' and p_status='1'";
// @$sql2="SELECT shop.s_name,product.p_name,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where  product.p_status='1' and shop.s_status='1'";
		$query2=mysql_query($sql2);
		$nume=mysql_num_rows($query2);
		?>
		<h2><span class="text-soft"><?php echo "($nume)";?></span></h2>

	<?php

	@$type=$_GET['type'];
	if($type=='All')
	{
	$type="";
	}
	//------------------------------------------
 @$sql="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id from shop inner join product on shop.s_id=product.s_id where product.s_id='$id'  and product.p_status='1' limit $eu, $limit ";



		$sql1=mysql_query($sql);
		
		
		while($r=mysql_fetch_array($sql1))
		{
		?>
		
</div>
</div>


<div id="products-display" >
<ul id="products-display-list"   >
<li class="product-grid-item product">
<span style="padding-left:60px">
<a href="item.php?sid=<?php echo $id; ?>&pid=<?php echo $r['p_id']; ?>"><img src="admin/uploadimage/<?php echo $r['p_image']; ?>"   height="150" width="190" /></a>
</span>
<div class="product-details" style="padding-left:60px">
<div class="sale-status-tooltip">
</div>
<h3 class="product-title light-sans"><?php echo $r['p_name'] ;?></h3>
<p class="tagline"><?php echo $r['p_title'] ;?></p>
<p class="price">
<?php echo $r['p_cur_price'] ;?>
<p class="msrp">
</p>
</p>
<?php }?>
</li>

</ul>

<?php
if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td >";
if($back >=0) { 
print "<a href='$page_name?start=$back & id=$id & type=$type'><font face='Verdana' size='2'><img src='images/control_page_arrow_left.png'></font></a>"; 
} 

echo "</td><td >";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i & id=$id & type=$type'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}      
$l=$l+1;
}


echo "</td><td >";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
print "<a href='$page_name?start=$next & id=$id & type=$type'><font face='Verdana' size='2' ><img src='images/control_page_arrow_right.png' style='padding_left:40px'></font></a>";} 
echo "</td></tr></table>";

}
}
else
{
$page_name="shop.php"; 
@$start=$_GET['start'];

$eu = ($start - 0); 
$limit = 9;                                 
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

?>

<h2>All <span class="text-soft"></span></h2>
<?php 

@$sql2="SELECT shop.s_name,product.p_name,product.p_status,product.p_id,product.s_id,product.p_type from shop inner join product on shop.s_id=product.s_id where product.p_status='1' and shop.s_status='1'";
		$query2=mysql_query($sql2); 
		$nume=mysql_num_rows($query2);
		?>
		<h2><span class="text-soft"><?php echo "($nume)";?></span></h2>
	
	<?php

echo @$type=$_GET['type'];
	if($type=='All')
	{
	$type="";
	}
	//-----------------------------all
if($q=='All')
{ $ptype="product.p_status='1'"; }
else if($q!='')
{ $ptype="product.p_status='1' and product.p_type='".$q."'"; }
else {$ptype="product.p_status='1'"; }
  @$sql="SELECT shop.s_name,product.p_name,product.p_image,product.p_type,product.p_title,product.p_cur_price,product.p_pre_price,product.p_status,product.p_id,product.s_id from shop inner join product on shop.s_id=product.s_id where ".$ptype." limit $eu, $limit ";


		$sql1=mysql_query($sql);
		
		
		while($r=mysql_fetch_array($sql1))
		{
		
		?>
		
</div>
</div>




<div id="products-display">
<ul id="products-display-list">
<li class="product-grid-item product">
<!--<span style="padding-left:60px"><img src="admin/uploadimage/<?php //echo $r['p_image']; ?>"  height="100" width="150" /></span>-->
<span style="padding-left:60px">
<a href="item.php?sid=<?php echo $r['s_id']; ?>&pid=<?php echo $r['p_id']; ?>" id="download_now"><img src="admin/uploadimage/<?php echo $r['p_image']; ?>" height="150" width="190"/></a>
</span>
<div class="product-details" style="padding-left:60px">
<div class="sale-status-tooltip">
</div>
<h3 class="product-title light-sans"><?php echo $r['p_name'] ;?></h3>
<p class="tagline"><?php echo $r['p_title'] ;?></p>
<p class="price">
<?php echo $r['p_cur_price'] ;?>
<p class="msrp">
</p>
</p>
<?php }?>
</li>

</ul>

</tr>
<tr>
<?php
if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td >";
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'><img src='images/control_page_arrow_left.png'></font></a>"; 
} 

echo "</td><td >";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i '><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}       
$l=$l+1;
}


echo "</td><td >";

if($this1 < $nume) { 
print "<a href='$page_name?start=$next '><font face='Verdana' size='2' ><img src='images/control_page_arrow_right.png' style='padding_left:40px'></font></a>";} 
echo "</td></tr></table>";

}
} 
?>              