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

      <?php if( !empty($crass->request['question']) ) : ?>
      <dt>Your Question</dt>
      <dd>
        <p>
          <?php echo $crass->request['question']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['announcement']) ) : ?>
      <dt>Type of Request</dt>
      <dd>
        <p>
          <?php 
          if ( 'obit' == $crass->request['announcement'] ) {
            echo 'Obituary';
          } elseif ( 'birth' == $crass->request['announcement'] ) {
            echo 'Birth Announcement';
          }
          ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['announcement-name']) ) : ?>
      <dt>Name(s) to Search</dt>
      <dd>
        <p>
          <?php 
          echo $crass->request['announcement-name'][1].PHP_EOL;; 
          if ( !empty($crass->request['announcement-name'][2]) ) {
            echo '<br>'.PHP_EOL;
            echo $crass->request['announcement-name'][2].PHP_EOL;;
          }
          if ( !empty($crass->request['announcement-name'][3]) ) {
            echo '<br>'.PHP_EOL;
            echo $crass->request['announcement-name'][3].PHP_EOL;;
          }
          ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['announcement-date']) ) : ?>
      <dt>Date(s) to Search</dt>
      <dd>
        <p>
          <?php 
          echo $crass->request['announcement-date'][1].PHP_EOL;; 
          if ( !empty($crass->request['announcement-date'][2]) ) {
            echo '<br>'.PHP_EOL;
            echo $crass->request['announcement-date'][2].PHP_EOL;;
          }
          if ( !empty($crass->request['announcement-date'][3]) ) {
            echo '<br>'.PHP_EOL;
            echo $crass->request['announcement-date'][3].PHP_EOL;;
          }
          ?>
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
