<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  print_r($crass->result);

  include 'field/summer-reading-response.php';
  } else {
  include 'field/summer-reading.php';
}
?>

