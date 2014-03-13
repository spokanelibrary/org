<?php
/*
Template Name: Callout Box (Plus Content)
*/
?>

<?php
// Build callout / panel reveal from custom metaboxes

$spl_panel = array();

$spl_panel['intro'] = wpautop(get_post_meta( $post->ID, '_cmb_secondary_intro_text', true ));
$spl_panel['button'] = get_post_meta( $post->ID, '_cmb_secondary_intro_btn', true );
$spl_panel['button'] = !empty($spl_panel['button']) ? $spl_panel['button'] : 'Read More';
$spl_panel['headline'] = get_post_meta( $post->ID, '_cmb_secondary_intro_headline', true );

$spl_panel['title'] = get_post_meta( $post->ID, '_cmb_secondary_content_title', true );
$spl_panel['subtitle'] = get_post_meta( $post->ID, '_cmb_secondary_content_subtitle', true );
$spl_panel['secondary'] = wpautop(get_post_meta( $post->ID, '_cmb_secondary_content', true ));

?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="row">

	<div class="col-lg-8 col-sm-7">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>

	<?php if ( !empty($spl_panel['headline']) || !empty($spl_panel['intro']) ) : ?>
  <div class="col-lg-4 col-sm-5">
		<div class="panel panel-warning panel-callout panel-callout-warning text-warning">
				
			<?php if ( !empty($spl_panel['headline']) ) : ?>
			<h4 class="text-primary">
				<?php echo $spl_panel['headline']; ?>
			</h4>
			<?php endif; ?>
			
			<?php if ( !empty($spl_panel['intro']) ) : ?>
			<?php echo $spl_panel['intro']; ?>
			<?php endif; ?>
			
			<?php if ( !empty($spl_panel['secondary']) ) : ?>
			<a class="btn btn-primary btn-block" data-toggle="" href="#spl-secondary-content" data-target="#spl-secondary-content">
				<?php echo $spl_panel['button']; ?>
				<small class="glyphicon glyphicon-arrow-down"></small>
			</a>
			<?php endif; ?>

		</div>
	</div>
	<?php endif; ?>

</div>

<?php if ( !empty($spl_panel['secondary']) ) : ?>
<div class="row collapse in" id="spl-secondary-content">
	<div class="col-lg-8 col-sm-7">
		<div class="panel panel-default">

			<?php if ( !empty($spl_panel['title']) ) : ?>
			<div class="panel-heading">
				<div class="panel-title">
	    	<h4 class="text-primary"><?php echo $spl_panel['title']; ?></h4>
	  		</div>
	  	</div>
	  	<?php endif; ?>
	  	
	  	<div class="panel-body">
	  		<h5 class="text-muted" style="text-transform:uppercase;"><?php echo $spl_panel['subtitle']; ?></h5>
				<?php echo $spl_panel['secondary']; ?>
			</div>

			<div class="panel-footer" style="background:transparent;">
				<div class="text-right">
					<a class="btn btn-sm btn-primary" href="#top">
						Top <small class="glyphicon glyphicon-arrow-up"></small>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
