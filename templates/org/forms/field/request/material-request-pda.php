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

      <div class="row">
        <div class="col-sm-9">
          
          <div class="form-group">
            <label for="spl-form-message" class="col-sm-4 col-md-3 control-label">Comments or Questions</label>
            <div class="col-sm-8 col-md-9">
              <p class="form-control-static">
                How did you hear about this title?
              </p>
              <textarea rows="4" class="form-control" id="spl-form-message" name="spl-form[message]"></textarea>
            </div>
          </div><!-- /.form-group -->

          <div class="form-group">
            <div class="col-sm-8 col-md-9 col-sm-offset-4 col-md-offset-3">
              <button type="submit" class="btn btn-block btn-success">
                <small class="glyphicon glyphicon-check"></small>
                Request Now &rarr;
              </button>
            </div>
          </div><!-- /.form-group -->

        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.panel-body -->
    <div class="panel-footer">
      <input type="text" name="spl-form['title']" value="<?php echo $title->titleInfo->title; ?>">
      <input type="text" name="spl-form['author']" value="<?php echo $title->titleInfo->author; ?>">
      <input type="text" name="spl-form['isbn']" value="<?php echo $isbn; ?>">
      <input type="text" name="spl-form['material']" value="pda">
      <input type="text" name="spl-form['hold']" value="true">
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


