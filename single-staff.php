<!--
<div class="page-header">
  <h1>
    Staff Profile
  </h1>
</div>
-->

<?php while (have_posts()) : the_post(); ?>
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
      $staff_category .= '<a href="/staff-categories/'.$category->slug.'/">'.$category->name.'</a>, ';
    }
    $staff_category = rtrim($staff_category, ', ');
  } else {
    $staff_category = "";
  }

  if(has_post_thumbnail()) {
    $attachment_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
    $photo_url = $attachment_array[0];
    $photo = '<img class="img-responsive img-rounded" src="'.$photo_url.'">';
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

  if(get_post_meta(get_the_ID(), 'cell_phone', true) != '') {
    $cell = get_post_meta(get_the_ID(), 'cell_phone', true);
  } else {
    $cell = '';
  }


  ?>

  <div class="panel spl-hero-intranet spl-hero spl-hero-brand-orange-a staff-directory" style="min-height:340px; background-color:#fff;">
    <div class="panel-heading">
      <h4 class="text-primary" style="margin-top:0;"><?php echo $name; ?> 
        <small>x<b class="text-success"><?php echo $phone; ?></b>
        <?php if ( !empty($cell) ) : ?>
        &nbsp;&nbsp;<span class="">cell <b class="text-success"><?php echo $cell; ?></b></span>
        <?php endif; ?>
        </small>
      </h4>
    </div>
    <div class="panel-body">
      <h3><?php echo $position; ?></h3>
      <h4><?php echo $staff_category; ?></h4>
      <div class="row">
        <div class="col-md-5 col-lg-4">
          <p>
          <?php echo $photo; ?>
          </p>
          <h5><?php echo $email; ?></h5>
        </div>
        <div class="col-md-7 col-lg-6">
          <?php echo $bio; ?>
        </div>
      </div>
    </div>

  </div>

</article>

<?php endwhile; ?>