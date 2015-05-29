
<?php if ( isset( $crass->result ) && ( !isset($crass->result['error']) ) ) : ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Welcome to the library! Here is your new card number:</h3>
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

<h2 class="text-muted">What's next?</h2>

<?php if ( isset($_REQUEST['station']) )  : ?>
<blockquote>
  <h4>This is a temporary card. It expires in 30 days.</h4>
  <p>
    Please visit the circulation desk to verify your identy and get a permanent card.
  </p>
  <p>
    <a class="btn btn-primary" href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><i class="glyphicon glyphicon-ok"></i> I'm finished</a>
  </p>
</blockquote>

<?php else: ?>

  
<?php endif; ?>


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


<?php


echo '<pre>';
echo 'Result';
print_r($crass->result);
echo 'Request';
print_r($crass->request); 
echo '</pre>';

?>