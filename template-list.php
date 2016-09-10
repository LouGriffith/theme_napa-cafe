<?php
/**
 * Template Name: List Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="list-header">
  		<?php get_template_part('templates/page', 'header'); ?>
  	</div>
  	<div class="list-content">
 		<?php get_template_part('templates/content', 'page'); ?>
  	</div>
<?php endwhile; ?>
