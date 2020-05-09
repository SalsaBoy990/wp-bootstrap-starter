<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package szlavidanceart
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container-fluid container-max-width p0">
			<div class="row mx-responsive p0">
				<div class="col-12 p0 mb1 m-mbhalf mt2 m-mt1">
					<nav aria-label="breadcrumb mt2 m-mt1 mb1">
						<ol class="breadcrumb small-size">
							<li class="breadcrumb-item site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Kezdőoldal</a></li>
							<li class="breadcrumb-item active" style="padding-left: 0.3rem;" aria-current="page">404 hiba</li>
						</ol>
					</nav>
					<header class="page-header">
						<h1 class="h2 page-title mb1"><?php esc_html_e('Ez az oldal nem található', 'szlavidanceart'); ?></h1>
						<p><?php esc_html_e('A keresett oldal sajnos nem található.', 'szlavidanceart'); ?></p>
					</header><!-- .page-header -->
				</div>
			</div>
			<div class="row mx-responsive p0">
				<div class="col-6 p0">
					<h3 class="h4 mt1 mbhalf">Aktuális táncos eseményeink</h3>
					<ul class="no-bullets">
						<?php
						$last_posts = get_posts(array(
							'post_type' => 'esemenyek',
							'orderby' => 'date',
							'order'   => 'DESC',
							'numberposts' => 3
						));
						if ($last_posts) {
							foreach ($last_posts as $post) :
								setup_postdata($post); ?>
								<li class="mbhalf">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php
							endforeach;
							wp_reset_postdata();
							?>
						<?php } ?>
					</ul>

					<h3 class="h4 mt2 mbhalf">Aloldalak</h3>
					<?php wp_page_menu([
						'show_home' 	=> false,
						'before'			=> '<ul class="no-bullets footer-page-menu mt0">',
						'after'				=> '</ul>',
						'menu_class'	=>	'footer-menu-list'
					]);
					?>
				</div>
				<div class="col-4 offset-2 p0">
					<div class="page-content">

						<?php
						get_search_form();
						// the_widget('WP_Widget_Recent_Posts');
						?>

						<div class="mb2">
							<h3 class="small-size mt1 mbhalf">Leggyakoribb kategóriák:</h3>
							<ul>
								<?php
								wp_list_categories(array(
									'child_of'            => 0,
									'current_category'    => 0,
									'depth'               => 0,
									'echo'                => 1,
									'exclude'             => '',
									'exclude_tree'        => '',
									'feed'                => '',
									'feed_image'          => '',
									'feed_type'           => '',
									'hide_empty'          => 1,
									'hide_title_if_empty' => false,
									'hierarchical'        => true,
									'order'               => 'DESC',
									'orderby'             => 'count',
									'separator'           => '<br />',
									'show_count'          => 1,
									'show_option_all'     => '',
									'show_option_none'    => __('üres'),
									'style'               => 'list',
									'taxonomy'            => 'kategoria',
									'title_li'            => '',
									'use_desc_for_title'  => 1,
								));
								?>
							</ul>
						</div>

						<?php
						/* translators: %1$s: smiley */
						// $szlavidanceart_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'szlavidanceart'), convert_smilies(':)')) . '</p>';
						the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$szlavidanceart_archive_content");

						// the_widget('WP_Widget_Tag_Cloud');
						?>

					</div><!-- .page-content -->

				</div>
			</div>
		</div>
	</section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
