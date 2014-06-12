<?php
$endpoint = 'http://api.spokanelibrary.org/connect/receipt-optout/lookup';
$borrower = Crass_Response::jsonCurl($endpoint, array( 'apikey'=>getenv('SPL_KEY'), 
                                                                        'params'=>array( 'batch'=>$_REQUEST['b']
                                                                                        ,'hash'=>$_REQUEST['h'])
                                                                      ));
?>

<?php
if ( array_key_exists('number', $borrower) ) :
print_r($borrower);
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
  
</div><!-- /.row-fluid -->

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

        <div class="form-group">
          <label for="spl-form-name" class="col-sm-4 control-label">Your Name</label>

          <div class="col-sm-8">
            <input type="text" id="spl-form-name" name="spl-form[name]" class="form-control" value="<?php echo $borrower->name; ?>" disabled >
          </div>
        </div>


      </fieldset>
    </form>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php else: ?>

<div class="alert alert-error">

  <h4>Oops!</h4>

  <p>
   We apologize for the inconvenience, but we are unable find you in our system.
  </p>

  <p>
    If you landed here by clicking a link in a receipt email please call us at 509.444.5333 or <a href="/contact/">send us an email</a>.
  </p>

</div>

<?php endif; ?>