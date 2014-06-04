<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your appointment request:</h4>
    <dl class="dl-horizontal">

      <?php if( !empty($crass->request['name']) ) : ?>
      <dt>Your Name</dt>
      <dd>
        <p>
          <?php echo $crass->request['name']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['barcode']) ) : ?>
      <dt>Your Library Card</dt>
      <dd>
        <p>
          <?php echo $crass->request['barcode']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['email']) ) : ?>
      <dt>Your Email</dt>
      <dd>
        <p>
          <?php echo $crass->request['email']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['datetime']['first']['date']) ) : ?>
      <dt>Date (First Choice)</dt>
      <dd>
        <p>
          <?php echo $crass->request['datetime']['first']['date']; ?>
        </p>
        <p>
          Preferred Time: <?php echo $crass->request['datetime']['first']['time']['a']; ?>
        </p>
        <p>
          Alternate Time: <?php echo $crass->request['datetime']['first']['time']['a']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['datetime']['second']['date']) ) : ?>
      <dt>Date (Second Choice)</dt>
      <dd>
        <p>
          <?php echo $crass->request['datetime']['second']['date']; ?>
        </p>
        <p>
          Preferred Time: <?php echo $crass->request['datetime']['second']['time']['a']; ?>
        </p>
        <p>
          Alternate Time: <?php echo $crass->request['datetime']['second']['time']['a']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['message']) ) : ?>
      <dt>You plan to discuss</dt>
      <dd>
        <p>
          <?php echo $crass->request['message']; ?>
        </p>
      </dd>
      <?php endif; ?>

    </dl>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php
/*
echo '<pre>';
//print_r($crass);
//print_r($crass->result);
print_r($crass->request); 
echo '</pre>';
*/
?>