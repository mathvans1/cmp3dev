<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


function foundation_get_title() {

    $defaulttitle = drupal_get_title();

    if(!$defaulttitle)
    $defaulttitle = variable_get('site_name');

return $defaulttitle ;

}