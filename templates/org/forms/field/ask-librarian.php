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
              Request research assistance
            </legend>
            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">My research question</label>
              <div class="col-sm-8">
                <label class="text-muted form-control-static">Please be as specific as possible with your question.</label>
                <textarea rows="6" class="form-control required" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>
            
            <?php include 'common/form-contact-method.php'; ?>
            <?php include 'common/form-login.php'; ?>
            <?php include 'common/form-contact.php'; ?>
            <?php include 'common/form-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4>
          <i class="glyphicon glyphicon-phone-alt"></i>
          Phone it in
        </h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>     
          You can also reach us on the <em>Telephone Reference Line:</em> <strong>509.444.5336</strong> during Downtown Library hours.
        </p>    
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4>
          From out of town?
        </h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>     
          Spokane Public Library will gladly research Spokane topics for out-of-town customers. 
        </p>
        <p>
          For general research questions, please contact your local library.
        </p>    
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
