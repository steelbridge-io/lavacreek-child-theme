( function( $ ) {
"use strict";
	// Front Page Slider Image #1
	wp.customize( 'fp-topslider-one', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-one' );
			fpsliderone.attr( 'src', to );
		});
	});
  
   wp.customize( 'fp-topslider-one-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-one' ).text( to );
    } );
  } );

  // Front Page Slider Image #2
	wp.customize( 'fp-topslider-two', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-two' );
			fpsliderone.attr( 'src', to );
		});
	});
  
  wp.customize( 'fp-topslider-two-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-two' ).text( to );
    } );
  } );
  
  // Front Page Slider Image #3
	wp.customize( 'fp-topslider-three', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-three' );
			fpsliderone.attr( 'src', to );
		});
	});
  
   wp.customize( 'fp-topslider-three-caption', function( value ) {
    value.bind( function( to ) {
      $( '.orbit-caption.orbit-caption-three' ).text( to );
    } );
  } );
  
  // Front Page Slider Image #4
	wp.customize( 'fp-topslider-four', function(value) {
		value.bind(function(to){
			var fpsliderone = $( '.orbit-image.orbit-image-four' );
			fpsliderone.attr( 'src', to );
		});
	});

  wp.customize( 'fp-topslider-four-caption', function( value ) {
    value.bind( function( to ) {
      $( 'videobg-hide-controls iframe' ).text( to );
    } );
  } );

  wp.customize( 'fp-top-widget-bg-color', function( value ) {
    value.bind( function( to ) {
      $( '#top-cta' ).css( 'background-color', to );
    });
  });

  wp.customize( 'fp-top-widget-txt-color', function( value ) {
    value.bind( function( to ) {
      $( '#top-cta, #top-cta h2, #top-cta p' ).css( 'color', to );
    });
  });

  wp.customize( 'fp-movie-comment', function( value ) {
    value.bind( function( to ) {
      $( '#message span.fp-movie-comment').text( to );
    });
  });

  wp.customize( 'movie-comment-color', function( value ) {
    value.bind( function( newval ) {
      $( '#message span.fp-movie-comment' ).css( 'color', newval );
    });
  });

  wp.customize( 'fp-slidertwo-one', function(value) {
    value.bind(function(to){
      $('li.orbit-item-1').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-two', function(value) {
    value.bind(function(to){
      $('li.orbit-item-2').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-three', function(value) {
    value.bind(function(to){
      $('li.orbit-item-3').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-slidertwo-four', function(value) {
    value.bind(function(to){
      $('li.orbit-item-4').css('background-image', 'url(' + to + ')');
    });
  });
  
  wp.customize( 'fp-topcard-img', function(value) {
    value.bind(function(to){
      $('.topcard.card .card-divider').css('background-image', 'url(' + to + ')');
    });
  });

  wp.customize( 'fp-topcard-label', function( value ) {
    value.bind( function( to ) {
      $( '.topcard .card-divider' ).text( to );
    } );
  } );

  wp.customize( 'fp-topcard-label-color', function( value ) {
    value.bind( function( newval ) {
      $('.topcard .card-divider').css('color', newval );
    } );
  } );
  
  wp.customize( 'fp-topcard-cap', function( value ) {
    value.bind( function( to ) {
      $( '#topcardid' ).text( to );
    } );
  } );

  wp.customize( 'fp-topcard-bg-color', function( value ) {
    value.bind( function( to ) {
      $( '#topcardid' ).css('background-color', to );
    });
  });

  wp.customize( 'fp-topcard-txt-color', function( value ) {
    value.bind( function( to ) {
      $( '#topcardid, #topcardid h2, #topcardid p' ).css( 'color', to );
    });
  });
  
   wp.customize( 'fp-bottomcard-img', function(value) {
    value.bind(function(to){
      $('.bottomcard.card .card-divider').css('background-image', 'url(' + to + ')');
    });
  });

  wp.customize( 'fp-bottomcard-label', function( value ) {
    value.bind( function( to ) {
      $( '.bottomcard .card-divider' ).text( to );
    } );
  } );

  wp.customize( 'fp-bottomcard-label-color', function( value ) {
    value.bind( function( newval ) {
      $('.bottomcard .card-divider').css('color', newval );
    } );
  } );
  
  wp.customize( 'fp-bottomcard-cap', function( value ) {
    value.bind( function( to ) {
      $( '#bottomcardid' ).text( to );
    } );
  } );
  
  wp.customize( 'fp-topparallax-img', function( value ) {
    value.bind( function( to ) {
     	var fpparallaxtop = $( '#parallaxone.parallax-window' );
			fpparallaxtop.attr( 'data-image-src', to );
    });
  });

  wp.customize( 'fp-bottomcard-txt-color', function( value ) {
    value.bind( function( to ) {
      $( '#bottomcardid, #bottomcardid h2, #bottomcardid p' ).css( 'color', to );
    });
  });

  wp.customize( 'fp-bottomcard-bg-color', function( value ) {
    value.bind( function( to ) {
      $( '#bottomcardid' ).css('background-color', to );
    });
  });
  
  wp.customize( 'fp-topparallax-cta', function( value ) {
    value.bind( function( to ) {
      $( '#parallaxone .parallax-text' ).text( to );
    } );
  } );

  wp.customize( 'fp-toppara-color', function( value ) {
    value.bind( function( newval ) {
      $( '#parallaxone .parallax-text' ).css('color', newval );
    } );
  } );
  
  wp.customize( 'fp-divider-content', function( value ) {
    value.bind( function( to ) {
      $( '#parallax-divider .cell' ).text( to );
    } );
  } );

  wp.customize( 'fp-divider-color', function( value ) {
    value.bind( function( newval ) {
      $('#parallax-divider .parallax-text-divider').css('color', newval );
    } );
  } );
  
   wp.customize( 'fp-bottomparallax-img', function( value ) {
    value.bind( function( to ) {
     	var fpparallaxtop = $( '.parallaxtwo.parallax-window' );
			fpparallaxtop.attr( 'data-image-src', to );
    });
  });
  
  wp.customize( 'fp-bottomparallax-cta', function( value ) {
    value.bind( function( to ) {
      $( '#parallaxtwo .parallax-text' ).text( to );
    } );
  } );

  wp.customize( 'fp-bottomparallax-color', function( value ) {
    value.bind( function( newval ) {
      $('#parallaxtwo .parallax-text').css('color', newval );
    } );
  } );

  wp.customize( 'sidebar-bg-color', function( value ) {
    value.bind( function( newval ) {
      $( '#sidebar-right-sidebar' ).css( 'background-color', newval );
    });
  });

  wp.customize( 'sidebar-cta-bg-color', function( value ) {
    value.bind( function( newval ) {
      $( '#after-default-template-content' ).css( 'background-color', newval );
    });
  });

})(jQuery);






