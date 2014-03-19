<div class="well" style="background:transparent;">

  <form class="form-horizontal spl-form">

    <div id="spl-form-contact-response">
      <h3>Processing <small>your message&hellip;</small></h3>
    </div>

    <!-- this should be a script or move out of js  -->
    <input type="hidden" 
            id="spl-form-id" 
            name="spl-form[id]" 
            value="contact-response" 
            data-response-id="<?php echo $GLOBALS['crass_response']->result['id']; ?>" 
            data-response-contact='<?php echo json_encode($GLOBALS['crass_response']->request); ?>' 
            />
  </form>

</div>

<script id="spl-form-contact-response-tmpl" type="text/x-handlebars-template">

<h3>Thank You! <small>We received your message.</small></h3>

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

echo '<pre>';
print_r($GLOBALS['crass_response']->result);
//print_r($GLOBALS['crass_response']->request); 
echo '</pre>';

?>