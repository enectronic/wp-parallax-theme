<?php
    // This is the header navigation. It is included
    // in our header.php file.

    // Navigation options.
    $navArgs = array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => 'nav',
      'container_class' => 'navigation',
      'container_id'    => '',
      'menu_class'      => 'navigation__options',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
    );
?>

<?php /* Show the nav */ ?>
<?php wp_nav_menu( $navArgs ); ?>
