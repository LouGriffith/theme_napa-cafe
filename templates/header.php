<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <span class="brand-name"><?php bloginfo('name'); ?></span>
        <img src="<?= get_template_directory_uri(); ?>/dist/images/nato-training.svg" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>

      <?php
        // checks to see if the user is logged in and display membership menu, otherwise it is login and signup
        if(is_user_logged_in() ) {
          if (has_nav_menu('member_navigation')) :
            wp_nav_menu(['theme_location' => 'member_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
          endif;
        } else { ?>
            <ul class="nav navbar-nav navbar-right navbar-non-member">
                <hr>

                <li>
                    <p class="navbar-btn">
                        <a class="btn btn-success" href="<?php echo home_url(); ?>/membership-account/membership-levels/"><span class="glyphicon glyphicon-plus-sign"></span> Sign Up</a>
                    </p>
                </li>
                <li>
                    <p class="navbar-btn">
                        <a class="btn btn-default" href="<?php echo home_url(); ?>/login"><span class="glyphicon glyphicon-education"></span> Login</a>
                    </p>
                </li>
            </ul>
        <?php }
      ?>
    </nav>
  </div>
</header>