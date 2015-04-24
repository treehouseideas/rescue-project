<<<<<<< Updated upstream
/*
 Rescue JS
 Code and stuff you need for the Rescue template
 */
=======
jQuery(document).ready(function() {
	$('#fade').hide();
	$('#fade').show(4000);
	/*$('#logo').show(3000);*/
	jQuery('.tabs .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});
>>>>>>> Stashed changes


jQuery(function($) {

	$(window).load(function(){

		('.attachment-pet_single_large').hide(0);
		$('.attachment-pet_single_large').show(4000);
		// THE SLIDER
		$('#slider_wrap').flexslider({
			start: function(slider) {
				if (slider.count == 1) {
					$('.flex-control-nav, .flex-direction-nav').hide();
				}
			},
			animation: "slide",
			slideshowSpeed: 8000,
			smoothHeight: true
		});

	});

});

	function button() {
		var person = prompt("What is your name?", "Friend");
		if (person != null) {
			document.getElementById("hi").innerHTML =
				"Hi " + person + "! Would you like to make a new friend?";
		}
	};


jQuery(document).ready(function($){

	// load mobile menu
	$('#main_menu ul.menu').mobileMenu();

	$('select.select-menu').each(function(){
		"use strict";
		var title = $(this).attr('title');
		if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
		$(this)
			.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
			.after('<span class="select">' + title + '</span>')
			.change(function(){
				val = $('option:selected',this).text();
				$(this).next().text(val);
			})
	});

	// Children Flyout on Menu
	$("#main_menu ul li ul").css({display: "none"}); // Opera Fix
	$("#main_menu ul li").hover(function(){
		"use strict";
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300);
	},function(){
		$(this).find('ul:first').css({visibility: "hidden"});
	});

	// show hide the search form
	$('#search_link').click(function() {
		"use strict";
		$("#searchform").stop().slideToggle();
	});

	// sticky js
	// jquery.sticky.js must be activated
	// uncomment this to turn on the sticky header.

	if ( $(window).width() > 960) {
		$("#header").sticky({topSpacing:0});
	}

	// Fancybox
	jQuery(document).ready(function ($popup) {
		// open with delay
		setTimeout(function () {
			$popup.fancybox({
				href: 'images/ad_FINAL.png',
				onComplete: function () {
					$popup("#fancybox-img").wrap($popup("<a />", {
						href: "http://rescuepets.com/",
						target: "_blank"
					}));
					// close with delay
					setTimeout(function () {
						$popup.fancybox.close();
					}, 18000); // setTimeout close
				}
			});
<<<<<<< Updated upstream
		}, 2000); // setTimeout open
	}); // ready
});
=======
		});
})();





>>>>>>> Stashed changes
