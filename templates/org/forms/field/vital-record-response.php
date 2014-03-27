<?php 
  $crass = wp_get_crass_response();
  if ( !empty($crass) ) {
    print_r($crass);
  }
?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your request:</h4>
    <dl class="dl-horizontal">

      <?php if( !empty($GLOBALS['crass_response']->request['name']) ) : ?>
      <dt>Your Name</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['name']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($GLOBALS['crass_response']->request['barcode']) ) : ?>
      <dt>Your Library Card</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['barcode']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($GLOBALS['crass_response']->request['email']) ) : ?>
      <dt>Your Email</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['email']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($GLOBALS['crass_response']->request['question']) ) : ?>
      <dt>Your Question</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['question']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($GLOBALS['crass_response']->request['question']) ) : ?>
      <dt>Your Question</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['question']; ?>
        </p>
      </dd>
      <?php endif; ?>


    </dl>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php
/*
echo '<pre>';
//print_r($GLOBALS['crass_response']);
//print_r($GLOBALS['crass_response']->result);
print_r($GLOBALS['crass_response']->request); 
echo '</pre>';
*/
?>

    <!--
    <dt>Type of Request</dt>
    <dd>
      <p>
        {{#compare announcement 'obit'}}Obituary{{else}}Birth Announcement{{/compare}}
      </p>
    </dd>
    -->

    {{#if announcement-name}}
      <dt>Name(s) to Search</dt>
      <dd>
        <p>
          {{announcement-name.[1]}}
          <br />
          {{announcement-name.[2]}}
          <br />
          {{announcement-name.[3]}}
        </p>
      </dd>
    {{/if}}

    {{#if announcement-date}}
      <dt>Date(s) to Search</dt>
      <dd>
        <p>
          {{announcement-date.[1]}}
          <br />
          {{announcement-date.[2]}}
          <br />
          {{announcement-date.[3]}}
        </p>
      </dd>
    {{/if}}



    </dl>

    <div class="alert alert-info">
      We will respond to your inquiry as soon as possible.
      <p>
        Thanks for visiting SPL and using our research services <i class="icon icon-thumbs-up"></i>
      </p>
    </div>

  </div><!-- /.row-fluid -->

{{/with}}

</script>
