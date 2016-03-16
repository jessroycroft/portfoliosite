<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,700,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <link rel="stylesheet" href="animate.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:800,400,300' rel='stylesheet' type='text/css'>

  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="fade-in title-fade-in">
      <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
    <div class="fade-in tagline-fade-in">
      <p class='header-tagline'>Front-end developer.</p>
    </div>

    <div class="content">
      <button class="menu-toggle"><i class="fa fa-bars"></i></button>
       <!-- Full-screen nav -->
       <div class="full-menu">
         <!-- <div class="full-menu--middle"> -->
           <button class="menu-toggle menu-toggle-close">X</button>
          <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul><!-- /.main nav -->
        <!-- </div> --><!-- /.full menu middle -->
      </div><!-- /.full menu -->
<!--       <div class="content"> -->
    </div><!-- /.content -->
  </div> <!-- /.container -->
</header><!--/.header-->
