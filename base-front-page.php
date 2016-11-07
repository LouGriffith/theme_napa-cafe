<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <div id="wrapper" class="homepage">
      <div class="overlay hidden"></div>
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <main class="main">

        <header>
          <?php get_template_part('templates/page', 'header'); ?>
        </header>
        
        <?php get_template_part('templates/content', 'home-actions'); ?>
        <?php include Wrapper\sidebar_path(); ?>
        <?php get_template_part('templates/content', 'home-events'); ?>
        <?php get_template_part('templates/content', 'home-featured'); ?>
      </main><!-- /.main -->

      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </div>
  </body>
</html>
