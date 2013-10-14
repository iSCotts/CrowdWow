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
<tr>
<td style="height:200px; width:100px;" valign="top">



<div class="tier x6" > 
<div class="column x4" >
<div class='box latest-comments'> 


<div class='hd' style="width:390px"> 
<div style="height:0px">
</div>


<h3>Submitting Ideas FAQs</h3> 
</div> 

<div class="dhtmlgoodies_question" style="width:390px;"><p style="color:#00a4e4;"><b>?. Do I need to submit a drawing with my idea?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p> 
									It's not necessary, but it certainly helps. Community members often like a little visual stimulation to help them get a better feel for the idea. Photos, videos, diagrams, presentations -- all are welcome! Keep in mind that if you want to submit an image, it will only show up as a preview thumbnail if it's in JPG, PNG, or GIF format and under 10MB.
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question" style="width:390px;"><p style="color:#00a4e4;"><b>?. How can I edit my submission after I've posted it?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p> 
									 The very rough and subject to change timeline goes a little something like this: You submit your idea. The following Monday around noon, your idea goes up for community evaluation with all the other ideas submitted that week. The Monday after that, community evaluation closes and the top-scored ideas (and a wild card or two) go into staff evaluation. We usually decide on our next products by the end of that week and post an evaluation recap video on our blog to let you in on the decision-making process. Sound confusing? Don't worry - we post countdown clocks and send out notification e-mails along the way. 
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question" style="width:390px;"><p style="color:#00a4e4;"><b>?. Why does it cost $10 to submit my idea?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>Well, you've got to ante up to give your non-brief-based idea the fair shot it deserves. Best case scenario? Your $10 investment takes your idea from a tiny sketch to a professionally manufactured product, on shelves worldwide, earning you a heckuva lot more. Worst case? That 10 bucks get you detailed analytics on who liked and didn't like your idea, as well as extensive community feedback. You then have the option to resubmit your idea, or you can use the valuable market research data to make the thing on your own.</p> 
	</div>
</div>

<div class="dhtmlgoodies_question" style="width:390px;"><p style="color:#00a4e4;"><b>?. Can I submit more than one idea a week?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>But of course... submit as many ideas as you want. $10 a pop.</p>
	</div>
</div>



</div>
</div>
</div>
</div>
</div>

</td></tr></table>


</body>
</html>
