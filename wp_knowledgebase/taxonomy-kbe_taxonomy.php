<?php 
$spl_kbe_cat_slug = get_queried_object()->slug;
$spl_kbe_cat_name = get_queried_object()->name;
?>
<div class="page-header">
  <h1>
    <?php echo $spl_kbe_cat_name; ?>
  </h1>
</div>

<div class="row">
  <div class="col-md-8 col-md-9">
  </div><!-- /.col -->
    <div class="col-md-4 col-md-3">
      Sidebar
  </div><!-- /.col -->
</div><!-- /.row -->

<?php exit; ?>

<?php

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
          'terms' => $slug
          //'include_children' => false
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
        $html .= '<i class="glyphicon glyphicon-list-alt"></i> '.get_the_title();
        $html .= '</a>';
        $html .= '</li>';
      }
      $html .= '</ul>';
    }
  }

  return $html;
}

?>


<?php
// Query for Category
$kbe_cat_slug = get_queried_object()->slug;
$kbe_cat_name = get_queried_object()->name;

$kbe_tax_post_args = array(
    'post_type' => KBE_POST_TYPE,
    'posts_per_page' => 999,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => KBE_POST_TAXONOMY,
            'field' => 'slug',
            'terms' => $kbe_cat_slug
        )
    )
);
$kbe_tax_post_qry = new WP_Query($kbe_tax_post_args);
?>

<h2><strong><?php echo $kbe_cat_name; ?></strong></h2>

<ul>
<?php
if($kbe_tax_post_qry->have_posts()) :
while($kbe_tax_post_qry->have_posts()) :
$kbe_tax_post_qry->the_post();
?>
<li>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</li>
<?php
endwhile;
endif;
?>
</ul>
