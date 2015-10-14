<?php get_template_part('templates/page', 'header'); ?>



<?php echo do_shortcode( '[staff-directory]' ); ?>



<hr>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>

  <div class="staff-directory">

      <div class="media-object">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <small>x[phone_number]</small></h3>
      <h4>[position]</h4>
      [photo]
      <h5>[category]</h5>
      </div>

      <?php print_r($post); ?>
  </div>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-rounded' )); ?>
    </a>
  <?php endif; ?>
    <?php //the_excerpt(); ?>
    <?php //get_template_part('templates/entry-meta'); ?>
  </div>
  <hr>
</article>

<?php endwhile; ?>
