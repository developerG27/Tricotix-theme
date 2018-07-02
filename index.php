<?php 
$ricerca = $_GET['s'];
get_header(); 

?>
	<div class="box">
		<section class="main__blog">
			<section class="main__box">
				<div class="main__categorie">
						<ul>
							<li class="main__categorie--item">Teoria</li>
							<li class="main__categorie--item">Notizie</li>
							<li class="main__categorie--item">Conoscenze</li>
						</ul>
				</div>

				<main class="main__card">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
						<p></i>Non ho trovato nulla</p>
					</div>

					<?php endif; ?>
					<div class="main__pagination">
						<span>Mostra altro</span>
					</div>	
				</main>
				
					

			
		</section>
	</div>
</body>

</html>