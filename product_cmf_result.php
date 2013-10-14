<?php
include("include/connect.php");
session_start();
$email=$_SESSION['email'];
$sq="select * from user where u_email='$email'";
$q=mysql_query($sq);
while($r2=mysql_fetch_array($q))
{
	$u_id=$r2['u_id'];
}
$id=$_GET['i_id2'];
if(isset($_POST['submit']))
{

 $text=$_POST['idea_problem'];
 $sql="insert into pro_tag (u_id,sub_id,tag_name) values ('$u_id','$id','$text')";
 $query=mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>infulenceit</title>
<link href="stylesheets/com.quirky.contentd6df.css" rel="stylesheet" type="text/css">
<link href="stylesheets/com.quirky.extrad6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.tc.toolsd6df.css" rel="stylesheet" type="text/css">

<link href="stylesheets/com.quirky.based6df.css" rel="stylesheet" type="text/css">	


<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function showHint(str,divid)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(divid).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","vote_idea2.php?mode=pos&q="+str,true);
xmlhttp.send();
}
</script>
</head>

<body>
<div class="main">
<?php include("include/header.php"); ?>
</div>
</div><div class="bod">
  <div class="bod_rt">

<div class="page"> 
<div class="tier x12"> 
<div class="column"> 
<div class='breadcrumb box filled-soft'> 
<p class='breadcrumb-links'> 
<a href='/projects' class='breadcrumb-link'>Influence</a> 
				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Branding / Product CMF</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<p id="project-countdown" class="countdown" rel="75291"></p> 


 
<span id="cntdwn4" style="background-color:white; color:#FF00FF"><font size="+1">Completed</font></span>	





</div> 
</div> 
</div> 


    
	<script src="/javascripts/jquery.tools.min.js?1304015757" type="text/javascript"></script>
<script>
function add_more_text_box(parent_id, child_name, child_id)
{
  var myTable=document.getElementById(parent_id);
  var oDiv, oInput;
  oDiv = document.createElement('div');
  oDiv.setAttribute('id', 'Name');
  myTable.appendChild(oDiv);

  oInput = document.createElement('input');
  oInput.setAttribute('type', 'text');
  oInput.setAttribute('name', child_name);
  oInput.setAttribute('id', child_id);
  oDiv.appendChild(oInput);
} 

var child_id = 1;
function child()
{ 
		return child_id++;
}	
</script>




<div class="page quirky-idea">

  

<div class="tier mSmaller x12 quirky-idea">

<!--<font style="font-size:26px">Submit Your Idea</font>
--></div>
<div class="tier x12">
<div class="column x9"> 

<form action="" enctype="multipart/form-data" id="pitchForm" method="post" style="margin-top:0px;">
<div class="" style="width:900px">
<!--<strong>Tell Us About Your Idea</strong>-->
<div class="filled-soft"> 
<div class="tier x12"> 
<div class="column x8"> 
<div class="box your-overview"> 
<div class="hd"> 
<font size="+2" color="#000099">Product CMF</font>
<p></p><p>In this project, we want you to submit sketches, images, videos, and other visuals that illustrate design directions for <a href="#">Steffani Adaska’s <span class="caps">BBQ</span> Oil Brush</a>. We’ll use the top concepts as a starting point for our final design sketches.</p>
<p>Have fun!</p><p></p>
<div style="padding-top:10px;" class="row"></div>
<font size="+2" color="#000099">The Winners!</font><br/><br/>
<?php
  $s11="SELECT * FROM `colors` WHERE  vote=(select max(vote) from `colors` where p_id='".$_GET['i_id2']."' ) and p_id='".$_GET['i_id2']."' ";
$q11=mysql_query($s11);
$r11=mysql_fetch_array($q11);

//echo $name=$r7['d_name'];

   $clr=$r11['color'];
   $cname=$r11['cl_name'];
 
?>
<table>
<tr>
<td><img src="admin/uploadimage/<?php echo $r11['color']; ?>" style="width:255px;height:200px;"></td><td style="padding-left:75px;"><b><font color="#000099"><?php echo $cname; ?></font></b></td>
</tr>
</table>
</div> 

</div> 
</div> 
<div class="column-r x3"> 
<div class="pillar x3"> 
<div class="box squared product-timeline filled-super-soft"> 
<div class="hd"> 
<h2>Product Timeline</h2> 
</div> 
<div class="bd"> 
<ul class="timeline-stack"> 
<li class="timeline-component"> 
<h3>Evaluation</h3> 
<ol class=""> 
<li class=""> 
<a href="#"><span class="step completed">Product Evaluation</span></a> 
</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="#"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="#"><span class="step completed">Concept Phase</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Branding</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="#"><span class="step completed">Product CMF</span></a> 

  




</li> 
</ol> 
</li> 
</ul> 
</div>
				
				
</div> 
</div> 
</div> 
	
</div>


</div>	</div></form>							
<div class="button-holder">

</div>
<strong class="right">                                     
								
</strong>
</div></div></div></div></div> 






<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">
</div></div>

	<div class="tier x12">
<div class="column x8">      
		
		
<div id="ideations-grid">


<div class="">
  <ul id="ideation-grid-items" class="idea-item-modules xFull"><li class="idea-item">
<?php 
/*echo $query="SELECT user.u_firstname, user.u_lastname,user.u_id,pro_tag.sub_id,pro_tag.tag_name,pro_tag.tag_id FROM user
inner JOIN pro_tag on user.u_id=pro_tag.u_id where pro_naming.sub_id='$id' ";
*/
$id1=$_GET['i_id2'];
 $query="select * from colors where p_id='$id1'";
$result = mysql_query($query); 



while($row = mysql_fetch_array($result))
  {
  $u_id=$row['u_id'];
  
/*  echo "<tr>";
  echo "<td colspan='2'>" . $row['desc_idea'] . "</td>";
  echo "<td rowspan='2'><img src='images/garden.jpg' /></td>";
  echo "</tr>";
  echo "<tr>";
   by: echo "<td>" . $row['first_name'] ." ".$row['last_name'] . "</td>";
//  echo "<td>" . $row['last_name'] . "</td>";
  echo "</tr>";*/

 $sid=$row['p_id'];
 $name=$row['cl_name'];
 $color=$row['color'];
 
?>


<div class="box bordered filled-super-soft">
<div class="hd">
<div class="left x5">
<a href="idea.php?i_id=<?php echo $sid; ?>"><img src="admin/uploadimage/<?php echo $color; ?>" height="150" width="200"></a><br>
<h3><a href="idea.php?i_id=<?php echo $sid; ?>"><b><?php echo $name; ?></b> <span class="more">&raquo;</span></a></h3>
</div>
</div>
<div class="ft">

<img src="images/icon_small_comments1.png" />&nbsp;&nbsp;Comments

<?php 
 $s_id=$row['sub_id'];
@$query2=mysql_query("select id_comment.comment,id_comment.sub_id,user.u_id,user.u_id from id_comment inner join user on id_comment.u_id=user.u_id where id_comment.sub_id='$s_id'");
 @$nr2=mysql_num_rows($query2);

?>
<?php
		if($nr2==0)
{
echo "<font size=3 color=blue>(0)</font>";
}
else
{
echo "<font size=3 color=blue>(".$nr2." )</font>";
}
	?>


Total Votes <font size=3 color=blue>(<?php echo $row['vote']; ?>)</font>

<div class="right">
<div id="ideation-64601-vote-button-3" >




</div>       
</div>
</div>
<?php } ?>


</li>
</ul>
	
<div id="scroll-loading" style="display: none; width: 100%; text-align: center;">
<img alt="Loading" src="/images/loading.gif?1305144385" />
</div>

</div>



	


<div class="row" style="padding-top:10px;"></div>

</div>

</div>
</div>
</div>  
   
  </div>
</div></div></div></div></div>
</div>
<div class="ftr">
<?php include("include/footer.php"); ?>
</div></body>
</html>
