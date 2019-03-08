<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/customer-stories-response.php';
  } else {
  include 'field/customer-stories.php';
}
?>

