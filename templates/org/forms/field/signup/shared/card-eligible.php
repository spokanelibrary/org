<div class="form-group">
  <div class="col-sm-9 col-sm-offset-3">
    <span class="help-block">
      Library card privileges are based on the address you provide.
    </span>
  </div>
</div>

<div class="form-group">
  <label for="spl-form-local" class="col-sm-3 control-label">My address is in</label>
  <div class="col-sm-3">
    <select class="form-control required" id="spl-form-locale" name="spl-form[signup][locale]">
      <option value="city" selected>The City of Spokane</option>
      <option value="county">Spokane County</option>
      <option value="other">Outside the area</option>
      <option value="unsure">I'm not sure</option>
    </select>
  </div>
  <div class="col-sm-6">
    <p>
      <i class="glyphicon glyphicon-share text-muted"></i>
      <a href="#" data-toggle="modal" data-target="#spl-card-eligible">More about library card eligibility</i></a>
    </p>
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
      If you have an address <i>other than your mailing address</a> that you would like to use for library card eligibility please add it here.
    </span>
  </div>
</div>


<div class="collapse" id="signup-address-alt">
  <?php include 'card-address-alt.php'; ?>
</div>
