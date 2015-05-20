<?php
$crass = wp_get_crass_response();
print_r($crass);
  echo 'test';
if ( !empty($crass->request) ) {
  include 'field/summer-reading-response.php';
  } else {
  include 'field/summer-reading.php';
}
?>

