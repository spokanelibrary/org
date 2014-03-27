<?php if ( isset( $GLOBALS['crass_response']->result['date'] ) ) : ?>

<div class="alert alert-success">
  
  <h2>Success!</h2>

  <blockquote>
    <p>
      Your card has been renewed until <b><?php echo $GLOBALS['crass_response']->result['date']; ?></b>.
    </p>
    <p>
      If you have updated your contact information, your changes will not be reflected on your account until they are reviewed by library circulation staff.
    </p>
  </blockquote>

</div><!-- /.alert -->

<?php else: ?>

<div class="alert alert-error">
  <h2>Oops!</h2>

  <blockquote>
    <p>
      It looks like we ran into a problem renewing your card.
    </p>
    <p>
      Please give us a call at <strong>444-5333</strong> so we can take a look at this for you.
    </p>
    <p>
      Thanks, and apologies for the inconvenience.
    </p>
  </blockquote>

</div><!-- /.alert -->

<?php endif; ?>

<?php

/*
echo '<pre>';
print_r($GLOBALS['crass_response']->result);
//print_r($GLOBALS['crass_response']->request); 
echo '</pre>';
*/
?>