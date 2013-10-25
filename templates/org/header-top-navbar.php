<header class="navbar-common banner navbar navbar-fixed-top" role="navigation">
  <ul class="nav nav-justified">
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

<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo home_url(); ?>/">
        <span class="text-hide"><?php bloginfo('name'); ?></span>
      </a>
    </div>

    <div id="spl-account-profile"></div>

    <script id="spl-account-profile-tmpl" type="text/x-handlebars-template">
      <div class="panel panel-primary panel-condensed pull-right" id="spl-account-profile" style="margin-top: 10px; opacity:.95;">
        <div class="panel-body">
          <i class="glyphicon glyphicon-user text-muted"></i>
          <a href="/account/"><strong>{{user.firstName}}</strong></a>
          |
          <a href="/account/?logout" class="text-warning"><small>Logout</small></a>
        </div>
      </div>
    </script>

  </div>
</header><!-- /.navbar -->

<header class="navbar-primary banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo home_url(); ?>/">
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
</header><!-- /.navbar -->

