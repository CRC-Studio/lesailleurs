
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

	// Bouton Menu Nav secondaire

	$('.btn__menu-more-vert').click(function(){
			$('.menu').slideToggle()
	});


	// Bouton Scroll cover

	$('.btn__scroll-cover').click(function(){
    var y = $(window).scrollTop();
    var y_next = Math.ceil( y / $(window).height() );
    if ( y >= y_next ){ y_next++ };
    $("html, body").animate({ scrollTop: y_next * $(window).height() }, 1500, 'easeInOutExpo');
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


		// Extention Mailchimp

		$('.EMAIL-label input').focus(function() {
			$('.yikes-easy-mc-submit-button').addClass('is--active');
		});
		$('.EMAIL-label input').focusout(function() {
			$('.yikes-easy-mc-submit-button').removeClass('is--active');
		});


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


		// Custom Select Form

var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("form__custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
