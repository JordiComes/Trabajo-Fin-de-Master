jQuery('document').ready(function($){

  let menuBtn = $('.sandwich'),
    menu = $('.navegador ul');

  menuBtn.click(function () {

    if ( menu.hasClass('show')) {
      menu.removeClass('show');
    }else {
      menu.addClass('show');
    }

  });

});

