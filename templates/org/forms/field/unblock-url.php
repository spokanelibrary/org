<?php if ( !empty($spl['unblock']['url']['host']) ) : ?> 
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <i class="icon-exclamation-sign"></i>
  <strong>Hi There. The website you are trying to access has been blocked.</strong>

  <div class="row-fluid">
      <p class="lead help-block">
          Please fill out the form below to request a review of this website.
      </p>
      <p class="help-block">
          We will be happy to unblock it if we find that the content is not in violation of our <a href="#spl-internet-policy" data-toggle="modal">Internet Use Policy</a>.
      </p>
      <p class="help-block">
        All unblock requests are processed within <strong class="serif">72</strong> hours. 
        <a href="#"
            class="prevent-default"
            data-toggle="collapse" 
            data-target="#unblock-explain" 
            >What if I need this website unblocked <em>right now?</em> <i class="icon-chevron-down"></i></a>
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
              >Hide <i class="icon-chevron-up"></i></a>
        </blockquote>
      </div>
  </div><!-- /.row-fluid -->
</div><!-- /.alert -->
<?php endif; ?>