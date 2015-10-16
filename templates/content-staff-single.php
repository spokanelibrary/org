<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="page-header">
      <h1 class=""><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
    <?php
    $categories = get_the_category(  );
      $resolved = false;
      foreach ( $categories as $category ) {
        if ( 'Resolved' == $category->name ) {
          $resolved = true;
        }
      }
      ?>
      <?php if( $resolved ) : ?>
      <span class="pull-right label label-danger">Resolved</span>
      <?php endif; ?> 
      <?php
      $taglist = null;
      $tags = get_the_tags();
      if ($tags) {
        foreach($tags as $tag) {
          $taglist .= '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a>, '; 
        }
      }
      $taglist = rtrim($taglist, ', ');
      ?>
      <?php if ($taglist) : ?>
      <p>
        <small><?php echo $taglist; ?></small>
      </p>
      <?php endif; ?>
      <?php the_content(); ?>
      
      <?php //get_template_part('templates/entry-meta'); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <hr>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
  
<?php endwhile; ?>
