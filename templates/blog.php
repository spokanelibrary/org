<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<div class="row">
	  	<div class="col-md-3 col-md-push-9">
		  	<aside>
  				<ul class="nav nav-pills">
  				<?php
			  	$categories = get_the_category($post->ID);
					if ( is_array($categories)) { 
						foreach ( $categories as $category ) {
							echo '<li>';
							echo '<a class="" href="' . get_category_link($category->cat_ID) . '">';
							echo '<small class="text-success">';
							echo '<small class="glyphicon glyphicon-pushpin"></small> ';
							echo '<b>'.$category->name.'</b>';
							echo '</small>';
							echo '</a>';
							echo '</li>';
						}
					}		
					?>
					</ul>
		  	</aside>
		  </div><!-- /.col -->
		  <div class="col-md-9 col-md-pull-3">
	    	<?php //the_excerpt(); ?>
	    	<?php the_content(); ?> 
	  	</div>
	  </div><!-- /.col -->
  </div><!-- /.row -->
  <?php get_template_part('templates/entry-meta'); ?>
  <br>
  <small class="text-muted widget_tag_cloud">
  	<?php the_tags( 'Tags: ', ', ', '' ); ?>
	</small>
  <hr>
</article>
