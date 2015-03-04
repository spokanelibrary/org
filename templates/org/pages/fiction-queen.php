<?php function spl_get_fiction_queen() {
	global $post;  
  $html = null;

  $count = 3;
  $slug = 'readers-corner';

  //query subpages  
  $args = array(  
      'posts_per_page' => $count
    , 'category_name' => $slug
    , 'post_type' => 'post'  
    , 'orderby' => 'post_date'
    , 'order' => 'DESC'
  );  

  $posts = new WP_query($args);  

  $html .= '<div class="spl-recent-post">'.PHP_EOL;
  if ($posts->have_posts()) : 
  	$i = 1;
    while ($posts->have_posts()) : $posts->the_post(); 

    	if ( 1 == $i ) {
    		$html .= '
    		<div class="spl-tile spl-tile-boxed">
				  <div class="spl-tile-body">
				    <h4 class="text-warning">The Fiction Queen <small>and her subjects</small></h4>
				    <h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library\'s <b>Susan Creed</b></h6>
				  
				    <div class="serif">
				      <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
				      <h4>'.get_the_title().'</h4>
				      '.get_the_content().'
				    </div>
				  </div>
				</div>
    		';
    	} else {
    		$html .= '
    		<div class="spl-tile spl-tile-boxed">
				  <div class="spl-tile-body">
				    <div class="serif">
				      <h4>'.get_the_title().'</h4>
				      '.apply_filters('the_content', get_the_content()).'
				    </div>
				  </div>
				</div>
    		';
    	}
    	/*
      $html .= '<div class="media">'.PHP_EOL;
			
			$html .= '<h4 class="media-heading"><a href="'.get_permalink().'">'.get_the_title().'</a></h4>'.PHP_EOL;
			
			//$html .= '<div class="media-body">';
			if ( has_post_thumbnail() ) { 
      	$html .= '<a class="pull-left" href="'.get_permalink().'">'.PHP_EOL;
			  $html .= get_the_post_thumbnail($page->ID, 'thumbnail', array('class'=>'media-object img-responsive spl-featured-thumbnail')).PHP_EOL;
			  //$html .= get_the_post_thumbnail($page->ID, 'thumbnail', array('class'=>'img-responsive spl-featured-thumbnail')).PHP_EOL;
			  $html .= '</a>'.PHP_EOL;
      }
      $html .= '<div class="media-body">'.get_the_excerpt().'</div>'.PHP_EOL;

      $html .= '</div>'.PHP_EOL;
			*/
      $i++;
    endwhile; 
  endif;
  $html .= '</div>'.PHP_EOL; // widget

  wp_reset_postdata(); 

  return $html;
}
?>
<div class="spl-tile spl-tile-boxed">
  <div class="spl-tile-body">
    <h4 class="text-warning">The Fiction Queen <small>and her subjects</small></h4>
    <h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library's <b>Susan Creed</b></h6>
  
    <div class="serif">
      <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
      <h4>Emperors &amp; ninjas in 1920's Japan</h4>
      <p>
        Mary Russell and Sherlock Holmes meet a young ninja in their latest suspense novel set in Japan, <a href="/bib/553606"><i>Dreaming Spies</i></a> by Laurie King. 
        If you’re not familiar with this series you’ll want to start with <a href="/bib/65255"><i>The Beekeeper’s Apprentice</i></a>, in which the young Miss Russell meets the retired Mr. Holmes. 
      </p>
      <p>
        Reading this book has reminded me of one of my favorite fantasy series set in Japan and also involving a young ninja:
        Author Lian Hearn begins his trilogy with <a href="/bib/537347"><i>Across the Nightingale Floor</i></a>.
      </p>
    </div>
  </div>
</div>

<?php //echo do_shortcode('[spl_widget recent-posts count=3 slug=readers-corner]'); ?>
<?php echo spl_get_fiction_queen(); ?>
<p>&nbsp;</p>

<p>
	<a class="btn btn-success" href="/blog/topic/readers-corner/">
		<i class="glyphicon glyphicon-comment"></i> 
		More posts by the Fiction Queen &rarr;</a>
</p>