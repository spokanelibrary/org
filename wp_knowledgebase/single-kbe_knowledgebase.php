<?php while(have_posts()) : ?>
<?php the_post(); ?>
<?php kbe_set_post_views(get_the_ID()); ?>

<div class="page-header">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>

<div class="row">
  <div class="col-md-8 col-md-9">
    <?php the_content(); ?>
  </div><!-- /.col -->
  <div class="col-md-4 col-lg-3">
    <pre>
    <?php print_r(wp_get_post_terms(get_the_ID(), 'kbe_taxonomy')); ?>
    </pre>
  </div><!-- /.col -->
</div><!-- /.row -->

<?php endwhile; ?>
<?php kbe_get_post_views(get_the_ID()); ?>

<?php

function spl_kbe_get_related_articles_by_id($id) {

}

?>