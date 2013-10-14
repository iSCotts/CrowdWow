(function($){  
	
	$.fn.clearForm = function() {
		return this.each(function() {
			var obj = $(this);
			var defaultValue = obj.val();
			obj.click(function() {
				if( $(this).val() == defaultValue ) {
					$(this).val("");
					$(this).addClass("entered");
				}  
			});
		});
	};
	
	$.fn.startWaiting = function() {  
 
		 return this.each(function() {  
			var obj = $(this);
			obj.fadeTo('fast', 0.5);
		 });  
	};

	$.fn.stopWaiting = function() {  
 
		return this.each(function() {  
			var obj = $(this);
			obj.fadeTo('fast', 1);
		});  
	};
	
	$.fn.loadingPulse = function() {  
 
		return this.each(function() {  
			var obj = $(this);
			obj.fadeIn('fast');
			var continuePulse = true;
			var fadeInAndOut = function() {
				obj.fadeTo('slow', .5, function() {
					if (continuePulse) {
						obj.fadeTo('slow', 1, fadeInAndOut);
					} else {
						obj.fadeOut('fast');
					}
				});
			};
			fadeInAndOut();
			obj.bind('stopLoadingPulse', function() {
				continuePulse = false;
			});
		});  
	};
	
	$.fn.stopLoadingPulse = function() {  
 
		return this.each(function() {  
			var obj = $(this);
			obj.trigger('stopLoadingPulse');
		});
	};
	
	$.enableGrid = function() {
		// This should only be called once, even if there are
		// multiple grids.
		$(document).bind("updateGridDisplay", function(e, data) {
			data.options = true;
			jQuery.bbq.pushState(data);
		});
	};
	
	$.fn.makeGrid = function(endPoint, infiniteEndPoint, appendTo) {
		return this.each(function() {
			var obj = $(this);
			$(window).bind('hashchange', function(e) {
				if ($.param.fragment().match(/options=true/)) {
					data = $.bbq.getState(true);
					obj.updateGridDisplay(data, endPoint, infiniteEndPoint, appendTo);
				}
			});
			$(document).ready(function($) {
				if (($.param.fragment().length > 0) && $.param.fragment().match(/options=true/)) {
					data = $.bbq.getState(true);
					if (data.infinite && (parseInt(data.page) > 1)) {
						data.page = 1;
					}
					obj.updateGridDisplay(data, endPoint);
				}
			});
		});
	};
	
	$.fn.updateGridDisplay = function(options, endPoint, infiniteEndPoint, appendTo) {
		return this.each(function() {
			var obj = $(this);
			if (options.infinite && (parseInt(options.page) > 1)) {
				obj.find(appendTo).trigger('willAppendMoreData');
				$.get(infiniteEndPoint, options, function(data){
					obj.find(appendTo).append(data);
					obj.find(appendTo).trigger('moreDataAppended');
				});
			} else {
				obj.startWaiting();
				$.get(endPoint, options, function(data){
					obj.html(data);
				   	obj.stopWaiting();
					if(parseInt(options.page) > 1){
						window.scrollTo(0, obj.offset().top);
					}
				});
			}
		});
	};
	
	
	$.fn.loadCategorySplash = function(options, callback) {
		return this.each(function() {
			var obj = $(this);
			$.get("/home/category_splash/" + options.category_id, options, function(data) {
				obj.html(data);
				callback();
			});
		});
	};
	
	$.fn.castVote = function(options) {
		if (!options) {
			return;
		}
		return this.each(function() {
			var obj = $(this);
			obj.startWaiting();
			options.ideation_title = obj.parent().parent().find(".ideation-title").html();
			obj.trigger('castVote', options);
		});
	};
	
	$.fn.reverseVote = function(options) {
		return this.each(function() {
			var obj = $(this);
			obj.startWaiting();
			obj.trigger('reverseVote', options);
		});
	};
	
	$.fn.listenForCastVote = function(options) {
		return this.each(function() {
			var obj = $(this);
			$(document).bind("voteCast." + options.vote.voteable_id, function(e, data) {
				obj.stopWaiting();
				if (options.unvote_button_text) {
					obj.find(".text").html(options.unvote_button_text);
				} else {
					obj.find(".text").html("Take Your Vote Back");
				}
				obj.removeClass("bright");
				obj.addClass("soft");
				obj.attr("onclick", "");
				obj.unbind("click");
				obj.bind("click", function(e) { e.preventDefault(); obj.reverseVote(data); });
			});
		});
	};
	
	$.fn.listenForReversedVote = function(options) {
		return this.each(function() {
			var obj = $(this);
			$(document).bind("voteReversed." + options.vote.voteable_id, function(e, data) {
				obj.stopWaiting();
				if (options.vote_button_text) {
					obj.find(".text").html(options.vote_button_text);
				} else {
					obj.find(".text").html("Vote For This");
				}
				obj.removeClass("soft");
				obj.addClass("bright");
				obj.attr("onclick", "");
				obj.unbind("click");
				obj.bind("click", function(e, data) { e.preventDefault(); obj.castVote(options); });
			});
		});
	};
	
	$.fn.modSelector = function() {
		return this.each(function() {
			var obj = $(this);
			obj.focus();
			obj.select();
			return false;
		});
	};
	
	$.checkLogin = function(callback) {
		if (!$._qIsLoggedIn) {
			$(document).trigger('promptLogin', { success: callback });
		} else {
			callback();
		}
	} 
	
	$.fn.checkLoginSubmit = function(options){
		$(this).live('click', function(e){ 
			e.preventDefault(); 
			var obj = $(this);                 
		   	$.checkLogin(function(){ 
				obj.parents("form:first").ajaxForm(options);
				obj.parents("form:first").submit();
			}); 
		});
	}
	
	$.voteUp = function(options) {
		$.checkLogin(function() {
			$.ajax({
				type: "POST",
				url: "/votes",
				data: {vote: options.vote},
				success: options.success,
				error: options.error,
				dataType: "json"
			});
		});
	}
	
	$.voteDown = function(options) {
		$.checkLogin(function() {
			$.ajax({
				type: "DELETE",
				url: "/votes/" + options.vote.id,
				data: {vote: options.vote},
				success: options.success,
				error: options.error,
				dataType: "json"
			});
		});
	}

  $.ajaxifyLogin = function() {

    var loginFailed = function() {
		  jQuery("#loginForm").stopWaiting();
		  jQuery("#error").replaceWith("<p class='login-error' id='error'>Login Failed</p>");
	  }

		$("#loginForm").ajaxForm({
      dataType: 'json', 
      beforeSubmit: function(){ jQuery("#loginForm").startWaiting();},
      success: function () { jQuery(document).trigger('loginSuccessful'); }, 
      error: loginFailed
    });
  } 

 $.editSurvey = function() {
	   jQuery(".place-block").live("click", function(e){ 
			if(jQuery(this).hasClass("choice-block")){
				jQuery(this).parent("li").children(".survey-form-container").show();
			}else if(jQuery(this).hasClass("question-block")){
				jQuery(this).parent("div").children(".survey-form-container").show();
			}  
	   });
	              
	
	
    jQuery(".survey-form").ajaxForm({ 
										resetForm:true,
										clearForm:true,
										dataType:"js",      
										success: function(data){ 
										   	jQuery("#edit-survey-questions").append(data);
										}
	   });
	
	 jQuery(".new-choice").ajaxForm({
									resetForm:true,
									clearForm:true,
									dataType:"json",      
									success: function(data){  
									   		jQuery("#question-" + data.question_id + "-choices").append(data.mark_up).children("li:last");
									}
			
 	 }); 
	
	  jQuery(".question-form").live("submit", function(){
					jQuery(this).ajaxSubmit({ 
										type:"put",
		 								dataType:"json",
										success: function(data){ 
											jQuery("#question-text-" + data.question_id).html(data.text);
											jQuery("#question-container-" + data.question_id + " input").stopWaiting();
											jQuery("#question-container-" + data.question_id).hide();
										}
	  			   });
					return false;
	  });
	
	
		jQuery(".choice-form").live("submit", function(){
		   jQuery(this).ajaxSubmit({ 
												dataType:"json",
												success: function(data){      
												     jQuery("#choice-" + data.choice_id).html(data.text);                      
												 	 jQuery("#choice-container-" + data.choice_id + " input").stopWaiting();
													 jQuery("#choice-container-" + data.choice_id).hide();  
												},
												failure: function(data){
													alert("Something went wrong, try again?");
												}
			   });  
			return false;
		});
	
		jQuery(".choice-form input, .question-form input").live("blur", function(e){
			jQuery(this).startWaiting(); 
			jQuery(this).parent("form:first").submit();  
		});
	
	    jQuery(".survey-delete").live("click", function(e){
		   e.preventDefault(); 
		   ob = jQuery(this);
		   if(ob.hasClass("delete-choice")){
			     tar = ob.parent("li");
			}else{
				 tar = ob.parent("div");
			}
		   jQuery.ajax({
						type: "delete", 
			   			url:ob.attr("href"),
						dataType:"json",
						success:function(data){
								 tar.remove();
						},
						failure:function(data){
								alert("Something went wrong... try again");
						}
			});
		});
 }

 $.setupSurvey = function() {
	jQuery(".survey-choice").click(function(e){ 
			ob = jQuery(this);
		  	e.preventDefault();
		    jQuery.checkLogin(function(){

				jQuery.ajax({
				   url: ob.attr("href"),
				   dataType: "json",
				   beforeSend: function(){ 
 							    var onstate = ob.hasClass("bright");


								if(ob.hasClass("multiple")){
								    // don't clear previous choices
								}else{     
					            	ob.parents("ul").children("li").children("a.bright").removeClass("bright").addClass("light-soft");
								}      

								if(onstate){ 
									ob.removeClass("bright").addClass("light-soft");  
								}else{       
						   			ob.removeClass("light-soft").addClass("bright"); 
								}



								ob.parents(".userSurveyItem").startWaiting(); 
				   		},
				   success: function(data){ jQuery("#question-" + data.question_id).stopWaiting();  
				                            	if(data.all_answered){
					                                jQuery("#success").show();
												}else{
					                                jQuery("#success").hide();
												}
										 	}, 
				   failure: function(data){                    
								ob.removeClass("bright").addClass("light-soft");
					   			ob.parents("ul").stopWaiting();
					}
				});

			});

			return false;
		}); 

		jQuery(".survey_text_question").ajaxForm({
													dataType: "json",
		 											success:function(data){    
																			jQuery("#question-" + data.question_id).stopWaiting();
																			                            	if(data.all_answered){
																				                                jQuery("#success").show();
																											}else{
																				                                jQuery("#success").hide();
																											}
																		  }
												  });

		jQuery(".survey_text_field").blur(function(e){
		   ob = jQuery(this);
		   pf = ob.parents("form:first");
		   pf.parent(".userSurveyItem").startWaiting(); 
		   jQuery.checkLogin(function(){
			 	pf.submit();
			});
		});
 } 

var special = jQuery.event.special,
        uid1 = 'D' + (+new Date()),
        uid2 = 'D' + (+new Date() + 1);

    jQuery.event.special.focus = {
        setup: function() {
            var _self = this,
                handler = function(e) {
                    e = jQuery.event.fix(e);
                    e.type = 'focus';
                    if (_self === document) {
                        jQuery.event.handle.call(_self, e);
                    }
                };

            jQuery(this).data(uid1, handler);

            if (_self === document) {
                /* Must be live() */
                if (_self.addEventListener) {
                    _self.addEventListener('focus', handler, true);
                } else {
                    _self.attachEvent('onfocusin', handler);
                }
            } else {
                return false;
            }

        },
        teardown: function() {
            var handler = jQuery(this).data(uid1);
            if (this === document) {
                if (this.removeEventListener) {
                    this.removeEventListener('focus', handler, true);
                } else {
                    this.detachEvent('onfocusin', handler);
                }
            }
        }
    };

    jQuery.event.special.blur = {
        setup: function() {
            var _self = this,
                handler = function(e) {
                    e = jQuery.event.fix(e);
                    e.type = 'blur';
                    if (_self === document) {
                        jQuery.event.handle.call(_self, e);
                    }
                };

            jQuery(this).data(uid2, handler);

            if (_self === document) {
                /* Must be live() */
                if (_self.addEventListener) {
                    _self.addEventListener('blur', handler, true);
                } else {
                    _self.attachEvent('onfocusout', handler);
                }
            } else {
                return false;
            }

        },
        teardown: function() {
            var handler = jQuery(this).data(uid2);
            if (this === document) {
                if (this.removeEventListener) {
                    this.removeEventListener('blur', handler, true);
                } else {
                    this.detachEvent('onfocusout', handler);
                }
            }
        }
    };

	
})(jQuery);

function scroll_to(id){
  jQuery('html,body').animate({scrollTop: jQuery("#"+id).offset().top},'slow');
}

_qNewVideoRecorded = function(name, url) {
  jQuery(document).trigger('newVideoRecorded', {video_name: name, video_url: url});
}   

