<div class="form-group">
  <label for="spl-form-local" class="col-sm-3 control-label">My address is in</label>
  <div class="col-sm-3">
    <select class="form-control required" id="spl-form-local" name="spl-form[signup][local]">
      <option value="city" selected>The City of Spokane</option>
      <option value="county">Spokane County</option>
      <option value="other">Outside the area</option>
      <option value="unsure">I'm not sure</option>
    </select>
  </div>
  <div class="col-sm-6">
    <span class="help-block">
      Lorem ipsum dolor sit amet.
    </span>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-3 col-sm-offset-3">
    <a href="#signup-address-alt" 
      class="btn btn-block btn-default"
      data-toggle="collapse">Add an address <span class="caret"></span></a> 
  </div>
  <div class="col-sm-6">
    <span class="help-block">
      Why add an address?
    </span>
  </div>
</div>



<div class="collapse" id="signup-address-alt">
  <div class="form-group">
    <label for="spl-form-street" class="col-sm-3 control-label">Street address</label>
    <div class="col-sm-3">
      <textarea rows="3" class="form-control required spl-signup-address-alt" id="spl-form-street-alt" name="spl-form[signup][address-alt][street]"></textarea>
    </div>
    <label for="spl-form-city" class="col-sm-1 control-label">City</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required spl-signup-address-alt" id="spl-form-city-alt" name="spl-form[signup][address-alt][city]" value="" placeholder="">
    </div>
    <label for="spl-form-state" class="col-sm-1 control-label">State</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required spl-signup-address-alt" id="spl-form-state-alt" name="spl-form[signup][address-alt][state]" value="" placeholder="">
    </div>
    <label for="spl-form-zip" class="col-sm-1 col-sm-offset-3 control-label">ZIP</label>
    <div class="col-sm-2">
      <input type="text" class="form-control required spl-signup-address-alt" id="spl-form-zip-alt" name="spl-form[signup][address-alt][zip]" value="" placeholder="">
    </div>
  </div>
</div>
