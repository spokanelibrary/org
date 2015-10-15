<?php while(have_posts()) : ?>
<?php the_post(); ?>
<?php kbe_set_post_views(get_the_ID()); ?>

<div class="page-header">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>

<?php print_r(get_terms('kbe_taxonomy')); ?>


<?php the_content(); ?>

<?php endwhile; ?>
<?php kbe_get_post_views(get_the_ID()); ?>
