<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php bloginfo('title') ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <?php /* Include the site navigation */ ?>
    <?php get_template_part('partials/navigation') ?>
