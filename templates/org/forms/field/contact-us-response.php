<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your message:</h4>
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

      <?php if( !empty($GLOBALS['crass_response']->request['message']) ) : ?>
      <dt>Your Message</dt>
      <dd>
        <p>
          <?php echo $GLOBALS['crass_response']->request['message']; ?>
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