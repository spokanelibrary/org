<?php

echo '<pre>';
print_r($GLOBALS['crass_response']);
echo '</pre>';

if ( !empty($GLOBALS['crass_response']->request) ) {
  include 'field/card-renew-response.php';
  } else {
  include 'field/card-renew.php';
}

?>

