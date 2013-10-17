<?php
  /*
Plugin Name: 301 Instead
Plugin URI: https://github.com/matchett808/301-instead
Description: 
Version: 0.1
Author: Iain Matchett
Author URI: 
  */

yourls_add_action('pre_redirect','temp_instead_function');
function temp_instead_function($args) {
  $url  = $args[0];
  $code = $args[1];
  if ($code != 301) {
    // Redirect with 302 instead
    yourls_redirect($url,301);
  }
}
