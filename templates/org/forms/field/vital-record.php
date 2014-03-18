<div class="row">

  <div class="col-md-8">
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-contact" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="contact" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-search"></small>
              Search for obituaries or birth notices
            </legend>

            <div class="form-group">
              <label class="col-sm-4 control-label text-muted">I am looking for a</label>
              <div class="col-sm-8">
                <div class="radio">
                  <label>
                    <input type="radio" id="spl-form-announcement-obit" name="spl-form[announcement]" value="obit" checked>
                    <strong>Obituary</strong> &ndash;
                    Most obituaries are classified ads; not everyone who dies has one. 
                    Death notices are more common and are sometimes submitted by funeral homes. 
                    Be sure to search our <a href="http://old.spokanelibrary.org/obituaries/">Obituary Search</a> first to see if you can find exact publication information.
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" id="spl-form-announcement-birth" name="spl-form[announcement]" value="birth">
                    <strong>Birth Notice</strong> &ndash;
                    Birth Notices are submitted by hospitals, but only when the child is released. 
                    A newborn with health problems may not appear in the newspaper right away.
                  </label>
                </div>
              </div>
            </div>     

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Name(s) to search </label>
              <div class="col-sm-8">
                <p class="form-control-static">Enter up to <strong>3</strong> names you'd like us to search.</p>
                <p>
                  <input type="text" id="spl-form-announcement-name-1" name="spl-form[announcement-name][1]" class="form-control required" placeholder="">
                </p>
                <p>
                  <input type="text" id="spl-form-announcement-name-2" name="spl-form[announcement-name][2]" class="form-control" placeholder="Name...">
                </p>
                <p>
                  <input type="text" id="spl-form-announcement-name-3" name="spl-form[announcement-name][3]" class="form-control" placeholder="Name...">
                </p>
              </div>
            </div> 

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Date(s) to search </label>
              <div class="col-sm-8">
                <p class="form-control-static">Enter up to <strong>3</strong> event or publication dates.</p>
                
              </div>
            </div>   

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">I am trying to find</label>
              <div class="col-sm-8">
                <p class="form-control-static">Please be as specific as possible with your question.</p>
                <textarea rows="6" class="form-control required" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>

            <?php include 'common/field-contact-method.php'; ?>
            <?php //include 'common/field-login.php'; ?>
            <?php include 'common/field-contact-no-card.php'; ?>
            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">

    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4>
          Spokane residents
        </h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          <strong>Please note:</strong>
        </p>
        <p>     
          This form is for obituary and birth announcement requests for <strong>out-of-town customers only</strong>. 
        </p>
        <p>
          If you live in the Spokane area, we ask that you come in to do your research. We'll be glad to help!
        </p>    
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
