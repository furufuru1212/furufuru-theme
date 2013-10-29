<html>
<head>
	<title><?bloginfo('name'); ?></title>
	<link href="<?bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
</head>
<body>
	<div id="header">
		<h1 id="logo"><?bloginfo('name'); ?></h1>
	</div>
	<nav>
		<ul id="barcont">
			<?wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'bar' ) ); ?>
		</ul>
	</nav>