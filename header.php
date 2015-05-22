<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="theme-color" content="#0d263c">
      <title><?php bloginfo('title') ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300|Roboto:300' rel='stylesheet' type='text/css'>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <?php /* Include google analytics and the site navigation */ ?>
    <?php get_template_part('partials/analyticstracking'); ?>
    <?php get_template_part('partials/navigation'); ?>
    <a href="javascript:void(0)" class="navigation__trigger" id="navigation__trigger" title="Öppna meny">
      <div></div>
    </a>
    <div class="navigation__extras">
      <div class="navigation__extras__inner">
        <a href="tel:+46730732034">
          <img src="<?php bloginfo('template_directory'); ?>/img/navigation_phone.png" />
        </a>
        <a href="mailto:kontakt@lsentertainment.se">
          <img src="<?php bloginfo('template_directory'); ?>/img/navigation_email.png" />
        </a>
      </div>
    </div>
