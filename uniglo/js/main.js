$(function () {
	$('.menu-open').click(function (e) {
		e.preventDefault();
		$('.menu').toggleClass('show-menu')
	})
	$('ul.menu li a').click(function (e) {
		e.preventDefault();
		$('.menu').toggleClass('show-menu')
	})
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
	$(window).on('load resize', function () {
    if ($(this).width() > 768) {
      $(".slider").trigger('destroy.owl.carousel');
    } else {
      $(".slider").owlCarousel({
        items: 2,
      });
    }
  })
});
