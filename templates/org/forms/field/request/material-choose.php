<fieldset>
  <legend class="text-muted">
    <i class="glyphicon glyphicon-search"></i>
    I'm looking for a&hellip;
  </legend>

  <div class="collapse in" id="spl-form-request-panel-choose">
  <div class="btn-group btn-group-justified" data-toggle="buttons">
    
    <div class="row">
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-book">
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
                  data-target="#spl-form-panel-request-cd-audio-book">
            <input class="sr-only" type="radio" name="spl-form[material]" value="cd-audio-book"> 
            <i class="glyphicon glyphicon-volume-up"></i>
            Book on CD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-ebook">
            <input class="sr-only" type="radio" name="spl-form[material]" value="ebook"> 
            <i class="glyphicon glyphicon-phone"></i> 
            eBook
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-dl-audio-book">
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
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-cd">
            <input class="sr-only" type="radio" name="spl-form[material]" value="cd"> 
            <i class="glyphicon glyphicon-music"></i> 
            Music CD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-dvd">
            <input class="sr-only" type="radio" name="spl-form[material]" value="dvd">
            <i class="glyphicon glyphicon-film"></i> 
            DVD
          </label>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <p>
          <label class="btn btn-block btn-primary" data-toggle="collapse" 
                  data-parent="#spl-form-request-panels"
                  data-target="#spl-form-panel-request-other">
            <input class="sr-only" type="radio" name="spl-form[material]" value="other"> 
            <i class="glyphicon glyphicon-pencil"></i> 
            Other <small>(specify)</small>
          </label>
        </p>
      </div><!-- /.col -->
    </div><!-- /.row -->


    <?php
    // hide ill-only for certain btypes 
    switch ( $_SESSION['spl']['user']->borrowerType ) {
      case 'sr':
      case 'c':
      case 'in':
      case 'ol':
        //echo 'you cannot ill';
      break;
      default:
        include 'material-choose-ill.php';
      break;
    }
    ?>

  </div><!-- /.btn-group -->

  </div>
</fieldset>

