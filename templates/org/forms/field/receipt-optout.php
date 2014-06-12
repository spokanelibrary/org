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

OK

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