<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v6.0&appId=YOUR_APP_ID_HERE&autoLogAppEvents=1"></script>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Ugrás a tartalomhoz', 'bootstrap_starter'); ?></a>
	<header id="masthead">
		<div class="container-max-width" style="background-color: #343a40;">
			<div class="container-fluid p0 m0">
				<div class="row m0 p0">
					<div class="col-12 p0 clearfix">
						<div class="navbar-nav d-block d-sm-block d-md-none float-left mr0 mtquarter mbquarter">
							<a class="min-size no-underline mr1" href="#" rel="noreferrer noopener" target="_blank" title="Hívj fel minket!">telefonszám</a>
							<a class="min-size no-underline" href="#" title="Üzenj nekünk!">e-mail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-max-width" style="background-color: #343a40;">
			<div id="page" class="container-fluid p0 m0">
				<div class="row mx-responsive m0 p0">
					<div class="col-12 p0">
						<div class="site-branding">
							<nav class="navbar navbar-dark pt0 pb0">
								<a class="navbar-brand no-underline inline-block" href="<?php echo esc_url(home_url('/')); ?>">
									<img class="navbar-img d-inline-block mr-1" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
									<span class="inline-block lh50">Bootstrap Starter</span>
								</a>

								<div class="navbar-nav d-none d-sm-none d-md-block flex-column flex-md-row ml-sm-auto mr1">
									<a class="no-underline mr1" href="#" rel="noreferrer noopener" target="_blank" title="Hívj fel minket!"><i class="ri-phone-line ri-lg no-underline icon-position-3 icon-mr-3"></i>Phone number</a>
									<a class="no-underline mrhalf" href="#" rel="noreferrer noopener" target="_blank" title="Üzenj nekünk!"><i class="ri-messenger-line ri-lg no-underline icon-position-3 icon-mr-3"></i>Messenger</a>
								</div>

								<button class="navbar-toggler z10000" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<?php
								wp_nav_menu([
									'menu'            => 'primary',
									'theme_location'  => 'menu-1',
									'container'       => 'div',
									'container_id'    => 'navbarCollapse',
									'container_class' => 'collapse navbar-collapse',
									'menu_id'         => false,
									'menu_class'      => 'mt0 navbar-nav float-right text-center mr-auto medium-size',
									'depth'           => 0,
									'fallback_cb'     => 'bs4navwalker::fallback',
									'walker'          => new bs4navwalker()
								]);
								?>
							</nav>
						</div><!-- .site-branding -->

					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->