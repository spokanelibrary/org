<div class="alert alert-success">
  <h3>Thank You! <small>We received your message.</small></h3>
</div>

<div class="row">

</div>

<script id="spl-form-contact-response-tmpl" type="text/x-handlebars-template">



{{#with request}}

  <div class="row-fluid">
    <dl class="dl-horizontal">

    {{#if name}}
      <dt>Your Name</dt>
      <dd>
        <p>
          {{name}}
        </p>
      </dd>
    {{/if}}

    {{#if barcode}}
      <dt>Your Barcode</dt>
      <dd>
        <p>
          {{barcode}}
        </p>
      </dd>
    {{/if}}

    {{#if email}}
      <dt>Your Email</dt>
      <dd>
        <p>
          {{email}}
        </p>
      </dd>
    {{/if}}

    {{#if message}}
      <dt>Your Message</dt>
      <dd>
        <p>
          {{message}}
        </p>
      </dd>
    {{/if}}

    </dl>

    <div class="alert alert-info">
      We will respond to your inquiry as soon as possible.
    </div>

  </div><!-- /.row-fluid -->

{{/with}}
</script>

<?php
/*
echo '<pre>';
print_r($GLOBALS['crass_response']->result);
print_r($GLOBALS['crass_response']->request); 
echo '</pre>';
*/
?>