<div id="spl-more" style="/*background:rgb(100,150,75);*/">

  <!-- <a name="spl-more">&nbsp;</a> -->
  <div style="padding-top: 20px; margin-bottom: 20px; background-color: rgb(100,150,75); background-image: url(/assets/img/png/bg-book-cart.png); background-repeat: no-repeat; background-position: center;">
  <footer class="content-info container" role="contentinfo">
    <!--<hr>-->
    <?php //include('footer-bottom-navbar.php'); ?>
  </footer>
  </div>

  <footer class="content-info container" role="contentinfo">
    <!--<hr>-->
    <?php //include('footer-bottom-navbar.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <span class="pull-right">
          <img alt="City of Spokane logo" src="/assets/img/png/city-spokane-logo.png">
        </span>

        <p>
          <strong class="text-muted" style="">Spokane Public Library</strong>
        </p>
        <address class="text-muted" style="">
          906 West Main Avenue
          <br>
          Spokane, WA 99201
          <br>
          509.444.5300
        </address>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <!--
        <p class="text-muted">
          &copy; <?php echo date('Y'); ?> <?php //bloginfo('name'); ?>
        </p>
        -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <?php echo do_shortcode('[spl_widget login-form modal label]'); ?>
    <?php echo do_shortcode('[spl_widget my-account profile]'); ?>

  </footer>

  <span class="visible-xs"></span>
  <span class="visible-sm"></span>
  <span class="visible-md"></span>
  <span class="visible-lg"></span>

</div>
<div id="fb-root"></div>