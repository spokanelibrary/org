<div class="panel panel-default">

  <div class="panel-body">
    <h3 class="text-success">We received your 3D Printing request.</h3>

    <div class="alert alert-warning">
      <p>
        <b>Please note:</b>
        Your print should be ready in 1-2 weeks. 
        We will contact you when it is finished, or if we have any questions.
      </p>
      <a href="./"><b>Send another file</b> &rarr;</a>
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

      <?php if( !empty($crass->request['phone']) ) : ?>
      <dt>Your Phone</dt>
      <dd>
        <p>
          <?php echo $crass->request['phone']; ?>
        </p>
      </dd>
      <?php endif; ?>


      <?php if( !empty($crass->request['pla-color']) ) : ?>
      <dt>PLA Color</dt>
      <dd>
        <p>
          <?php echo $crass->request['pla-color']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($_FILES['spl-form']['name']['stl-file']) ) : ?>
      <dt>File name</dt>
      <dd>
        <p>
          <?php echo $_FILES['spl-form']['name']['stl-file']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['pickup-location']) ) : ?>
      <dt>Pickup location</dt>
      <dd>
        <p>
          <?php echo $crass->request['pickup-location']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['message']) ) : ?>
      <dt>Your message</dt>
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

echo '<pre>';
//print_r($crass);
print_r($crass->result);
//print_r($crass->request); 
echo '</pre>';

?>