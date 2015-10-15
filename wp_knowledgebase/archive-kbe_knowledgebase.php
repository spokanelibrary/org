<div class="page-header">
  <h1>
    Knowledge Base
  </h1>
</div>

<?php echo spl_kbe_get_kb_category(); ?>

<?php 

function spl_kbe_get_kb_category($id=0) {
  $html = null;
  $args = array(
                'orderby'       => 'terms_order', 
                'order'         => 'ASC',
                'hide_empty'    => true,
                'parent'        => $id
                );
  $terms = get_terms(KBE_POST_TAXONOMY, $args);
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
      $html .= '<h4>';
      $html .= 'All articles in ';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '</h4>';
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      $html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= '</div>'; 
      $html .= '<div class="panel-footer">'; 
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      $html .= '</div>'; 
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

function spl_kbe_get_kb_cat_by_parent_id($id=0) {
  $html = null;
  $args = array(
                'orderby'       => 'terms_order', 
                'order'         => 'ASC',
                'hide_empty'    => true,
                'parent'        => $id
                );
  $terms = get_terms(KBE_POST_TAXONOMY, $args);
  //$html .= '<pre>'.print_r($terms, true).'</pre>';
  if ( is_array($terms) && !empty($terms[0]) ) {
    //$html .= '<h6 class="uppercase">Subcategories</h6>'; 
    $html .= '<ul>';
    foreach ( $terms as $term ) {
      $html .= '<li>';
      $html .= '<h5 class="uppercase">';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '<span class="label label-warning pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '</h5>';
      //$html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      $html .= '</li>';
    }
    $html .= '</ul>';
  }

  return $html;
}

function spl_kbe_get_kb_list_by_term_id($id) {
  $html = null;
  $args = array(
                'post_type' => KBE_POST_TYPE,
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array(
                  array(
                        'taxonomy' => KBE_POST_TAXONOMY,
                        'field' => 'term_id',
                        'terms' => $id,
                        'include_children' => false
                  )
                )
            );
  $query = new WP_Query($args);

  if($query->have_posts()) {
    $html .= '<ul class="nav nav-pills">';
    while( $query->have_posts() ) {
      $query->the_post();
      $html .= '<li>';
      $html .= '<h4>';
      $html .= '<a href="'.get_the_permalink().'" rel="bookmark">';
      $html .= '<i class="glyphicon glyphicon-list-alt"></i> '.get_the_title();
      $html .= '</a>';
      $html .= '</h4>';
      $html .= '</li>';
    }
    $html .= '</ul>';
  }
  return $html;
}


?>
    
    