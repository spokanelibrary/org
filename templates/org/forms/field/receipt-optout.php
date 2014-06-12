<?php
$endpoint = 'http://api.spokanelibrary.org/connect/receipt-optout/lookup';
$borrower = Crass_Response::jsonCurl($endpoint, array( 'apikey'=>getenv('SPL_KEY'), 
                                                                        'params'=>array( 'batch'=>$_REQUEST['b']
                                                                                        ,'hash'=>$_REQUEST['h'])
                                                                      ));
?>

<?php
if ( array_key_exists('number', $borrower) ) :
?>

<div class="row">
  
  <div class="col-sm-6">    
    <p>
      We now email checkout and renewal receipts, as well as <a href="/reminder/">ical reminders</a>, to all Library customers with an email address.
      
    </p>
  </div><!-- /.col -->

  <div class="col-sm-6">    
    <p>
      We understand that not everyone needs an emailed receipt.
      You've come to the right place if you wish to stop receiving these receipts.
    </p>
  </div><!-- /.col -->
  
</div><!-- /.row-fluid -->

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