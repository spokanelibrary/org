<div class="row">

  <div class="col-md-8">

    <?php 
    $renew =  json_decode(do_shortcode('[spl_widget card-renew]'));
    if ( isset($renew->login) )  {
      echo do_shortcode('[spl_widget login-form label post=renew intro="Please login to get started."]');
    } else {
      switch ( $renew->borrower->status ) {
        case 'ok':
          print_r($renew->borrower);
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
