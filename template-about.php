<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="featured-image">
		<?php the_post_thumbnail('page-header'); ?>
		<div class="wrap container">
	  		<?php get_template_part('templates/page', 'header'); ?>
	  	</div>
  	</div>

  	<div class="wrap container">
  		<?php get_template_part('templates/content', 'about'); ?>
  	</div>
<?php endwhile; ?>
