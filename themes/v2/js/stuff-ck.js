$(".main-content").fitVids();$("a.play-btn").on("click",function(){$("body").toggleClass("dialogIsOpen")});$("body").on("keyup",function(e){if(e.keyCode===27){$("body").removeClass("dialogIsOpen");return!1}});$(".overlay").on("click",function(){$("body").removeClass("dialogIsOpen")});