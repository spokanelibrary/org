<?php function spl_get_fiction_queen() {
	global $post;  
  $html = null;

  $count = 4;
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

<h2 class="text-warning">The Fiction Queen <small>and her subjects</small></h2>
<h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library's <b>Susan Creed</b></h6>

<div class="row">
	
	<div class="col-md-8">
	<?php echo spl_get_fiction_queen(); ?>
	</div>

	<div class="col-md-4">
		<blockquote>
			<div class="pull-left" style="padding-top:8px;">
				<img class="pull-left" style="width:60px; height:60px; margin-right:10px;" class="pull-left" src="/assets/img/jpg/screed.jpg">
			</div>
			<p>
				<b>Susan Creed</b> is an Assistant Manager at the Downtown Library.
			</p>
			<p>
				She is sometimes the voice of Spokane Public Radio's production, <a href="http://spokanepublicradio.org/programs/bookshelf">The Bookshelf</a>.
			</p>
			<p>
				A one-woman production in her own right, Susan is a voracious reader and always a hoot!
			</p>
			<p>
				<a href="/blog/topic/readers-corner/">More from the Fiction Queen &rarr;</a>
			</p>
		</blockquote>
		
	</div>

</div>