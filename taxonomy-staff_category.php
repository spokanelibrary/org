<?php get_template_part('templates/page', 'header'); ?>


<hr>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
  <?php
  $permalink = get_the_permalink();
  $name = get_the_title();
  $position = get_post_meta(get_the_ID(), 'position', true);
  $bio = get_the_content();
  
  $staff_categories = wp_get_post_terms(get_the_ID(), 'staff_category');
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
    //$photo_html = '<img src='e;
  } else {
    $photo_url = '';
    $photo_html = '';
  }
  
  if(get_post_meta(get_the_ID(), 'email', true) != '') {
    $email = get_post_meta(get_the_ID(), 'email', true);
    $email_html = '<a href="mailto:' . $email . '">' . $email . '</a>';
  } else {
    $email = '';
    $email_html = '';
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

  <div class="staff-directory">

      <div class="media-object">
      <h3><a href="<?php echo $permalink; ?>"><?php echo $name; ?></a> <small>x<?php echo $phone; ?></small></h3>
      <h4><?php echo $name; ?></h4>
      <?php echo $photo_url; ?>
      <h5><?php echo $staff_category; ?></h5>
      </div>

  </div>

</article>

<?php endwhile; ?>
