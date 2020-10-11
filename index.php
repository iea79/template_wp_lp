
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
* @package hipertech
*/
/*
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
    <?php wp_head() ?>
    <link rel="stylesheet", type="text/css", href="<?php echo get_template_directory_uri() ?>/style.css"/>
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
    <main class="main_content">
      <div class="container_center">
        <div class="grid">
          <div class="grid__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, in.</div>
          <div class="grid__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo numquam sequi officiis. Quia sed modi voluptatem, aut rem possimus at ipsa nobis iure non corporis nulla suscipit praesentium quos numquam quasi magni delectus eius illo, harum hic id! Laboriosam culpa recusandae nesciunt ab natus molestiae porro reiciendis, eveniet architecto temporibus!</div>
          <div class="grid__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt fugiat, pariatur, explicabo ut quidem deleniti velit sed error dolor! Voluptates dignissimos consectetur repudiandae ipsam. Iusto, rerum, quam! Corporis, nisi, inventore?</div>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__content">
        <p>&copy; 2016 |<i class="fa fa-github" aria-hidden="true">&nbsp;</i><a href="#">View Source</a></p>
      </div>
      <?php wp_footer() ?>
    </footer><script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/function.js"></script>
  </body>
</html>
