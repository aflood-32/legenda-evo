$( document ).ready(function() {

  $('.slider').slick();

	$(".task-sections_item_name, .task-sections_item_arrow").click(function () {
		$(this).parents(".task-sections_item").toggleClass('opened');
		return false;
	})

	$('.fancybox').fancybox();

});
