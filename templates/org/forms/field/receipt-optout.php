<?php
$endpoint = 'http://api.spokanelibrary.org/connect/receipt-optout/lookup';
$borrower = json_decode(Crass_Response::curlPostProxy($endpoint, array( 'apikey'=>getenv('SPL_KEY'), 
                                                                        'params'=>array( 'batch'=>$_REQUEST['b']
                                                                                        ,'hash'=>$_REQUEST['h'])
                                                                      )));
?>

<?php
if ( array_key_exists('number', $borrower) ) :
?>

<div class="row">
  <div class="col-sm-6">    
    <p>
      We now email checkout and renewal receipts, as well as <a href="/ical/">ical reminders</a>, to all Library customers with an email address.
      
    </p>
  </div><!-- /.col -->
  <div class="col-sm-6">    
    <p>
      We understand that not everyone needs an emailed receipt.
      You've come to the right place if you wish to stop receiving these receipts.
    </p>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-horizontal spl-form" id="spl-form-optout" method="post" role="form">      
      <?php include 'common/crass-response.php'; ?>
      <input type="hidden" id="spl-form-id" name="spl-form[id]" value="receipt-optout" />
  
      <input type="hidden" id="spl-form[borrower]" name="spl-form[batch]" value="<?php echo $_REQUEST['b']; ?>" />
      <input type="hidden" id="spl-form[borrower]" name="spl-form[hash]" value="<?php echo $_REQUEST['h']; ?>" />

      <input type="hidden" 
            id="spl-form-ip" 
            name="spl-form[ip]" 
            value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
            />

      <fieldset>
        <legend class="text-muted">
          <small class="glyphicon glyphicon-envelope"></small>
          Emailed Receipt Preferences
        </legend>

        <div class="row">
          <div class="col-md-8"> 
            
            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">Your Name</label>
              <div class="col-sm-8">
                <input type="text" id="spl-form-name" name="spl-form[name]" class="form-control" value="<?php echo $borrower->name; ?>" disabled >
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-barcode" class="col-sm-4 control-label">Your Library Card</label>
              <div class="col-sm-8">
                <input type="text" id="spl-form-barcode" name="spl-form[barcode]" class="form-control" value="<?php echo $borrower->barcode; ?>" disabled >
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-email" class="col-sm-4 control-label">Your Email Address</label>
              <div class="col-sm-8">
                <input type="text" id="spl-form-email" name="spl-form[email]" class="form-control" value="<?php echo $borrower->email; ?>" disabled >
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" name="spl-form[receipt-optout]" value="true" class="btn btn-block btn-danger spl-submit">
                  <i class="glyphicon glyphicon-remove-circle"></i> 
                  Please do not send me any more email receipts &rarr;
                </button>
                <span class="help-block">
                  Press this red button to stop receiving receipts
                </span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" name="spl-form[receipt-optout-cancel]" value="true" class="btn btn-block btn-success spl-submit">
                  <i class="glyphicon glyphicon-ok-sign"></i> 
                  Nevermind, I'd like to continue receiving receipts &rarr;
                </button>
                <span class="help-block">
                  Press this green button to continue receiving receipts
                </span>
              </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </fieldset>
    </form>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php else: ?>

<div class="alert alert-warning">
  <h4>Oops!</h4>
  <p>
   We apologize for the inconvenience, but we are unable find you in our system.
  </p>
  <p>
    If you landed here by clicking a link in a receipt email please call us at 509.444.5333 or <a href="/contact/">send us an email</a>.
  </p>
</div>

<?php endif; ?>