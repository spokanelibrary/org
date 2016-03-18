
<?php if ( isset( $crass->result ) && ( !isset($crass->result['error']) ) ) : ?>

<div class="row">
  <div class="col-md-12">

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Welcome to the library!</h3>
      </div>
      <div class="panel-body">
        <p>
          Here is your new card number:
        </p>
        <?php
        if ( is_array($crass->result) ) {
          foreach ( $crass->result as $c => $card ) {
            echo '<h4>'.$card['barcode'].'</h4>';
          }
        }
        ?>
      </div>
    </div><!-- /.panel -->

  </div><!-- /.col -->
</div><!-- /.row -->

<h2 class="text-muted">What's next?</h2>

<?php if ( isset($_REQUEST['station']) )  : ?>
<blockquote>
  <h4>This is a temporary card. It expires in 30 days.</h4>
  <p>
    Please visit the circulation desk to verify your identity and get a permanent card.
  </p>
  <p>
    <a class="btn btn-primary" href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><i class="glyphicon glyphicon-ok"></i> I'm finished</a>
  </p>
</blockquote>

<?php else: ?>

<div class="row">
  <div class="col-md-8">

    <blockquote>
      <h4>This is a temporary card. It expires in 30 days.</h4>
      <p>
        Please visit the circulation desk at any <a href="/branches/">library branch</a> to verify your identity and get a permanent card.
      </p>
      <p>
        <a href="/card/#apply"><b>Learn more about what kind of identification you will need</b> &rarr;</a>
      </p>
    </blockquote>

    <blockquote>
      <h4>You can start using your new card at our digital branch today!</h4>
      <p>
        Download books, music, and magazines or access our subscription research databases.
      </p>
      <p>
        <a href="/digital/"><b>Visit the digital branch now</b> &rarr;</a>
      </p>
    </blockquote>

  </div><!-- /.col -->

  <div class="col-md-4">

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">If you are under 18</h3>
      </div>
      <div class="panel-body">
        <p>
          Your parent or guardian will need to come to the circulation desk to sign off on your library card.
        </p>
        <p>
          We will also mail a form to the address you provide which your parent or guardian can sign for you to return to the library.
        </p>
      </div>
    </div><!-- /.panel -->

    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">For Non-residents</h3>
      </div>
      <div class="panel-body">
        <p>
          Please note that there is a fee for non-resident cards.
        </p>
        <p>
          <a href="/card/#non-resident">Non-resident card information &rarr;</a>
        </p>
      </div>
    </div><!-- /.panel -->

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">For Teachers</h3>
      </div>
      <div class="panel-body">
        <p>
          Please bring proof of your employment (staff ID, pay stub, etc.) when you visit us for your permanent card.
        </p>
      </div>
    </div><!-- /.panel -->

    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">For Businesses</h3>
      </div>
      <div class="panel-body">
        <p>
          Please bring a copy of your current year's <b>City of Spokane business license</b>.
          Or, if the card is for a non-profit agency, please bring a copy of your <b>Washington State license</b>.
        </p>
      </div>
    </div><!-- /.panel -->

  </div><!-- /.col -->
</div><!-- /.row -->
  
<?php endif; ?>


<?php else: ?>

<div class="alert alert-danger">

  <h2>Oops!</h2>

  <p>
    There was a problem creating your new card. We apologize for the hassle. 
  </p>
  <p>
    You can <a href="/contact/">contact us</a> or see a staff member at the circulation desk.
  </p>



</div><!-- /.alert -->

<?php endif; ?>

<?php

echo '<pre>';
echo 'Result';
print_r($crass->result);
echo 'Request';
print_r($crass->request); 
echo '</pre>';

?>