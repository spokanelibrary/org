<?php

function spl_get_home_url() {
  //return home_url();
  //return 'http://www.spokanelibrary.org';
  //return '/signup/?station&location='.$_REQUEST['location'];
  $url = './?station';
  if ( $_REQUEST['location'] ) {
    $url .= '&location='.$_REQUEST['location'];
  }
}

?>

<header style="border:none; margin-top: 10px; margin-bottom:30px;" class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo spl_get_home_url(); ?>">
            <span class="text-hide"><?php bloginfo('name'); ?></span>
          </a>
        </div>
      </div><!-- /.col -->
      <div class="col-md-10">
          
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-success normal pull-left" style="opacity:.9; margin-left: 10px; margin-top:50px;">
                <?php //bloginfo('description'); ?>
              </h4>
            </div><!-- /.col -->
          </div><!-- /.row -->
      
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</header><!-- /.navbar -->


