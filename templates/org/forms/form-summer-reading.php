<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  /*
  echo '<pre>';
  print_r($crass);
  echo '</pre>';
  */
  include 'field/summer-reading-response.php';
  } else {
  include 'field/summer-reading.php';
}
?>

