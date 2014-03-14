<div class="row">

  <div class="col-md-9">
    nine
  </div><!-- /.row -->
  <div class="col-md-3">
    three
  </div><!-- /.row -->

</div><!-- /.row -->


<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h5>
  <em>Note:</em>
  For research questions please <a href="../ask">ask a librarian</a>.
  </h5>
  <div class="row-fluid">
    
    <div class="span4">    
      Spokane Public Library
      <br />
      <abbr title="Phone">Ph.</abbr> 509.444.5300
      <br />
      <a href="http://www.spokanelibrary.org/branches">Branch Locations &amp; Hours</a>
    </div><!-- /.span4 -->
    
    <div class="span3">
      <p>      
        <blockquote>
        906 West Main Street 
        <br />
        Spokane, WA 99201
        </blockquote>
      </p>
    </div><!-- /.span3 -->
    
    <div class="span5">
      <p>
        <blockquote>
        <!-- <strong>TIP!</strong> -->
        <span>
          Answers to many <strong>Frequently Asked Questions</strong> can be found on our <a title="How do I?" href="http://www.spokanelibrary.org/index.php?page=howdoi">How do I...?</a> page.
        </span>
        </blockquote>
      </p>
    </div><!-- /.span5 -->
    
  </div><!-- /.row-fluid -->
</div><!-- /.alert -->

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