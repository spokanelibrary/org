<div class="row">

  <div class="col-md-8">
    
    <!-- <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/ask">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For research questions, please <strong>ask a librarian</strong> &rarr;
        </a>
        </p>
      </div> --><!-- /.panel-body -->
    <!-- </div> --><!-- /.panel -->
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-contact" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="contact" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-envelope"></small>
              How has the library impacted you?
            </legend>


            
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">My Story</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>
            
            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">Contact Information</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-name" name="spl-form[name]"></textarea>
              </div>
            </div>
            
            <?php include 'common/field-submit.php'; ?>
            
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
      <a class="btn btn-block btn-primary" title="How do I?" href="/faq">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>
  </div><!-- /.col -->

</div><!-- /.row -->
