<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/contact-us-response.php';
  } else {
  include 'field/contact-us.php';
}
?>

