<?
function furufuru3(){
	register_nav_menu( 'primary', __( 'Navigation Menu', 'furufuru3' ) );
}
add_action( 'after_setup_theme', 'furufuru3' );