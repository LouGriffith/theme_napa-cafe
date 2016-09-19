 <?php 
    $attachment_id = get_field('cta_background_image');
    $size = "large"; // (thumbnail, medium, large, full or custom size)
    $image = wp_get_attachment_image_src( $attachment_id, $size );
    // url = $image[0];
    // width = $image[1];
    // height = $image[2];
?>

 <div class="banner" style="background-image: url(<?php echo $image[0]; ?>);">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2><?php the_field('cta_headline'); ?></h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                <?php while( have_rows('cta_links') ): the_row(); 

                    // vars
                    $cta_link = get_sub_field('cta_link');
                    $cta_text = get_sub_field('cta_text');
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

            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->
