<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Starter
 */

?>

<section class="no-results not-found">
	<div class="container-fluid container-max-width p0">
		<div class="row mx-responsive p0">
			<div class="col-12 p0 mb1 m-mbhalf mt0">
				<header class="page-header">
					<h1 class="h2 page-title"><?php esc_html_e('Nem található', 'szlavidanceart'); ?></h1>
				</header><!-- .page-header -->
			</div>
		</div>

		<div class="row mx-responsive p0">
			<div class="col-12 p0 pb2 m-pb-tablet-0">
				<div class="page-content">
					<?php
					if (is_home() && current_user_can('publish_posts')) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'szlavidanceart'),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url(admin_url('post-new.php'))
						);

					elseif (is_search()) :
					?>

						<p><?php esc_html_e('Sajnos nincs találat a keresett kifejezésre. Kérlek próbáld más kifejezéssel.', 'szlavidanceart'); ?></p>
					<?php
						get_search_form();

					else :
					?>

						<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'szlavidanceart'); ?></p>
					<?php
						get_search_form();

					endif;
					?>
				</div><!-- .page-content -->
			</div>
		</div>
	</div>
</section><!-- .no-results -->