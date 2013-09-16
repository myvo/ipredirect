<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
  <meta charset="utf-8">
  <title>Tan Hoa Furniture</title>
</head>

<body>
<div class="content" align="center">
  <ul>
    <li>
	  <a class="lang" data-lang="vi" href="<?php echo $base_url; ?>/vi" >
	  	<em>Tiếp tục bằng Tiếng Việt.</em>
	  </a>
	</li>
  </ul>
	                    
  <ul>
    <li>
      <a class="lang" data-lang="en" href="<?php echo $base_url; ?>/en" >
      	<em>Continue by English language﻿﻿<em>
      </a>
	</li>
  </ul>
</div>
<script type="text/javascript" src="http://drumy.com/misc/jquery.js?v=1.4.4"></script>
<script type="text/javascript">
  $(document).ready(function () {
  	$('a.lang').bind('click', function(e) {
	  var lang = $(this).attr('data-lang');
	  setCookie('user_lang', lang, 7, '/');
	});
  });

  function setCookie(c_name,value,exdays, path) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value + '; path=' + path;
  }
</script>
</body>
</html>
