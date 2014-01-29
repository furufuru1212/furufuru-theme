<!DOCTYPE html>
<html>
<head>
	<meta charset="<?bloginfo('charset');?>"></meta>
	<title><?bloginfo('name'); wp_title();?></title>
	<link href="<?bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?wp_head();?>
</head>
<body <?body_class();?>>
	<header>
		<div class="container">
			<h1><?bloginfo('name');?></h1>
		</div>
	</header>
	<nav>
		<?wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
	</nav>