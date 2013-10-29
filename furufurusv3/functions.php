<?
function furufuru3(){
	register_nav_menu( 'primary', __( 'Navigation Menu', 'furufuru3' ) );
}
add_action( 'after_setup_theme', 'furufuru3' );

function furuutheme_customize($wp_customize)
{
	//nothing
}
add_action( 'customize_register', 'furuutheme_customize' );
?>