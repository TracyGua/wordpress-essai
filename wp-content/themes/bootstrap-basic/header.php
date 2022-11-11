<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	 
		<!--wordpress head-->
		<?php wp_head(); ?>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body <?php body_class(); ?>>
		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		} else {
			do_action( 'wp_body_open' );
		}
		?> 
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
		
		
		<div class="container">
			<?php do_action('before'); ?> 

<header role="banner" class="row">
			<nav class="navbar navbar-expand-lg navigation col-6">
			<div class="container">

				<div class='logo'>
		<a class="navbar-brand"  href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
		<img src="<?php echo get_template_directory_uri().'/assets/icones/logo.png'; ?>"/>
			</a>
		</div>
					
				</div><!--.site-branding-->

                <!-- Hamburger button -->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                    <span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri(). '/assets/icones/burger_icon.png'; ?>" alt=""></span>
                </button>

							<div id="mainNav" class="collapse navbar-collapse">
							<ul class="navbar-nav menu-header">
                        <li class="nav-item menu console">
                            <a href="autres_pages/console.html" class="nav-link">Console</a>
                        </li>
                        <li class="nav-item menu apple">
                            <a href="autres_pages/apple.html" class="nav-link">Apple</a>
                        </li>
                        <li class="nav-item menu creation">
                            <a href="autres_pages/creation.html" class="nav-link">Creation</a>
                        </li>
                        <li class="nav-item menu nouvelles">
                            <a href="autres_pages/nouvelles.html" class="nav-link">Nouvelles</a>
                        </li>
                        <li class="nav-item menu contact">
                            <a href="autres_pages/contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul> 
							
								</div>
							</div>
							
							<div class="collapse navbar-collapse navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							</div><!--.navbar-collapse-->
						</nav>
					</div>
				</div><!--.main-navigation-->
				</div>
				</nav>
			</header>
			
			
			<div id="content" class="row row-with-vspace site-content">
