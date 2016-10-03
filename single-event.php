<?php while (have_posts()) : the_post(); ?>
	<div class="featured-image">
		<?php the_post_thumbnail('page-header'); ?>
		<div class="wrap container">
	  		<?php get_template_part('templates/page', 'event-header'); ?>
	  	</div>
  	</div>
  	
  	<div class="wrap container">
  		<?php get_template_part('templates/content-event', get_post_type()); ?>
  	</div>
<?php endwhile; ?>
