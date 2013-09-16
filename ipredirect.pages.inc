<?php

function ipredirect_select_lang_page() {
  global $base_url;
  
  $path = drupal_get_path('module', 'ipredirect');
  include $path . '/language.tpl.php';

  exit();
}