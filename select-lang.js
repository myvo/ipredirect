(function($) {
Drupal.behaviors.ipredirect = {};
Drupal.behaviors.ipredirect.attach = function(context, settings) {
  $('a.lang').bind('click', function(e) {
  	var lang = $(this).attr('data-lang');
  	setCookie('user_lang', lang, 7, '/');
  });
};

function setCookie(c_name,value,exdays, path) {
  var exdate=new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  document.cookie=c_name + "=" + c_value + '; path=' + path;
}

})(jQuery);