<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Umschool Blog
*/
/*
Theme Name: Umschool Blog Themes
Author: Evgeniy Ivanov
Author URI: http://frontendie.ru
Template Name: Main template
Template Post Type: page, post
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <meta name="description" content=""/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/fav/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-16x16.png"/>
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/fav/site.webmanifest"/>
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/fav/safari-pinned-tab.svg" color="#5bbad5"/>
    <meta name="msapplication-TileColor" content="#da532c"/>
    <meta name="theme-color" content="#ffffff"/>
    <?php wp_head() ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css"/>
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__left"><a class="logo" href="/"><img src="img/logo.png" alt="alt"/></a></div>
        <nav class="header__right">
          <ul class="navbar">
            <li class="navbar__item"><a class="navbar__link" href="">Page1</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Page2</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Page3</a></li>
            <li class="navbar__item"><a class="navbar__link" href="">Page4</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </body>
</html>