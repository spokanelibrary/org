
<div class="form-group">
  <label for="spl-form-street" class="col-sm-3 control-label">Street address</label>
  <div class="col-sm-3">
    <textarea rows="3" class="form-control required" id="spl-form-street" name="spl-form[contact][street]"><?php echo $renew->borrower->street; ?></textarea>
  </div>
  <label for="spl-form-city-st" class="col-sm-3 control-label">City, ST</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-city-st" name="spl-form[contact][city-st]" value="<?php echo $renew->borrower->city_st; ?>" placeholder="">
  </div>
    <label for="spl-form-zip" class="col-sm-3 control-label">ZIP Code</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-zip" name="spl-form[contact][zip]" value="<?php echo $renew->borrower->zip; ?>" placeholder="">
  </div>
</div>

