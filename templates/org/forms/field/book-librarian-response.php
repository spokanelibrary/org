<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You! <small>We received your appointment request</small></h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">

    <div class="alert alert-warning">
      <b>Please note:</b>
      This is <em>not</em> a meeting confirmation. 
      Appointments are subject to staff availability.
      A librarian will contact you to confirmation your appointment date and time.
    </div>

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
          Alternate Time: <?php echo $crass->request['datetime']['first']['time']['b']; ?>
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
          Alternate Time: <?php echo $crass->request['datetime']['second']['time']['b']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['appt-location']) ) : ?>
      <dt>Library location</dt>
      <dd>
        <p>
          <?php echo $crass->request['appt-location']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['message']) ) : ?>
      <dt>Your agenda</dt>
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