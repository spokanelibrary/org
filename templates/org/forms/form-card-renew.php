<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/card-renew-response.php';
  } else {
  include 'field/card-renew.php';
}

?>

