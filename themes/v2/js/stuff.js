$(".main-content, .video-pusher").fitVids();

// $(document).ready(function() {
//   $('.fancybox-media').fancybox({
//     openEffect  : 'none',
//     closeEffect : 'none',
//     type: 'iframe',
//     autoHeight: 'true',
//     closeBtn: 'false',
//     helpers : {
//       media : {}
//     }
//   });
// });

// Something happens
  $("a.play-btn").on("click", function() {

    // State changes
    $("body").toggleClass("dialogIsOpen");

  });

  $('body').on('keyup', function(e) {
      if (e.keyCode === 27) {
          $('body').removeClass('dialogIsOpen');
          // sets the source to nothing, stopping the video
          $('iframe#video').attr('src','#');
          // sets it back to the correct link so that it reloads immediately on the next window open
          $('iframe#video').attr('src','http://player.vimeo.com/video/60409948?title=0&amp;byline=0&amp;portrait=0');
          return false;
      }
  });

   $('.overlay').on('click', function() {
     $('body').removeClass('dialogIsOpen');
      // sets the source to nothing, stopping the video
      $('iframe#video').attr('src','#');
      // sets it back to the correct link so that it reloads immediately on the next window open
      $('iframe#video').attr('src','http://player.vimeo.com/video/60409948?title=0&amp;byline=0&amp;portrait=0');
  });