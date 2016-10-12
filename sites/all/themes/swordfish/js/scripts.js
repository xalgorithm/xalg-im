(function ($) {

//1
    $(document).ready(function(){
	  if ($.browser.msie) { } else {
		$('ul.menu').mobileMenu({
		combine: true,
		switchWidth: 760,
		prependTo: "#user-menu",
		nested: false,
		groupPageText: 'More',
		topOptionText: 'Select a page'
		});
	  }
    });
 //2
 	Drupal.behaviors.bonesSuperfish = {

	attach: function(context, settings) {
	  $('#main-menu ul.menu, #nav-menu ul.menu', context).superfish({
		  delay: 400,
		  animation: {height:'show'},
		  speed: 500,
		  easing: 'easeOutBounce',
		  autoArrows: false,
		  dropShadows: false /* Needed for IE */
	  });
	}
	}
//3
	$(function() {
		$('.postscript-wrapper img').hover(function() {
		  $(this).animate({
			  backgroundColor: "#ff7800", opacity: "1.0"
		  }, 'fast'); }, function() {
		  $(this).animate({
			  backgroundColor: "#555", opacity: "0.9"
		  }, 'normal');
		});
	});
//4

	$('.item-list-our-work ul li').wrapInner('<div class="innerlistitems" />');
	setTimeout(function() {
		var items = $('.item-list-our-work ul li.ourworkgal');
		var total = items.length;

		for(i = 0; i < total; i+=3){
			var row = items.slice(i, Math.min(i + 3, total - 1));
			var maxHeight = 268;
			row.each(function() {
				maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
				console.info(maxHeight);
			}).height(maxHeight);
		}
	}, 100);
})(jQuery);
