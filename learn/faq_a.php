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
<tr><td style=" width:200px;" valign="top">

<div class="tier x6" > 
<div class="column x4" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>General FAQ </h3> 
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b>?. I'm digging this whole Quirky idea.How do I sign up?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>You'll need a Quirky account to make a purchase or participate in our product development process. 
		   It's super easy to sign up:</p>
		<ul>
			<p>1. Go to the Quirky home page at www.quirky.com and click on the blue “Sign Up” button on the top left corner.</p>
			<p>2. Fill in your name, e-mail address, and desired password, and check the box that indicates that you've read and understood Quirky's Terms & Conditions.</p>
			<p>3. Click on the blue "Sign Up" button.</p> 
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b>?. How can I participate in Quirky?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>Once you've signed up for a Quirky account, there are tons of ways to get involved!</p>
		<ul>
			<p>1. Help a new product take shape by submitting, rating, and voting for product ideas, product designs, names, and other elements of the product's development. Click on the "Influence" tab at the top of the Quirky homepage or visit</p>
			<p>2. Place orders for Quirky products. Click on the "Shop" tab or visit</p>
			<p>3. Promote Quirky products to friends and family and earn a share of the profits through social sales. On your "My Account" page, select the "Social Sales" tab for more information on our referral program and your unique social sales link.</p> 
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b>?. Do I have to pay to play?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p>There is no fee to register with Quirky. Community members are welcome to vote, rate, and comment on product ideas. If you want to toss your own product idea into the ring, the submission fee is $10. Check out our answers in the "Submitting Ideas" section for more details!</p>
		
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b>?. What if I become a Quirky addict?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>I'm afraid there is no cure. But the community functions as its own support group, so at least you'll have company!</p>
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4;"><b>?. What browsers does Quirky support?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p>In order to offer the coolest features and provide the best possible Quirky experience, our website is optimized for modern Internet browsers such as Mozilla Firefox, Google Chrome, and Safari. Although our (amazing) tech team is hard at work on more robust support for Internet Explorer, it is our professional opinion that downloading a new browser will change your life.</p> 
	</div>
</div>
</div>
</div>
</div>

</td>
</tr></table>


</body>
</html>
