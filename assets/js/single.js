jQuery(document).ready(function($){ 

$('a').click(function(event) {
     var options = {
  bg: '#000',

  // leave target blank for global nanobar
  //target: document.getElementById('page-overlay'),

  // id for new nanobar
  id: 'mynano'
};

var nanobar = new Nanobar( options );

// move bar
nanobar.go( 0 ); // size bar 0%

nanobar.go( 50 ); // size bar 50%

// Finish progress bar
nanobar.go(100);
});
	$('caption').nextAll().hide();
	 $('caption').click(function(e){
      e.preventDefault();
      $(this).nextAll().fadeToggle('slow');
      $(this).children().children().toggleClass('glyphicon-menu-up');
    });

	
  $("h1.site-title").fitText(1, { minFontSize: '20px', maxFontSize: '64px' });
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //>=, not <=
    if (scroll >= 225) {
        //clearHeader, not clearheader - caps H
      $("h1.site-title").fitText(1, { minFontSize: '20px', maxFontSize: '42px' });
       $("header.site-header").addClass("site-header-fixed");
    }
    else {
      $("h1.site-title").fitText(1, { minFontSize: '20px', maxFontSize: '64px' });
      $("header.site-header").removeClass("site-header-fixed");
    }
  });

  $('.fa-search').on('click', function(){
    if(!$('header').hasClass('site-header-fixed')){
      $('input.search-field').css('width', '150px').css('opacity', '1').css('z-index', '11');
    }
    else{
      $('input.search-field').css('width', '150px').css('opacity', '1').css('z-index', '11');
    }
      $('input.search-field').focus();
  });


  $('input.search-field').focusout(function() {
     $(this).css('width', '0px');
     $(this).stop().animate({
       opacity: 0},
       100, function() {
          $(this).css('z-index', '-1');
     });
  });
  

	

});