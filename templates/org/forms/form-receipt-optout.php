<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/receipt-optout-response.php';
  } else {
  include 'field/receipt-optout.php';
}
?>

