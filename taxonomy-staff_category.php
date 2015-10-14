<?php get_template_part('templates/page', 'header'); ?>


<div class="row">

<?php while (have_posts()) : the_post(); ?>
<div class="col-md-4">
<article <?php post_class(); ?>>
  <?php
  $permalink = get_the_permalink();
  $name = get_the_title();
  $position = get_post_meta(get_the_ID(), 'position', true);
  $bio = get_the_content();
  
  $staff_categories = wp_get_post_terms(get_the_ID(), 'staff_category');
  $staff_category = null;
  if (count($staff_categories) > 0) {
    //$staff_category = $staff_categories[0]->name;
    foreach ( $staff_categories as $category ) {
      $staff_category .= $category->name.', ';
    }
    $staff_category = rtrim($staff_category, ', ');
  } else {
    $staff_category = "";
  }

  if(has_post_thumbnail()) {
    $attachment_array = wp_get_attachment_image_src(get_post_thumbnail_id());
    $photo_url = $attachment_array[0];
    $photo = '<a href="'.$permalink.'"><img class="img-rounded" src="'.$photo_url.'"></a>';
  } else {
    $photo = '';
  }
  
  if(get_post_meta(get_the_ID(), 'email', true) != '') {
    $email = get_post_meta(get_the_ID(), 'email', true);
    $email = '<a href="mailto:' . $email . '">' . $email . '</a>';
  } else {
    $email = '';
  }
  
  if(get_post_meta(get_the_ID(), 'phone_number', true) != '') {
    $phone = get_post_meta(get_the_ID(), 'phone_number', true);
  } else {
    $phone = '';
  }

  if(get_post_meta(get_the_ID(), 'website', true) != '') {
    $website = get_post_meta(get_the_ID(), 'website', true);
    $website_html = '<div class="website">Website: <a href="' . $website . '">' . $website . '</a></div>';
  } else {
    $website_html = '';
  }

  ?>

  <div class="panel spl-hero-intranet staff-directory">
    <div class="panel-heading">
      <h3><a href="<?php echo $permalink; ?>"><?php echo $name; ?></a> <small>x<b><?php echo $phone; ?></b></small></h3>
      <h4><?php echo $position; ?></h4>
    </div>
    <div class="panel-body">
      <p>
      <?php echo $photo; ?>
      </p>
      <h5><?php echo $email; ?></h5>
      <h6><?php echo $staff_category; ?></h6>
    </div>

  </div>

</article>
</div><!-- ./col -->
<?php endwhile; ?>

</div><!-- ./row -->
