<!--
<div class="page-header">
  <h1>Sign up for a library card</h1>
</div>
-->
<form class="form-horizontal spl-form" id="spl-form-card-type" method="post" role="form">

  <div class="panel panel-primary">

    <div class="panel-heading">
      <h3 class="panel-title">
        Let's find out what type of library card you need
      </h3>
    </div><!-- /.panel-body -->

    <div class="panel-body">
      
      <fieldset>

        <div class="form-group">
          <label for="spl-form-card-type" class="col-sm-2 control-label">
            <h1 class="text-muted normal" style="margin-top:0;">I am:</h1>
          </label>
          <div class="col-sm-10 col-md-8 col-lg-7" id="spl-form-card-type">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="radio">
                  <label>
                    <input type="radio" class="" name="spl-form[card][type]" id="spl-form-card-type-adult" value="adult" checked>
                    <b>an adult</b> with an address or residence in Spokane (City or County).
                  </label>
                </div>
              </div>
            </div>
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="radio">
                  <label>
                    <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-nonres" value="nonres">
                    <b class="text-warning">an adult</b> living elsewhere (no address or property in Spokane County).
                  </label>
                </div>
              </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="radio">
                  <label>
                    <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-minor" value="minor">
                    <b class="text-info">under 18</b> years old.
                  </label>
                </div>
              </div>
            </div>
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="radio">
                  <label>
                    <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-teacher" value="teacher">
                    <b class="text-success">a teacher</b> and I need a card for my classroom.
                  </label>
                </div>
              </div>
            </div>
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="radio">
                  <label>
                    <input type="radio" name="spl-form[card][type]" id="spl-form-card-type-business" value="business">
                    <b class="text-danger">a business or non-profit</b> and I need a card for myself or my employees.
                  </label>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-block btn-primary">
              <b>Next</b>
              <small class="glyphicon glyphicon-arrow-right"></small>
            </button>
          </div>

          <?php if ( !isset($_REQUEST['station']) ) :; ?>
          <div class="col-md-2 col-lg-3">
            <p style="padding-top:16px;">
              <a href="/card/"><b>More about library cards</b></a>&nbsp;<small class="text-muted glyphicon glyphicon-arrow-right"></small>
            </p>
          </div>
          <?php endif; ?>

        </div>

      </fieldset>

    </div><!-- /.panel-body -->
  </div><!-- /.panel -->

</form>