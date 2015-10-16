<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="page-header">
      <h1 class=""><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
    <h4>
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
      <?php echo $taglist; ?>
      <?php endif; ?>
      </h4>
      <hr>
      <h3 class="text-success serif"><?php echo get_the_date();?></h3>
      <?php the_content(); ?>
      
      <h4 class="byline author vcard"><?php echo __('~', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></h4>
      
      <?php //get_template_part('templates/entry-meta'); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <hr>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
  
<?php endwhile; ?>
