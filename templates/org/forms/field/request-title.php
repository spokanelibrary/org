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
            <?php include 'common/field-contact-location.php'; ?>
            </div>
            <div class="col-md-8">
              <label><?php echo $_SESSION['spl']['user']->name; ?></label>
              <p>
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#spl-form-request-edit-contact">
                  <i class="glyphicon glyphicon-edit"></i>
                  Edit my contact info
                  <span class="caret"></span>
                </button>
              </p>
            </div>
          <div class="collapse" id="spl-form-request-edit-contact">
            <div class="col-md-12">          
              <span class="help-block"><b>Note:</b> You can edit your info here for <i>this request only</i>.</span>
              <?php include 'common/shared/field-contact-name.php'; ?>
              <?php include 'common/shared/field-contact-info.php'; ?>
            </div>
            <div class="col-md-8 col-md-offset-4">
              <button type="button" data-toggle="collapse" data-target="spl-form-request-edit-contact">
                <i class="glyphicon glyphicon-check"></i>
                OK
              </button>
            </div>
          </div>
            
          </fieldset>
            <?php 
            if ( !empty($bib) ) {
              echo '<pre>';
              $api = 'http://api.spokanelibrary.org/v2/hzws/lookup';
              $params = array('bib'=>$bib);
              $title = json_decode(
                        SPL_Widget::curlPostProxy($api, array('params'=>$params))
                      );

              print_r($title);
              //print_r( SPL_Widget::curlPostProxy('http://api.spokanelibrary.org/v2/hzws/lookup?params[bib]=12345') );
              echo '</pre>';
            } else {
              include 'request/title.php'; 
            }
            ?>
            
            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php include 'common/field-submit.php'; ?>
            
          
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

    <?php endif; ?>

  </div><!-- /.col -->

</div><!-- /.row -->
