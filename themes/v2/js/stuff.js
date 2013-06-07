$(".main-content").fitVids();

// Something happens
  $("a.play-btn").on("click", function() {

    // State changes
    $("body").toggleClass("dialogIsOpen");

  });

  $('body').on('keyup', function(e) {
      if (e.keyCode === 27) {
          $('body').removeClass('dialogIsOpen');
          return false;
      }
  });

   $('.overlay').on('click', function() {
      $('body').removeClass('dialogIsOpen');
    });