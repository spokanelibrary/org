<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
  <h4>We received your message:</h4>

  <dl class="dl-horizontal">

    <dt>Your Name</dt>
    <dd>
      <p>
        {{name}}
      </p>
    </dd>

    <dt>Your Library Card</dt>
    <dd>
      <p>
        {{barcode}}
      </p>
    </dd>

    <dt>Your Email</dt>
    <dd>
      <p>
        {{email}}
      </p>
    </dd>

    <dt>Your Message</dt>
    <dd>
      <p>
        {{message}}
      </p>
    </dd>

  </dl>

  </div><!-- /.panel-body -->
</div><!-- /.panel -->
<?php

echo '<pre>';
print_r($GLOBALS['crass_response']);
print_r($GLOBALS['crass_response']->result);
print_r($GLOBALS['crass_response']->request); 
echo '</pre>';

?>