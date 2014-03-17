<?php
if ( !empty($GLOBALS['crass_response']->request) ) {
  include 'field/vital-record-response.php';
  } else {
  include 'field/vital-record.php';
}
?>

