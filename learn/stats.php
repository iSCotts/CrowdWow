<?php
include("include/connect.php");
@session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- graph code begins here-->
<script type="text/javascript" src="js/wz_jsgraphics.js"></script>
<script type="text/javascript" src="js/line.js">



</script>



<!--<script type="text/javascript">


var dhtmlgoodies_slideSpeed = 10;	// Higher value = faster
var dhtmlgoodies_timer = 10;	// Lower value = faster

var objectIdToSlideDown = false;
var dhtmlgoodies_activeId = false;
var dhtmlgoodies_slideInProgress = false;
var dhtmlgoodies_slideInProgress = false;
var dhtmlgoodies_expandMultiple = false; // true if you want to be able to have multiple items expanded at the same time.

function slideContent(inputId,direction)
{

	var obj =document.getElementById('dhtmlgoodies_a' + inputId);
	var contentObj = document.getElementById('dhtmlgoodies_ac' + inputId);
	height = obj.clientHeight;
	if(height==0)height = obj.offsetHeight;
	height = height + direction;
	rerunFunction = true;
	if(height>contentObj.offsetHeight){
		height = contentObj.offsetHeight;
		rerunFunction = false;
	}
	if(height<=1){
		height = 1;
		rerunFunction = false;
	}

	obj.style.height = height + 'px';
	var topPos = height - contentObj.offsetHeight;
	if(topPos>0)topPos=0;
	contentObj.style.top = topPos + 'px';
	if(rerunFunction){
		setTimeout('slideContent(' + inputId + ',' + direction + ')',dhtmlgoodies_timer);
	}else{
		if(height<=1){
			obj.style.display='none';
			if(objectIdToSlideDown && objectIdToSlideDown!=inputId){
				document.getElementById('dhtmlgoodies_a' + objectIdToSlideDown).style.display='block';
				document.getElementById('dhtmlgoodies_a' + objectIdToSlideDown).style.visibility='visible';
				slideContent(objectIdToSlideDown,dhtmlgoodies_slideSpeed);
			}else{
				dhtmlgoodies_slideInProgress = false;
			}
		}else{
			dhtmlgoodies_activeId = inputId;
			dhtmlgoodies_slideInProgress = false;
		}
	}
}


function showHideContent(e,inputId)
{
	if(dhtmlgoodies_slideInProgress)return;
	dhtmlgoodies_slideInProgress = true;
	if(!inputId)inputId = this.id;
	inputId = inputId + '';
	var numericId = inputId.replace(/[^0-9]/g,'');
	var answerDiv = document.getElementById('dhtmlgoodies_a' + numericId);

	objectIdToSlideDown = false;

	if(!answerDiv.style.display || answerDiv.style.display=='none'){
		if(dhtmlgoodies_activeId &&  dhtmlgoodies_activeId!=numericId && !dhtmlgoodies_expandMultiple){
			objectIdToSlideDown = numericId;
			slideContent(dhtmlgoodies_activeId,(dhtmlgoodies_slideSpeed*-1));
		}else{

			answerDiv.style.display='block';
			answerDiv.style.visibility = 'visible';

			slideContent(numericId,dhtmlgoodies_slideSpeed);
		}
	}else{
		slideContent(numericId,(dhtmlgoodies_slideSpeed*-1));
		dhtmlgoodies_activeId = false;
	}
}



function initShowHideDivs()
{
	var divs = document.getElementsByTagName('DIV');
	var divCounter = 1;
	for(var no=0;no<divs.length;no++){
		if(divs[no].className=='dhtmlgoodies_question'){
			divs[no].onclick = showHideContent;
			divs[no].id = 'dhtmlgoodies_q'+divCounter;
			var answer = divs[no].nextSibling;
			while(answer && answer.tagName!='DIV'){
				answer = answer.nextSibling;
			}
			answer.id = 'dhtmlgoodies_a'+divCounter;
			contentDiv = answer.getElementsByTagName('DIV')[0];
			contentDiv.style.top = 0 - contentDiv.offsetHeight + 'px';
			contentDiv.className='dhtmlgoodies_answer_content';
			contentDiv.id = 'dhtmlgoodies_ac' + divCounter;
			answer.style.display='none';
			answer.style.height='1px';
			divCounter++;
		}
	}
}
window.onload = initShowHideDivs;
</script>-->

<style type="text/css"> 
div.panel,p.flip
{
margin:0px;
padding:5px;
text-align:center;

border:solid 0px #c3c3c3;
width:277px;
}
div.panel
{
height:19px;
display:none;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});
</script>
<style type="text/css"> 
div.panel1,p.flip1
{
margin:0px;
padding:5px;
text-align:center;

border:solid 0px #c3c3c3;
width:auto;
}
div.panel1
{
height:19px;
display:none;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip1").click(function(){
    $(".panel1").slideToggle("slow");
  });
});
</script>

<style type="text/css"> 
div.panel2,p.flip2
{
margin:0px;
padding:5px;
text-align:center;

border:solid 0px #c3c3c3;
width:277px;
}
div.panel2
{
height:19px;
display:none;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip2").click(function(){
    $(".panel2").slideToggle("slow");
  });
});
</script>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<div>
<?php

$sql="select * from graph ";
$query=mysql_query($sql);
 $nr=mysql_num_rows($query);
while($row=mysql_fetch_array($query))
{
   $unit=$row['unit'];
   $total=$total+$unit;

}

?>


<?php
$pid=$_GET['pid'];
$s6="select * from user inner join pro_naming where user.u_id=pro_naming.u_id and pro_naming.sub_id='$pid'";
$q6=mysql_query($s6);
while($r6=mysql_fetch_array($q6))
{
$uid6=$r6['u_id'];
}
 $s7="select * from submit_idia where u_id='$uid6'";
 $q7=mysql_query($s7);
 $r7=mysql_fetch_array($q7);
$price=$r7['invest'];

 $s2="select * from product where p_id='$pid'";
$q2=mysql_query($s2);
while($r2=mysql_fetch_array($q2))
{
$p_type=$r2['p_type'];
// $price=$r2['p_cur_price'];
$a=($price*20)/100;

}
if($p_type=='Shipping Now')
{
?>


<div id="" class="">



<div class=""> 
	
<div class="">


<div class="">
<?php
$s1="select * from project_point";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$res=$r1['r_percent'];
$des=$r1['d_percent'];
$brand=$r1['b_percent'];
$total=$res+$des+$brand;
$bal1=($total*$price)/100;


$sql2="SELECT payment.first_name, payment.last_name, submit_idia.desc_idea,submit_idia.desc_problem,submit_idia.sub_id, submit_idia.attach_files,submit_idia.sub_status FROM payment inner JOIN submit_idia ON payment.sub_id=submit_idia.sub_id where submit_idia.sub_status='1' and submit_idia.u_id='$uid6' limit 40";
$query2=mysql_query($sql2);
$row2=mysql_fetch_array($query2);
$nr1=mysql_num_rows($query2);

$bal=$nr1*10;

/*
$sql3="select * from checkout where u_id='$uid6' and p_id='$pid' order by ck_id desc limit 1";
$query3=mysql_query($sql3);
$row3=mysql_fetch_array($query3);
$u=$row3['unit'];
*/
 $sql6="select distinct(p_id) from checkout where u_id='$uid6'";
$query6=mysql_query($sql6);
while($row6=mysql_fetch_array($query6))
{
 $p_id=$row6['p_id'];

}
$sql5="select sum(unit) as un from checkout where u_id='$uid6' and p_id='$p_id'";
$query5=mysql_query($sql5);
$row5=mysql_fetch_array($query5);
 $unit=$row5['un'];
$bal2=$bal1*$unit;

$whole=$bal2+$bal;
?>
<p class="flip1" style="text-align:left; padding-left:10px;cursor:pointer;"><font color="#0099FF">Total Paid Out:<b>$<?php echo $whole; ?>.00</b> </font></p><br/>
<table cellspacing="0" style="width:100%;font-size:12px;">
<tr>
<th class=""><div class="panel1"><p style="text-align:left;">User</p></div></th>
<th><div class="panel1"><p style="text-align:left;">Influence</p></div></th>
<th><div class="panel1"><p style="text-align:left;">Per Direct Sale</p></div></th>
<th><div class="panel1"><p style="text-align:left;">Total Earned</p></div></th>

</tr>
<tr class="">
<td class="left"><div class="panel1" style="width:auto;"><p style="text-align:left;"><font color="#9900FF">
<?php
$s3="select * from user inner join pro_naming where user.u_id=pro_naming.u_id and pro_naming.sub_id='$pid'";
$q3=mysql_query($s3);
while($r3=mysql_fetch_array($q3))
{
$uid=$r3['u_id'];
$fname=$r3['u_firstname'];
$lname=$r3['u_lastname'];
}
?>
<a href="topinfluence.php?$id=<?php echo $uid; ?>"><?php echo $fname; ?>&nbsp;<?php echo $lname; ?></a></font></p></div>
</td>
<?php
$s1="select * from project_point";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$res=$r1['r_percent'];
$des=$r1['d_percent'];
$brand=$r1['b_percent'];
$total=$res+$des+$brand;
$bal1=($total*$price)/100;

?>
<td><div class="panel1"><p style="text-align:left;"><font color="#9900FF">
<?php echo $total; ?>%</font></div>
</td>
<td><div class="panel1"><p style="text-align:left;"><font color="#9900FF">
<?php
$sel="select * from pro_naming where sub_id='$pid'";
$sel1=mysql_query($sel);
$num=mysql_num_rows($sel1);
$percent=$bal1/$num;
?>
$<?php $f=$total/11; echo round($f,2); ?></font></p></div>
</td>


<td><div class="panel1">
<p style="text-align:left;"><font color="#9900FF"><?php echo "$" ?><?php  echo $whole; ?></font></p></div>
</td>
</tr>
</table>
</div>   
</div> 



<?php
}
?>






<table >
<tr><td style=" width:300px;" valign="top">
<p class="flip" style="width:400px;cursor:pointer;"><font color="#0099FF">Product Development Duration:<b>About 1 month</b></font></p>

<?php
$pid=$_GET['pid'];
 $s="select * from duration where p_id='$pid'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
 $days1=$r['days'];
 $spent=$r['spent'];
$sql="select * from submit_idia where sub_id='$pid'";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
$t1=$row['start_date'];
}
 $starttime=strtotime($t1);
 $endtime=strtotime($days1);
//$endtime can be any format as well as it can be converted to secs
 
 $timediff = $endtime-$starttime;
   $days=intval($timediff/86400);
   $remain=$timediff%86400;
   $hours=intval($remain/3600);
   $remain=$remain%3600;
   $mins=intval($remain/60);
   $secs=$remain%60;
 
//$days is what you need
 
 
// this is just an output that tells the difrence
$timediff=$days.' '. 'days';  
?>
<div class="panel" style="text-align:left;">
<p><font color="#000"><?php echo $timediff; ?>  spent on <?php echo $spent; ?></font></p>
</div>
<?php
}
?>
</td></tr></table>
<div style="margin-top:40px;"></div>
<?php
 $s1="select * from product where p_id='$pid'";
$q1=mysql_query($s1);
$r1=mysql_fetch_array($q1);
$nr3=mysql_num_rows($q1);
 $s12="select payment_cart from product_payment";
$q12=mysql_query($s12);
while($r12=mysql_fetch_array($q12))
{
 $p=$r12['payment_cart'];
 $p1=count($p);
}
$nr12=mysql_num_rows($q12);

?>
<?php
$sql4="select sum(unit) as uno from checkout where p_id='$pid'";
$query4=mysql_query($sql4);
while($row4=mysql_fetch_array($query4))
{
$sum=$row4['uno'];
}
?>
</div>
<div>
</div>
<p class="flip2" style="width:400px;cursor:pointer;" align="left"><font color="#0099FF" style="padding-right:255px;">Unit To Date:<b><?php echo $sum; ?></b></font></p>
<div style="height:500px; margin-top:50px;">
   
</div>
<div class="panel2">
<div id="lineCanvas" style=" position:relative;height:550px;width:400px; margin-left:10px;margin-top:-500px;text-align:left;">Unit

<script type="text/javascript">

var g = new line_graph();
<?php

//$sql="select * from graph ";

$sql1="select sum(unit) as un from checkout where p_id='$pid' and ck_date='jan'";
$query1=mysql_query($sql1);

while($row1=mysql_fetch_array($query1))
{
   $unit1=$row1['un'];
}
$sq1="select sum(unit) as un1 from checkout where p_id='$pid' and ck_date='feb'";
$qu1=mysql_query($sq1);

while($ro1=mysql_fetch_array($qu1))
{
   $un1=$ro1['un1'];
}
$sq2="select sum(unit) as un2 from checkout where p_id='$pid' and ck_date='mar'";
$qu2=mysql_query($sq2);

while($ro2=mysql_fetch_array($qu2))
{
   $un2=$ro2['un2'];
}
$sq3="select sum(unit) as un3 from checkout where p_id='$pid' and ck_date='apr'";
$qu3=mysql_query($sq3);

while($ro3=mysql_fetch_array($qu3))
{
   $un3=$ro3['un3'];
}
$sq4="select sum(unit) as un4 from checkout where p_id='$pid' and ck_date='may'";
$qu4=mysql_query($sq4);

while($ro4=mysql_fetch_array($qu4))
{
   $un4=$ro4['un4'];
}
$sq5="select sum(unit) as un5 from checkout where p_id='$pid' and ck_date='jun'";
$qu5=mysql_query($sq5);

while($ro5=mysql_fetch_array($qu5))
{
   $un5=$ro5['un5'];
}
$sq6="select sum(unit) as un6 from checkout where p_id='$pid' and ck_date='jul'";
$qu6=mysql_query($sq6);

while($ro6=mysql_fetch_array($qu6))
{
   $un6=$ro6['un6'];
}
$sq7="select sum(unit) as un7 from checkout where p_id='$pid' and ck_date='aug'";
$qu7=mysql_query($sq7);

while($ro7=mysql_fetch_array($qu7))
{
   $un7=$ro7['un7'];
}
$sq8="select sum(unit) as un8 from checkout where p_id='$pid' and ck_date='sep'";
$qu8=mysql_query($sq8);

while($ro8=mysql_fetch_array($qu8))
{
   $un8=$ro8['un8'];
}
$sq9="select sum(unit) as un9 from checkout where p_id='$pid' and ck_date='oct'";
$qu9=mysql_query($sq9);

while($ro9=mysql_fetch_array($qu9))
{
   $un9=$ro9['un9'];
}
$sq10="select sum(unit) as un10 from checkout where p_id='$pid' and ck_date='nov'";
$qu10=mysql_query($sq10);

while($ro10=mysql_fetch_array($qu10))
{
   $un1=$ro10['un10'];
}
$sq11="select sum(unit) as un11 from checkout where p_id='$pid' and ck_date='dec'";
$qu11=mysql_query($sq11);

while($ro11=mysql_fetch_array($qu11))
{
   $un11=$ro1['un11'];
}

if($unit1!="")
{
?>


g.add('<?php echo "jan"; ?>', <?php echo $unit1; ?>);
<?php
}
else
{
?>
g.add('<?php echo "jan"; ?>', <?php echo "0"; ?>);
<?php
}
if($un1!="")
{
?>
g.add('<?php echo "feb"; ?>', <?php echo $un1; ?>);
<?php
}
else
{
?>
g.add('<?php echo "feb"; ?>', <?php echo "0"; ?>);
<?php
}
if($un2!="")
{
?>
g.add('<?php echo "mar"; ?>', <?php echo $un2; ?>);
<?php
}
else
{
?>
g.add('<?php echo "mar"; ?>', <?php echo "0"; ?>);
<?php
}
if($un3!="")
{
?>
g.add('<?php echo "apr"; ?>', <?php echo $un3; ?>);
<?php
}
else
{
?>
g.add('<?php echo "apr"; ?>', <?php echo "0"; ?>);
<?php
}
if($un4!="")
{
?>
g.add('<?php echo "may"; ?>', <?php echo $un4; ?>);
<?php
}
else
{
?>
g.add('<?php echo "may"; ?>', <?php echo "0"; ?>);
<?php
}
if($un5!="")
{
?>
g.add('<?php echo "jun"; ?>', <?php echo $un5; ?>);
<?php
}
else
{
?>
g.add('<?php echo "jun"; ?>', <?php echo "0"; ?>);
<?php
}
if($un6!="")
{
?>
g.add('<?php echo "jul"; ?>', <?php echo $un6; ?>);
<?php
}
else
{
?>
g.add('<?php echo "jul"; ?>', <?php echo "0"; ?>);
<?php
}
if($un7!="")
{
?>
g.add('<?php echo "aug"; ?>', <?php echo $un7; ?>);
<?php
}
else
{
?>
g.add('<?php echo "aug"; ?>', <?php echo "0"; ?>);
<?php
}
if($un8!="")
{
?>
g.add('<?php echo "sep"; ?>', <?php echo $un8; ?>);
<?php
}
else
{
?>
g.add('<?php echo "sep"; ?>', <?php echo "0"; ?>);
<?php
}
if($un9!="")
{
?>
g.add('<?php echo "oct"; ?>', <?php echo $un9; ?>);
<?php
}
else
{
?>
g.add('<?php echo "oct"; ?>', <?php echo "0"; ?>);
<?php
}
if($un10!="")
{
?>
g.add('<?php echo "nov"; ?>', <?php echo $un10; ?>);
<?php
}
else
{
?>
g.add('<?php echo "nov"; ?>', <?php echo "0"; ?>);
<?php
}
if($un11!="")
{
?>
g.add('<?php echo "dec"; ?>', <?php echo $un11; ?>);
<?php
}
else
{
?>
g.add('<?php echo "dec"; ?>', <?php echo "0"; ?>);
<?php
}
?>

<?php //}  ?>

g.render("lineCanvas", "Month <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UnitGraph-2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");

</script>
</div></div>
</div></div>

</body>
</html>
