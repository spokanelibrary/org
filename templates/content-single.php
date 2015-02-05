<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="page-header">
      <h1 class=""><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <hr>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4>More from the library blog</h4>
    </div>
    <div class="panel-body">
    <?php wp_tag_cloud( array('taxonomy' => array('post_tag', 'category')) ); ?>  
    </div>
  </div>
<?php endwhile; ?>
