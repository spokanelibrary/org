<h1>Copy That!</h1>

<p class="lead">
  We received your request to review the following website:
</p>

<p>
  <a class="text-error" href="http://<?php echo $spl['crass']['response']->request['unblock']['host']; ?>">
    <strong>
      <?php echo $spl['crass']['response']->request['unblock']['host']; ?>
    </strong>
  </a>
  <em class="text-error">(<?php echo $spl['crass']['response']->request['unblock']['category']; ?>)</em>
</p>

<hr>



<div class="well" style="background:transparent;">
  <div class="row-fluid">
    <h1 class="normal">Copy That!</h1>
  </div><!-- /.row-fluid --> 

  <div class="row-fluid">
    <div class="span12">
       <div class="row-fluid">
        <div class="span6">
          <div class="row-fluid">
            <p class="lead">
              We received your request to review the following website:
            </p>

            <p>
              <a class="text-error" href="http://<?php echo $spl['crass']['response']->request['unblock']['host']; ?>">
                <strong>
                  <?php echo $spl['crass']['response']->request['unblock']['host']; ?>
                </strong>
              </a>
              <em class="text-error">(<?php echo $spl['crass']['response']->request['unblock']['category']; ?>)</em>
            </p>

            <p>
              If it is not found to violate our <a href="http://www.spokanelibrary.org/internet-policy">Internet Use Policy</a> this website will be unblocked from all computers on the Spokane Public Library network within <strong class="serif">72</strong> hours.
            </p>

            <p>
              It looks like the actual document you are trying to access is:
              <br />
              <a href="http://<?php echo $spl['crass']['response']->request['unblock']['host'].$spl['crass']['response']->request['unblock']['path'].'?'.$spl['crass']['response']->request['unblock']['query']; ?>">
                
                <?php
                  $spl_url_full = '';
                  $spl_url_full .= $spl['crass']['response']->request['unblock']['host'];
                  $spl_url_full .= $spl['crass']['response']->request['unblock']['path'];
                  if ( !empty($spl['crass']['response']->request['unblock']['query']) ) {
                    $spl_url_full .= '?' . $spl['crass']['response']->request['unblock']['query'];
                  }
                  echo urldecode($spl_url_full );
                ?>

                <?php //echo urldecode($spl['crass']['response']->request['unblock']['host'].$spl['crass']['response']->request['unblock']['path'].'?'.$spl['crass']['response']->request['unblock']['query']); ?>
              </a>
            </p>

          </div><!-- /.row-fluid --> 
          <div class="row-fluid">
            <?php if ( !empty($spl['crass']['response']->request['unblock']['note']) ) : ?>
          <div class="span6">
            <h5>You included the following note:</h5>
            <p>
              <?php echo $spl['crass']['response']->request['unblock']['note'] ?>
            </p>
          </div><!-- /.span6 --> 
          <?php endif; ?>
          
          <?php if ( !empty($spl['crass']['response']->request['unblock']['email']) ) : ?>
          <div class="span6">
            <h5>We will notify you of our decision at:</h5>
            <p>
              <?php echo $spl['crass']['response']->request['unblock']['email'] ?>
            </p>
          </div><!-- /.span6 -->
          <?php endif; ?>
          </div><!-- /.row-fluid -->
        </div><!-- /.span6 --> 

        <div class="span6">
          <div class="row-fluid">
            <p class="lead">
              Ok, got it. But what if I can't wait?
            </p>

            <p>
              Please check at the nearest <em>Reference &amp; Information Desk</em> if you require immediate access to this website.
              You can ask the librarian on staff to make an interim evaluation of your request.
              <strong>Note:</strong> some requests may require a Library branch manager to make a determination at a later time.
            </p>

            <p>
              If you are not in a hurry, consider checking out <a href="http://www.spokanelibrary.org/new">something new</a>.
            </p>

          </div><!-- /.row-fluid --> 
        </div><!-- /.span6 --> 

      </div><!-- /.row-fluid --> 
    </div><!-- /.span12 --> 
  </div><!-- /.row-fluid --> 
</div><!-- ./well -->
