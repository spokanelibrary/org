<div class="page-header">
  <h1>
    Knowledge Base
  </h1>
</div>



<?php echo spl_kb_get_kb_category(); ?>
<?php exit; ?>

<div class="row">
<?php
$kbe_cat_args = array(
                    'orderby'       => 'terms_order', 
                    'order'         => 'ASC',
                    'hide_empty'    => true,
                    'parent'        => 0
                );
?>
<?php $kbe_terms = get_terms(KBE_POST_TAXONOMY, $kbe_cat_args); ?>

<?php foreach($kbe_terms as $kbe_taxonomy) : ?>
  <div class="col-md-6">
    <h3>
      <a href="<?php echo get_term_link($kbe_taxonomy->slug, 'kbe_taxonomy') ?>">
          <?php echo $kbe_taxonomy->name; ?>
      </a>
      <span class="label label-success pull-right">
      <?php echo $kbe_taxonomy->count; ?>
      </span>
    </h3>
              
    <?php echo spl_kbe_get_kb_list_by_term_id($kbe_taxonomy->term_id); ?>


  <?php
  $kbe_child_cat_args = array(
                          'orderby'       => 'terms_order', 
                          'order'         => 'ASC',
                          'parent'        => $kbe_taxonomy->term_id,
                          'hide_empty'    => true, 
                      );
  ?>
  <?php $kbe_child_terms = get_terms(KBE_POST_TAXONOMY, $kbe_child_cat_args); ?>

  <?php if($kbe_child_terms) : ?>
    <?php foreach($kbe_child_terms as $kbe_child_term) : ?>
      <h4>
        <a href="<?php echo get_term_link($kbe_child_term->slug, 'kbe_taxonomy') ?>">
          <?php echo $kbe_child_term->name; ?>
        </a>
        <span class="label label-warning pull-right">
          <?php echo $kbe_child_term->count; ?>
        </span>
      </h4>

      <!-- <ul class="kbe_child_article_list"> -->
      <?php
      /*
      $kbe_child_post_args = array(
                                  'post_type' => KBE_POST_TYPE,
                                  'posts_per_page' => KBE_ARTICLE_QTY,
                                  'orderby' => 'menu_order',
                                  'order' => 'ASC',
                                  'tax_query' => array(
                                          array(
                                                  'taxonomy' => KBE_POST_TAXONOMY,
                                                  'field' => 'term_id',
                                                  'terms' => $kbe_child_term->term_id
                                          )
                                  )
                          );  

        $kbe_child_post_qry = new WP_Query($kbe_child_post_args);
        if($kbe_child_post_qry->have_posts()) :
            while($kbe_child_post_qry->have_posts()) :
                $kbe_child_post_qry->the_post();
      */
      ?>
                  <!--
                  <li>
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                          CHILD POST: <?php the_title(); ?>
                      </a>
                  </li>
                -->
      <?php
      /*
        endwhile;
      else :
      endif;
      */
      ?>
      <!-- </ul> -->
  <?php endforeach; ?>
<?php endif; ?>
  

</div><!-- /.col -->

<?php endforeach; ?>
</div><!-- /.row -->






<?php 

function spl_kb_get_kb_category($id=0) {
  $html = null;
  $args = array(
                'orderby'       => 'terms_order', 
                'order'         => 'ASC',
                'hide_empty'    => true,
                'parent'        => $id
                );
  $terms = get_terms(KBE_POST_TAXONOMY, $args);
  if ( is_array($terms) ) {
    $html .= '<div class="row">';
    foreach ( $terms as $term ) {
      $html .= '<div class="col-md-6">';
      $html .= '<h3>';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '<span class="label label-success pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '</h3>';
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      $html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      $html .= '</div>'; 
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
  if ( is_array($terms) ) {
    $html .= '<ul>';
    foreach ( $terms as $term ) {
      //$html .= '<div class="col-md-6">';
      $html .= '<li>';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '<span class="label label-warning pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      //$html .= '<pre>'.print_r($term, true).'</pre>';
      //$html .= spl_kbe_get_kb_list_by_term_id($term->term_id);
      $html .= spl_kbe_get_kb_cat_by_parent_id($term->term_id);
      $html .= '</li>';
      //$html .= '</div>'; 
    }
    $html .= '</ul>';

  }

  return $html;
}

function spl_kbe_get_kb_list_by_term_id($id) {
  $html = null;
  $args = array(
                'post_type' => KBE_POST_TYPE,
                'posts_per_page' => KBE_ARTICLE_QTY,
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
    $html .= '<ul class="nav nav-list">';
    while( $query->have_posts() ) {
      $query->the_post();
      $html .= '<li>';
      $html .= '<a href="'.get_the_permalink().'" rel="bookmark">';
      $html .= '<i class="glyphicon glyphicon-bookmark"></i> '.get_the_title();
      $html .= '</a>';
      $html .= '</li>';

    }
    $html .= '</ul>';
  }
  return $html;
}


?>
    
    