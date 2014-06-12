<?php
$spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']);
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
          &rarr;</a>
      </p>
      <span class="help-block">
        Use this link <b>only</b> if you have <em>already</em> signed up.
      </span>
		</div><!-- ./alert -->
	</div><!-- ./col -->
	<div class="col-sm-6">
		<div class="alert alert-success" id="spl-it-academy-links">
      <b>Please wait</b>: loading registration&hellip;
    </div><!-- ./alert -->
	</div><!-- ./col -->
</div><!-- ./row -->

<div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>
<script id="spl-it-academy-link-tmpl" type="text/x-handlebars-template">
  <p class="lead">
    <b>New Users:</b> IT Academy Registration
  </p>
  {{#with msit}}
    {{#if login}}
        <p>
        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#spl-login-modal">
          <i class="glyphicon glyphicon-user"></i>
          <b>Login to My Account &rarr;</b>
        </button>
        </p>
        <span class="help-block">Login to your Library account to get started.</span>

    {{else}}
      {{#each codes}}
        <p>
          <a href="https://itacademy.microsoft.com/AccessCodeRedemption/EnrollmentCode?whr=uri:MicrosoftAccount&key={{code}}"
          rel="external"
          class="btn btn-block btn-success"
          title="Microsoft IT Academy Login"
          ><b>I would like to register for Microsoft IT Academy &rarr;</b>
          </a>
        </p>
      {{/each}}
      <span class="help-block">
        Use this link <strong>only</strong> if you have <em>not yet</em> signed up.
      </span>
    {{/if}}
  {{/with}}
</script>

<!-- END REGISTRATION -->

<img src="/assets/img/logos/mslogo.png" alt="MS Logo"/>

