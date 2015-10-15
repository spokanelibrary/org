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

  $terms = (wp_get_post_terms($id, KBE_POST_TAXONOMY), true);
  
  if ( is_array($terms) ) {
    $i = 1;
    $html .= '<div class="row">';
    foreach ( $terms as $term ) {
      $html .= '<div class="col-md-6">';
      $html .= '<div class="panel panel-primary">';
      $html .= '<div class="panel-heading">';
      $html .= '<h4 class="uppercase">';
      //$html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      //$html .= '</a>';
      $html .= '<span class="label label-success pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '</h4>';
      $html .= '</div>';  
      $html .= '<div class="panel-body">'; 
      $html .= '<h6 class="text-muted">';
      $html .= 'All articles in ';
      $html .= '<a class="uppercase" href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '</h6>';
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      //$html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= '</div>'; 
      //$html .= '<div class="panel-footer">'; 
      //$html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      //$html .= '</div>'; 
      $html .= '</div>'; 
      $html .= '</div>'; 
      if ( 0 == $i % 2 ) {
        $html .= '<div class="clearfix"></div>';
      }
      $i++;
    }
    $html .= '</div>';

  }

  return $html;
}

?>