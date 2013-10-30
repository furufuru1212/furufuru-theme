<html>
<head>
	<title><?bloginfo('name'); ?></title>
	<link href="<?bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
</head>
<body>
	<header>
		<h1 id="logo"><?bloginfo('name'); ?></h1>
	</header>
	<nav>
		<?wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'bar' ) ); ?>
	</nav>