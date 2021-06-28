
jQuery( document ).ready(function( jQuery ) {

  // Bouton Menu Nav

  jQuery('.nav__button').click(function(){
    jQuery('.nav__button , .l-header__nav').toggleClass('is--active')
  });


  // Button ReadMore Sur l'Editor Block Systeme

  jQuery('.ebs__readmore-btn').on('click', function(){
    jQuery(this).parents('.ebs').toggleClass('ebs__full ebs__readmore');
  });


  // Button ReadMore Sur le block Selection

  jQuery('.slc__readmore-btn').on('click', function(){
    jQuery('.slc').toggleClass('slc__full slc__readmore');
    jQuery(this).fadeOut();
  });


  // Bouton Scroll cover

  jQuery('.cover__scroll-down').click(function(){
    var y = jQuery(window).scrollTop();
    var y_next = Math.ceil( y / jQuery(window).height() );
    if ( y >= y_next ){ y_next++ };
    jQuery("html, body").animate({ scrollTop: y_next * jQuery(window).height() }, 3000);
  });


  // Checkbox WhereIsAilleurs

  var url = window.location.origin;
  var whereIsAilleurs = Cookies.get('WhereIsAilleurs');

  jQuery('#where--is--ailleurs').on('click', function(){
    if (whereIsAilleurs == 'Arles') {
      Cookies.set('WhereIsAilleurs', 'Paris');
    }else {
      Cookies.set('WhereIsAilleurs', 'Arles');
    };
    window.location.href = url;
  });


  // Block Accordion

  jQuery('.accordion__titre').click(function(){
    if (	jQuery(this).closest('.accordion').hasClass('is--active') ) {
      jQuery('.accordion').removeClass('is--active');
    }else{
      jQuery('.accordion').removeClass('is--active');
      jQuery(this).closest('.accordion').addClass('is--active');
    }
  });


  // Effet is--float

  jQuery(".is--float").appear(function() {
    jQuery(this).css("top", 0);
  });


  // Effet is--not--hover

  jQuery('.is--not--hover').find('li').hover(function() {
    jQuery(this).siblings('li').addClass('not--hover');
    jQuery(this).removeClass('not--hover');
  },function() {
    jQuery('.is--not--hover').find('li').removeClass('not--hover');
  });


  // Effet is--DenkoKeijiban

  jQuery('.is--denko').each(function() {
    var clone = jQuery(this).find('*')
    var n = 100;
    while(n > 0){
      jQuery(this).append(clone.clone());
      n -= 1;
    }
  });


  // Effet is--FollowMouse

  jQuery(document).mousemove(function(e){
    jQuery('.is--followmouse').css({ top: e.clientY + 35, left:  e.clientX + 5});
  });


  // Effet is--lightbox

  jQuery('.is--lightbox').click(function(){
    var img = jQuery(this).find('img').attr('src');
    jQuery('body').addClass('lightbox--is--active').append('<div class="lightbox__overlay"></div>');
    jQuery('.lightbox__overlay').html('<div class="lightbox__img"><img src="' + img +'"></div><div class="lightbox__close subheading">fermer</div>');
    jQuery('.lightbox__overlay').fadeIn();
  });
  jQuery(document).mouseup(function(e) {
    var container = jQuery('.lightbox__img').find('img');
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      jQuery('.lightbox__overlay').fadeOut( 500, function() {
        jQuery('.lightbox__overlay').remove();
      });
    }
  });


  // Fermeture de la modale

  jQuery('.modal__btn').on('click', function(){
    jQuery('.modal__container').fadeOut();
  });


  // Barre de Rechercher Événement

  jQuery.extend(jQuery.expr[":"], {
    'containsIN': function(elem, i, match, array) {
      return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
  jQuery('.eve__bar-search').find('input').on('input', function(){
    var val = jQuery(this).val();
    console.log(val);
    jQuery('.eve__eve').hide();
    jQuery('.eve__eve:containsIN(' + val +')').show();
  });


  // Barre de filtre Événement
  //    Sortir tout filtre utiliser dans la page
  var filtres = [];
  jQuery( ".eve__filtre" ).each(function( index ) {
    var filtre = jQuery(this).text();
    if(filtres.indexOf(filtre) == -1){
      filtres.push(filtre);
    };
  });
  //    Afficher tout filtre dans la barre
  jQuery.each(filtres, function(index, value){
    jQuery(".eve__bar-filtres").append('<button class="eve__bar-filtre">'+ value + '</button>');
  });
  //    Faire des Trucs si on clique sur un filtre
  jQuery('.eve__bar-filtre').on('click', function(){
    jQuery('.eve__bar-filtre').removeClass('is--active');
    jQuery(this).toggleClass('is--active');
    if (jQuery('.eve__bar-filtre').is('.is--active')) {
      jQuery('.eve__eve').hide();
      jQuery( ".eve__bar-filtre.is--active" ).each(function( index ) {
        var filterThis = jQuery(this).text();
        jQuery('.eve__eve:containsIN(' + filterThis +')').show();
      });
    }else {
      jQuery('.eve__eve').show();
    }
  });



  // Bloc partenaire minimize

  var n = 0;
  while(n < 3){
    var par_par = jQuery('.par').find('.par__par').eq(n);
    jQuery('.par__first').append(jQuery(par_par).clone());
    jQuery('.par__first').find('.par__overlay').remove();
    n += 1
  };


  jQuery('.par__readmore-btn, .par__first').on('click', function(){
    jQuery('.par').toggleClass('par--is--minimize');
  });

});  //Fin du jQuery( document ).ready
