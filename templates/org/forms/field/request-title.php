<div class="row">

  <div class="col-md-12">
    
    <?php echo do_shortcode('[spl_widget login-form label post=request intro="Please login to get started."]'); ?>
    
    <?php echo get_query_var('bib') ?>

    <?php if ( true == do_shortcode('[spl_widget auth-user]') ) : ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-request" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="request" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-barcode"></small>
              <?php print_r($_SESSION['spl']['user']); ?>
            </legend>

            <?php echo $_SESSION['spl']['user']->borrowerBarcode; ?>

            <p>
              We'll have some contact info here.
            </p>
            <?php //include 'common/field-contact.php'; ?>

          </fieldset>
            <?php include 'request/title.php'; ?>
            
            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php //include 'common/field-submit.php'; ?>
            
          
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

    <?php endif; ?>

  </div><!-- /.col -->

</div><!-- /.row -->
