<?php 
$isbn = null;
if ( is_array($title->titleInfo->ISBN) ) {
  $isbn = $title->titleInfo->ISBN[0];
} elseif ( !is_object($title->titleInfo->author) ) {
  $isbn = $title->titleInfo->ISBN;
}
?>
<fieldset>
  <legend class="text-muted">
    <i class="glyphicon glyphicon-check"></i>
    Finalize this request:
  </legend>

  <div class="panel panel-primary" style="border-left-width:5px;">
    <div class="panel-body">
      <p class="lead">
        <?php echo $title->titleInfo->title; ?>
      </p>
      <div class="col-sm-9">
        <p>
          <?php 
          if ( is_array($title->titleInfo->author) ) {
            foreach ( $title->titleInfo->author as $author ) {
              echo '<strong>'.$title->titleInfo->author.'</strong> ';
            }
          } elseif ( !is_object($title->titleInfo->author) ) {
            echo '<span class="text-muted">by</span> ';
            echo '<strong>'.$title->titleInfo->author.'</strong>';
          }
          ?>
        </p>
        <p>
          This title has not yet been purchased by the library. 
        </p>
        <p>
          At your request the library will purchase this item and will place a hold for you. 
          It may take up to two weeks for the item to be ready for checkout.
        </p>

        <div id="spl-request-isbn" data-bib="<?php echo $isbn; ?>" data-isbn="<?php echo $isbn; ?>"></div>

      </div><!-- /.col -->
      <div class="col-sm-3">
        fpo
      </div><!-- /.col -->
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->

</fieldset>

<?php
echo '<pre>';
print_r($title);
echo '</pre>';

?>


