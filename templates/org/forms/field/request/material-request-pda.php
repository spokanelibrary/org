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

  <div class="alert alert-info">
    <strong>This title has not yet been purchased by the library.</strong>
    <br>
    At your request the library will purchase this item and will place a hold for you. 
    It may take up to two weeks for the item to be ready for checkout.
  </div><!-- /.alert -->
  
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
        
        <div id="syndetics-summary"></div>

      </div><!-- /.col -->
      <div class="col-sm-3">
        <?php if ( !empty($isbn) ) : ?>
        <img class="img-responsive img-rounded" style="max-height:260px;" title="'.$bib->title.'" alt="Cover Image" src="http://contentcafe2.btol.com/ContentCafe/jacket.aspx?UserID=ebsco-test&Password=ebsco-test&Return=T&Type=M&Value=<?php echo $isbn; ?>">
        <?php endif ?>
      </div><!-- /.col -->
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->


</fieldset>

<div id="spl-request-isbn" data-bib="<?php echo $isbn; ?>" data-isbn="<?php echo $isbn; ?>"></div>

<script id="syndetics-summary-tmpl" type="text/x-handlebars-template">
{{#if syndetics.summary}}
  {{#unless syndetics.summary.empty}}
    <hr>
    <h4>About <em>{{syndetics.summary.title}}</em></h4>
    {{syndetics.summary.text}}
  
  {{else}}
    <p>
      No summary available.
    </p>
  {{/unless}}
{{else}}
  <p>
    No summary available.
  </p>
{{/if}}
</script>

<?php
echo '<pre>';
print_r($title);
echo '</pre>';

?>


