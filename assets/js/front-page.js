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

	$('article.grid-item').on('mouseenter', function(){
		$(this).children().children().children('img').css({"transform": "scale(1)"}).css('opacity', '1');
	}).on('mouseleave', function(){
		$(this).children().children().children('img').css({"transform": "scale(1.15)"}).css('opacity', '0.7');
	});
	$('.related-posts a').on('mouseenter', function(){
		$(this).children('img').css('opacity', '0.85').css({"transform": "rotate(-5deg) scale(1.15)"});
	}).on('mouseleave', function(){
		$(this).children('img').css('opacity', '1').css({"transform": "rotate(0deg) scale(1)"});
	});
	$('caption').nextAll().hide();
	 $('caption').click(function(e){
      e.preventDefault();
      $(this).nextAll().fadeToggle('slow');
      $(this).children().children().toggleClass('glyphicon-menu-up');
    });

	$('.grid').masonry({
	  columnWidth: '.sizer',
	  itemSelector: '.grid-item'
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
  //Reveal.js
  window.sr = new scrollReveal();




//particles
	/* ---- particles.js config ---- */

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 100,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#F38630"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0.5,
        "color": "#E0E4CC"
      },
      "polygon": {
        "nb_sides": 3
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0.5,
        "sync": true
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.5,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 75,
      "color": "#FA6900",
      "opacity": 0.6,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "right",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 150,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

//typed.js
if(Cookies.get('onceTyped') == 'seen') {
			$("#particles-js").css('height', '150px');
      var canvas = document.getElementsByTagName('canvas')[0];
      canvas.height = 150;
			$("#particles-js span").typed({
				strings: ["If you have never failed you have never lived.","Men are born to succeed, not fail.","Dream big and dare to fail.","We become what we think about.","To be the best, you must be able to handle the worst.","The power of imagination makes us infinite.","Live what you love.","Don’t regret the past, just learn from it.","Do one thing every day that scares you.","Wherever you go, go with all your heart.","Don’t wait. The time will never be just right.","Never, never, never give up.","If you dream it, you can do it.","First, solve the problem. Then, write the code."],
            // typing speed
            typeSpeed: 50,
            // time before typing starts
            startDelay: 1000,
            // backspacing speed
            smartBack: true,
            backSpeed: 30,
            // time before backspacing
            backDelay: 1500,
            // loop
            loop: false,
            // false = infinite
            loopCount: false,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
            // call when done callback function
            callback: function() {},
            // starting callback function before each string
            preStringTyped: function() {},
            //callback for every typed string
            onStringTyped: function() {},
            // callback for reset
            resetCallback: function() {},
        });
			return
}
$("#particles-js span").typed({
            strings: ['The best place for Coding!', 'Here you can learn HTML5', 'Here you can learn CSS3', 'Here you can learn JavaScript', 'Here you can learn JavaScript and a lot more!'],
            // typing speed
            typeSpeed: 50,
            // time before typing starts
            startDelay: 1000,
            // backspacing speed
            smartBack: true,
            backSpeed: 30,
            // time before backspacing
            backDelay: 1500,
            // loop
            loop: false,
            // false = infinite
            loopCount: false,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
            // call when done callback function
            callback: function() {},
            // starting callback function before each string
            preStringTyped: function() {},
            //callback for every typed string
            onStringTyped: function(curStrPos) {
            	if(curStrPos === 4){
            		
					$("#particles-js span").fadeOut(1500);
            		$("#particles-js").animate({
            			height: "150px"},
            			1500, function(){
                    var canvas = document.getElementsByTagName('canvas')[0];
                    canvas.height = 150;
                  });
						var date = new Date();
						var minutes = 30;
						date.setTime(date.getTime() + (minutes * 60 * 1000));	
						Cookies.set("onceTyped", 'seen', {expires: date, path:'/'});
            	
            	}
            },
            // callback for reset
            resetCallback: function() {},
        });
	

});