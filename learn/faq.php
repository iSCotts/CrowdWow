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
<div class="column x" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>General FAQ </h3> 
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>1. I'm digging this whole Quirky idea.How do I sign up?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">You'll need a Quirky account to make a purchase or participate in our product development process. 
		   It's super easy to sign up:</p>
		<ul>
			<p style="font-size:13px">1. Go to the Quirky home page at www.quirky.com and click on the blue â€œSign Upâ€ button on the top left corner.</p>
			<p style="font-size:13px">2. Fill in your name, e-mail address, and desired password, and check the box that indicates that you've read and understood Quirky's Terms &                                         Conditions.</p>
			<p style="font-size:13px">3. Click on the blue "Sign Up" button.</p> 
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>2. How can I participate in Quirky?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">Once you've signed up for a Quirky account, there are tons of ways to get involved!</p>
		<ul>
			<p style="font-size:13px">1. Help a new product take shape by submitting, rating, and voting for product ideas, product designs, names, and other elements of the product's development. Click on the "Influence" tab at the top of the Quirky homepage or visit</p>
			<p style="font-size:13px">2. Place orders for Quirky products. Click on the "Shop" tab or visit</p>
			<p style="font-size:13px">3. Promote Quirky products to friends and family and earn a share of the profits through social sales. On your "My Account" page, select the "Social Sales" tab for more information on our referral program and your unique social sales link.</p> 
			
		</ul>
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>3. Do I have to pay to play?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p style="font-size:13px">There is no fee to register with Quirky. Community members are welcome to vote, rate, and comment on product ideas. If you want to toss your own product idea into the ring, the submission fee is $10. Check out our answers in the "Submitting Ideas" section for more details!</p>
		
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>4. What if I become a Quirky addict?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">I'm afraid there is no cure. But the community functions as its own support group, so at least you'll have company!</p>
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>5. What browsers does Quirky support?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">In order to offer the coolest features and provide the best possible Quirky experience, our website is optimized for modern Internet browsers such as Mozilla Firefox, Google Chrome, and Safari. Although our (amazing) tech team is hard at work on more robust support for Internet Explorer, it is our professional opinion that downloading a new browser will change your life.</p> 
	</div>
</div>
</div>
</div>
</div>

</td>
<td style="height:200px; width:100px;" valign="top">



<div class="tier x6" > 
<div class="column x" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>Submitting Ideas</h3> 
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>1. Do I need to submit a drawing with my idea?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									It's not necessary, but it certainly helps. Community members often like a little visual stimulation to help them get a better feel for the idea. Photos, videos, diagrams, presentations -- all are welcome! Keep in mind that if you want to submit an image, it will only show up as a preview thumbnail if it's in JPG, PNG, or GIF format and under 10MB.
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>2. How can I edit my submission after I've posted it?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p style="font-size:13px"> 
									 The very rough and subject to change timeline goes a little something like this: You submit your idea. The following Monday around noon, your idea goes up for community evaluation with all the other ideas submitted that week. The Monday after that, community evaluation closes and the top-scored ideas (and a wild card or two) go into staff evaluation. We usually decide on our next products by the end of that week and post an evaluation recap video on our blog to let you in on the decision-making process. Sound confusing? Don't worry - we post countdown clocks and send out notification e-mails along the way. 
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>3. Why does it cost $10 to submit my idea?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">Well, you've got to ante up to give your non-brief-based idea the fair shot it deserves. Best case scenario? Your $10 investment takes your idea from a tiny sketch to a professionally manufactured product, on shelves worldwide, earning you a heckuva lot more. Worst case? That 10 bucks get you detailed analytics on who liked and didn't like your idea, as well as extensive community feedback. You then have the option to resubmit your idea, or you can use the valuable market research data to make the thing on your own.</p> 
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>4. Can I submit more than one idea a week?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">But of course... submit as many ideas as you want. $10 a pop.</p>
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>5. How do I know if my submission is feasible?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									We currently focus on developing physical consumer products that would retail for under $150 and don't involve integrated software. If your idea relates to iPhone apps, time machines, or the Fountain of Youth, it probably won't make the cut. After ideas are submitted, we review all of them before opening up the evaluation phase. Unfeasible ideas are removed, the submission fee is refunded, and the ideators are notified.
</p> 
	
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>

</td>
<tr><td><div class="tier x6" > 
<div class="column x" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>Participating with Quirky</h3> 
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>1. What is influence?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									Influence is a real-time measure of your contributions to a project. You can earn influence either by submitting a winning idea, or by supporting and refining that winning idea.

</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>2. What are the various ways to earn influence on Quirky?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p style="font-size:13px"> 
									 Think of the Quirky influence engine as a complicated, evolving recipe, made up of many different ingredients. The ingredients are your contributions to the site, which include: submitting a winning product idea; submitting a winning idea in another phase of the product's development, like a name, logo, industrial design, tagline, etc.; committing to a product in Presale; making insightful comments on ideas; voting for a winning product idea; voting for a winning idea in another phase of the product's development; and rating the majority of ideas in a round. More details are available at www.quirky.com/learn#influence. 
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>3. How do I vote for an idea?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">First click on the idea to access a separate page, where you'll be able to read the whole pitch. You'll see a big blue "vote for this" checkbox -- click on it and you've voted! You have unlimited votes per week, but use them wisely! The amount of influence you can earn for voting on a winning idea decreases the more votes you put out there. And remember: you can always change your vote while a round's still open. Just click on the vote box to uncheck it, and you'll get the vote back.</p> 
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>4. How do I rate ideas?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">Community rating helps us determine the particular strengths of each idea. Quirky uses a five-star system to rate different criteria. Just click on a star to set your rating; you’ll know it registers when the star turns purple.</p>
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>5. How many ideas do I need to rate to earn influence?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									In order to earn rating influence, you’ll have to rate all the criteria for the majority of ideas in a round. The exact percentage of ideas varies from project to project, but is usually in the 75-80% range.

</p> 
	
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</td><td><div class="tier x6" > 
<div class="column x" >
<div class='box latest-comments'> 


<div class='hd' > 
<div style="height:0px">
</div>


<h3>Shopping and Returns</h3>
</div> 

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>1. What is a product commitment?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									When you make a presale or pre-order commitment, you’re saying that you commit to purchasing the product if it gets made. Your credit card will not be charged until the product is real and ready to ship, and you can cancel your commitment at any time by clicking on the "Order List" tab under the “Account Settings” section of your "My Account" page. Plus, if complete your presale order, you’ll earn a small percentage of that product's profits in perpetuity. Why fear commitment with all that good stuff?

</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>2. How are orders shipped?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
	<p style="font-size:13px"> 
									 We offer multiple shipping options with FedEx and the U.S. Postal Service. Costs within the continental U.S. are: 
</p> 
	</div>
</div>
<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>3. How can I choose the color/size/version of the product I am buying?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">If you purchase an item marked as Presale or In Production, you’ll have to wait until the product is real and ready to ship before selecting your product options. You’ll receive an order completion e-mail with a link to choose all that good stuff and confirm your shipping and billing information. Only when you've provided all this information will your credit card be charged.
</p> 
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>4. Do you ship outside of the US?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px">We sure do. Just indicate your country of origin at checkout, and you will be able to select from two international shipping options:</p>
	</div>
</div>

<div class="dhtmlgoodies_question"><p style="color:#00a4e4; font-size:14px;"><b>5. When will my product arrive?</b></p></div>
<div class="dhtmlgoodies_answer">
	<div>
		<p style="font-size:13px"> 
									Depends on what you ordered; not all Quirky products are immediately available. A more detailed explanation of the different product states is available under the "Our Products/Shopping" category. If a product is Shipping Now, the order will usually ship within 24 hours, assuming there isn't a bottleneck at our warehouse. If the product is In Production, it'll likely take a few weeks to several months, and you can view the latest production updates under the Product Development tab on the product page. If the product is in Presale, it will have to reach its commitment threshold before proceeding to production. One thing we want to emphasize: if the product is not yet in inventory, your credit card will be authorized, but it won't be charged until your order is real and ready to ship!

</p> 
	
	</div>
	</div>
</div>
</div>
</div>
</div>
</div></td></tr>
</tr></table>



</body>
</html>
