<?php
print_r($GLOBALS['crass_response']);
if ( !empty($GLOBALS['crass_response']->request) ) {
  include 'field/contact-us-response.php';
  } else {
  include 'field/contact-us.php';
}
?>

