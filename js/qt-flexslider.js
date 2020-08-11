(function($){
  $(document).ready(function() {
    $('.location-branches .nav-tabs').children('li').find('a').on('click', function(){
      $('.optionset-flexlsider-location').resize();
    });
  });
})(jQuery);
