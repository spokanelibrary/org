<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
  	<aside class="pull-right">
  		<div class="panel panel-default">
  			<div class="panel-body">
	  		Posted In
  			</div>
	  	</div>
  	</aside>
  	<?php
  	$categories = get_the_category($post->ID);
		if ( is_array($categories)) { 
			//print_r($categories);
		}		
		?>
    <?php the_excerpt(); ?>
  </div>
</article>
