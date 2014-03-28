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
      <div class="row">
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
          
          <div id="spl-form-request-holding"></div>

          <div id="syndetics-summary"></div>

        </div><!-- /.col -->
        <div class="col-sm-3">
          <?php if ( !empty($isbn) ) : ?>
          <img class="img-responsive img-rounded" style="max-height:260px;" title="'.$bib->title.'" alt="Cover Image" src="http://contentcafe2.btol.com/ContentCafe/jacket.aspx?UserID=ebsco-test&Password=ebsco-test&Return=T&Type=M&Value=<?php echo $isbn; ?>">
          <?php endif ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.panel-body -->
    <div class="panel-footer">
      <div class="row">
        <div class="col-sm-9">
          <button type="submit" class="btn btn-block btn-success">
            <small class="glyphicon glyphicon-check"></small>
            Place Request Now &rarr;
          </button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.panel-footer -->
  </div><!-- /.panel -->


</fieldset>

<div id="spl-request-isbn" data-bib="<?php echo $isbn; ?>" data-isbn="<?php echo $isbn; ?>"></div>

<script id="syndetics-summary-tmpl" type="text/x-handlebars-template">
{{#if syndetics.summary}}
  {{#unless syndetics.summary.empty}}
    <h4>About <em>{{syndetics.summary.title}}</em></h4>
    <p>
    {{syndetics.summary.text}}
    </p>
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
/*
echo '<pre>';
print_r($title);
echo '</pre>';
*/
?>


