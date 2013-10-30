<!DOCTYPE html>
<html>
<head>
	<title><?bloginfo('name'); ?></title>
	<link href="<? bloginfo('stylesheet_url' ); ?>" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<h1><? bloginfo('name'); ?></h1>
		</div>
	</header>
	<nav>
		<?wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
	</nav>