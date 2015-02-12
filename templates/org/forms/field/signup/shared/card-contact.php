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
