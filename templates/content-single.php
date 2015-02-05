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
  <?php 
  the_widget( 'WP_Widget_Tag_Cloud', array('title'=>"Browse by tag")); 
  $args = array(
    'taxonomy' => array( 'post_tag', 'category' ), 
  ); 
  wp_tag_cloud( $args ); 
  ?>  
<?php endwhile; ?>
