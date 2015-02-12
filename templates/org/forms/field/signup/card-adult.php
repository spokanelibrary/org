<div class="panel panel-default">
  <div class="panel-body">

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Let's get started
      </legend>


      <div class="form-group">
        <label for="spl-form-birthdate" class="col-sm-4 control-label">My date of birth</label>
        <div class="col-sm-3">
          <input type="text" class="form-control required" id="spl-form-birthdate" name="spl-form[signup][birthdate]" value="" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Block name/Number</label>
        <div class="col-md-4">
          <input type="text" class="form-control">
        </div>
        <label class="control-label col-sm-1">Entrance</label>
        <div class="col-md-1">
          <input type="text" class="form-control">
        </div>
        <label class="control-label col-sm-1">Floor</label>
        <div class="col-md-1">
          <input type="text" class="form-control">
        </div>
        <label class="control-label col-sm-1">Apartment</label>
        <div class="col-md-1">
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="spl-form-email" class="col-sm-3 control-label">My email address</label>
        <div class="col-sm-3">
          <input type="text" class="form-control required" id="spl-form-email" name="spl-form[contact][email]" value="<?php echo $renew->borrower->email; ?>" placeholder="">
        </div>
        <label for="spl-form-phone" class="col-sm-3 control-label">My phone number</label>
        <div class="col-sm-3">
          <input type="text" class="form-control required" id="spl-form-phone" name="spl-form[contact][phone]" value="<?php echo $renew->borrower->phone; ?>" placeholder="">
        </div>
      </div>

      <?php include 'card-contact.php'; ?>

    </fieldset>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->