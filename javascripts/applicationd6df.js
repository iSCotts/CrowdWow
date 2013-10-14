// Place your application-specific JavaScript functions and classes here
// This file is automatically included by javascript_include_tag :defaults


                                                                            

jQuery('document').ready(function(){
	 
	//global countdowns!

	jQuery('.countdown').each(function(){
		if (jQuery(this).attr('rel')) {
			jQuery(this).countdown({until: jQuery(this).attr('rel'), compact:true, compactLabels:['y', 'm', 'w', ' days'], compactLabels1:['y', 'm', 'w', ' day'], expiryText: 'Complete!', alwaysExpire: true});
		}
	}); 

	//generic text based link submitter

	jQuery(".submitLinkRemote").live("click", function(e){
		e.preventDefault();
		jQuery(this).parents("form:first").trigger("onsubmit");
	});

	jQuery(".submitLink").live("click", function(e){
		e.preventDefault();
		jQuery(this).parents("form:first").submit();
	});
	jQuery(".clearable").clearForm();  
	
});
