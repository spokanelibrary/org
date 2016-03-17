<?php function spl_get_media_news() {
	global $post;  
  $html = null;

  $count = 10;
  $slug = 'media';

  //query subpages  
  $args = array(  
      'posts_per_page' => $count
    , 'category_name' => $slug
    , 'post_type' => 'post'  
    , 'orderby' => 'post_date'
    , 'order' => 'DESC'
  );  

  $posts = new WP_query($args);  

  if ($posts->have_posts()) : 
  	$i = 1;
    while ($posts->have_posts()) : $posts->the_post(); 

  		$html .= '
  		<div class="spl-tile spl-tile-boxed" style="background-image:url(\'/assets/img/png/spl-tile-banner.png\'); background-repeat:no-repeat;">
			  <div class="spl-tile-body">
			    <div class="" style="padding-top:20px;">
			    	<h5 class="text-success">'.get_the_date().'</h5>
			      <h3>'.get_the_title().'</h3>
			      '.preg_replace('/<img[^>]+./','', apply_filters('the_content', get_the_content())).'
			    </div>
			  </div>
			</div>
  		';

      $i++;
    endwhile; 
  endif;

  wp_reset_postdata(); 

  return $html;
}
?>

<h2 class="" style="color:#F79734; margin-top:0;">In the News <small></small></h2>
<h6 class="uppercase" style="color:#394F60;">Spokane Public Library media mentions and features</h6>

<div class="row" style="margin-top: 16px;">
	
	<div class="col-md-9 col-lg-8">
	<?php echo spl_get_media_news(); ?>
	</div>

  <!--
	<div class="col-md-3 col-lg-4">

		<div class="alert alert-info" style="border: 4px solid #F79734;">
			<h5 class="text-center uppercase">
				<a href="/blog/topic/media/"><span>Library</span> News &amp; Press Archive</a> <small class="text-muted">&rarr;</small>
			</h5>
		</div>		
		
	</div>
  -->
</div>