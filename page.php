<?php while (have_posts()) : the_post(); ?>
	<div <?php post_class('article-layout center-block'); ?>>
  		<?php get_template_part('templates/page', 'header'); ?>
  		<?php get_template_part('templates/content', 'page'); ?>
  	</div>
<?php endwhile; ?>
