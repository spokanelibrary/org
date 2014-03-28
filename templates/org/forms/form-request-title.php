<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/request-title-response.php';
  } else {
  include 'field/request-title.php';
}
echo '<pre>';
print_r($crass);
echo '</pre>';
?>
