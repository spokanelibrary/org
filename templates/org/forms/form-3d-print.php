<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/3d-print-response.php';
  } else {
  include 'field/3d-print.php';
}
?>

