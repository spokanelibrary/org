<header class="banner navbar navbar-common navbar-static-top" role="navigation">
  <ul class="nav navbar-nav nav-justified">
    <li>
      <a href="<?php echo home_url(); ?>/">
        <span class="visible-xs"><i class="glyphicon glyphicon-home"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-home"></i> Home</span>
      </a>
    </li>
    <li>
      <a href="/account/">
        <span class="visible-xs"><i class="glyphicon glyphicon-user"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-user"></i> My Account</span>
      </a>
    </li>
    <li>
      <a href="/search/">
        <span class="visible-xs"><i class="glyphicon glyphicon-search"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-search"></i> Search</span>
      </a>
    </li>
    <li>
      <a href="/browse/">
        <span class="visible-xs"><i class="glyphicon glyphicon-book"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-book"></i> Browse</span>
      </a>
    </li>
    <li>
      <a href="/download/">
        <span class="visible-xs"><i class="glyphicon glyphicon-download-alt"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-download-alt"></i> Download</span>
      </a>
    </li>
    <li>
      <a href="/connect/">
        <span class="visible-xs"><i class="glyphicon glyphicon-envelope"></i></span>
        <span class="hidden-xs"><i class="text-success glyphicon glyphicon-envelope"></i> Contact Us</span>
      </a>
    </li>
  </ul>
</header><!-- /.navbar -->

<header id="spl-masthead" class="banner navbar navbar-static-top navbar-inverse visible-md visible-lg" role="banner">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" id="spl-logo" href="<?php echo home_url(); ?>/">
      <span class="text-hide"><?php bloginfo('name'); ?></span>
    </a>
    </div>
  </div>
</header>

<header class="banner navbar navbar-inverse navbar-static-top" style="margin-bottom:10px;" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" id="spl-logo-mobile" href="<?php echo home_url(); ?>/">
        <span class="logotype"><?php bloginfo('name'); ?></span>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

