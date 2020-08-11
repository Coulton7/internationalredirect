(function($) {
  vex.defaultOptions.className = 'vex-theme-top';
 $(document).ready(function(){
   if(sessionStorage.getItem('vexClosed') === 'closed')
   {
     return null;
   }
   else
   {
       vex.dialog.open({
         message: "Can't find what you are looking for maybe try going to aesseal.com",
         contentClassName: 'web-banner text-center',
         buttons: [
           $.extend({}, vex.dialog.buttons.YES, {
             className: 'col-lg-4 col-lg-pull-2 col-xs-5 col-xs-pull-1 btn-red vex-ext',
             text: 'Go to aesseal.com',
             click: function() {
               window.open('https://www.aesseal.com/','_blank');
             }
           }),
           $.extend({}, vex.dialog.buttons.NO, {
             className: 'col-xs-5 col-xs-pull-1 col-lg-4 col-lg-pull-2 btn-midgrey vex-closes',
             text: 'Remain on this site',
           })
         ],
         afterClose: function() {
           sessionStorage.setItem('vexClosed','closed');
         }
       });
     }
   });
 })(jQuery);
