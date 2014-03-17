<div class="form-group">
  <label for="spl-form-name" class="col-sm-4 control-label">My name</label>
  <div class="col-sm-8">
    <input type="text" class="form-control required" id="spl-form-name" name="spl-form[name]" placeholder="">
  </div>
</div>
<div class="form-group">
  <label for="spl-form-barcode" class="col-sm-4 control-label">My Library Card #</label>
  <div class="col-sm-8">
    <input type="text" class="form-control required" id="spl-form-barcode" name="spl-form[barcode]" placeholder="">
  	<span class="help-block">
  		14 digits, beginning with 27413.
  	</span>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-4 control-label text-muted">Contact Information</label>
  <div class="col-sm-8">
    <!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#telcom" data-toggle="tab">Email &amp; Phone</a></li>
		  <li><a href="#mail" data-toggle="tab"><span class="hidden-xs">Mailing</span> Address</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="telcom">
		  	<label for="spl-form-email" class="control-label">Email address</label>
		  	<input type="text" class="form-control" id="spl-form-email" name="spl-form[email]" placeholder="">
		  	<label for="spl-form-phone" class="control-label">Phone number</label>
		  	<input type="text" class="form-control" id="spl-form-phone" name="spl-form[phone]" placeholder="">
		  </div>
		  <div class="tab-pane" id="mail">
		  	<label for="spl-form-street" class="control-label">Street (P.O. Box, etc.)</label>
		  	<textarea rows="3" class="form-control" id="spl-form-street" name="spl-form[street]"></textarea>
		  	<label for="spl-form-city-st" class="control-label">City, ST</label>
		  	<input type="text" class="form-control" id="spl-form-city-st" name="spl-form[city-st]" placeholder="">
		  	<label for="spl-form-zip" class="control-label">Zip code</label>
		  	<input type="text" class="form-control" id="spl-form-zip" name="spl-form[zip]" placeholder="">
		  </div>
		</div>
  </div>
</div>