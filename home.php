<?php get_template_part('templates/page', 'header'); ?>
<div class="text-right">
  <a class="btn btn-sm btn-default" href="./feed/"><img src="/assets/img/icons/16px/social-rss.png" style="margin-top: -4px;" alt="RSS feeds"> <b>RSS</b></a>
  <img src="/assets/img/icons/16px/social-rss.png" style="margin-top: -4px;" alt="RSS feeds"> <a href="./feed/"><b>RSS</b></a>
  &nbsp;
  <img src="/assets/img/icons/16px/social-rss.png" style="margin-top: -4px;" alt="RSS feeds"> <a href="/rss-feeds/"><b>More feeds</b></a>
</div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/blog', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
