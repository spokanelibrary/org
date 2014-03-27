<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/vital-record-response.php';
  } else {
  include 'field/vital-record.php';
}
?>

