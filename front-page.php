<?php while (have_posts()) : the_post(); ?>

 	<?php get_template_part('templates/content-front', 'hero'); ?>

    <!-- Page Content -->
    <a  name="video"></a>
    <?php get_template_part('templates/content-front', 'video'); ?>

	<a  name="memberships"></a>
 	<?php get_template_part('templates/content-front', 'memberships'); ?>

	<a  name="cta"></a>
    <?php get_template_part('templates/content-front', 'cta'); ?>

<?php endwhile; ?>
