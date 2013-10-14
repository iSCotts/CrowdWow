<div class='box latest-comments'> 		
<div>
<h3>Latest Comments</h3> 
</div> 
 <ul class='user-list'> 
<?php
$sql="SELECT c_comment,c_user FROM comment limit 5 ";
 $query=mysql_query($sql);
while($row = mysql_fetch_array( $query ))
{
 
 $com=  $row['c_comment'];
 $user=  $row['c_user'];
?> 

<li class="user">  
<a href="topinfluence.php"><img  class="thumb" src="http://s3.amazonaws.com/kore/production/links/123/peek/quirky in 50 seconds.png" width="100" height="50"/></a> 
<div class="info-block"> 

<h4><p style="color:#00a4e4;"><?php echo $user;?></p></h4>  
<p class="user-text"><?php echo $com ;?></p> 
</div> 
</li> 
<?php
}
?>
</ul>
</div> 
</div>
</div>  