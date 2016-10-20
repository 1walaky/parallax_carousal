//Azért itt még rendet kell rakni...
//kis hiba: elso kepet ugyanugy rosszul tolti be
$(function(){
  
  var $window         = $(window);
  var $anim_elements  = $('.parallax');
  var $para_el = $('#myCarousel');
  var para_el_top = $para_el.offset().top;
  var para_el_height = $para_el.innerHeight();
  var para_el_bottom = para_el_top + para_el_height;
  
  function check_if_view(){
    var window_top    = $window.scrollTop();
    var window_height = $window.outerHeight();
    var window_bottom = window_top + window_height;
    var para_el_top_active = 0;
    $.each($anim_elements, function(){
      var $para_el = $(this);
      var screenX = $window.scrollTop();
      var bgYPos = (screenX - para_el_bottom) / (window_height + para_el_height);
      bgYPos = 1 - Math.abs(bgYPos);
      var bg_image_url = $para_el.css('background-image');
      var bg_image_regex = /"([^"]*)"/;
      var img_url = bg_image_regex.exec(bg_image_url)[1];
      var img = new Image;
      img.src = img_url
      var img_height = img.height;
      $para_el.css('background-position', '50% '+(para_el_height - img_height)*bgYPos+'px');
    });
  }

  function changeVisibility(mode){
    var $animate_appear = $('.animate-appear');
    $.each($animate_appear, function(){
      var $elem = $(this);
      if(mode === 'add'){
        $elem.addClass('opacity-full');
      }else if(mode === 'remove'){
        $elem.removeClass('opacity-full');
      }
    });
  }

  $('.carousel').carousel({
    interval: 3000
  });
  $('.carousel').carousel('cycle');

  //slideshow tartalmának animálása
  //elmozdulás előtt fut le
  $('#myCarousel').on('slide.bs.carousel', function(){
    check_if_view();
    changeVisibility('remove');
  });

  //slideshow tartalmának animálása
  //elmozdulás után fut le
  $('#myCarousel').on('slid.bs.carousel', function(){
    changeVisibility('add');
  });

  $window.on('scroll', check_if_view);
  changeVisibility('add');

  check_if_view();
});