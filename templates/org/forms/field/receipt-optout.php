<?php


$endpoint = 'http://api.spokanelibrary.org/connect/receipt-optout/lookup';
$borrower = json_decode(Crass_Response::curlPostProxy($endpoint, array( 'apikey'=>getenv('SPL_KEY'), 
                                                                        'params'=>array( 'batch'=>$_REQUEST['b']
                                                                                        ,'hash'=>$_REQUEST['h'])
                                                                      )));

/*
print_r($borrower);
*/
?>
