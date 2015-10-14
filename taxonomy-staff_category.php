<?php get_template_part('templates/page', 'header'); ?>


<hr>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
  <?php
  $permalink = get_the_permalink();
  $name = get_the_title();
  $position = get_post_meta(get_the_ID(), 'position', true);
  $bio = get_the_content();
  if(has_post_thumbnail()) {
    $attachment_array = wp_get_attachment_image_src(get_post_thumbnail_id());
    $photo_url = $attachment_array[0];
    $photo_html = '<div class="photo"><img src="' . $photo_url . '" /></div>';
  } else {
    $photo_html = '';
  }
  if(get_post_meta(get_the_ID(), 'email', true) != '') {
    $email = get_post_meta(get_the_ID(), 'email', true);
    $email_html = '<div class="email">Email: <a href="mailto:' . $email . '">' . $email . '</a></div>';
  } else {
    $email_html = '';
  }
  if(get_post_meta(get_the_ID(), 'phone', true) != '') {
    $phone = get_post_meta(get_the_ID(), 'phone', true);
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
      <h4>[position]</h4>
      [photo]
      <h5>[category]</h5>
      </div>

      <?php echo get_post_meta(get_the_ID(), 'position', true) ?>

  </div>

</article>

<?php endwhile; ?>
