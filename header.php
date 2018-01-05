<!DOCTYPE HTMLl>
<html <?php language_attributes();?>>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<meta charset="UTF-8">
<script src="https://use.fontawesome.com/d49acce013.js"></script>

	 		<meta property="fb:app_id"          content="312197589285463" > 
		    <meta property="og:type"            content="article" > 
		    <meta property="og:url"             content="http://localhost/stuff/wordpress/?p=<?php echo($post->ID)?>" > 
		    <meta property="og:title" 		content="<?php the_title(); ?>" >
		    <meta property="og:image"           content="" > 
		    <meta property="og:description"    content="<?php the_excerpt(); ?>" >
	 
	 
	 <?php wp_head(); ?>
	 </head>
<body>
<header class="header absolute" itemscope="" itemtype="http://schema.org/Organization">
      <div class="container">

        <!-- ===== LOGO ===== -->
        <h1 class="logo"><a href="index.html"><?php bloginfo('name'); ?></a></h1>

        <!-- ===== NAVIGATION ===== -->
        <nav class="navigation">
          <!-- ===== MENU ===== -->
          <?php
			
			$args = array(
				'theme_location' => 'primary'
			);
			
			wp_nav_menu( $args );
		  ?>
          <!-- ===== HAMBURGUER ICON ===== -->
          <a href="#" class="btn-hamburguer-menu"><i class="fa fa-bars"></i></a>
        </nav>

      </div>

    </header>