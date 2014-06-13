<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Copy That!</h3>
  </div>
  <div class="panel-body">
  
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

    <div class="row">
      <div class="col-md-6">
        <p>
          If it is not found to violate our <a href="http://www.spokanelibrary.org/internet-policy">Internet Use Policy</a> this website will be unblocked from all computers on the Spokane Public Library network within <strong class="serif">72</strong> hours.
        </p>
      </div><!-- /.col --> 
      <div class="col-md-6">
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
      </div><!-- /.col --> 
    </div><!-- /.row --> 

    <div class="row">
      <div class="col-md-6">
        <?php if ( !empty($spl['crass']['response']->request['unblock']['note']) ) : ?>
          <b>You included the following note:</b>
          <p>
            <?php echo $spl['crass']['response']->request['unblock']['note'] ?>
          </p>
        <?php endif; ?>
        
        <?php if ( !empty($spl['crass']['response']->request['unblock']['email']) ) : ?>
          <b>We will notify you of our decision at:</b>
          <p>
            <?php echo $spl['crass']['response']->request['unblock']['email'] ?>
          </p>
        <?php endif; ?>
      </div><!-- /.col --> 
      <div class="col-md-6">
        <p class="lead">
          Ok, got it. But what if I can't wait?
        </p>
        <p>
          Please check at the nearest <em>Reference &amp; Information Desk</em> if you require immediate access to this website.
          You can ask the librarian on staff to make an interim evaluation of your request.
        </p>
        <p>
          <strong>Note:</strong> some requests may require a Library branch manager to make a determination at a later time.
        </p>
        <p>
          If you are not in a hurry, consider checking out <a href="http://www.spokanelibrary.org/new">something new</a>.
        </p>
      </div><!-- /.col --> 
    </div><!-- /.row --> 

  </div><!-- /.panel-body --> 
</div><!-- /.panel --> 

