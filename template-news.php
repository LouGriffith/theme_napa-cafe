<?php
/**
 * Template Name: List Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  	<div class="left-side">
		<?php get_template_part('templates/page', 'header'); ?>
  	</div>
  	<div class="right-side">
  		<?php get_template_part('templates/content', 'page'); ?>
  	</div>
<?php endwhile; ?>
