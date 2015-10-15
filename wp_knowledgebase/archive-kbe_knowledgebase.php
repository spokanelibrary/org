Archive page
<h1><?php echo get_the_title(KBE_PAGE_TITLE) ?></h1>
<div class="row">
<?php
$kbe_cat_args = array(
                    'orderby'       => 'terms_order', 
                    'order'         => 'ASC',
                    'hide_empty'    => true,
                    'parent'        => 0
                );

$kbe_terms = get_terms(KBE_POST_TAXONOMY, $kbe_cat_args);

echo '<pre>';
print_r($kbe_terms);
echo '</pre>';

foreach($kbe_terms as $kbe_taxonomy) :
  $kbe_term_id = $kbe_taxonomy->term_id;
  $kbe_term_slug = $kbe_taxonomy->slug;
  $kbe_term_name = $kbe_taxonomy->name;
?>
<div class="col-md-6">
  <h3>
    <a href="<?php echo get_term_link($kbe_term_slug, 'kbe_taxonomy') ?>">
        <?php echo $kbe_taxonomy->name; ?>
    </a>
    <span class="label label-success pull-right">
    <?php echo $kbe_taxonomy->count; ?>
    </span>
  </h3>
            


            <?php
                $kbe_child_cat_args = array(
                                        'orderby'       => 'terms_order', 
                                        'order'         => 'ASC',
                                        'parent'        => $kbe_term_id,
                                        'hide_empty'    => true, 
                                    );

                $kbe_child_terms = get_terms(KBE_POST_TAXONOMY, $kbe_child_cat_args);
                
                if($kbe_child_terms) {
            ?>
                <div class="kbe_child_category" style="">
                <?php
                    foreach($kbe_child_terms as $kbe_child_term){
                        $kbe_child_term_id = $kbe_child_term->term_id;
                        $kbe_child_term_slug = $kbe_child_term->slug;
                        $kbe_child_term_name = $kbe_child_term->name;
                ?>
                        <h3>
                            <span class="kbe_count">
                                <?php
                                    echo $kbe_child_term->count;
                                    _e(' Articles','kbe');
                                ?>
                            </span>
                            <a href="<?php echo get_term_link($kbe_child_term_slug, 'kbe_taxonomy') ?>">
                                <?php echo $kbe_child_term_name; ?>
                            </a>
                        </h3>
                        <ul class="kbe_child_article_list">
                    <?php
                        $kbe_child_post_args = array(
                                                    'post_type' => KBE_POST_TYPE,
                                                    'posts_per_page' => KBE_ARTICLE_QTY,
                                                    'orderby' => 'menu_order',
                                                    'order' => 'ASC',
                                                    'tax_query' => array(
                                                            array(
                                                                    'taxonomy' => KBE_POST_TAXONOMY,
                                                                    'field' => 'term_id',
                                                                    //'terms' => $kbe_child_term_id
                                                                    'terms' => $kbe_term_id
                                                            )
                                                    )
                                            );
                        $kbe_child_post_qry = new WP_Query($kbe_child_post_args);
                        if($kbe_child_post_qry->have_posts()) :
                            while($kbe_child_post_qry->have_posts()) :
                                $kbe_child_post_qry->the_post();
                    ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                    <?php
                            endwhile;

                        else :
                            echo "No posts";
                        endif;
                    ?>
                    </ul>
                <?php
                    }
                ?>
                </div>
            <?php
                }
            ?>







            <ul class="kbe_article_list">
            <?php
                $kbe_tax_post_args = array(
                                            'post_type' => KBE_POST_TYPE,
                                            'posts_per_page' => KBE_ARTICLE_QTY,
                                            'orderby' => 'menu_order',
                                            'order' => 'ASC',
                                            'tax_query' => array(
                                                    array(
                                                            'taxonomy' => KBE_POST_TAXONOMY,
                                                            'field' => 'term_id',
                                                            'terms' => $kbe_term_id
                                                    )
                                            )
                                    );
                $kbe_tax_post_qry = new WP_Query($kbe_tax_post_args);
                if($kbe_tax_post_qry->have_posts()) :
                    while($kbe_tax_post_qry->have_posts()) :
                        $kbe_tax_post_qry->the_post();
            ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </li>
            <?php
                    endwhile;
                else :
                    echo "No posts";
                endif;
            ?>
            </ul>
        </div>
<?php endforeach; ?>
</div><!-- /.row -->
    
    