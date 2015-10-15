<div class="page-header">
  <h1>
    Knowledge Base
  </h1>
</div>

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



  <ul class="nav nav-stacked">
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
                                              'terms' => $kbe_taxonomy->term_id,
                                              'include_children' => false
                                      )
                              )
                      );
  ?>
  <?php $kbe_tax_post_qry = new WP_Query($kbe_tax_post_args); ?>

  <?php if($kbe_tax_post_qry->have_posts()) : ?>
  <?php while($kbe_tax_post_qry->have_posts()) : ?>
  <?php $kbe_tax_post_qry->the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <i class="glyphicon glyphicon-bookmark"></i> <?php the_title(); ?>
        </a>
    </li>
  <?php
  endwhile;
  else :
  endif;
  ?>
  </ul>


</div><!-- /.col -->

<?php endforeach; ?>
</div><!-- /.row -->
    
    