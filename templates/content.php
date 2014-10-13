<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<div class="row">
  	<div class="col-sm-4 col-sm-push-8">
	  	<aside>
	  			<h5 class="text-muted">
		  				Posted in
		  			</h4>
	  				<ul class="nav nav-pills">
	  				<?php
				  	$categories = get_the_category($post->ID);
						if ( is_array($categories)) { 
							foreach ( $categories as $category ) {
								echo '<li class="active">';
								echo '<a href="' . get_category_link($category->cat_ID) . '">';
								echo '<small>';
								echo '<i class="glyphicon glyphicon-pushpin"></i> ';
								echo $category->name;
								echo '</small>';
								echo '</a>';
								echo '</li>';
							}
						}		
						?>
						</ul>
	  	</aside>
	  </div>
	  <div class="col-sm-8 col-sm-pull-4">
    	<?php the_excerpt(); ?>
  	</div>
	  </div>
  </div>
  <hr>
</article>
