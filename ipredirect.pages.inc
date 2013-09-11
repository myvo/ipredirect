<?php

function ipredirect_select_lang_page() {
  $path = drupal_get_path('module', 'ipredirect');
  drupal_add_js($path . '/select-lang.js');

  $output = '<a href="/en" class="lang" data-lang="en">English</a> | <a href="/vi" class="lang" data-lang="vi">Vietnamese</a>';
  return $output;
}