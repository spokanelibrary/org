<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/card-signup-response.php';
  } else {
  //print_r($crass);
  echo 'test';
  include 'field/card-signup.php';
}
?>

