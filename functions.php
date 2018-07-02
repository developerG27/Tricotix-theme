<?php
/* Stili Css */
//Al posto di time() aggiungerò la versione
wp_enqueue_style( 'style', get_stylesheet_uri(), rand() ); 
wp_enqueue_scripts( 'script'); 

//jQuery
wp_enqueue_script('jquery');

//Carico lo script
//il nome, src, array(), la versione, true= nel footer, false= nel header
wp_enqueue_script('script',get_template_directory_uri().'/script.js',array(),rand(),false);

//Aggiungo le post thumbnails
add_theme_support('post-thumbnails');   

//menu
register_nav_menus( array(
  'menu-1' => esc_html__('principale'),
  'menu-2' => esc_html__('mobile'),
));





// <div class="card__shop gold">
//           <div class="card__image">
//             <img class="card__img--custom"src="https://www.bellezzaebenessereshop.it/wp-content/uploads/2017/04/LABOR.W012.jpg" alt="">
//             <div class="card__primary">
//               <div class="card__name">Phon</div>
//               <div class="card__price">79.99€</div>
//             </div>
//           </div>
//           <div class="card--side">
//             <div class="card__feature">
//               <div class="card__feature--style">400watt</div>
//               <div class="card__feature--style">5 temperature</div>
//               <div class="card__feature--style">3 velocità</div>
//               <div class="card__feature--style">499 grammi</div>
//               <div class="card__feature--style">3 metri cavo</div>
//               <div class="card__feature--style">ionico</div>
//             </div>
//             <div class="card__button">
//               <span class="card__button--style">Compra</span>
//             </div>
//           </div>
//         </div>	