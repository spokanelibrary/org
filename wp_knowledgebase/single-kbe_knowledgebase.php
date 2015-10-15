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

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">Related Articles</h4>
      </div>
      <div class="panel-body">
        <?php echo spl_kbe_get_related_articles_by_id(get_the_ID()); ?>    
      </div>
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->

<?php endwhile; ?>
<?php kbe_get_post_views(get_the_ID()); ?>

<?php

function spl_kbe_get_related_articles_by_id($id) {
  $html = null;

  $terms = wp_get_post_terms($id, KBE_POST_TAXONOMY);
  
  if ( is_array($terms) ) {
    foreach ( $terms as $term ) {
      $html .= '<h4 class="uppercase">';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '<span class="label label-success pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '</h4>';
    }
 
  }

  return $html;
}

?>