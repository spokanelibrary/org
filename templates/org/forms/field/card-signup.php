<form class="form-horizontal spl-form" id="spl-form-signup" method="post" role="form">
  
  <?php include 'common/crass-response.php'; ?>

  <input type="hidden" id="spl-form-id" name="spl-form[id]" value="signup" />
  
  <input type="hidden" 
        id="spl-form-ip" 
        name="spl-form[ip]" 
        value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
        />

  <!-- TMAYS -->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="">Let's get started</h4>
    </div><!-- /.panel-heading -->

    <div class="panel-body">
      
      <fieldset>
        <legend class="text-muted">
          <small class="glyphicon glyphicon-"></small>
          Please tell us a little bit about yourself
        </legend>

      </fieldset>


      <fieldset class="">
        
        <legend class="text-muted">
          <small class="glyphicon glyphicon-"></small>
          Let's get started
        </legend>

        <div class="form-group">
          <label for="spl-form-card-type" class="col-sm-4 control-label">I am</label>
          <div class="col-sm-8">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
            </div>
            <div class="radio disabled">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                Option three is disabled
              </label>
            </div>
          </div>
        </div>

      </fieldset>
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->



  <!-- Adult -->
  <div class="panel panel-default hidden">
    <div class="panel-body">

      <fieldset>
        <legend class="text-muted">
          <small class="glyphicon glyphicon-"></small>
          Let's get started
        </legend>


        <div class="form-group">
          <label for="spl-form-name" class="col-sm-4 control-label">My name</label>
          <div class="col-sm-8">
            <p class="form-control-static text-muted">
              Our system stores names LAST FIRST MIDDLE.
            </p>
            <input type="text" class="form-control required" id="spl-form-name" name="spl-form[contact][name]" value="<?php echo $renew->borrower->name; ?>" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-email" class="col-sm-4 control-label">My email address</label>
          <div class="col-sm-8">
            <input type="text" class="form-control required" id="spl-form-email" name="spl-form[contact][email]" value="<?php echo $renew->borrower->email; ?>" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-phone" class="col-sm-4 control-label">My phone number</label>
          <div class="col-sm-8">
            <input type="text" class="form-control required" id="spl-form-phone" name="spl-form[contact][phone]" value="<?php echo $renew->borrower->phone; ?>" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-street" class="col-sm-4 control-label">Street address</label>
          <div class="col-sm-8">
            <textarea rows="3" class="form-control required" id="spl-form-street" name="spl-form[contact][street]"><?php echo $renew->borrower->street; ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-city-st" class="col-sm-4 control-label">City, ST</label>
          <div class="col-sm-8">
            <input type="text" class="form-control required" id="spl-form-city-st" name="spl-form[contact][city-st]" value="<?php echo $renew->borrower->city_st; ?>" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-zip" class="col-sm-4 control-label">ZIP Code</label>
          <div class="col-sm-8">
            <input type="text" class="form-control required" id="spl-form-zip" name="spl-form[contact][zip]" value="<?php echo $renew->borrower->zip; ?>" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-block btn-success">
              <small class="glyphicon glyphicon-check"></small>
              Renew my library card now &rarr;
            </button>
          </div>
        </div>

      </fieldset>
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->
        
</form>