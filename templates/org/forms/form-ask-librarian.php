<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/ask-librarian-response.php';
  } else {
  include 'field/ask-librarian.php';
}
?>

