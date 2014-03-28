<fieldset>
  <legend class="text-muted">
    <i class="glyphicon glyphicon-check"></i>
    Finalize this request:
  </legend>

  <div class="panel panel-primary" style="padding-left-width:5px;">
    <div class="panel-body">
      <p class="lead">
        <?php echo $title->titleInfo->title; ?>
      </p>
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->

</fieldset>

<?php
echo '<pre>';
print_r($title);
echo '</pre>';

?>


