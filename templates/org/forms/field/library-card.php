<?php 
if ( isset($_REQUEST['spl-form']['card']['type']) ) {
  include 'signup/card-signup.php';
} else {
  //include 'signup/card-type.php';
  include 'signup/card-signup.php';
}
?>
