<?php 
$ricerca = $_GET['s'];
get_header(); 

?>
	<div class="box">
		<nav class="nav">
			<!-- <ul>
				<a href="single.html"><li class="nav__item">Primo</li></a>
				<li class="nav__item">Secondo</li>
				<li class="nav__item">Terzo</li>
				<li class="nav__item">Quarto</li>
			</ul> -->
			<p class="nav--name__item">Blog</p>
			<hr class="nav--name--hr">
			<?php
      wp_nav_menu(array(  
        'container' => 'ul',
        'container_class' => 'menu',
        'menu' => 'li',
        'menu_class' => 'item',
        'link_before' => '<li class="nav__item nav--hover">',
        'link_after' => '</li>'
        ));
			?>
			<br>
			<p class="nav--name__item">Stili capelli</p>
			<hr class="nav--name--hr">
			<div class="nav__sexstyle">
				<span class="nav--hover fas fa-mars  nav--male"></span>
				<span class="nav--hover fas fa-venus nav--female"></span>
				<span class="nav--hover corto">Corto</span>
				<span class="nav--hover medio">Medio</span>
				<span class="nav--hover lungo">Lungo</span>
			</div>

			<br>
			<p class="nav--name__item">Shop</p>
			<hr class="nav--name--hr">
			<div class="nav__shop">
				<span class="nav--hover nav__shop--item">Phon</span>
				<span class="nav--hover nav__shop--item">Piastra</span>
				<span class="nav--hover nav__shop--item">Shampoo</span>
				<span class="nav--hover nav__shop--item">Balsamo</span>
				<span class="nav--hover nav__shop--item">Lacca</span>
				<span class="nav--hover nav__shop--item">Gel</span>
				<span class="nav--hover nav__shop--item">Cera</span>
				<span class="nav--hover nav__shop--item">Balsam</span>
			</div>
		</nav>

		<main class="main">
			<section class="main__box content">
				<div class="main__box__image single">
					<div class="main__box__imge--gradient"></div>
					<?php the_post_thumbnail(); ?>
					<div class="main__box__title">
						<p><?php the_title();?></p>
					</div>
				</div>
				
			
				<div class="main__content single">
				<?php
				if (have_posts()) :
							while (have_posts()) :
								the_category();
								the_post();
								the_content();
							endwhile;
						endif;
					?>
					
				</div>
				
				
				
			</section>

			<section class="main__navigation">
				<ul>
					<li class="nav__item">Primo</li>
					<li class="nav__item">Secondo</li>
					<li class="nav__item">Terzo</li>
					<li class="nav__item">Quarto</li>
				</ul>
			</section>

		</main>
	</div>
</body>

</html>


