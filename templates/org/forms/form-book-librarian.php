<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/book-librarian-response.php';
  } else {
  include 'field/book-librarian.php';
}
?>

