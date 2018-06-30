<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Font Megrim e Roboto -->
	<link href="https://fonts.googleapis.com/css?family=Megrim|Roboto" rel="stylesheet">
	<?php wp_head() ?>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php wp_enqueue_script('NomeScript', '/script.js', false, '2.0', false );?>
	
	<title>
		<?php 
      if(is_home() ){
        echo get_bloginfo('');
      } else if(is_single()){
        echo the_title();
      } else{
        echo get_bloginfo('');
      }
    ?>
	</title>
	<?php wp_head(); ?>
</head>
<body class="tricotix">
	<header class="header">
		<div class="box">
			<div class="header__box--header--search">
				<div class="header__logo">
					<a href="<?php bloginfo('url'); ?>" class="no-margin"><span>Tricotix</span></a>
				</div>
			
				<div class="header__search">
					<?php
						get_search_form();
					?>
				</div>
			</div>
			<nav class="header__nav">
				<?php
					wp_nav_menu(array(  
						'container' => 'ul',
						'container_class' => 'menu',
						'menu' => 'li',
						'menu_class' => 'item',
						'link_before' => '<li class="header__nav--item">',
						'link_after' => '</li>'
						));
				?>
			</nav>
		</div>
	</header>