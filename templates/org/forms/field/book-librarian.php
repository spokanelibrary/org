<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/ask">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For research questions, please <strong>ask a librarian</strong> &rarr;
        </a>
        </p>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-book" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="book" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-envelope"></small>
              Schedule an appointment
            </legend>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                <button type="button" class="btn btn-xs btn-info hidden-xs" data-toggle="collapse" data-target="#spl-explain-date-1">
                  <i class="glyphicon glyphicon-info-sign"></i>
                </button>
                Date (First choice)
              </label>
              <div class="col-sm-8">
                <div class="input-group date">
                  <input type="text" class="form-control" data-provide="datepicker"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
                <span class="help-block collapse" id="spl-explain-date-1">
                  We use this information to route your inquiry.
                </span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">My message</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>
            
            <?php include 'common/field-contact-method.php'; ?>
            <?php include 'common/field-login.php'; ?>
            <?php include 'common/field-contact.php'; ?>
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
      <a class="btn btn-block btn-primary" title="How do I?" href="/how">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>
  </div><!-- /.col -->

</div><!-- /.row -->
