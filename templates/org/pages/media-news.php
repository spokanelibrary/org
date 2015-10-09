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
  		<div class="spl-tile spl-tile-boxed">
			  <div class="spl-tile-body">
			    <div class="serif spl-fiction-queen">
			      <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
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

<h2 class="text-warning">In the News <small></small></h2>
<h6 class="text-success uppercase">Spokane Public Library media mentions and press releases</h6>

<div class="row">
	
	<div class="col-md-8">
	<?php echo spl_get_media_news(); ?>
	</div>

	<div class="col-md-4">
		<blockquote>
			<p>
				Lorem ipsum
			</p>

			<p>
				<a href="/blog/topic/media/">More  &rarr;</a>
			</p>
		</blockquote>
		
	</div>

</div>