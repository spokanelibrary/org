<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=289675684463099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>  
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
      {{#if user.sessionToken}}
      <div class="pull-right" id="spl-account-profile">
        <div class="well well-sm" style="margin: 6px 0 0 0;  opacity:.9; border-left-width:5px;">
            <i class="glyphicon glyphicon-user text-muted"></i>
            <strong class="text-muted">{{user.firstName}}</strong>
            <a href="/account/"><small><strong>My Account</strong></small></a>
            <span class="text-muted">&nbsp;&nbsp;</span>
            <span class="pull-right">
              <i class="glyphicon glyphicon-log-out text-danger"></i>
              <a href="./?logout" class="text-danger"><small><strong>Logout</strong></small></a>
            </span>
          <!--  
            <br />
        
          {{#if user.holdRequests}}
            {{#if user.holdRequests.ready}}
            <a href="/account#holds" class="btn btn-sm btn-default">
              Ready to pickup
              <small class="badge">{{user.holdRequests.ready}}</small>
            </a>
            {{/if}}
          {{/if}}
          &nbsp;
          {{#if user.itemsOut}}
            {{#if user.itemsOut.overdue}}
            <a href="/account#cko" class="btn btn-sm btn-default">
              Overdue 
              <small class="badge">{{user.itemsOut.overdue}}</small>
            </a>
            {{/if}}
          {{/if}}
          -->
        </div>
      </div>
      {{/if}}
    </script>

  </div>
</header><!-- /.navbar -->


<header class="navbar-primary banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container" style="background:red; margin-left:0; margin-right:0;">
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


