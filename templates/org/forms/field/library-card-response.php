
<?php if ( isset( $crass->result ) ) : ?>

<div class="alert alert-success">
  
  <h2>Success!</h2>

</div><!-- /.alert -->

<?php else: ?>

<div class="alert alert-error">

  <h2>Oops!</h2>


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