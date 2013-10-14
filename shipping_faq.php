<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<style type="text/css">

body{
	font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;	/* Font to use */
	margin:0px;

}

.dhtmlgoodies_question{	/* Styling question */
	/* Start layout CSS */
	color:#;
	font-size:0.9em;
	background-color:#;
	width:430px;
	margin-bottom:2px;
	margin-top:2px;
	padding-left:2px;
	background-image:url('images/bg_answer.gif');
	background-repeat:no-repeat;
	background-position:top right;
	height:20px;

	/* End layout CSS */

	overflow:hidden;
	cursor:pointer;
}
.dhtmlgoodies_answer{	/* Parent box of slide down content */
	/* Start layout CSS */
	border:1px solid #;
	background-color:#;
	width:400px;

	/* End layout CSS */

	visibility:hidden;
	height:0px;
	overflow:hidden;
	position:relative;

}
.dhtmlgoodies_answer_content{	/* Content that is slided down */
	padding:1px;
	font-size:0.9em;
	position:relative;
}

</style>
<script type="text/javascript">


var dhtmlgoodies_slideSpeed = 10;	// Higher value = faster
var dhtmlgoodies_timer = 10;	// Lower value = faster

var objectIdToSlideDown = false;
var dhtmlgoodies_activeId = false;
var dhtmlgoodies_slideInProgress = false;
var dhtmlgoodies_slideInProgress = false;
var dhtmlgoodies_expandMultiple = false; // true if you want to be able to have multiple items expanded at the same time.

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
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<table >
<tr><td style=" width:100px;" valign="top">

<div class="tier x5" > 
<div class="column x3" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>Shipping FAQ's </h3> 
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b style="font-size:13px">What is a product commitment?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div style="width:200px">
		<p style=" font-size:13px">When you click on the "Commit Now" button you are saying that you will purchase the product if it gets made. Your credit card will not be charged until the product is ready to ship to you, and you can cancel your commitment at any time by clicking on the "Orders" tab under the "My Account" page. If you commit to a product in Pre-sales and then complete your order when the product is ready to ship, you will earn a small percentage of that product's profits in perpetuity. Why fear commitment with all that good stuff?</p>
		<ul>
			
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b style="font-size:13px">When will my product arrive?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div style="width:200px">
		<p style=" font-size:13px">If a product is On Sale and in our warehouse, the order will ship by the following business day, assuming there isn't a bottleneck at our warehouse. If the product is On Sale but still in production, it'll likely take a few weeks to a few months. If the product is in Pre-sales, it will have to reach its commitment threshold before proceeding to production. One thing we want to emphasize: if the product is not yet in inventory, your credit card will be authorized, but it won't be charged until your order is getting ready to ship!</p>
		<ul>
			 
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b style="font-size:13px">How long does something stay </br>in pre-sale?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div style="width:200px">
	<p style=" font-size:13px">The timeframe changes for each item. We set a different commitment threshold for each product based on anticipated costs and market demand. An item will remain in Pre-sales until it reaches this threshold, at which point it will go into production and be listed as On Sale.</p>
		
	
</div>
</div>
</div>
</div>

</td>
</tr></table>


</body>
</html>
