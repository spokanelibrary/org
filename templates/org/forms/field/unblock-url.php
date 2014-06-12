<?php if ( !empty($spl['unblock']['url']['host']) ) : ?> 
<div class="panel panel-danger">
  <div class="panel-heading">
    <h4>
      <i class="glyphicon glyphicon-warning-sign"></i>
      Hi There. The website you are trying to access has been blocked.
    </h4>
  </div>
  <div class="panel-body">
      <p class="lead">
          Please fill out the form below to request a review of this website.
      </p>
      <p>
          We will be happy to unblock it if we find that the content is not in violation of our <a href="http://www.spokanelibrary.org/internet-policy">Internet Use Policy</a>.
      </p>
      <p>
        All unblock requests are processed within <strong class="serif">72</strong> hours. 
        <a href="#"
            class="prevent-default"
            data-toggle="collapse" 
            data-target="#unblock-explain" 
            >What if I need this website unblocked <em>right now?</em> <i class="glyphicon glyphicon-chevron-down"></i></a>
      </p>
      <div id="unblock-explain" class="collapse">
        <blockquote>
          Good question.
          First, <strong>make sure you submit this form</strong> using the button below so that we can assess the correct URL.
          Next, walk over to the nearest <em>Reference &amp; Information</em> desk and ask that the reference librarian on staff make an interim evaluation of your request.
          We'll be glad to help.
          <a href="#" 
              class="prevent-default" 
              data-toggle="collapse" 
              data-target="#unblock-explain"
              >Hide <i class="glyphicon glyphicon-chevron-up"></i></a>
        </blockquote>
      </div>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->
<?php endif; ?>

<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-horizontal spl-form" id="spl-form-optout" method="post" role="form">      
      <?php include 'common/crass-response.php'; ?>

      <input type="hidden" id="spl-form-id" name="spl-form[id]" value="receipt-unblock" />
      
      <input type="hidden" 
              id="spl-form-unblock-path" 
              name="spl-form[unblock][path]" 
              value="<?php echo $spl['unblock']['url']['path']; ?>"
              />
      <input type="hidden" 
              id="spl-form-unblock-query" 
              name="spl-form[unblock][query]" 
              value="<?php echo $spl['unblock']['url']['query']; ?>"
              />

      <input type="hidden" 
              id="spl-form-unblock-ip" 
              name="spl-form[unblock][ip]" 
              value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
              />

      <fieldset>

        <legend class="text-muted">
          <small class="glyphicon glyphicon-info-sign"></small>
          Tell us about your request
        </legend>

        <div class="row">
          <div class="col-md-7"> 
            <div class="form-group">
              <label for="spl-form-unblock-host" 
                      class="col-sm-4 control-label">Website to Unblock</label>
              <div class="col-sm-8">
                <input type="text" 
                    id="spl-form-unblock-host" 
                    name="spl-form[unblock][host]" 
                    class="form-control"
                    value="<?php echo $spl['unblock']['url']['host']; ?>"
                    <?php if ( !empty($spl['unblock']['url']['host']) ) : ?> 
                    readonly
                    <?php endif; ?>
                    placeholder="" />
              </div>
            </div>
          </div><!-- /.col -->
          <div class="col-md-5"> 
            <?php if ( !empty($spl['unblock']['category']) ) : ?>
            <div class="form-group">
              <label for="spl-form-unblock-category" 
                    class="col-sm-4 control-label">Reason Blocked</label>
              <div class="col-sm-8">
                <span class="lead">
                  <?php echo $spl['unblock']['category']; ?> 
                </span>
                <input type="hidden" 
                        id="spl-form-unblock-category" 
                        name="spl-form[unblock][category]" 
                        class="form-control" 
                        value="<?php echo $spl['unblock']['category']; ?>"
                        placeholder="" />
              </div>
            </div>
            <?php endif; ?>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-7">
            <div class="form-group">
              <label for="spl-form-unblock-note" 
                      class="col-sm-4 control-label">Reason to Unblock</label>
              <div class="col-sm-8">
                <textarea rows="4"
                    id="spl-form-unblock-note" 
                    name="spl-form[unblock][note]" 
                    class="form-control"
                    value=""
                    placeholder=""></textarea>
                <span class="help-block">
                  <b class="text-success">Optional:</b> 
                  Let us know why you feel this website should be made available at the Library. 
                </span>
              </div>
            </div>  
          </div><!-- /.col -->
        </div><!-- /.row -->

      </fieldset>

      <fieldset>
        
        <legend class="text-muted">
          <small class="glyphicon glyphicon-envelope"></small>
          Tell us how to reach you 
        </legend>

        <div class="row">
          <div class="col-md-7"> 
            <div class="form-group">
              <label for="spl-form-unblock-email" 
                      class="col-sm-4 control-label">Your Email Address</label>
              <div class="col-sm-8">
                <input type="text" 
                    id="spl-form-unblock-email" 
                    name="spl-form[unblock][email]" 
                    class="form-control"
                    value=""
                    placeholder="" />
                <span class="help-block">
                <b class="text-success">Optional:</b> 
                  Provide an email address if you would like to be notified about the status of your request. 
                </span>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </fieldset>

      <fieldset>
        
        <legend class="text-muted">
          <small class="glyphicon glyphicon-ok-sign"></small>
          That's it 
        </legend>

        <div class="row">
          <div class="col-md-7">
            <div class="form-group">
              <label for=""
                      class="col-sm-4 control-label">Internet Use Policy</label>
              <div class="col-sm-8">

                <div class="checkbox">
                  <label>
                   <input type="checkbox"
                          id="spl-form-inet-confirm" 
                          name="spl-form[inet-confirm]">
                    Check to confirm you have read, understand, and agree to our <a href="http://www.spokanelibrary.org/internet-policy">Internet Use Policy</a>.
                  </label>
                </div>
                <span class="help-block">
                  <b>Note:</b> You must accept this policy in order to submit an unblock request. 
                </span>
              </div>
            </div>  
          </div><!-- /.col -->
        </div><!-- /.row -->

      </fieldset>

    </form>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->
