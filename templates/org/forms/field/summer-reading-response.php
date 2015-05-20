<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your Summer Reading Signup:</h4>
    <dl class="dl-horizontal">

      <?php if( !empty($crass->request['name']) ) : ?>
      <dt>Your Name</dt>
      <dd>
        <p>
          <?php echo $crass->request['name']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['age']) ) : ?>
      <dt>Your Age</dt>
      <dd>
        <p>
          <?php echo $crass->request['age']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['branch']) ) : ?>
      <dt>Your Library Branch</dt>
      <dd>
        <p>
          <?php echo $crass->request['branch']; ?>
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