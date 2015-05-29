
<?php if ( isset( $crass->result ) && ( !isset($crass->result['error']) ) ) : ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Here is your new library card</h3>
  </div>
</div><!-- /.panel -->

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