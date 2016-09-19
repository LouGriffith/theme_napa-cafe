 <?php 
    $attachment_id = get_field('video_background_image');
    $size = "large"; // (thumbnail, medium, large, full or custom size)
    $image = wp_get_attachment_image_src( $attachment_id, $size );
    $background_color = get_field('video_background_color');
    // url = $image[0];
    // width = $image[1];
    // height = $image[2];
?>

 <div class="banner video" style="background-color: <?php echo $background_color; ?>; background-image: url(<?php echo $image[0]; ?>);">

    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php the_field('video_headline'); ?></h2>
                <?php the_field('video_embed'); ?>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->
