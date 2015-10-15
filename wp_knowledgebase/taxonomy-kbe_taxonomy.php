








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
