<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/contact/">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For general inquiries, please <strong>contact us</strong> &rarr;
        </a>
        </p>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    
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
              <small class="glyphicon glyphicon-question-sign"></small>
              You research question
            </legend>
            <div class="form-group">
              <label for="spl-form-contact-method" class="col-sm-4 control-label">
                <button type="button" class="btn btn-xs btn-info hidden-xs" data-toggle="collapse" data-target="#spl-explain-contact-method">
                  <i class="glyphicon glyphicon-info-sign"></i>
                </button>
                Contact method
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-contact-method" name="spl-form[contact-method]">
                  <option value="email" selected>Email</option>
                  <option value="phone">Telephone</option>
                  <option value="postal">Postal Mail</option>
                </select>
                <span class="help-block collapse" id="spl-explain-contact-method">
                  How should we respond? We prefer using email when possible. 
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Your question</label>
              <div class="col-sm-8">
                <span class="help-block">Please be as specific as possible.</span>
                <textarea rows="6" class="form-control required" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>
            
            <?php include 'common/form-login.php'; ?>
            <?php include 'common/form-contact.php'; ?>
            <?php include 'common/form-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    Did you know?
  </div><!-- /.col -->

</div><!-- /.row -->
