<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap Starter
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-fluid container-max-width p0">
		<div class="row mx-responsive p0">
			<div class="col-12 p0 mt2 m-mt1">
				<nav aria-label="breadcrumb mt2 m-mt1 mb1">
					<ol class="breadcrumb small-size">
						<li class="breadcrumb-item site-title"><i class="material-icons">home</i><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőlap</a></li>
						<li class="breadcrumb-item active pl03" aria-current="page">Keresési eredmények</li>
					</ol>
				</nav>
				<?php if (have_posts()) : ?>
					<header class="page-header">
						<h1 class="h2 mb2 m-mb1 mt0 m-mthalf ">
							<?php
							/* translators: %s: search query. */
							printf(esc_html__('Keresési eredmények: %s', 'bootstrap_starter'), '<span>' . get_search_query() . '</span>');
							?>
						</h1>
						<?php
						get_search_form();
					
						?>
					</header><!-- .page-header -->
				<?php endif; ?>
			</div>
		</div>
		<div class="row mx-responsive-mobile-0 mx-responsive-right p0">
			<div class="col-12 p0 pb2 m-pb-tablet-0">
				<?php if (have_posts()) :
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile;

					the_posts_navigation();

				else :
					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</div>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer();
