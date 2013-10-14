<head>
<style>
.ab1{ width:200px; height:auto; display:block;}
.ab2{ width:150px; height:auto; float:left;}
</style>
</head>

<?php 
include("include/connect.php");
session_start();
$email=$_SESSION['email'];
$usid=$_GET['$id'];
$s="select * from user where u_email='$email'";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
$uid=$r['u_id'];
}
 /* @$sql="SELECT shop.s_name, product.p_name, product.p_image, product.p_type, product.p_title, product.p_cur_price, product.p_pre_price, product.p_status, product.p_id, product.s_id, product.p_cur_price, rating.p_id 
FROM shop
INNER JOIN product ON shop.s_id = product.s_id
INNER JOIN rating
WHERE rating.p_id =product.p_id and rating.u_id='$uid'  ";
*/
/* @$sql="SELECT shop.s_name, product.p_name, product.p_image, product.p_type, product.p_title, product.p_cur_price, product.p_pre_price, product.p_status, product.p_id, product.s_id, product.p_cur_price, submit_idia.sub_id,submit_idia.u_id 
FROM shop
INNER JOIN product ON shop.s_id = product.s_id
INNER JOIN submit_idia
ON submit_idia.sub_id =product.p_id and submit_idia.u_id='$usid' or submit_idia.u_id='$uid' ";
*/
 $sql="SELECT shop.s_name, product.p_name, product.p_image, product.p_type, product.p_title, product.p_cur_price, product.p_pre_price, product.p_status, product.p_id, product.s_id, product.p_cur_price, pro_naming.sub_id,pro_naming.u_id 
FROM shop
INNER JOIN product ON shop.s_id = product.s_id
INNER JOIN pro_naming
ON pro_naming.sub_id =product.p_id where pro_naming.u_id='$usid' or pro_naming.u_id='$uid' ";


$sql1=mysql_query($sql);
$nr2 = mysql_num_rows($sql1);


?> 

<script type="text/javascript">



//Specify the slider's width (in pixels)
var sliderwidth="600px"
//Specify the slider's height
var sliderheight="200px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=3
//configure background color:
slidebgcolor=""

//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''


<?php 

while($row=mysql_fetch_array($sql1))
{
$sid= $row['s_id'];
$uid= $row['p_id'];
$price=$row['p_cur_price'];
 ?>

leftrightslide[<?php echo $uid; ?><?php echo $sid; ?>]='<a style="text-decoration:none;" href="item.php?sid=<?php echo $row['s_id']; ?>&pid=<?php echo $row['p_id']; ?>"><img src="admin/uploadimage/<?php echo $row['p_image']; ?>"  height="130" width="150" style="padding-bottom:30px; margin-right:-125px; padding-left:70px; padding-right:40px; text-decoration:none; border:none;"/> <?php echo $row['p_name'] ; ?> <?php echo "$"; ?> <?php echo $price; ?></a>'



<?php   } ?>


var imagegap=" "


var slideshowgap=5




var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide

function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",60)
}
window.onload=fillup

function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"

if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"

}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap

if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}


if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:0px;"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:0px;"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>
