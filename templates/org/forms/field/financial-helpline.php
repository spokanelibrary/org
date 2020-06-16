<div class="row">

  <div class="col-md-8">

    <!-- <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/ask">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For research questions, please <strong>ask a librarian</strong> &rarr;
        </a>
        </p>
      </div> --><!-- /.panel-body -->
    <!-- </div> --><!-- /.panel -->

    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>

    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-contact" method="post" role="form">

          <?php include 'common/crass-response.php'; ?>

          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="financial-hotline" />

          <input type="hidden"
                id="spl-form-ip"
                name="spl-form[ip]"
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-envelope"></small>
              Send us an email
            </legend>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                <button type="button" class="btn btn-xs btn-info hidden-xs" data-toggle="collapse" data-target="#spl-explain-query-type">
                  <i class="glyphicon glyphicon-info-sign"></i>
                </button>
                My question is about
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-query-type" name="spl-form[query-type]">
                  <option value="unemployment">Unemployment</option>
                  <option value="business_aid">Business Aid</option>
                  <option value="household_assistance">Household Assistance</option>
                  <option value="stimulus_payment">Stimulus Payment</option>
                  <option value="meal_assistance">Meal Assistance</option>
                  <option value="other">Other</option>
                </select>
                <span class="help-block collapse" id="spl-explain-query-type">
                  We use this information to route your inquiry.
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">My specific question:</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>

            <?php include 'common/field-contact-method.php'; ?>
            <?php include 'shared/field-contact-name.php'; ?>
            <div class="form-group">
              <label class="col-sm-4 control-label">My contact information</label>
              <div class="col-sm-8">
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="telcom">
                    <label for="spl-form-email" class="control-label">My email address</label>
                    <input type="text" class="form-control" id="spl-form-email" name="spl-form[email]" placeholder="">
                    <label for="spl-form-phone" class="control-label">My phone number</label>
                    <input type="text" class="form-control" id="spl-form-phone" name="spl-form[phone]" placeholder="">
                    <label for="spl-form-zip" class="control-label">Zip code</label>
                    <input type="text" class="form-control" id="spl-form-zip" name="spl-form[zip]" placeholder="">
                  </div>
                </div>
              </div>
            </div>
            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <?php echo do_shortcode('[spl_widget custom-page page=financial-helpline-info]'); ?>
    <h4 class="text-muted">
      Asked &amp; answered
    </h4>
    <p>
      <a class="btn btn-block btn-primary" title="How do I?" href="/faq">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>
  </div><!-- /.col -->

</div><!-- /.row -->
