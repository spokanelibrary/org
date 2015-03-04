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

  $html .= '<div class="spl-fiction-queen">'.PHP_EOL;
  if ($posts->have_posts()) : 
  	$i = 1;
    while ($posts->have_posts()) : $posts->the_post(); 

    	if ( 1 == $i ) {
    		$html .= '
    		<div class="spl-tile spl-tile-boxed">
				  <div class="spl-tile-body">
				    
				    <div class="serif">
				      <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
				      <h4>'.get_the_title().'</h4>
				      '.preg_replace('/<img[^>]+./','', apply_filters('the_content', get_the_content())).'
				    </div>
				  </div>
				</div>
    		';
    	} else {
    		$html .= '
    		<div class="spl-tile spl-tile-boxed">
				  <div class="spl-tile-body">
				    <div class="serif">
				      <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
				      <h3>'.get_the_title().'</h3>
				      '.preg_replace('/<img[^>]+./','', apply_filters('the_content', get_the_content())).'
				    </div>
				  </div>
				</div>
    		';
    	}

      $i++;
    endwhile; 
  endif;
  $html .= '</div>'.PHP_EOL; // widget

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
		<div class="clearfix">
			<img class="pull-left" style="width:50px; height:50px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
			Susan Creed is a Librarian and Assistant Manager at the Downtown Library.
			She is sometimes the voice of Spokane Public Radio's production, <a href="http://spokanepublicradio.org/programs/bookshelf">The Bookshelf</a>.
			<br>
			<a href="/blog/topic/readers-corner/"><b>More from the Fiction Queen</b> &rarr;</a>
		</div>

		<p>&nbsp;</p>

		<div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">Read the library blog&hellip;</h4>
	    </div>
	    <div class="panel-body">
	    <?php wp_tag_cloud( array('taxonomy' => array('post_tag', 'category')) ); ?>  
	    </div>
	    <div class="panel-footer">
	      <h4 class="panel-title text-right"><a href="/blog/">All blog posts &rarr;</a></h4>
	    </div>
	  </div>
	</div>

</div>