<div class="page-header">
  <h1>
    <?php echo get_queried_object()->name; ?>
  </h1>
</div>

<div class="row">
  <div class="col-md-8 col-md-9">
    <?php if ( !empty(get_queried_object()->description) ) : ?>
    <blockquote>
      <?php echo get_queried_object()->description; ?>
    </blockquote>
    <?php endif; ?>

    <?php echo spl_kbe_get_kb_list_by_slug(get_queried_object()->slug); ?>
  </div><!-- /.col -->
  <div class="col-md-4 col-lg-3">
    <div class="panel spl-hero-intranet spl-hero-brand-blue-c">
      <div class="panel-heading">
        <h4 class="">Subcategories</h4>
      </div>
      <div class="panel-body">
        <?php echo spl_kbe_get_kb_cat_by_term_id(get_queried_object()->term_id); ?>    
      </div>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->


<?php

function spl_kbe_get_kb_cat_by_term_id($id) {
  $html = null;
  $args = array(
                //'orderby'       => 'terms_order', 
                'orderby'       => 'title', 
                'order'         => 'ASC',
                'hide_empty'    => true,
                'parent'        => $id
                );
  $terms = get_terms(KBE_POST_TAXONOMY, $args);
  //$html .= '<pre>'.print_r($terms, true).'</pre>';
  if ( is_array($terms) && !empty($terms[0]) ) {
    //$html .= '<h6 class="uppercase">Subcategories</h6>'; 
    $html .= '<ul class="list-unstyled" style="margin-left:8px; margin-top:8px;">';
    foreach ( $terms as $term ) {
      $html .= '<li>';
      $html .= '<b class="uppercase">';
      $html .= '<span class="label label-warning pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '<small>';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '</small>';
      $html .= '</b>';
      $html .= '<div class="clearfix"></div>';
      //$html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= spl_kbe_get_kb_cat_by_term_id($term->term_id);
      $html .= '</li>';
    }
    $html .= '</ul>';
  }

  return $html;
}

function spl_kbe_get_kb_list_by_slug($slug) {
  $html = null;

  if ( $slug ) {
    $args = array(
    'post_type' => KBE_POST_TYPE,
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'tax_query' => array(
      array(
          'taxonomy' => KBE_POST_TAXONOMY,
          'field' => 'slug',
          'terms' => $slug,
          'include_children' => false
        )
      )
    );
    $query = new WP_Query($args);
  
    if($query->have_posts()) {
      $html .= '<div class="row">';
      $i = 1;
      while( $query->have_posts() ) {
        $query->the_post();
        $html .= '<div class="col-md-6">';
        $html .= '<h4>';
        $html .= '<small class="glyphicon glyphicon-list-alt"></small> ';
        $html .= '<a href="'.get_the_permalink().'" rel="bookmark">';
        $html .= get_the_title();
        $html .= '</a>';
        $html .= '</h4>';
        $html .= '</div>';
        if ( 0 == $i % 2 ) {
          $html .= '<div class="clearfix"></div>';
        }
        $i++;
      }
      $html .= '</div>';
    }
  }

  return $html;
}

?>
