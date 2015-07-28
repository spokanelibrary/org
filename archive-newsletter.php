<div class="page-header">
  <h1>
    Library News <small>Past Issues</small>
  </h1>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <div class="text-right">
        <i class="glyphicon glyphicon-envelope text-primary"></i>
        <a href="/subscribe/">Subscribe</a>
    </div>
  </div>
  <div class="panel-body">
    <?php while (have_posts()) : the_post(); ?>
    <?php
    $subtitle = get_post_meta($post->ID
                ,'_spl_mailgun_newsletter_subtitle'
                ,true 
                );
    ?>
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
        <h5 class="text-muted"><?php echo($subtitle); ?></h5>

        <h3 class="entry-title">
          <!--
          <small>
            <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('F, Y'); ?></time>
          </small>
          <br>
          -->
          <a class="" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>

      </header>
      <div class="entry-summary">
        <?php
        $img_src = null;
        if ( has_post_thumbnail() ) { 
          $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
          $img_src = $img[0];
        }
        ?>
      	<blockquote>
          <?php if ($img_src) :; ?>
          <img class="img-responsive img-rounded pull-left" style="max-height:200px;" src="<?php echo $img_src; ?>">
          <?php endif; ?> 
      	  <?php the_excerpt(); ?>
    	  </blockquote>
      </div>
    </article>
    <hr>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>

    <?php endwhile; ?>

    <?php if ($wp_query->max_num_pages > 1) : ?>
      <!--<hr>-->
      <nav class="post-nav">
        <ul class="pager">
          <li class="previous"><?php next_posts_link(__('&larr; Older Newsletters', 'roots')); ?></li>
          <li class="next"><?php previous_posts_link(__('Newer Newsletters &rarr;', 'roots')); ?></li>
        </ul>
      </nav>
    <?php endif; ?>

  </div>
</div>