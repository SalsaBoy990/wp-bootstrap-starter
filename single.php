<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap Starter
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-fluid container-max-width p0">
		<div class="row mx-responsive p0">
			<div class="col-12 p0 mb0 mt2 m-mt1">
				<nav aria-label="breadcrumb mt2 m-mt1 mb1">
					<ol class="breadcrumb small-size">
						<li class="breadcrumb-item"><i class="material-icons">home</i><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőlap</a></li>
						<li class="breadcrumb-item active pl03" aria-current="page"><?php the_title() ?></li>
					</ol>
				</nav>
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bootstrap_starter' ) . '</span> <span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bootstrap_starter' ) . '</span> <span class="nav-title">%title</span>',
					// 	)
					// );

					// If comments are open or we have at least one comment, load up the comment template.
					if (!comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
