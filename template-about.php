<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  	<header>
		<?php get_template_part('templates/page', 'header'); ?>
  	</header>

  	<div class="wrap container">
  		<?php get_template_part('templates/content', 'about'); ?>
  	</div>
<?php endwhile; ?>