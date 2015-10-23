<!--
<div class="page-header">
  <h1>
    Knowledge Base
  </h1>
</div>
-->
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
      $html .= '<div class="panel spl-hero-intranet spl-hero-brand-blue-e" style="background-color:#fff;">';
      $html .= '<div class="panel-heading">';
      $html .= '<h4 class="uppercase">';
      $html .= '<span class="pull-right label label-success">';
      $html .= $term->count;
      $html .= '</span>';
      //$html .= '<i class="glyphicon glyphicon-list-alt"></i> ';
      //$html .= '</h4>';
      //$html .= '<h4 class="uppercase">';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      //$html .= '<p class="text-right">';
      //$html .= '<span class="pull-right label label-success">';
      //$html .= $term->count;
      //$html .= '</span>';
      //$html .= '</p>';
      $html .= '</h4>';
      $html .= '</div>';  
      $html .= '<div class="panel-body">'; 
      if ( !empty($term->description) ) {
        $html .= '<p>';
        $html .= $term->description;
        $html .= '</p>';
      }
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      //$html .= '<h4 class="uppercase">';
      //$html .= '<a class="" href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      //$html .= 'View all articles <small>&rarr;</small>';
      //$html .= '</a>';
      //b$html .= '</h4>';

      //$html .= '<h4 class="text-muted">';
      //$html .= 'View all articles in ';
      //$html .= '<a class="uppercase" href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      //$html .= $term->name;
      //$html .= '</a>';
      //$html .= ' <small>&rarr;</small>';
      //$html .= '</h4>';
      //$html .= '<h5 class="text-muted">';
      //$html .= 'View all articles in ';
      //$html .= '<a class="uppercase" href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      //$html .= $term->name;
      //$html .= '</a>';
      //$html .= ' <small>&rarr;</small>';
      //$html .= '</h5>';
      //$html .= '<hr>';
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      $html .= spl_kbe_get_kb_list_by_term_id($term->term_id, 10);
      //$html .= '<hr>';
      //$html .= '<h5 class="text-muted">';
      //$html .= 'View all articles in ';
      //$html .= '<a class="uppercase" href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      //$html .= $term->name;
      //$html .= '</a>';
      //$html .= ' <small>&rarr;</small>';
      //$html .= '</h5>';
      $html .= '</div>'; 
      $html .= '<div class="panel-footer">'; 
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id, true);
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

function spl_kbe_get_kb_cat_by_parent_id($id=0, $reveal=false) {
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
    if ( $reveal ) {
      $html .= '<a class="btn btn-default btn-block" href="#spl-kbe-subcat-'.$term->term_id.'" role="button" data-toggle="collapse"><i class="glyphicon glyphicon-list"></i> Show subcategories</a>'; 
      $html .= '<div class="collapse" id="spl-kbe-subcat-'.$term->term_id.'">'; 
    }
    $html .= '<ul class="list-unstyled" style="margin-left:8px; margin-top:8px;">';
    foreach ( $terms as $term ) {
      $html .= '<li>';
      $html .= '<h5 class="uppercase">';
      $html .= '<span class="label label-warning pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '</h5>';
      $html .= '<div class="clearfix"></div>';
      //$html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      $html .= '</li>';
    }
    $html .= '</ul>';
    if ( $reveal ) {
      $html .= '</div>';
    }
  }

  return $html;
}

function spl_kbe_get_kb_list_by_term_id($id, $count=-1) {
  $html = null;
  $args = array(
                'post_type' => KBE_POST_TYPE,
                'posts_per_page' => $count,
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
      $html .= '<a href="'.get_the_permalink().'" rel="bookmark">';
      $html .= '<small class="text-muted glyphicon glyphicon-list-alt"></small> ';
      $html .= get_the_title();
      $html .= '</a>';
      $html .= '</li>';
    }
    $html .= '</ul>';
  }
  return $html;
}


?>
    
    