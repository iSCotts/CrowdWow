<link href="stylesheets/com.tc.resetd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.tc.toolsd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.based6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.contentd6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/com.quirky.extrad6df.css?1302551421" media="screen" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<link title="Quirky Projects" rel="alternate" type="application/atom+xml" href="projects.atom" />
<script src="javascripts/jquery-1.4.2.mind6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.formd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.quirkyd6df.js?1302551421" type="text/javascript"></script>

<script src="javascripts/jquery-ui-1.8.4.custom.mind6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.quirkyd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.clearfield.packedd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.tools.mind6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/jquery.effects.mind6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/swfobjectd6df.js?1302551421" type="text/javascript"></script>
	
	
	
<!--<script src="javascripts/prototyped6df.js?1302551421" type="text/javascript"></script>
--><script src="javascripts/effectsd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/dragdropd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/controlsd6df.js?1302551421" type="text/javascript"></script>
<script src="javascripts/applicationd6df.js?1302551421" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3535636-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
		
		(function($){
			$._qIsLoggedIn = false;
			$.showSignupModal = function(options) {
				$(".qm-overlay").fadeIn('fast');
				$("#modal-signup").fadeIn('fast');
			};
			
			$.hideSignupModal = function() {
				$(".qm-overlay").fadeOut('fast');
				$("#modal-signup").fadeOut('fast');
			};
			
			$.showLoginModal = function(options) {
				$(".qm-overlay").fadeIn('fast');
				$("#modal-login").fadeIn('fast');
				$("#modal-login-form").bind('loginSuccessful', function(e, data) {
					$("#modal-login-form").unbind('loginSuccessful');
					$(".qm-overlay").fadeOut('fast');
					$("#modal-login").fadeOut('fast');
					options.success(data);
				});
			};
			
			$.hideLoginModal = function() {
				$("#modal-login-form").unbind('loginSuccessful');
				$(".qm-overlay").fadeOut('fast');
				$("#modal-login").fadeOut('fast');
				$(document).trigger('loginCancelled');

			};
			
			$.switchToSignup = function() {
				$("#modal-login-form").unbind('loginSuccessful');
				$("#modal-login").fadeOut('fast', function() {
					$("#modal-signup").fadeIn('fast');
				});
				$(document).trigger('loginCancelled');
			};
			
			$(document).bind('promptLogin', function(e, options) {
				$.showLoginModal(options);
			});
			
			$(document).bind('loginSuccessful', function() {
				$._qIsLoggedIn = true;
			});
			
			$(document).ready(function($) {
				$('#modal-login-form').ajaxForm({
					success: function(data) {
						$("#modal-login-form").trigger('loginSuccessful', data);
				 	},
					error: function(r, t, e) {
						var theError = JSON.parse(r.responseText).error;
						$("#modal-login-form").find(".flash-text").html(theError);
					},
					dataType: 'json'
				});
			});
		})(jQuery);
</script>




<script type="text/javascript">
	  jQuery(document).ready(function(){
			var _qSplash = {
				panels : [],
        processedPanels : [],
				changeInProcess : false,
				panelMouseIn : null,
				panelChangeRetry : null,
        panelFirstShown : false,
        continueAnimation: true,
				
				processSplashPanel : function() {
					var panel = _qSplash.panels.pop();
					if (panel) {
						var div_id = "#" + panel.splash_id;
						jQuery(div_id).ready(function($) {
							jQuery(div_id).loadCategorySplash({category_id: panel.category_id}, function() {
								if (!_qSplash.panelFirstShown) {
									_qSplash.panelChangeInProcess = true;
									jQuery(div_id).fadeIn("fast");
									_qSplash.panelFirstShown = true;
									jQuery(div_id).addClass("selected");
									jQuery(document).trigger("splashPanelCategorySelected", {link_id: panel.link_id, splash_id: panel.splash_id});
									_qSplash.panelChangeInProcess = false;
								}
                jQuery("#" + panel.link_id).hover(function(){
                  _qSplash.continueAnimation = false;
									jQuery(document).trigger('showProductSplashPanel', { splash_id: panel.splash_id, link_id: panel.link_id });
								}, function() {
									_qSplash.panelMouseIn = null;
								});
								setTimeout(_qSplash.processSplashPanel, 100);
							});
						});
            _qSplash.processedPanels.unshift(panel);
					} else {
						jQuery(document).trigger('splashPanelsDoneLoading');
					}
				}
				
			}
			
			jQuery(document).bind("splashArrayHasElements", function() {
				jQuery(document).unbind("splashArrayHasElements");
				_qSplash.processSplashPanel();
			});
			
			jQuery(document).bind('showProductSplashPanel', function(event, options) {
				 var $ = jQuery;
				 if (jQuery("#splash-panel-list").children(".selected").attr("id") == options.splash_id) {
				 	return;
				 }
				 _qSplash.panelMouseIn = options.splash_id;
				 setTimeout(function() {
				     if (_qSplash.panelMouseIn != options.splash_id) {
					 	return null;
				     }
					 if (!_qSplash.panelChangeInProcess) {
						_qSplash.panelChangeInProcess = true;
						var currently_selected = $("#splash-panel-list").children(".selected");
						var will_be_selected = $("#" + options.splash_id);
						jQuery(document).trigger("splashPanelCategorySelected", {link_id: options.link_id});
						currently_selected.fadeOut("fast", function() {
							currently_selected.removeClass("selected");
							will_be_selected.fadeIn("fast", function() {
								will_be_selected.addClass("selected");
								_qSplash.panelChangeInProcess = false;
							});
						});
					 } else {
						/** This is if someone hovers over a new category
						while a change is in process, and they are still
						hovering when the change is done. */
					 	_qSplash.panelChangeRetry = options.splash_id;
						setTimeout(function() {
							if (_qSplash.panelChangeRetry == options.splash_id) {
								$(document).trigger('showProductSplashPanel', options);
							}
						}, 500, 1);
					 }
				 }, 200, 1);
			});
			jQuery(document).bind('splashPanelCategorySelected', function(event, options) {
				jQuery("#splash-panel-links").children(".selected").removeClass("selected");
				jQuery("#" + options.link_id).addClass("selected");
			});
			jQuery(document).bind('splashPanelsDoneLoading', function(event) {
				jQuery("#splash-panel-links").fadeIn("fast");
        setTimeout(function() {
          if (_qSplash.processedPanels.length > 1) {
            var panelIndex = 0;
            var nextPanel = _qSplash.processedPanels[panelIndex];
            var animateToNext = function() {
              if (_qSplash.continueAnimation) {
                jQuery(document).trigger('showProductSplashPanel', nextPanel);
                panelIndex++;
                if ((panelIndex + 1) > _qSplash.processedPanels.length) {
                  panelIndex = 0;
                }
                nextPanel = _qSplash.processedPanels[panelIndex];
                setTimeout(animateToNext, 4000);
              }
            }
            animateToNext();
          }
        }, 4000);
			});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-6692' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-6692-splash-link", splash_id: "splash-for-category-6692", category_id: 6692});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-6693' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-6693-splash-link", splash_id: "splash-for-category-6693", category_id: 6693});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5108' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5108-splash-link", splash_id: "splash-for-category-5108", category_id: 5108});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5109' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5109-splash-link", splash_id: "splash-for-category-5109", category_id: 5109});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5110' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5110-splash-link", splash_id: "splash-for-category-5110", category_id: 5110});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5112' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5112-splash-link", splash_id: "splash-for-category-5112", category_id: 5112});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5113' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5113-splash-link", splash_id: "splash-for-category-5113", category_id: 5113});
						$(document).trigger("splashArrayHasElements");
					});
					jQuery(document).ready(function($) {
						var product_li = $("<li id='splash-for-category-5116' style='display: none'></li>");
						$("#splash-panel-list").append(product_li);
						_qSplash.panels.push({ link_id: "category-5116-splash-link", splash_id: "splash-for-category-5116", category_id: 5116});
						$(document).trigger("splashArrayHasElements");
					});
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
