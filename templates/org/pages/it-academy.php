<?php

function spl_get_network_source($ip=null) {
  $source = null;

  $ip = trim($ip);


  if ( strpos ($ip, '199.237.16') === 0 ) {
    $source = 'library'; // default
    if ( '199.237.16.1' == $ip ) {
      $source = 'minor'; // kids proxy
    } else {
      $source = 'public'; // dt public
    }
  } elseif ( strpos ($ip, '10.14') === 0 ) {
    $source = 'library'; // default
    if (strpos ($ip, '10.14.1') === 0) {
      if (strpos ($ip, '10.14.18') === 0) {
        $source = 'staff'; // hy staff
      } elseif (strpos ($ip, '10.14.19') === 0) {
        $source = 'so'; // public/staff combined
      } elseif (strpos ($ip, '10.14.118') === 0) {
        $source = 'hy'; // hy public
      } elseif (strpos ($ip, '10.14.121') === 0) {
        $source = 'es'; // es public
      } elseif (strpos ($ip, '10.14.122') === 0) {
        $source = 'sh'; // sh public
      } 
    } elseif (strpos ($ip, '10.14.2') === 0) {
      if (strpos ($ip, '10.14.200') === 0) {
        $source = 'wireless'; // all wireless networks
      } elseif (strpos ($ip, '10.14.21') === 0) {
        $source = 'staff'; // es staff
      } elseif (strpos ($ip, '10.14.22') === 0) {
        $source = 'staff'; // sh staff
      } elseif (strpos ($ip, '10.14.23') === 0) {
        $source = 'it'; // it public/staff combined
      } 
    } elseif (strpos ($ip, '10.14.5') === 0) {
      if (strpos ($ip, '10.14.50') === 0) {
        $source = 'staff';
      } elseif (strpos ($ip, '10.14.51') === 0) {
        $source = 'staff';
      }
    }
  }

  if ( is_null($source) || ('external' == $_REQUEST['rel']) ) {
    $source = 'external';
  }

  return $source;
}



?>

<div class="row">
	<div class="col-sm-6">
		<div class="alert alert-info">
			<p class="lead">
				<b>Returning Users:</b> IT Academy Login
			</p>
			<p>
        <a href="https://itacademy.microsoft.com?whr=uri:MicrosoftAccount"
          rel="external"
          class="btn btn-block btn-info"
          title="For returning users"
          ><b>I have already signed up for Microsoft IT Academy</b>
          &rarr;
        </a>
      </p>
      <span class="help-block">
        Use this link <b>only</b> if you have <em>already</em> signed up.
      </span>
		</div><!-- ./alert -->
	</div><!-- ./col -->
	<div class="col-sm-6">
		<div class="alert alert-success">
			<p class="lead">
        <b>Returning Users:</b> IT Academy Registration
      </p>
      <div class="it-academy-login">
        <p class="spl-login" data-callback-method="splLoadITAcademyLinks">
          <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#spl-login-modal">
            <i class="glyphicon glyphicon-user"></i>
            Login to My Account
          </button>
        </p>
        <span class="help-block">Login to your Library account to get started.</span>
      </div>
      <div class="it-academy-links">
        Ok, here is your link:
      </div>

			<?php echo ucfirst(spl_get_network_source($_SERVER['REMOTE_ADDR'])); ?>
		</div><!-- ./alert -->
	</div><!-- ./col -->
</div><!-- ./row -->
