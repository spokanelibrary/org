<div class="row">

  <div class="col-md-8">
    <p>
      <a class="btn btn-lg btn-block btn-primary" style="white-space: normal;" href="/ask">
        <small class="glyphicon glyphicon-exclamation-sign"></small>
        For research questions <strong>please ask a librarian</strong> &rarr;
      </a>
    </p>
    <p class="lead">
      Find answers to many <a title="How do I?" href="/how"><strong>Frequently Asked Questions</strong></a> &rarr;
    </p>
    <!-- 
    <p>
    <button class="btn btn-link btn-lg" data-toggle="modal" data-target="#spl-login-modal">
      Launch demo modal
    </button>
    </p>
    -->
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" id="spl-form-contact" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="contact" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <i class="glyphicon glyphicon-envelope"></i>
              Send an Email
            </legend>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Your Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="spl-contact-name" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-block btn-success">Send Now &rarr;</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.row -->

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Spokane Public Library</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
        <p>      
          <blockquote>
          906 West Main Street 
          <br />
          Spokane, WA 99201
          </blockquote>
        </p>
        <h4>
        <abbr title="Phone">Ph.</abbr> 509.444.5300
        </h4>
        <a class="btn btn-block btn-default" href="/branch">
          <small class="glyphicon glyphicon-flag"></small>
          Branch Locations &amp; Hours &rarr;</a>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    
    
  </div><!-- /.row -->

</div><!-- /.row -->


<form class="form-horizontal well spl-form" style="background:transparent;" method="post" id="spl-form-contact" autocomplete="off">

  <?php include 'common/crass-response.php'; ?>
  
  <input type="hidden" id="spl-form-id" name="spl-form[id]" value="contact" />
  
  <input type="hidden" 
        id="spl-form-ip" 
        name="spl-form[ip]" 
        value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
        />

  <fieldset>
    <div class="spl-form-legend">
      <legend>
        Send an Email
      </legend>
    </div>
  </fieldset>
  
  <?php //include 'common/user-login-optional.php'; ?>
  
  <?php //include 'contact/contact-inquiry.php'; ?>
  
  <?php //include 'common/contact-info.php'; ?>
  
  <?php //include 'contact/submit-contact.php'; ?>
  
</form>