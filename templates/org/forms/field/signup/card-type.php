<form class="form-horizontal spl-form" id="spl-form-card-type" method="post" role="form">

  <div class="panel panel-primary">

    <div class="panel-heading">
      <h3 class="panel-title">
        Let's find out what type of card you need
      </h3>
    </div><!-- /.panel-body -->

    <div class="panel-body">
      
      <fieldset>
        <div class="form-group">
          <div class="radio">
            <label>
              <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-minor" value="minor">
              <b class="text-info">under 18 years old</b>.
            </label>
          </div>
        </div>

        <div class="form-group">
          <label for="spl-form-card-type" class="col-sm-2 control-label">
            <h2>I am:</h2>
          </label>
          <div class="col-sm-10" id="spl-form-card-type">
            <div class="radio">
              <label>
                <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-adult" value="adult" checked>
                <b>an adult</b> with an address or residence in Spokane County.
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-adult" value="nonres">
                <b class="warning">an adult</b> living elsewhere (no address or property in Spokane County).
              </label>
            </div>            
            <div class="radio">
              <label>
                <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-teacher" value="teacher">
                <b class="text-success">a teacher</b> and I need a card for my classroom.
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-business" value="business">
                <b class="text-danger">a business or non-profit</b> and I need a card for myself or my employees.
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-block btn-primary">
              <b>Next</b>
              <small class="glyphicon glyphicon-arrow-right"></small>
            </button>
          </div>
        </div>

      </fieldset>

    </div><!-- /.panel-body -->
  </div><!-- /.panel -->

</form>