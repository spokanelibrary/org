<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your request:</h4>
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
          <strong><?php echo $crass->request['email']; ?></strong>
          <br>
          We will keep you informed via email about the status of your request.
        </p>

      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['message']) ) : ?>
      <dt>Your Message</dt>
      <dd>
        <p>
          <?php echo $crass->request['message']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['title']) ) : ?>
      <dt>Requested Title</dt>
      <dd>
        <p>
          <?php echo $crass->request['title']; ?>
          <?php if( !empty($crass->request['author']) ) : ?>
          <br>
          <em>by</em> <?php echo $crass->request['author']; ?>
          <?php endif; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['url']) ) : ?>
      <dt>Link on the web</dt>
      <dd>
        <p>
          <a href="<?php echo $crass->request['url']; ?>"><?php echo $crass->request['url']; ?></a>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['hold']) ) : ?>
      <dt>Hold Request</dt>
      <dd>
        <p>
          If your account is in good standing we will place a hold request on this item for you.
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
