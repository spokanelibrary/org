<?php


$endpoint = 'http://api.spokanelibrary.org/connect/receipt-optout/lookup';
$borrower = Crass_Response::jsonCurl($endpoint, array( 'apikey'=>getenv('SPL_KEY'), 
                                                                        'params'=>array( 'batch'=>$_REQUEST['b']
                                                                                        ,'hash'=>$_REQUEST['h'])
                                                                      ));

/*
print_r($borrower);
*/
?>
