<div class="form-group">
	<label for="" class="col-sm-3 control-label">My name</label>
  <div class="col-sm-3" id="">
    <span class="help-block">Fist</span>
    <input type="text" class="form-control required uppercase" id="spl-form-name-first" name="spl-form[signup][name][first]" value="" placeholder="">
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
  <label for="spl-form-pin" class="col-sm-3 control-label">
    <span class="hidden-sm">Choose a</span> 4-digit PIN 
    <br>
    <span class="text-warning normal">
      <small class="glyphicon glyphicon-exclamation-sign"></small>
      Numbers only
    </span>
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-pin" name="spl-form[signup][pin]" value="" placeholder="">
    <a href="#signup-help-pin" 
        class="btn btn-link"
        data-toggle="collapse">What is this? <span class="caret"></span></a> 
    <div class="collapse" id="signup-help-pin">
      <span class="help-block">
        A four-digit <i>numerical</i> PIN is required to access your library account online and to use our Internet stations.
      </span>
    </div>
  </div>
  <label for="spl-form-birthdate" class="col-sm-3 control-label">Date of birth</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-birthdate" name="spl-form[signup][birthdate]" value="" placeholder="">
    <a href="#signup-help-dob" 
        class="btn btn-link"
        data-toggle="collapse">Why do we ask? <span class="caret"></span></a> 
    <div class="collapse" id="signup-help-dob">
      <span class="help-block">
        We use this date to determine Internet access levels and library card expiration.
      </span>
    </div>
  </div>
</div>

