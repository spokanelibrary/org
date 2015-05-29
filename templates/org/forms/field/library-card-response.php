
<?php if ( isset( $crass->result ) && ( !isset($crass->result['error']) ) ) : ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Here is your new library card number</h3>
  </div>
  <div class="panel-body">
    <?php
    if ( is_array($crass->result) ) {
      foreach ( $crass->result as $c => $card ) {
        echo '<h4>'.$card['barcode'].'</h4>';
      }
    }
    ?>
  </div>
</div><!-- /.panel -->

<h3>What's next?</h3>

<h4></h4>



<?php else: ?>

<div class="alert alert-danger">

  <h2>Oops!</h2>

  <p>
    There was a problem creating your new card. We apologize for the hassle. 
  </p>
  <p>
    You can <a href="/contact/">contact us</a> or see a staff member at the circulation desk.
  </p>



</div><!-- /.alert -->

<?php endif; ?>

<?php


echo '<pre>';
echo 'Result';
print_r($crass->result);
echo 'Request';
print_r($crass->request); 
echo '</pre>';

?>