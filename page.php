<?php while (have_posts()) : the_post(); ?>
	<div class="<?php post_class('article-layout center-block'); ?>">
	  	<header>
	  		<?php get_template_part('templates/page', 'header'); ?>
	  	</header>
	  	
	  	<div class="wrap container">
	  		<?php get_template_part('templates/content', 'page'); ?>
	  	</div>
  	</div>
<?php endwhile; ?>
