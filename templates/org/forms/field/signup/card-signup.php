<?php
function spl_get_location_by_ip() {
  $ip = $_SERVER['REMOTE_ADDR'];
  $loc = 'dt';

  if (strpos ($ip, "10.14.21") === 0) {
    $loc = 'es';
  }
  if (strpos ($ip, "10.14.121") === 0) {
    $loc = 'es';
  }
  if (strpos ($ip, "10.14.221") === 0) {
    $loc = 'es';
  }

  if (strpos ($ip, "10.14.18") === 0) {
    $loc = 'hy';
  }
  if (strpos ($ip, "10.14.118") === 0) {
    $loc = 'hy';
  }
  if (strpos ($ip, "10.14.218") === 0) {
    $loc = 'hy';
  }

  if (strpos ($ip, "10.14.23") === 0) {
    $loc = 'it';
  }
  if (strpos ($ip, "10.14.123") === 0) {
    $loc = 'it';
  }
  if (strpos ($ip, "10.14.223") === 0) {
    $loc = 'it';
  }

  if (strpos ($ip, "10.14.22") === 0) {
    $loc = 'sh';
  }
  if (strpos ($ip, "10.14.122") === 0) {
    $loc = 'sh';
  }
  if (strpos ($ip, "10.14.222") === 0) {
    $loc = 'sh';
  }

  if (strpos ($ip, "10.14.19") === 0) {
    $loc = 'so';
  }
  if (strpos ($ip, "10.14.119") === 0) {
    $loc = 'so';
  }
  if (strpos ($ip, "10.14.219") === 0) {
    $loc = 'so';
  }

  return $loc;
}
?>
<form class="form-horizontal spl-form spl-waypoint-hide" id="spl-form-signup" method="post" role="form" <?php if isset($_REQUEST['station']) { echo 'autocomplete="off"' } ;?>  >
  <?php $spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']); ?>
  <div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>

  <?php include realpath(__DIR__.'/../common/crass-response.php'); ?>

  <input type="hidden" id="spl-form-id" name="spl-form[id]" value="signup" />
  
  <input type="hidden" 
        id="spl-form-ip" 
        name="spl-form[ip]" 
        value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
        />

  <input type="hidden" 
        id="spl-signup-selection" 
        name="spl-form[signup][selection]" 
        value="<?php  echo $_REQUEST['spl-form']['card']['type'];?>" 
        />

  <input type="hidden" 
        id="spl-signup-netloc" 
        name="spl-form[signup][netloc]" 
        value="<?php  echo spl_get_location_by_ip();?>" 
        />

  <?php  
  switch ( $_REQUEST['spl-form']['card']['type'] ) {
    case 'adult':
      include 'card-adult.php';
      break;
    case 'nonres':
      include 'card-nonres.php';
      break;
    case 'minor':
      include 'card-minor.php';
      break;
    case 'teacher':
      include 'card-teacher.php';
      break;
    case 'business':
      include 'card-business.php';
      break;
    default:
      break;
  }   
  ?>
</form>
