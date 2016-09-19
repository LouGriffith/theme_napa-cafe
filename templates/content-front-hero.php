<?php 
	$attachment_id = get_field('hero_image');
	$size = "large"; // (thumbnail, medium, large, full or custom size)
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	// url = $image[0];
	// width = $image[1];
	// height = $image[2];
?>

<!-- Header -->
<a name="about"></a>
<div class="intro-header" style="background-image: url(<?php echo $image[0]; ?>);">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1><?php the_field('hero_headline'); ?></h1>
                    <h3><?php the_field('hero_subline'); ?></h3>
                    <hr class="intro-divider">

                    <?php if( have_rows('hero_ctas') ): ?>

						<ul class="list-inline intro-social-buttons">

						<?php while( have_rows('hero_ctas') ): the_row(); 

							// vars
							$cta_link = get_sub_field('hero_cta_link');
							$cta_text = get_sub_field('hero_cta_text');
							?>

							<li class="slide">

								<?php if( $cta_link ): ?>
									<a class="btn btn-default btn-lg" href="<?php echo $cta_link; ?>">
								<?php endif; ?>
								    	<span class="network-name">
								    		<?php echo $cta_text; ?>	
								    	</span>
								<?php if( $cta_link ): ?>
									</a>
								<?php endif; ?>



							</li>

						<?php endwhile; ?>

						</ul>

					<?php endif; ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->