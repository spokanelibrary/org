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
    <?php echo do_shortcode('[spl_widget login-form]'); ?>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row" style="margin-top:6px;">
  <div class="col-md-6">
    <?php echo do_shortcode('[spl_carousel auto]'); ?>
  </div><!-- /.col -->
  <div class="col-md-6">
    Some other stuff
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">

	<div class="col-sm-8 col-md-9">
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
      <span class="glyphicon glyphicon-bullhorn text-primary"></span>
      <a href="#">Recently Posted <small>by SPL Bloggers &rarr;</small></a>
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
                        <small class="glyphicon glyphicon-comment text-muted"></small>
                        <?php echo esc_html( $item->get_title() ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <!-- </div> -->
    </div>

	</div><!-- /.col -->
	<div class="'col-sm-4 col-md-3">

		
	</div><!-- /.col -->

</div><!-- /.row -->