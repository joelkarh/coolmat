<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cool-matt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- here we user the template_url code and then join our css file location onto the end  -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/css/custom.css"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cool-matt' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="header-inner container">
		<div class="site-branding">
			<!-- to do add logo in -->
				<img src="<?php bloginfo('template_url');?>/assets/coolmat_logo.svg" alt="" class="logo">
		</div ><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
		</nav><!-- #site-navigation -->
		<div class="language-select">
			KOR | ENG
		</div>
	</div>	
	</header><!-- #masthead -->
