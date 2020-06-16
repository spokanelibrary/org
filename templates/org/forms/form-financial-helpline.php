<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/financial-helpline-response.php';
  } else {
  include 'field/financial-helpline.php';
}
?>

