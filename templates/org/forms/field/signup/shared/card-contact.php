<div class="form-group">
	<label for="" class="col-sm-3 control-label">My name</label>
  <div class="col-sm-3" id="">
    <span class="help-block">Fist</span>
    <input type="text" class="form-control required" id="spl-form-name-first" name="spl-form[signup][name][first]" value="" placeholder="">
  </div>
  <div class="col-sm-3" id="">
    <span class="help-block">Middle</span>
    <input type="text" class="form-control required" id="spl-form-name-middle" name="spl-form[signup][name][middle]" value="" placeholder="">
  </div>
  <div class="col-sm-3" id="">
    <span class="help-block">Last</span>
    <input type="text" class="form-control required" id="spl-form-name-last" name="spl-form[signup][name][last]" value="" placeholder="">
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

<div class="form-group">
  <label for="spl-form-birthdate" class="col-sm-3 control-label">Date of birth</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-birthdate" name="spl-form[signup][birthdate]" value="" placeholder="">
  </div>
  <label for="spl-form-pin" class="col-sm-3 control-label"><span class="hidden-sm">Choose a</span> 4-digit PIN</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-pin" name="spl-form[signup][pin]" value="" placeholder="">
  </div>
</div>

