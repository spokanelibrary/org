<?php $bib = get_query_var('bib'); ?>

<div class="row">

  <div class="col-md-12">
    <?php echo do_shortcode('[spl_widget login-form label post=self intro="Please login to get started."]'); ?>

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
              <?php echo $_SESSION['spl']['user']->borrowerBarcode; ?>
            </legend>

            <div class="col-md-4">
              <label><?php echo $_SESSION['spl']['user']->name; ?></label>
              <p>
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#spl-form-request-edit-contact">
                  <i class="glyphicon glyphicon-edit"></i>
                  Edit my contact info
                  <span class="caret"></span>
                </button>
              </p>
            </div>
            <div class="col-md-4">
              <?php include 'common/field-contact-location.php'; ?>  
            </div>
            <div class="col-md-4">
              <p>
                <a href="#" class="prevent-default" data-toggle="collapse" data-target="#spl-form-request-hold-more-info">
                  <i class="glyphicon glyphicon-info-sign"></i>
                  More about holds
                  <span class="caret"></span>
                </a>
              </p> 
            </div>
          <div class="collapse" id="spl-form-request-edit-contact">
            <div class="col-md-12">          
              <p>
                <b>Note:</b> You can edit your information here for <i>this request only</i>.
              </p>
              <?php include 'common/shared/field-contact-name.php'; ?>
              <?php include 'common/shared/field-contact-info.php'; ?>
            </div>
            <div class="col-md-8 col-md-offset-4">
              <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#spl-form-request-edit-contact">
                <i class="glyphicon glyphicon-check"></i>
                OK
              </button>
            </div>
          </div>
          <div class="collapse" id="spl-form-request-hold-more-info">
            <div class="col-md-12">
              <div class="alert alert-info">
                <button type="button" class="close" data-toggle="collapse" data-target="#spl-form-request-hold-more-info">×</button>
                <h5>About Hold Requests</h5>
                <p>
                  If we purchase your requested title or obtain it through Interlibrary Loan, we will place a Hold Request on your account.
                  <br>
                  <b>Please note:</b> We cannot place Hold Requests on downloadable materials.
                </p>
              </div>
            </div>
          </div>
            
          </fieldset>

          <?php 
          if ( !empty($bib) ) {
            $title = SPL_Widget::getBib($bib);
            include 'request/material-request-pda.php';
          } else {
            include 'request/material-choose.php';
            include 'request/material-panels.php'; 
          }
          ?>
          
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

<!-- tmpl: holding found -->
<script id="spl-form-request-holding-tmpl" type="text/x-handlebars-template">
<div class="alert alert-warning">
  
  <button type="button" class="close" data-dismiss="alert">×</button>
  
  <h5>Wait just a minute&hellip;</h5>
  <p>
    It looks like we have that item in our catalog. 
    <br />
    We would really appreciate it if you could <a rel="external" href="http://search.spokanelibrary.org/isbn/{{isbn}}">check this link</a> before proceeding.
  </p>
  <p>
    <em>Thanks!</em>
  </p>
</div><!-- /.alert -->
<input type="hidden" id="spl-form-holding" name="spl-form[holding]" value="true" /> 
</script>
