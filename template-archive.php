<?php
/*
Template Name: Archive (Posts)
*/
?>


<div class="row">

	<div class="col-md-12">
		<?php //get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<?php
			$args = array( 'numberposts' => '1' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="page-header"><h1>'.$recent["post_title"].'</h1></div>';
				// todo: this should be an excerpt
				//echo $recent["post_excerpt"];
				echo $recent["post_content"];
				echo '<p>';
				echo '<a href="' . get_permalink($recent['ID']) . '" title="Continue reading" >Continue reading &rarr;</a>';
				echo '</p>';
			}
		?>


		<div class="panel panel-default" style="margin-top:20px;">
			<div class="panel-heading">
				<h4 class="serif">More <?php echo get_the_title(); ?> <small><em>by</em> <?php bloginfo('name'); ?></small></h4>
			</div>
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<?php wp_get_archives(array('type'=>'postbypost','before'=>'<h3 class="">','after'=>' <small>&rarr;</small></h3>')); ?>
				</ul>
			</div>
		</div>

	</div>

</div>