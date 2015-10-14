 <header class="page-header">
      <h1 class=""><?php the_title(); ?></h1>
    </header>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <?php //get_template_part('templates/entry-meta'); ?>
  </div>
  <hr>
</article>

<?php endwhile; ?>
