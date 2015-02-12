<?php 
$spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']); 
?>
<div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>
<form class="form-inline spl-form" id="spl-form-signup" method="post" role="form">
    <?php //include '../common/crass-response.php'; ?>  
  a
    <?php include '../common/field-login.php'; ?>
  b
  <?php include 'common/field-login.php'; ?>
  c
  <?php include '/common/field-login.php'; ?>
  d
  <?php include 'field/common/field-login.php'; ?>
  e
  <?php echo realpath(__DIR__.'/../common/'); ?>

  <input type="hidden" id="spl-form-id" name="spl-form[id]" value="signup" />
  
  <input type="hidden" 
        id="spl-form-ip" 
        name="spl-form[ip]" 
        value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
        />

  <?php  
  switch ( $_REQUEST['spl-form']['card']['type'] ) {
    case 'adult':
    case 'nonres':
      include 'card-adult.php';
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
