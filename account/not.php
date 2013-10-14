<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>quirky</title>

</head>

<body>



<div class="bod">
  <div>

<div class='tier x12'>
<div class='column x12 last'>
		
<form action="/users/update_notifications" id="notification-form" method="post" onsubmit="new Ajax.Request('/users/update_notifications', {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;">			
<div class='box bordered squared no-padding account-box notification-settings clearfix'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'>Facebook Connect</a></h3>
</div>
			
<div id='facebook-notifications' class='bd clearfix'>
<div class='facebook_connect_info'>
<h4>Facebook Connect lets you log in to both your Quirky and Facebook accounts with a single click, making it easier to stay connected on both networks without fussing with multiple passwords.</h4>
<a href="https://graph.facebook.com/oauth/authorize?client_id=319114062552&amp;redirect_uri=http://www.quirky.com/facebook/existing&amp;scope=publish_stream,email,offline_access" style="font-size:16px;font-weight:bold;">Link This Account To Facebook</a>   
<p>

		   Quirky makes it easy for you to share your activities with your Facebook network. Once you sync your Facebook account with your Quirky account, you can edit your settings here.
</p>
</div>

</div>
</div>
			
						
<div class='box bordered squared no-padding account-box notification-settings clearfix clear'>
<div class='hd'>
<h3 class='no-margin clearfix'><a href='#'>Quirky Notification Settings</a></h3>
</div>
		
<div id='user-notifications' class='bd clearfix'>
<table width='100%'>
<thead>

<tr>
<th width='50%'>Notification Subject</th>
<th class='bullet'>Email Me</th>
</tr>
</thead>
<tbody>
<tr>
<td>When we kick off a new product evaluation</td>
<td class='bullet'><input id="option_quirky.product.curation.mail" name="option[quirky.product.curation.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.product.curation.mail" name="option[quirky.product.curation.mail]" type="checkbox" value="true" /></td>
</tr>

<tr>
<td>When we kick off a new project for a product you've been involved with</td>

<td class='bullet'><input id="option_quirky.project.start.mail" name="option[quirky.project.start.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.project.start.mail" name="option[quirky.project.start.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When we choose winners for a project you've participated in</td>
<td class='bullet'><input id="option_quirky.project.results.mail" name="option[quirky.project.results.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.project.results.mail" name="option[quirky.project.results.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When we launch a product you've been involved with in the Quirky store</td>
<td class='bullet'><input id="option_quirky.product.presale.mail" name="option[quirky.product.presale.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.product.presale.mail" name="option[quirky.product.presale.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When a product you've been involved with reaches its presale threshold</td>

<td class='bullet'><input id="option_quirky.product.threshold.mail" name="option[quirky.product.threshold.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.product.threshold.mail" name="option[quirky.product.threshold.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When you earn money from a product sale</td>
<td class='bullet'><input id="option_quirky.money.earned.mail" name="option[quirky.money.earned.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.money.earned.mail" name="option[quirky.money.earned.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When you receive a message</td>
<td class='bullet'><input id="option_quirky.message.received.mail" name="option[quirky.message.received.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.message.received.mail" name="option[quirky.message.received.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When someone responds to you in the forums</td>

<td class='bullet'><input id="option_quirky.forum.response.mail" name="option[quirky.forum.response.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.forum.response.mail" name="option[quirky.forum.response.mail]" type="checkbox" value="true" /></td>
</tr>
<tr>
<td>When we send a newsletter or bulletin</td>
<td class='bullet'><input id="option_quirky.message.newsletter.mail" name="option[quirky.message.newsletter.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.message.newsletter.mail" name="option[quirky.message.newsletter.mail]" type="checkbox" value="true" /></td>
</tr>
<tr class='last'>
<td>When we offer special sales or promotions</td>
<td class='bullet'><input id="option_quirky.message.sales.mail" name="option[quirky.message.sales.mail]" type="hidden" value="false" />
<input checked="checked" id="option_quirky.message.sales.mail" name="option[quirky.message.sales.mail]" type="checkbox" value="true" /></td>
</tr>
</tbody>
</table>

</div>
</div>
			
<div class='account-action-buttons clearfix'>
<!-- <a href='#' class='button cancel big'>Cancel</a> -->
<a class="button bright big" href="#" onclick="jQuery('#notification-form').startWaiting();; new Ajax.Request('/users/update_notifications', {asynchronous:true, evalScripts:true, onSuccess:function(request){jQuery('#notification-form').stopWaiting();}, parameters:Form.serialize('notification-form')}); return false;">Save</a>
</div>
		
</form>		
			
			
			
</div>
</div>
</div>

<script type="text/javascript">
	function fbjs_reload() {
		location.hash = "#facebook_tab"
		location.reload();
	}
</script>
      

</div>
