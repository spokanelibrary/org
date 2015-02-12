<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/library-card-response.php';
  } else {
  include 'field/library-card.php';
}
?>

