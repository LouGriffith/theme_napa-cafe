<?php if( have_rows('memberships_blocks') ): 
 	$i = 0; ?>
		<!-- <div class="row">
			<h1>
	        Dynamically blurring avatar images using Canvas.
	        </h1>
		</div> -->
	    <div class="row">
	    	<?php while( have_rows('memberships_blocks') ): the_row(); 
	    		// vars
				
				$membership_type = get_sub_field('membership_name');
				$image = get_sub_field('membership_image');
				$content = get_sub_field('membership_text');
				?>

				<?php if( get_sub_field('membership_style') == 'left' ): ?>

					<div class="content-section-a">

				        <div class="container">
				            <div class="row">
				                <div class="col-lg-6 col-sm-6">
				                    <hr class="section-heading-spacer">
				                    <div class="clearfix"></div>
				                    <h2 class="section-heading"><?php echo $membership_type; ?></h2>

				                    <p class="lead"><?php echo $content; ?></p>
				                </div>
				                <div class="col-lg-5 col-lg-offset-1 col-sm-6">
				                    <img class="img-responsive" src="<?php echo $image; ?>" alt="">
				                </div>
				            </div>

				        </div>
				        <!-- /.container -->

				    </div>
				    <!-- /.content-section-a -->
					
				<?php endif; ?>

				<?php if( get_sub_field('membership_style') == 'right' ): ?>

					<div class="content-section-b">

				        <div class="container">
				            <div class="row">
				            	<div class="col-lg-5 col-sm-6">
				                    <img class="img-responsive" src="<?php echo $image; ?>" alt="">
				                </div>

				                <div class="col-lg-6 col-lg-offset-1 col-sm-6">
				                    <hr class="section-heading-spacer">
				                    <div class="clearfix"></div>
				                    <h2 class="section-heading"><?php echo $membership_type; ?></h2>
				                    <p class="lead"><?php echo $content; ?></p>
				                </div>

				            </div>

				        </div>
				        <!-- /.container -->

				    </div>
				    <!-- /.content-section-a -->
					
				<?php endif; ?>

		    <?php endwhile; ?>
	
<?php endif; ?>