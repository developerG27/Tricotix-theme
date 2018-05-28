<?php get_header(); ?>
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


