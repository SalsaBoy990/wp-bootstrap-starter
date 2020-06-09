<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Starter
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="container-fluid container-max-width p0">
		<div class="row mx-responsive ">
			<div class="col-12 p0 mt2 m-mt1">
				<?php if (have_posts()) : ?>

					<header class="page-header">
						<nav aria-label="breadcrumb mt2 m-mt1 mb1">
							<ol class="breadcrumb small-size">
								<li class="breadcrumb-item"><i class="material-icons">home</i><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőlap</a></li>
								<li class="breadcrumb-item active pl03" aria-current="page"><?php the_title() ?></li>
							</ol>
						</nav>
						<?php
						the_archive_title('<h1 class="h2 page-title">', '</h1>');
						the_archive_description('<div class="archive-description">', '</div>');
						?>
					</header><!-- .page-header -->

				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						if (get_post_type() === 'post') {
							get_template_part('template-parts/content', 'archive-post');
						} else {

							get_template_part('template-parts/content', get_post_type());
						}

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</div><!-- #col -->
		</div><!-- #row -->
	</div><!-- #container -->
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
