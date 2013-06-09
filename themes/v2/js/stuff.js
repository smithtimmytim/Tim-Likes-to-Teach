$(".main-content, .video-pusher").fitVids();

$(document).ready(function() {
  $('.fancybox-media').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    type: 'iframe',
    autoHeight: 'true',
    closeBtn: 'false',
    helpers : {
      media : {}
    }
  });
});

// // Something happens
//   $("a.play-btn").on("click", function() {

//     // State changes
//     $("body").toggleClass("dialogIsOpen");

//   });

//   $('body').on('keyup', function(e) {
//       if (e.keyCode === 27) {
//           $('body').removeClass('dialogIsOpen');
//           return false;
//       }
//   });

//    $('.overlay').on('click', function() {
//       $('body').removeClass('dialogIsOpen');
//     });