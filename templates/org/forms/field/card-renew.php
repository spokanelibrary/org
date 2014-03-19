<div class="row">

  <div class="col-md-8">

    <?php //echo do_shortcode('[spl_widget login-form label post=renew intro="Please login to get started."]'); ?>

    <?php $renew =  //json_decode(do_shortcode('[spl_widget card-renew]')); ?>
    
    <?php
      echo '<pre>';
      echo 'request:';
      echo '<br>';
      echo print_r($_REQUEST['spl-login'], true);
      echo '<br>';
      echo 'session:';
      echo '<br>';
      echo print_r($_SESSION['spl']['auth'], true); 
      echo '</pre>';
      //echo 'object:';
      //echo print_r($renew, true);
    ?>
    <?php //if ( !empty($renew->html) ) : ?>
    <?php //echo $renew->html; ?>
    <?php //elseif (isset($renew->status) && empty($renew->html) ) : ?>
    <?php //echo print_r($renew, true); ?>
    <?php //endif; ?>
    
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-renew" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="renew" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-barcode"></small>
              Renew your card
            </legend>
            
           
            
            <?php //echo '<pre>'.print_r($_SESSION['spl'], true).'</pre>'; ?>

            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php //include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <?php echo do_shortcode('[spl_widget custom-page page=contact-info]'); ?>
    <h4 class="text-muted">
      Asked &amp; answered
    </h4>
    <p>
      <a class="btn btn-block btn-primary" title="How do I?" href="/how">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>
  </div><!-- /.col -->

</div><!-- /.row -->
