
$(window).resize(function() {
  responsive()
});




jQuery( document ).ready(function( $ ) {
	responsive();
	message__init();

	// Bouton Menu Nav

	$('.nav__button').click(function(){
			$('.nav__button , .l-header__nav').toggleClass('is--active')
	});

  // Button ReadMore Sur l'Editor Block Systeme

  $('#ebs__readmore-btn').click(function(){
    console.log('click');
      $(this).parents('.ebs').toggleClass('ebs__full ebs__readmore');
  });

	// Bouton Scroll cover

	$('.cover__scroll-down').click(function(){
    var y = $(window).scrollTop();
    var y_next = Math.ceil( y / $(window).height() );
    if ( y >= y_next ){ y_next++ };
    $("html, body").animate({ scrollTop: y_next * $(window).height() }, 3000, 'easeInOutQuart');
  });

	// Block Accordion

		$('.accordion__titre').click(function(){
			if (	$(this).closest('.accordion').hasClass('is--active') ) {
				$('.accordion').removeClass('is--active');
			}else{
				$('.accordion').removeClass('is--active');
				$(this).closest('.accordion').addClass('is--active');
			}
		});

    // Effet is--float

    $(".is--float").appear(function() {
        $(this).css("top", 0)
    });


		// Extention Mailchimp

		// $('.EMAIL-label input').focus(function() {
		// 	$('.yikes-easy-mc-submit-button').addClass('is--active');
		// });
		// $('.EMAIL-label input').focusout(function() {
		// 	$('.yikes-easy-mc-submit-button').removeClass('is--active');
		// });


		// Lightbox

		$('.is--lightbox').click(function(){
				var img = $(this).find('img').attr('src');
				$('body').addClass('lightbox--is--active').append('<div class="lightbox__overlay"></div>');
				$('.lightbox__overlay').html('<img class="lightbox__img" src="' + img +'"><div class="lightbox__close subheading">fermer</div>');
				$('.lightbox__overlay').fadeIn();
		});
		$(document).mouseup(function(e)
			{
			var container = $('.lightbox__img');
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				$('.lightbox__overlay').fadeOut( 500, function() {
					$('.lightbox__overlay').remove();
				});
			}
		});

		$('#close__modal').click(function(){
				$('.modal__overlay').fadeOut();
		});
});


		// Changement de skin du header si scroll

// $(document).ready(function(){
//     var offset = $('.l-header').offset().top;
//     $(document).scroll(function(){
//         var scrollTop = $(document).scrollTop();
//         if(scrollTop > 110){
//           $('.l-header').addClass('is--white');
//         }
//         else {
//           $('.l-header').removeClass('is--white');
//         }
//     });
// });




function responsive(){

}



		// Message RGPD

function message__init() {
	$('.rgpd__oui').click(function(){
		console.log('click');
		$(this).closest('.rgpd').removeClass('is--open');
		var idMessage = $(this).closest('.rgpd').attr('id')
		Cookies.set(idMessage, 'is--hidden', { expires: 1 });
	});
	var cookies =  Cookies.get();
	for (var cookie in cookies) {
		if (cookie.startsWith("message_") && cookies[cookie] == "is--hidden"){
			$("div#" + cookie).remove('.is--open');
		};
	};
};
