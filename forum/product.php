<html>	
<head>
<link rel="stylesheet" href="css/dhtmlwindow.css" type="text/css" />

<script type="text/javascript" src="js/dhtmlwindow.js"></script>
<script type="text/javascript">
function openmypage(id)
{
var googlewin=dhtmlwindow.open("googlebox", "iframe", "editblog.php?aid="+id, "Edit Ad Details", "width=400px,height=400px,resize=1,scrolling=1,center=1")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
window.location.reload(true);
return true;
}
}
</script>
<script>
	function search1(id)
{

   window.location.href='manageblog.php?sid='+id;
 
}
</script>
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />

<link href="css/css1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<a href="topic.php?id=<?php echo '2'; ?>"><font color="#00CCFF">Create New Topic</font></a>
<section id="main" class="column">

		<article class="module width_3_quarter">
		<header>
		
		</header>
	 

		<div class="tab_container" style="width:100%" >
		
		<?php 
		
		
	
$result = mysql_query("select * from topic where o_id='2' order by t_id desc");

	?>		
			<table width="976" height="46" cellspacing="0" bordercolor="#CCCCCC" class="tablesorter" border="2" style="padding-top:20px;" > 

				<tr> 
   					<th height="50">Topics</th>
					
    				<th width="94" >Last Post</th>
					
					<th width="98" >Replies</th>  
    				
    			 
    			</tr>  
				<?php
				
				while($row=mysql_fetch_array($result))
                 {
				 $t=$row['topic_title'];
				 
				 ?>
		 		 <tr>
		
	<td width="55" height="50"><a href="Topic_comment.php?o_id=<?php echo '2'; ?>&& t_id=<?php $s1="select * from topic where topic_title='$t'"; $q1=mysql_query($s1); $r1=mysql_fetch_array($q1); echo $r1['t_id']; ?>"><font color="#003399"><b><?php echo $row['topic_title']; ?></b></font></a></td>
	
	
	  <td>
	  <?php $s2="select * from topic where topic_title='$t'"; 
	  $q2=mysql_query($s2); 
	  $r2=mysql_fetch_array($q2); 
       $t1=$r2['t_id']; 
	  ?>
	  <?php 
	  
	  
	  
	      $s5="select topic_comment.topic_comments,topic_comment.date,topic_comment.u_id,user.u_firstname,user.u_lastname,user.u_id from topic_comment inner join user on topic_comment.u_id=user.u_id where topic_comment.o_id='2' and topic_comment.t_id='$t1' order by tc_id desc limit 1";
		  $q5=mysql_query($s5);
while($r5=mysql_fetch_array($q5))
{?>
<table>
<tr>
<td>    
<?php 
   $s6="select topic_comment.u_id,user_profile.image,user_profile.u_id from topic_comment inner join user_profile on topic_comment.u_id=user_profile.u_id where topic_comment.o_id='2' and topic_comment.t_id='$t1' order by tc_id desc limit 1";
		  $q6=mysql_query($s6);
while($r6=mysql_fetch_array($q6))
{
 $image=$r6['image'];
}
if($image=="")
{
?>
<a href="Topic_comment.php?o_id=<?php echo '2'; ?>&& t_id=<?php $s1="select * from topic where topic_title='$t'"; $q1=mysql_query($s1); $r1=mysql_fetch_array($q1); echo $r1['t_id']; ?>"><img src="upload_image/user_noimage.png" height="30px;" width="30px;"></a>
<?php
}
else
{
?>
<a href="Topic_comment.php?o_id=<?php echo '2'; ?>&& t_id=<?php $s1="select * from topic where topic_title='$t'"; $q1=mysql_query($s1); $r1=mysql_fetch_array($q1); echo $r1['t_id']; ?>"><img src="upload_image/<?php echo $image; ?>" height="30px;" width="30px;"></a>

<?php } ?>
          </td>
<td>
<?php
echo $f=$r5['date'];
echo "<br>";
?><a href="Topic_comment.php?o_id=<?php echo '2'; ?>&& t_id=<?php $s1="select * from topic where topic_title='$t'"; $q1=mysql_query($s1); $r1=mysql_fetch_array($q1); echo $r1['t_id']; ?>"><font color="#66CCCC"><?php echo $f=$r5['u_firstname'];
echo " ";
echo $f=$r5['u_lastname'];



?></font></a>
</td>
</tr>
</table>


<?php
}		  
 ?>
	  
	  
	  
	  
	  </td>
  <td>
  <?php 
  $s8="select topic_comment.topic_comments,topic_comment.date,topic_comment.u_id,user.u_firstname,user.u_lastname,user.u_id from topic_comment inner join user on topic_comment.u_id=user.u_id where topic_comment.o_id='2' and topic_comment.t_id='$t1' order by tc_id desc ";
		  $q8=mysql_query($s8);
		  $nr8=mysql_num_rows($q8);
		 ?><font color="#0066FF"><b><?php echo $nr8;
  
   ?></b></font></td>
  
  
    
	  
	 </td>
	 			  </tr> <?php } ?>
 
				 
			
		  </table>
			
			
	
			
		</div><!-- end of .tab_container -->
		
	<!-- end of post new article -->
		
		
		
		
		
		
		
		
		<!-- end of styles article -->
		
	</section>
	</body></html>