
<?php 
include("include/connect.php");
$sql=("SELECT user_profile.u_id,user_profile.image,user.u_id,user_profile.u_id,user.u_firstname, user.u_lastname FROM user_profile
inner JOIN user where user_profile.u_id=user.u_id order by user.u_id desc limit 10");
$query=mysql_query($sql);
?>

<script type="text/javascript">

/***********************************************
* Conveyor belt slideshow script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/


//Specify the slider's width (in pixels)
var sliderwidth="900px"
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
$i=0;
while($row=mysql_fetch_array($query))
{
$uid= $row['u_id'];

 if($row['image']=="")
{
 ?>
 
leftrightslide[<?php echo $i; ?>]='<a href="topinfluence.php?$id=<?php echo $row['u_id']; ?>"><img src="upload_image/user_noimage.png" width="135" height="135" /><?php echo $row['u_firstname'];?> <?php echo $row['u_lastname']; ?></a>'

<?php 

}
else
{
?>

leftrightslide[<?php echo $i; ?>]='<a href="topinfluence.php?$id=<?php echo $row['u_id']; ?>"><img src="upload_image/<?php echo $row['image']; ?>" width="135" height="135" /><?php echo $row['u_firstname'];?> <?php echo $row['u_lastname']; ?></a>'


<?php  $i++; }} ?>
//Specify gap between each image (use HTML):
var imagegap=" "

//Specify pixels gap between each slideshow rotation (use integer):
var slideshowgap=5


////NO NEED TO EDIT BELOW THIS LINE////////////

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
write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
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

<table>
<tr>

<td valign="top" >
<div style="width:280px;">
<?php include("top_influ.php");?>
</div>
</td>  

<td valign="top" >
<div class="column x5" style="width:350px;">
<div class="invent-faq box">
<div class="bd"> 
<?php include("best_per.php");?>
<div style="height:340px;"></div>
<?php include("succ_story.php"); ?>
</div>
</div>
</div>
</td>

<td valign="top">
<?php include("leatest_comment.php");?>
</td>
</tr></table>
