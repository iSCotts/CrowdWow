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
$id1=$_GET['i_id2'];
if(isset($_POST['submit']))
{
 $text=$_POST['idea_problem'];
 $sql="insert into pro_naming (u_id,sub_id,pro_name) values ('$u_id','$id1','$text')";
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
xmlhttp.open("GET","vote_naming.php?mode=pos&q="+str,true);
xmlhttp.send();
}
function hiddenHint(str,divid)
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
xmlhttp.open("GET","vote_naming.php?q="+str,true);
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
<a href='influnce.php' class='breadcrumb-link'>Influence</a> 
				&nbsp;/&nbsp;
<span class='breadcrumb-current'>Branding / Product Naming</span> 
</p> 
</div> 
</div> 
<div class="column-r x3"> 
<div class="h-countdown"> 
<img alt="Clock_icon" src="images/clock_icon.png?1312502484" /> 
<?php
echo "<font size=4 color=#FF00FF >Complete</font>";
?>
<p id="project-countdown" class="countdown" rel="75291"></p> 
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
<h2>Product Naming</h2> 
<p><p>So the <a href="http://www.quirky.com/projects/992-152-litter-scoop-CMF"><span class="caps">CMF</span></a> has launched, and it is time to pick a name.</p> 
<p>Don’t forget to do a search for potential trademark infringement before submitting your name idea. This can be as simple as running a google search on your name submission. While we won’t disqualify a name that belongs to another product, store, etc., it might have an effect on our decision.</p> 
<p>Have fun with it!</p></p> 

</div> 
<div class="bd idea-details-summary sub-box box-section filled-super-soft"> 
<div class="tile idea-detail votes-left"> 
<div class="detail-icon"> 
<img alt="User_icon_voted" src="images/user_icon_voted.png?1313794130" /> 
</div> 
<p class="short"> 
<strong class="title">     
<span id="vote-counter">
<?php 
$s="select sum(pro_vote) as vo from pro_naming where sub_id='$id1'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$votes=$r['vo'];
}
$v=10-$votes;
$p=(10/$v)*100;
echo $v;
?>
</span> Vote(s) Left for this project
</strong> 
</p> 
</div> 
<div class="tile idea-detail influence-left"> 
<div class="detail-icon pie-graph"> 
<img alt="Icon_pie25" src="images/icon_pie25.png?1313794130" /> 
</div> 
<p class="short"> 
<sup class="help-icon" title="Influence is a real-time measure of your contributions to a project. You can earn influence either by submitting a winning idea, or by supporting and refining that winning idea."><span>?</span> 
		
</sup> 
<strong class="title"> 
<?php echo $p; ?>% Influence is up for grabs
</strong> 
</p> 
</div> 
</div> 



<div class="bd">
<h2>The Winner!</h2>
<div class="sub-box box-section filled-super-soft idea-item">
<div class="info-block">
<?php
 $s2="select max(pro_vote) as m from pro_naming where sub_id='$id1'";
$q2=mysql_query($s2);
while($rw2=mysql_fetch_array($q2))
{
 $mvote=$rw2['m'];

 $s3="select * from pro_naming where sub_id='$id1' and pro_vote='$mvote'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$pro_name=$r3['pro_name'];

?>
<h3>
<a href="idea.php?i_id=<?php echo $id1; ?>" style="text-decoration:none;"><?php echo $pro_name; ?></a> <span class="more">&raquo;</span>
</h3>
<?php }} ?>
<cite>
<?php
$s4="SELECT * FROM user inner JOIN pro_naming on user.u_id=pro_naming.u_id where pro_naming.sub_id='$id1'";
$q4=mysql_query($s4);
while($r4=mysql_fetch_array($q4))
{
$userid=$r4['u_id'];
$uname=$r4['u_firstname'];
$lname=$r4['u_lastname'];
}
?>
<?php
 $s5="select image from user_profile inner join user on user_profile.u_id=user.u_id where user_profile.u_id='$userid'";
$q5=mysql_query($s5);
while($r5=mysql_fetch_array($q5))
{
 $uimage=$r5['image'];
}
?>
<a href="topinfluence.php?$id=<?php echo $userid; ?>"><img src="upload_image/<?php echo $uimage; ?>" width="50" height="50" alt=""/></a>
						by: <a href="topinfluence.php?$id=<?php echo $userid; ?>"><?php echo $uname; ?>&nbsp;<?php echo $lname; ?></a>

</cite>
</div>
</div>
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
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="product_eval.php"><span class="step completed">Product Evaluation</span></a> 
</li> 
</ol> 
</li> 
			
			
<li class="timeline-component"> 
<h3>Research</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="product_research.php?id=<?php echo $id1; ?>"><span class="step completed">Product Research</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Product Design</h3> 
<ol class="timeline-component-steps"> 
<li class=""> 
<a href="concept_phase.php?id=<?php echo $id1; ?>"><span class="step completed">Concept Phase</span></a> 
</li> 
</ol> 
</li> 
<li class="timeline-component"> 
<h3>Branding</h3> 
<ol class="timeline-component-steps"> 
<li class="expanded"> 
<a href="/projects/1003-152-litter-scoop-Product-Naming"><span class="step  completed">Product Naming</span></a> 
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
</div> 






<div class="box mSmaller filled-super-soft idea-submit-content"> 
<div class="submit-item">

<div class="clear"></div>
</div>


</div>
</div>



</div></div>

	<div class="tier x12">
<div class="column x8">      
		
		
<div id="ideations-grid">


<div class="">
  <ul id="ideation-grid-items" class="idea-item-modules xFull"><li class="idea-item">
<?php 
 $query="SELECT user.u_firstname, user.u_lastname,user.u_id,pro_naming.sub_id,pro_naming.pro_name,pro_naming.pro_id,pro_naming.pro_vote FROM user
inner JOIN pro_naming on user.u_id=pro_naming.u_id where pro_naming.sub_id='$id1' ";

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

 $sid=$row['sub_id'];
 $pname=$row['pro_name'];
 $fname=$row['u_firstname'];
 $lname=$row['u_lastname'];
 $pid=$row['pro_id'];

?>

<div class="box bordered filled-super-soft">
<div class="hd">
<div class="left x5">
<h3><a href="idea.php?i_id=<?php echo $sid; ?>"><b><?php echo $pname; ?></b> <span class="more">&raquo;</span></a></h3>
<cite>               






						by:<a href="idea.php?i_id=<?php echo $sid; ?>"><?php echo $fname ." ".$lname; ?></a></cite></div>
<?php

 $s1="select * from naming_comment where p_id='$id1' and pro_id='$pid'";
$q1=mysql_query($s1);
$nr1=mysql_num_rows($q1);

?>
<h3 style="width:248px;"><a href="#" style="text-decoration:none;"><img src="images/icon_small_comments1.png"/>Comments(<?php if($nr1==0){echo "0";}else { echo $nr1; }  ?>)&nbsp;&nbsp;</a>Total Votes <font size=3 color=blue>(<?php echo $row['pro_vote']; ?>)</font></h3>

</div>
<div class="ft">



<div class="right">
<div id="ideation-64601-vote-button-3" >

<?php 
if($_SESSION['u_id']=="")
{
?>
<a href="#" class="button icon bright" onClick="openbox1('Login',1)"><span class="text">Vote For This </span> <span class="check"></span></a></div>
<?php } else { ?>
<div id="<?php echo  $pid; ?>">
<a  class="button icon bright" onclick="showHint(<?php echo  $pid; ?>,<?php echo  $pid; ?>)" >
<span class="text">Vote For This </span> 

<span class="check"></span></a>
</div>
<?php } ?>

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

<div class="ftr">
<?php include("include/footer.php"); ?>
</div></body>
</html>
