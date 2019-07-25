<?php
/**
 * Enqueue scripts and styles.
 */
 
 /* Add Custom CSS */
 function peaked_theme_scripts() {
  //loads profile stylesheet if template is profile
  if(is_page_template('page-profile.php')) {
    wp_enqueue_style('page-profile', get_template_directory_uri() . '/css/profile.css');
  } else {
    /* Add Main Custom CSS */
    wp_enqueue_style( 'peaked-theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'peaked-theme-custom-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1' );
  }
 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'peaked_theme_scripts');
 ?>
