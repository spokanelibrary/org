
<?php if ( isset( $crass->result ) && ( !isset($crass->result['error']) ) ) : ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Here is your new library card</h3>
  </div>
</div><!-- /.panel -->

<?php else: ?>

<div class="alert alert-danger">

  <h2>Oops!</h2>

  <p>
    We ran into a problem creating your new card and apologize for the hassle. 
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