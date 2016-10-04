<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

<div id="layout" class="pure-g">
        <div class="header pure-u-1">
          <div class="container pure-menu pure-menu-horizontal">
              <a class="pure-menu-heading" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            <?php wp_nav_menu( array(
              'theme_location' => 'header_menu',
              'container' => '',
              'menu_id' => 'header-navigation',
              'menu_class' => 'pure-menu-list' ) );
            ?>
            </nav>
          </div>
        </div>
