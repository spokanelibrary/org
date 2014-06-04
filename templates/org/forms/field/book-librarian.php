<?php print_r(getenv('SPL_KEY')); ?>
<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-primary">
      <div class="panel-body">
        <p class="lead text-center" style="margin-bottom:0;">
        <a href="/ask">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          For research questions, please <strong>ask a librarian</strong> &rarr;
        </a>
        </p>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-book" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="book" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-calendar"></small>
              Schedule an appointment
            </legend>

            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                I would like to meet at
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-query-type" name="spl-form[query-type]">
                  <option value="dt" selected>Downtown Library</option>
                  <option value="es">East Side Library</option>
                  <option value="hy">Hillyard Library</option>
                  <option value="it">Indian Trail Library</option>
                  <option value="sh">Shadle Library</option>
                  <option value="so">South Hill Library</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                My question is about
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-query-type" name="spl-form[query-type]">
                  <option value="library">Using the library</option>
                  <option value="download">eBooks and downloads</option>
                  <option value="business">Business research</option>
                  <option value="genealogy">Genealogy research</option>
                  <option value="account">My account</option>
                  <option value="other">Something else</option>
                </select>
              </div>
            </div>

            <span class="help-block">
              Please let us know the best date for you to meet, and select two time slots that would work.
              You might want to <a href="/branch">check branch hours</a> &rarr;
            </span>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                Date <span class="text-success">(First choice)</span>
              </label>
              <div class="col-sm-8">
                <div class="input-group date">
                  <input type="text" 
                          class="form-control" 
                          name="spl-form[datetime][first][date]"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="text-success">Best time</label>
                    <select class="form-control"
                            name="spl-form[datetime][first][time][a]">
                      <?php include 'common/field-book-librarian-times.php'; ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="text-warning">Alternate time</label>
                    <select class="form-control"
                            name="spl-form[datetime][first][time][b]">
                      <?php include 'common/field-book-librarian-times.php'; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            
            <span class="help-block">
              Please let us know an alternate date you can meet, and select two time slots that would work.
            </span>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                Date <span class="text-warning">(Second choice)</span>
              </label>
              <div class="col-sm-8">
                <div class="input-group date">
                  <input type="text" 
                          class="form-control" 
                          name="spl-form[datetime][second][date]"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="text-success">Best time</label>
                    <select class="form-control"
                            name="spl-form[datetime][second][time][a]">
                      <?php include 'common/field-book-librarian-times.php'; ?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="text-warning">Alternate time</label>
                    <select class="form-control"
                            name="spl-form[datetime][second][time][b]">
                      <?php include 'common/field-book-librarian-times.php'; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <span class="help-block">
              Please give us a brief idea of what you would like to accomplish in a one-hour session.
            </span>
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">
                I would like to discuss
              </label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
              </div>
            </div>
            
            <?php include 'common/field-contact-method.php'; ?>
            <?php include 'common/field-login.php'; ?>
            <?php include 'common/field-contact.php'; ?>
            <?php include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <?php echo do_shortcode('[spl_widget custom-page page=contact-info]'); ?>
    <h4 class="text-muted">
      Asked &amp; answered
    </h4>
    <p>
      <a class="btn btn-block btn-primary" title="How do I?" href="/how">
        <i class="glyphicon glyphicon-question-sign"></i>
        Frequently Asked Questions &rarr;
      </a>
    </p>
  </div><!-- /.col -->

</div><!-- /.row -->
