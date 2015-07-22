<div class="page-header">
  <h1>
    Library News 
    <small>Past Issues</small>
  </h1>
</div>
<hr>

<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
  <header>
    <?php
    /*
    <h2 class="entry-title">
    	<a href="<?php the_permalink(); ?>">
    		<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('F, Y'); ?></time>
    	</a>
    	<small>
    		<?php the_title(); ?>
    	</small>
    </h2>
    */
    ?>

    <h2 class="entry-title">
      <!--
      <small>
        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('F, Y'); ?></time>
      </small>
      <br>
      -->
      <a class="text-success" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

  </header>
  <div class="entry-summary">
  	<blockquote>
  	  <?php the_excerpt(); ?>
	  </blockquote>
  </div>
</article>

<footer>
  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
</footer>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <hr>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older Newsletters', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer Newsletters &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
