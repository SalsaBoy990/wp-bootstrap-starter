<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package szlavidanceart
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container-fluid container-max-width p0">
			<div class="row mx-responsive p0">
				<div class="col-12 p0 mb0 mt2 m-mt1">
					<nav aria-label="breadcrumb mt2 m-mt1 mb1">
						<ol class="breadcrumb small-size">
							<li class="breadcrumb-item site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőoldal</a></li>
							<li class="breadcrumb-item active" style="padding-left: 0.3rem;" aria-current="page"><?php the_title() ?></li>
						</ol>
					</nav>
					<?php the_title('<h1 class="h1 entry-title mt1 mb2 m-mb1">', '</h1>'); ?>
					<p class="bold-700 lucida-grande-bold"><?php echo get_the_excerpt() ?></p>
					<a href="<?php the_field('link') ?>" class="btn mt0 mb1"><i class="ri-calendar-event-fill service-icon"></i>Tovább az eseményhez</a>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container-fluid container-max-width p0">
			<div class="row mx-responsive-left p0">
				<div class="col-12 col-sm-12 col-md-12 col-lg-7 p0 pr2 m-pl-page m-pr-page pb2 m-pb-tablet-0">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'szlavidanceart'),
							'after'  => '</div>',
						)
					);
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle pt1">' . esc_html__('Előző:', 'szlavidanceart') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Következő:', 'szlavidanceart') . '</span> <span class="nav-title">%title</span>',
						)
					);
					?>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-5 p0 ml0">
					<?php dynamic_sidebar('sidebar-hir'); ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->