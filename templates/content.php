<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<div class="row">
  	<div class="pull-right">
	  	<aside>
	  				<ul class="nav nav-pills">
	  				<?php
				  	$categories = get_the_category($post->ID);
						if ( is_array($categories)) { 
							foreach ( $categories as $category ) {
								echo '<li>';
								echo '<a href="' . get_category_link($category->cat_ID) . '">';
								echo '<small>';
								echo '<i class="glyphicon glyphicon-pushpin text-success"></i> ';
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
	  <div class="">
    	<?php the_excerpt(); ?>
  	</div>
	  </div>
  </div>
  <hr>
</article>
