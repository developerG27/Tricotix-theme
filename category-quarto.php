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
	
	<title>Tricotix</title>
	
</head>
<body class="tricotix">
	<header class="header">
		<div class="box">
			<div class="header__logo">
				<a href="<?php bloginfo('url'); ?>" class="no-margin"><span>Tricotix</span></a>
			</div>
			<div class="header__search">
				<input type="text" placeholder="Cerca.." id="input">
				<i class="fas fa-search" id="search-icon"></i>
			</div>
		</div>
	</header>

	<div class="box">
		<nav class="nav">
			<!-- <ul>
				<a href="single.html"><li class="nav__item">Primo</li></a>
				<li class="nav__item">Secondo</li>
				<li class="nav__item">Terzo</li>
				<li class="nav__item">Quarto</li>
			</ul> -->

			<?php
      wp_nav_menu(array(  
        'container' => 'ul',
        'container_class' => 'menu',
        'menu' => 'li',
        'menu_class' => 'item',
        'link_before' => '<li class="nav__item">',
        'link_after' => '</li>'
        ));
      ?>
		</nav>

		<main class="main">
			<section class="main__box">
      <p class="category">Categoria quarto</p>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); s?>
        <a class="no-margin" href="<?php the_permalink(); ?>">
        <article <?php post_class('main__article'); ?>>
        <?php if( has_post_thumbnail()) { the_post_thumbnail();} ?>
          <div class="main__article--gradient">
            <p class="main__article--gradient__p"><?php the_title(); ?></p>
          </div>
        </article>
        </a>

        <?php endwhile; else: ?>
        <div class="articolo">
          <p>Non ho trovato nulla</p>
        </div>

        <?php endif; ?>

				

				
			</section>
			
			

			<section class="main__navigation">
				<ul>
					<li class="nav__item">Primo</li>
					<li class="nav__item">Secondo</li>
					<li class="nav__item">Terzo</li>
					<li class="nav__item">Quarto</li>
				</ul>
			</section>

			<section class="main__pagination">
				<span>Mostra altro</span>
			</section>
		</main>
	</div>
</body>

</html>