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
				<ul class="item">
					<a href="#"><li class="header__nav--item">Blog</li></a>
					<a href="http://tricotix.local/shop/"><li class="header__nav--item">Shop</li></a>
					<a href="#"><li class="header__nav--item">Stili</li></a>
				</ul>
			</nav>

		</div>
	</header>