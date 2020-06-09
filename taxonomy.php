<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Starter
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="container-fluid container-max-width p0">
		<div class="row mx-responsive p0">
			<div class="col-12 p0 mb1 m-mbhalf mt2 m-mt1">
				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php
					endif;

					// GENERATE BREADCRUMBS FOR TAXONOMIES
					// Get the current term
					$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

					// Create a list of all the term's parents
					$parent = $term->parent;
					while ($parent) :
						$parents[] = $parent;
						$new_parent = get_term_by('id', $parent, get_query_var('taxonomy'));
						$parent = $new_parent->parent;
					endwhile;

					echo '<nav aria-label="breadcrumb mt2 m-mt1 mb1">';
					echo '<ol class="breadcrumb small-size">';
					echo '<li class="breadcrumb-item"><i class="material-icons icon-position-3">home</i><a href="' . esc_url(home_url('/')) . '" rel="home">Kezdőlap</a></li>';

					if (!empty($parents)) :
						$parents = array_reverse($parents);

						// For each parent, create a breadcrumb item
						foreach ($parents as $parent) :
							$item = get_term_by('id', $parent, get_query_var('taxonomy'));
							$url = get_bloginfo('url') . '/' . $item->taxonomy . '/' . $item->slug;
							echo '<li class="breadcrumb-item"><a href="' . $url . '">' . $item->name . '</a></li>';
						endforeach;
					endif;

					//Display the current term in the breadcrumb
					echo '<li class="breadcrumb-item active pl03" aria-current="page">' . $term->name . '</li>';
					echo '</ol>';
					echo '</nav>';
					?>
					<h1 class="h2 mb2 m-mb1"><?php echo $term->name; ?></h1>
			</div>
		</div>
	<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
