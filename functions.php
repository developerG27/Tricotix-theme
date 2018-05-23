<?php
/* Stili Css */
//Al posto di time() aggiungerò la versione
wp_enqueue_style( 'style', get_stylesheet_uri(), rand() ); 
wp_enqueue_scripts( 'script'); 

//Carico lo script
//il nome, src, array(), la versione, true= nel footer, false= nel header
wp_enqueue_script('script',get_template_directory_uri().'/script.js',array(),rand(),false);
wp_enqueue_script('jQuery');