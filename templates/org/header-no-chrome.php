<?php

function spl_get_home_url() {
  return home_url();
  //return 'http://www.spokanelibrary.org';
}

?>

<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=289675684463099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>  

<header class="navbar-common navbar-fixed-top visible-xs visible-sm">
  <!--<div class="container">-->
  <ul class="nav nav-justified">
  <?php 
  wp_nav_menu( 
  array(
    'menu' => 'Common Navigation'
  , 'container' => false
  , 'items_wrap' => '%3$s'
  )); 
  ?>
  </ul>
  <!--</div>-->
</header>

<?php //if ( is_user_logged_in() ) :?>
<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo spl_get_home_url(); ?>/">
            <span class="text-hide"><?php bloginfo('name'); ?></span>
          </a>
        </div>
      </div><!-- /.col -->
      <div class="col-md-10">
          
          <div class="row">
            <div class="col-md-11 col-md-offset-1">
              <header id="spl-navbar-common" class="navbar-common navbar-static-top" style="border-left:1px solid rgb(0,85,135); border-right:1px solid rgb(0,85,135);">
                <!--<div class="container">-->
                <ul class="nav nav-justified">
                <?php 
                wp_nav_menu( 
                array(
                  'menu' => 'Common Navigation'
                , 'container' => false
                , 'items_wrap' => '%3$s'
                )); 
                ?>
                </ul>
                <!--</div>-->
              </header>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <h4 class="text-success normal pull-left" style="opacity:.9; margin-left: 10px; margin-top:20px;">
                <?php bloginfo('description'); ?>
              </h4>
              <div class="pull-right" style="margin-top: 12px;">
                <?php include('header-social-connect.php'); ?>
              </div>
              <div id="spl-account-profile"></div>
            </div><!-- /.col -->
          </div><!-- /.row -->
      
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</header><!-- /.navbar -->


