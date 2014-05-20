<?php
/*
Template Name: Home Page
*/
?>

<div class="row">
  <div class="col-md-6">
    <?php echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div><!-- /.col -->
  <div class="col-md-6">
    <div class="hidden-xs">
      <?php echo do_shortcode('[spl_widget login-form]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<p class="hidden-md hidden-lg">
</p>

<div class="row">
  <div class="col-md-6">
    <?php echo do_shortcode('[spl_carousel auto]'); ?>
  </div><!-- /.col -->
  <div class="col-md-3">
    <div class="panel panel-warning" style="border-left-width:5px;">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-cloud-download"></i>
        At the <a href="/digital/">Digital Branch</a>
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget custom-page page=download-widget]'); ?>
        <hr>
        <small>
          <a href="/digital/">More research and learning tools</a> &rarr;
        </small>
      </div>
    </div><!-- /.panel -->

    

  </div><!-- /.col -->
  <div class="col-md-3">

    <div class="list-group">
      <a href="/chat/" class="list-group-item active">
        <i class="glyphicon glyphicon-comment"></i>
        Live chat
      </a>
      <a href="/account/" class="list-group-item">
        My account
      </a>
      <a href="/search/" class="list-group-item">
        Search the catalog
      </a>
      <a href="/explore/" class="list-group-item">
        How to find things
      </a>
      <a href="/browse/" class="list-group-item">
        Browse popular titles
      </a>
      <a href="/apps/" class="list-group-item">
        Mobile apps
      </a>
      <a href="/news/" class="list-group-item">
        Get library news
      </a>
      <a href="/connect/" class="list-group-item">
        Contact the library
      </a>
      <a href="/faq/" class="list-group-item">
        Questions &amp; Answers
      </a>
    </div>
    
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row">

	<div class="col-md-6">
		<?php //get_template_part('templates/page', 'header'); ?>

		<?php get_template_part('templates/content', 'page'); ?>

		<?php
    $rss = fetch_feed( 'http://blog.spokanelibrary.org/feed/atom/' );

    if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

        // Figure out how many total items there are, but limit it to 5. 
        $maxitems = $rss->get_item_quantity( 9 ); 

        // Build an array of all the items, starting with element 0 (first element).
        $rss_items = $rss->get_items( 0, $maxitems );

    endif;

    ?>

    <div class="hidden-xs">
    
    <!--
    <div class="panel panel-primary panel-callout panel-callout-primary panel-transparent">
    -->
    <h4 class="text-primary" href="http://blog.spokanelibrary.org">
      <a href="#">Recently posted <small>by library bloggers</small></a>
    </h4>
    <ul class="nav nav-pills">
        <?php if ( $maxitems == 0 ) : ?>
            <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
        <?php else : ?>
            <?php // Loop through each feed item and display each item as a hyperlink. ?>
            <?php foreach ( $rss_items as $item ) : ?>
                <li>
                    <?php //print_r($item); ?>
                    <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                        title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>">
                        <small class="glyphicon glyphicon-bullhorn text-muted"></small>
                        <?php echo esc_html( $item->get_title() ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <!-- </div> -->
    </div>

	</div><!-- /.col -->
  
  <div class="col-md-3">
    <div class="hidden-xs">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <i class="glyphicon glyphicon-calendar"></i>
          Happening soon
        </div>
        <div class="panel-body">
          <?php echo do_shortcode('[events_list scope="month" limit="5" country="US"]#_EVENTLINK <br> <small class="muted">@ #_LOCATIONLINK</small> <br> <small><b>#_EVENTDATES</b> #_EVENTTIMES</small> <br>  <small>#_EVENTEXCERPT{20,...}</small> <hr>[/events_list]'); ?>
        
          <small>
            <a href="/calendar/">View events calendar</a> &rarr;
          </small>
        </div>
      </div><!-- /.panel -->
    </div>
  </div><!-- /.col -->

	<div class="col-md-3">
    
    <div class="panel panel-default" style="margin-bottom:6px;">
      <div class="panel-heading">
        <span class="text-muted">
        <i class="glyphicon glyphicon-calendar"></i>
        Is the library open?
        </span>
      </div>
    </div><!-- /.panel -->
    <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
		
	</div><!-- /.col -->

</div><!-- /.row -->