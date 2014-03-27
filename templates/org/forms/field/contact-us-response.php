<div class="alert alert-success">
  <h3>Thank You!</h3>
</div>

<h4>We received your message</h4>

<dl class="dl-horizontal">

  <dt>Your Name</dt>
  <dd>
    <p>
      {{name}}
    </p>
  </dd>

  <dt>Your Barcode</dt>
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

<script id="spl-form-contact-response-tmpl" type="text/x-handlebars-template">



{{#with request}}

  <div class="row-fluid">
    <dl class="dl-horizontal">

    {{#if name}}
      
    {{/if}}

    {{#if barcode}}
      
    {{/if}}

    {{#if email}}
      
    {{/if}}

    {{#if message}}
      
    {{/if}}

    </dl>


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