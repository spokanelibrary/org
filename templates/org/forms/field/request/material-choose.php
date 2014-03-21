<!-- ToDo: hide this for cda requests -->

<fieldset>
  <legend class="text-muted">
    <i class="glyphicon glyphicon-search"></i>
    I'm looking for a&hellip;
  </legend>

  <div class="btn-group btn-group-justified" data-toggle="buttons">
    
    <div class="row">
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-book">
            <input class="sr-only" type="radio" name="spl-form[material]" value="book"> 
            <i class="glyphicon glyphicon-book"></i>
            Book
          </label>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-cd-audio-book">
            <input class="sr-only" type="radio" name="spl-form[material]" value="cd-audio-book"> 
            <i class="glyphicon glyphicon-volume-up"></i>
            Book on CD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary">
            <input class="sr-only" type="radio" name="spl-form[material]" value="ebook"> 
            <i class="glyphicon glyphicon-phone"></i> 
            eBook
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary">
            <input class="sr-only" type="radio" name="spl-form[material]" value="dl-audio-book"> 
            <i class="glyphicon glyphicon-headphones"></i>
            Audio Book <small>(download)</small>
          </label>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary">
            <input class="sr-only" type="radio" name="spl-form[material]" value="cd"> 
            <i class="glyphicon glyphicon-music"></i> 
            Music CD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary">
            <input class="sr-only" type="radio" name="spl-form[material]" value="dvd">
            <i class="glyphicon glyphicon-film"></i> 
            DVD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary">
            <input class="sr-only" type="radio" name="spl-form[material]" value="other"> 
            <i class="glyphicon glyphicon-pencil"></i> 
            Other <small>(specify)</small>
          </label>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- ToDo: only show this for residents -->

    <div class="row">
      <div class="col-sm-12">
      <h4 class="text-center">Research Request <small>Interlibrary Loan only</small></h4>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-default">
            <input class="sr-only" type="radio" name="spl-form[material]" value="genealogy"> Genealogy <small>(research copies)</small>
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-default">
            <input class="sr-only" type="radio" name="spl-form[material]" value="page-copy"> Newspaper <small>(microfilm)</small>
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-default">
            <input class="sr-only" type="radio" name="spl-form[material]" value="periodical"> Magazine <small>or</small> Journal
          </label>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->

  </div><!-- /.btn-group -->

</fieldset>

