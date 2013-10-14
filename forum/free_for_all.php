<div class="tier x12 page-header forum-header">
<div class="column x12">
<div class="box">
<h1 class="light-sans">Free-For-All</h1><br>
<p class="page-description light-sans">TQuirky topics, past and present.</p><br></div></div></div>
<div>
   


<div class="page forum-page forum-topic">

<div class="tier mSmaller x12"> 

</div> 

<div class="tier x12 page-header forum-header"> 
<div class="column x12"> 
<div class='box'> 
</div> 
</div> 
</div> 
	
<div class='tier x12 forum-navigation nav'> 
<div class='box tab-navigation'> 
</div> 
</div>     


	
<div class="tier x12 forum-topic-content"> 
<h2>Forum Overview</h2>
<a href="/forums/new/1" class="button bright newtopic medium">Create New Topic</a>
<div id="topics-container">
<div class="browse-controls">
<div class="pagination right">


	
<table width='100%' class="forum-table" align="left"> 

<thead> 
<tr> 
<th class="thetopics">Topics</th> 
<th class="lastpost">Last Post</th> 
<th class="replies">Replies</th>
<th class="views">Views</th>
</tr> 
</thead> 
<tbody id="topic-list">
<tr> 
<td class="thetopics"><a href="#"></a></td>
<td class="lastpost"></td>
<td class="replies"></td>
<td class="views"></td>
</tr></tr>
</tbody>
</table>
<div class="browse-controls bottom">
<div class="pagination right">

<script src="/javascripts/jquery.ba-bbq.min.js?1310580240" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var unbindLocalEvents = function() {
			$(document).unbind("gridPageChange");
			$(document).unbind("gridFilterChange");
			$(document).unbind("gridSortChange");
			$(document).unbind("gridDisplayAll");
		};
		var defaults = {"per_page":24,"filters":["all","recent"],"infinite":false,"page":1}
		unbindLocalEvents();
		$(document).bind("gridPageChange", function(e, data) {
			var options = defaults;
			options.page = data.page;
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridDisplayAll", function(e, data) {
			var options = defaults;
			options.per_page = 24;
			options.infinite = true;
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridFilterChange", function(e, data) {
			var options = defaults;
			options.page = 1;
			var sort = "recent"
			options.filters = [data.filter, sort];
			$(document).trigger("updateGridDisplay", options);
		});
		$(document).bind("gridSortChange", function(e, data) {
			var options = defaults;
			options.page = 1;
			var filter = "all"
			options.filters = [filter, data.sort];
			$(document).trigger("updateGridDisplay", options);
		});
		

	});
</script>
</div>
</div>
	
</div>   
     

      
</div>


<script type="text/javascript">
	  jQuery(document).ready(function(){
	   jQuery.enableGrid();
       jQuery("#topics-container").makeGrid("/forums/just_topics/1", "/forums/infinite_topics/1", "#topic-list");
  jQuery(".user_drop").live("click", function(e){
    e.preventDefault();
    jQuery(document).trigger('hideCartDropdown');
    jQuery("#loggedMenu").toggle();
    jQuery(".hub").toggleClass("menu-active");
	});
	
	jQuery("#loggedMenu").mouseup(function(){
		return false;
	});
	
	jQuery(document).mouseup(function(e){
		if(jQuery(e.target).parent("a.user_drop").length == 0){
			jQuery("#loggedMenu").hide();
			jQuery(".hub").removeClass("menu-active");
			
		}
	});
  jQuery(document).bind('showCartDropdown', function(e, data) {
    jQuery("#loggedMenu").hide();
  });

							jQuery(document).bind('cartUpdated', function(e, data) {
								jQuery('#cart-count').html(data.total_items);
							});
jQuery(document).ready(function($){
	var fadeOutFunction = function() {
		var $ = jQuery;
		var tickerItem = $(this);
		setTimeout( function() {
			tickerItem.fadeOut("slow", function() {
				if ($(this).is(":last-child")) {
					$(this).parent().children(":first-child").fadeIn("slow", fadeOutFunction);
				} else {
					$(this).next().fadeIn("slow", fadeOutFunction);
				}
			});
		}, 3000);
	}
	$("#ticker-item-container").children(":first-child").fadeIn("slow", fadeOutFunction);
});
 
	  });
</script>

</body>

</html>
