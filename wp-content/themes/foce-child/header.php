<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <!-- Nouveau menu -->
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>            

            <div class="burger-menu menu-down">
                
                <ul>   
                    <img class="burger-menu__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">                 
                    <li class="burger-menu__story"><a href="#story">Histoire</a></li>
                    <li class="burger-menu__characters"><a href="#characters">Personnages</a></li>
                    <li class="burger-menu__place"><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                    <li class="burger-menu__footer"><a href="#">STUDIO KOUKAKI</a></li>
                </ul>
                <!-- <div class="burger-menu__footer"><a href="#">STUDIO KOUKAKI</a></div> -->
            </div>

            <div id="icons"></div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
