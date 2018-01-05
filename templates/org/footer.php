<div id="spl-more" style="/*background:rgb(100,150,75);*/">


<footer style="background-color: #BDA0C8; padding: 7px; padding-left: 100px;"><h4> <a href="/subscribe" style="color:white;">Subscribe to Library Newsletters</h4></a></footer>


  <!-- <a name="spl-more">&nbsp;</a> -->
  <div style="padding-top:20px; margin-bottom: 20px; background-color: rgb(125,182,82);" >
  <footer class="content-info container" role="contentinfo">
    <!--<hr>-->
    <?php
    /*
    if ( is_user_logged_in() ) {
      include('footer-bottom-navbar.php');
    }
    */
    ?>
    <?php if ( 'learn.spokanelibrary.org' != $_SERVER['SERVER_NAME'] && 'staff.spokanelibrary.org' != $_SERVER['SERVER_NAME'] ) : ?>
      <?php include('footer-bottom-navbar.php'); ?>
    <?php endif; ?>
  </footer>
  </div>

  <footer class="content-info container hidden-print" role="contentinfo">

    <div class="row">
      
      <div class="col-sm-6">

        <div class="media">
          <div class="media-left pull-left">
            <a href="<?php echo spl_get_home_url(); ?>/">
              <img class="media-object" style="width:100px; height:80px; margin:auto;" src="/assets/img/spl-touch-hidpi.png" alt="Spokane Public Library logo">
            </a>
          </div>
          <div class="media-body">
            <h5 class="media-heading text-success">Spokane Public Library</h5>
            <address class="help-block">
              <h6 class="normal">
                906 West Main Avenue
                <br>
                Spokane, WA 99201
              </h6>
            </address>
            <h5 class="help-block">
              Customer Service: 509.444.5300
            </h5>
          </div>
        </div>

      </div><!-- /.col -->

      <div class="col-sm-6">

        <div class="media">
          <div class="media-right pull-right">
            <a href="https://my.spokanecity.org/">
              <img class="media-object" style="width:width:75px; height:90px; margin:auto;" src="/assets/img/png/city-spokane-logo-hidpi.png" alt="City of Spokane logo">
            </a>
          </div>
          <div class="media-body pull-right">
            <h5 class="media-heading">City of Spokane</h5>
            <address class="help-block">
              <h6 class="media-heading normal"><a href="https://my.spokanecity.org/">my.spokanecity.org</a></h6>
            </address>
          </div>
        </div>

      </div><!-- /.col -->
       
    </div><!-- /.row -->


    <!--
    <hr>
    <p class="text-center">
      <span class="help-block">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        <br>
        <a href="/contact/"><b>Contact Us</b></a>
      </span>
    </p>
    -->

    <?php echo do_shortcode('[spl_widget login-form modal label]'); ?>
    <?php echo do_shortcode('[spl_widget my-account profile]'); ?>

  </footer>

  <span class="visible-xs"></span>
  <span class="visible-sm"></span>
  <span class="visible-md"></span>
  <span class="visible-lg"></span>

</div>
<p>&nbsp;</p>
<div id="fb-root"></div>
<script type="script/javascript">
  // remove login info from visible url via redirect
  loginInfoCheck = /\/account?.+spl-login/ 
  if (loginInfoCheck) {
    window.location = '/account'
  }

</script>