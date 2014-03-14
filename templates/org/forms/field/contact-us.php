<div class="row">

  <div class="col-md-8">
    <p>
      <a class="btn btn-lg btn-block btn-primary" href="/ask">
        <small class="glyphicon glyphicon-exclamation-sign"></small>
        For research questions <strong>please ask a librarian</strong> &rarr;
      </a>
    </p>
    <p class="lead">
      Answers to many <strong>Frequently Asked Questions</strong> can be found on our <a title="How do I?" href="/how">How do I...?</a> page.
    </p>
    <!-- 
    <p>
    <button class="btn btn-link btn-lg" data-toggle="modal" data-target="#spl-login-modal">
      Launch demo modal
    </button>
    </p>
    -->

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
        <abbr title="Phone">Ph.</abbr> 509.444.5300
        <br />
        <a href="/branch">Branch Locations &amp; Hours</a>
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