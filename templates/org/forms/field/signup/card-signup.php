<?php 
$spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']); 
?>
<div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>
<form class="form-horizontal spl-form spl-waypoint-hide" id="spl-form-signup" method="post" role="form">

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
