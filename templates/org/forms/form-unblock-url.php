<div class="row">
  <div class="col-sm-6">
    <p>
      In an effort to maintain a safe and comfortable environment as well as compliance with the <a href="http://www.fcc.gov/guides/childrens-internet-protection-act">Children's Internet Protection Act of 2000</a>, Spokane Public Library automatically filters pornography and other objectionable content in accordance with our <a href="http://www.spokanelibrary.org/internet-policy">Internet Use Policy</a>.
    </p>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <p>
      However, sometimes our software makes the wrong call. 
      You may use the form on this page to request that a specific website be unblocked. 
      These requests are anonymous. 
      You may provide an email address if you wish to be informed about the status of your request.
    </p>
  </div><!-- /.col -->
</div><!-- /.row -->

<!--
<p>
  <a href="#">
    <strong>
      More information about Internet content filtering at the Library &rarr;
    </strong>
  </a>
</p>
-->

<?php 
$spl['crass']['response'] = wp_get_crass_response();
if ( !empty($spl['crass']['response']->request['unblock']) ) {
  include 'field/unblock-url-response.php';
} else {
  $spl['unblock'] = spl_parse_unblock_request();

  // log blocked page
  spl_log_unblock_request($spl['unblock']);
  
  include 'field/unblock-url.php';
}

/*
echo '<pre>';
var_export($_SERVER);
var_export($spl['crass']['response']->status);
echo '</pre>';
*/

function spl_log_unblock_request($request) {

  $api = array();
  $api['endpoint'] = 'http://api.spokanelibrary.org/connect/unblock';
  
  $params = array();
  $params['unblock'] = $request;
  $params['action'] = 'log';
  if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
    $params['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $params['ip'] = $_SERVER['REMOTE_ADDR'];
  }
  $api['params'] = $params;

  $api['key'] = getenv('SPL_KEY');

  //print_r($api);
  
  $result = Crass_Response::jsonCurl($api['endpoint']
                                      , array('apikey'=>$api['key'], 
                                              'params'=>$api['params'])
                                      );

  return $result['id'];
}

function spl_parse_unblock_request() {
  /*
    Reconstruct the original querystring
    WARNING: this is a little bit magic and could be broken by URL handling in future versions of PHP
    In a URI such as http://www.proxy.org/?category=My Category&url=http://www.example.com/path/?a=b&x=y
    ?a=b willl not become part of the $_GET array
    So, we start with $_GET, strip out the 'category' and 'url' paramaters we are working with
    then reparse the 'url' to recover the first query parameter in 'url' (immediately following ?)
  */
  $querystring = $_GET;
  unset($querystring['url']);
  unset($querystring['category']);
  $uri = parse_url($_GET['url']);
  parse_str($uri['query'], $additional);
  $querystring += $additional;
  // build request
  $unblock = array();
  $unblock['url'] = $uri;
  // replace with reconstructed 'query'
  $unblock['url']['query'] = http_build_query($querystring);
  $unblock['category'] = $_GET['category'];

  return $unblock;
}

?>


