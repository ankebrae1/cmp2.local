(function( $ ) {
  'use strict';

  $(function() {
    // Code to fire when the DOM is ready.
    $('.wpbrigade-video-link').on('click', function (e) {
      e.preventDefault();
      var target = $(this).data('video-id');
      $('#'+target).fadeIn();
    } );
    $('.wpbrigade-close-popup').on('click', function (e) {
      $(this).parent().parent().fadeOut();
      $('.wpbrigade-video-wrapper iframe').attr('src', 'https://www.youtube.com/embed/GMAwsHomJlE');
    } );
  } );

})( jQuery ); // This invokes the function above and allows us to use '$' in place of 'jQuery' in our code.
