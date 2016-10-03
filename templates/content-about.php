<div class="article-wrapper">
	<?php the_content(); ?>
</div>

<hr>

<div class="staff-list">

	<header>
		<h3>Meet Our Staff</h3>
	</header>

	<?php

		$post_type = 'staff';

		$args = array( 'post_type' => $post_type );
		$loop = new WP_Query( $args );
		
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		  	
		  	<div class="staff-profile" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	        	<div class="profile-card">
		        	<div class="profile-pic">
		        		<?php the_post_thumbnail(); ?>
		        	</div>
				  	<div class="profile-info">
				  		<h2 class="staff-name"><?php the_title(); ?></h2>
				  		<span class="staff-postion"><?php the_field('staff_position'); ?></span>
				  	</div>
			  	</div>
		  	</div>

		<?php endwhile;

	    wp_reset_postdata();
	?>
</div>
