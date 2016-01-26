<div class="form-group">
  <?php include 'card-pin.php'; ?>
  <label for="spl-form-birthdate" class="col-sm-3 control-label">My birthday</label>
  <div class="col-sm-3">
    <input type="text" class="form-control required" id="spl-form-birthdate" name="spl-form[signup][birthdate]" value="" placeholder="mm/dd/yyyy">
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

