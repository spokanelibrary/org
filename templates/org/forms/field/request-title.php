<div class="row">

  <div class="col-md-8">
    
    <?php echo do_shortcode('[spl_widget login-form label intro="Please login to get started"]'); ?>
    
    <?php echo get_query_var('bib') ?>

    <?php echo do_shortcode('[spl_widget auth-user]'); ?>


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
              <small class="glyphicon glyphicon-tag"></small>
              Suggest a new title or make an ILL request
            </legend>

            
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">My message</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>
            
            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php //include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

  <div class="col-md-4">
  </div><!-- /.col -->

</div><!-- /.row -->
