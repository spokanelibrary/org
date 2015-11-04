<?php get_template_part('templates/page', 'header'); ?>


<div class="row">

<?php query_posts($query_string . '&orderby=title&order=ASC'); ?>
<?php $i = 1; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-sm-4">
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
    $attachment_array = wp_get_attachment_image_src(get_post_thumbnail_id());
    $photo_url = $attachment_array[0];
    $photo = '<a href="'.$permalink.'"><img class="img-responsive img-rounded" src="'.$photo_url.'"></a>';
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
    <div class="panel-heading"  style="">
      <h4><a href="<?php echo $permalink; ?>"><?php echo $name; ?></a> 
        <?php if ( !empty($phone) ) : ?>
        <small>x<b class="text-success"><?php echo $phone; ?></b></small>
        <?php endif; ?>
      </h4>
    </div>
    <div class="panel-body" style="padding-top:0;">
    <h4><?php echo $position; ?></h4>
    <?php if ( !empty($cell) ) : ?>
    <h4 class="pull-right"><small>cell <b class="text-success"><?php echo $cell; ?></b></small></h4>
    <?php endif; ?>
    <p>
    <?php echo $photo; ?>
    </p>
    <h5><?php echo $email; ?></h5>
    <h6><?php echo $staff_category; ?></h6>
    </div>

  </div>

</article>
</div><!-- ./col -->

<?php if ( 0 == $i % 3 ) : ?>
<div class="clearfix"></div>
<?php endif; ?>
<?php $i++; ?>
<?php endwhile; ?>

</div><!-- ./row -->
