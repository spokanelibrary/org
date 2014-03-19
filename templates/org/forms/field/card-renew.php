<div class="row">

  <div class="col-md-8">

  <?php 
  $renew =  json_decode(do_shortcode('[spl_widget card-renew]'));
  if ( isset($renew->login) )  {
    echo do_shortcode('[spl_widget login-form label post=renew intro="Please login to get started."]');
  } else {
    switch ( $renew->borrower->status ) {
      case 'ok':
  ?>

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
            

            <input type="hidden" name="spl-form[previous][name]" value="{{name}}" />
            <input type="hidden" name="spl-form[previous][email]" value="{{email}}" />
            <input type="hidden" name="spl-form[previous][phone]" value="{{phone}}" />
            <input type="hidden" name="spl-form[previous][street]" value="{{street}}" />
            <input type="hidden" name="spl-form[previous][city-st]" value="{{city_st}}" />
            <input type="hidden" name="spl-form[previous][zip]" value="{{zip}}" />

            <input type="hidden" name="spl-form[borrower]" value="{{borrower}}" />
            <input type="hidden" name="spl-form[time]" value="{{time}}" />


            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">My name</label>
              <div class="col-sm-8">
                <p class="form-control-static text-muted">
                  Our system stores names LAST FIRST MIDDLE.
                </p>
                <input type="text" class="form-control required" id="spl-form-name" name="spl-form[contact][name]" value="<?php echo $renew->borrower->name; ?>" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-email" class="col-sm-4 control-label">My email address</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-email" name="spl-form[contact][email]" value="<?php echo $renew->borrower->email; ?>" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-phone" class="col-sm-4 control-label">My phone number</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-phone" name="spl-form[contact][phone]" value="<?php echo $renew->borrower->phone; ?>" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-street" class="col-sm-4 control-label">Street address</label>
              <div class="col-sm-8">
                <textarea rows="3" class="form-control required" id="spl-form-street" name="spl-form[contact][street]"><?php echo $renew->borrower->street; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-city-st" class="col-sm-4 control-label">City, ST</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-city-st" name="spl-form[contact][city-st]" value="<?php echo $renew->borrower->city_st; ?>" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-zip" class="col-sm-4 control-label">ZIP Code</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-zip" name="spl-form[contact][zip]" value="<?php echo $renew->borrower->zip; ?>" placeholder="">
              </div>
            </div>


            <pre>
            <?php print_r($renew->borrower); ?>
            </pre>

            <?php //include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php //include 'common/field-contact.php'; ?>
            <?php include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
        
  <?php
        break;
      case 'problem':
        echo '<div class="alert alert-warning">';
        echo $renew->borrower->status_msg;
        echo '</div>';
        break;
      case 'bad':
        echo '<div class="alert alert-danger">';
        echo $renew->borrower->status_msg;
        echo '</div>';
      default:
        echo '<div class="alert alert-danger">';
        echo 'An unknown error occurred. Please call our Circulation Desk at 509-444-5333 or <a href="http://www.spokanelibrary.org/contact">contact us</a> for assistance.';
        echo '</div>';
        break;
    }
  } 
  ?>
    
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
