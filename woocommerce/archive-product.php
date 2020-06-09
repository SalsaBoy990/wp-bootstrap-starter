<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<header class="woocommerce-products-header">

	<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
		<h1 class="mb2 h2 woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<p>A SzlaVi Dance Art webshopban bankkártyával megvásárolhatod a bérletedet bármelyik online tánckurzusunkra, a jegyeded a workshopjainkra. Kényelmes nem kell az óra elején a fizetéssel vesződni. Oktató videóinkat is megveheted, melyekhez ezen az oldalon keresztül férsz hozzá (a saját fiókodban).</p>
	<?php endif; ?>
	<h2 class="mt3 mb1 h4">A legújabb termékek</h2>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>

<div class="container-fluid p0 m0 container-max-width">
	<div class="row m0">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 p0">
			<div id="myCarouselProducts" class="carousel carousel-intro slide container-max-width" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container-fluid p0">
								<div class="row m0 p0">
									<?php
									if (!function_exists('wc_get_products')) {
										return;
									}
									$query = new WC_Product_Query(array(
										'limit' => 2,
										'orderby' => 'date',
										'order' => 'DESC',
										'stock_status' => 'instock',
										'return' => 'ids',
									));

									$new_products = $query->get_products();
									if ($new_products) {
										// do_action('woocommerce_before_shop_loop');

										foreach ($new_products as $new_product) {
											$post_object = get_post($new_product);
											setup_postdata($GLOBALS['post'] = &$post_object);
											wc_get_template_part('content', 'product-carousel');
										}
										wp_reset_postdata();

										// do_action('woocommerce_after_shop_loop');
									}
									?>

								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="container-fluid p0">
								<div class="row m0 p0">

									<?php
									$query = new WC_Product_Query(array(
										'limit' => 2,
										'offset' => 2,
										'orderby' => 'date',
										'order' => 'DESC',
										'stock_status' => 'instock',
										'return' => 'ids',
									));

									$new_products = $query->get_products();
									if ($new_products) {
										// do_action('woocommerce_before_shop_loop');
										foreach ($new_products as $new_product) {
											$post_object = get_post($new_product);
											setup_postdata($GLOBALS['post'] = &$post_object);
											wc_get_template_part('content', 'product-carousel');
										}
										wp_reset_postdata();

										// do_action('woocommerce_after_shop_loop');
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<!-- <a class="carousel-control-prev no-underline mt2 z10000" href="#myCarouselProducts" role="button" data-slide="prev">
						<span aria-hidden="true">
							<i class="ri-arrow-left-s-line ri-2x gray-chevron"></i>
						</span>
						<span class="sr-only">Előző</span>
					</a>
					<a class="carousel-control-next no-underline mt2" href="#myCarouselProducts" role="button" data-slide="next">
						<span aria-hidden="true">
							<i class="ri-arrow-right-s-line ri-2x gray-chevron"></i>
						</span>
						<span class="sr-only">Következő</span>
					</a> -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid p0 m0 container-max-width">
	<div class="row p0 m0">
		<div class="col-12 p0 mt2 m-mt1">
			<div>
				<h2 class="h4">Válassz kategóriát!</h2>
				<ul class="nav nav-pills mb3 m-mb2" id="pills-tab" role="tablist">
					<li class="nav-item mr1 mbhalf" role="presentation">
						<a class="btn nav-link active" id="pills-tancorak-teremben-tab" data-toggle="pill" href="#pills-tancorak-teremben" role="tab" aria-controls="pills-tancorak-teremben" aria-selected="false">Táncórák Teremben</a>
					</li>
					<li class="nav-item mr1 mbhalf" role="presentation">
						<a class="btn nav-link" id="pills-workshop-tab" data-toggle="pill" href="#pills-workshop" role="tab" aria-controls="pills-workshop" aria-selected="false">Workshop Jegyek</a>
					</li>
					<li class="nav-item mr1 mbhalf" role="presentation">
						<a class="btn nav-link" id="pills-online-orak-tab" data-toggle="pill" href="#pills-online-orak" role="tab" aria-controls="pills-online-orak" aria-selected="true">Online Táncórák</a>
					</li>
					<li class="nav-item mr1 mbhalf" role="presentation">
						<a class="btn nav-link" id="pills-online-videok-tab" data-toggle="pill" href="#pills-online-videok" role="tab" aria-controls="pills-online-videok" aria-selected="false">Online oktatóvideók</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="btn nav-link" id="pills-maganorak-tab" data-toggle="pill" href="#pills-maganorak" role="tab" aria-controls="pills-maganorak" aria-selected="false">Magánórák</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-tancorak-teremben" role="tabpanel" aria-labelledby="pills-tancorak-teremben-tab">
						<h3 class="h4 mb1 m-mb1">Táncórák Teremben</h3>

						<?php
						if (!function_exists('wc_get_products')) {
							return;
						}
						$query = new WC_Product_Query(array(
							'category' => array('tancorak-teremben'),
							'orderby' => 'date',
							'order' => 'DESC',
							'stock_status' => 'instock',
							'return' => 'ids',
						));

						$new_products = $query->get_products();
						if ($new_products && count($new_products) >= 1) {
							// do_action('woocommerce_before_shop_loop');
							// woocommerce_product_loop_start();

							foreach ($new_products as $new_product) {
								$post_object = get_post($new_product);
								setup_postdata($GLOBALS['post'] = &$post_object);
								wc_get_template_part('content', 'product-all');
							}
							wp_reset_postdata();

							// woocommerce_product_loop_end();

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action('woocommerce_no_products_found');
						}
						?>

					</div>
					<div class="tab-pane fade" id="pills-workshop" role="tabpanel" aria-labelledby="pills-workshop-tab">
						<h3 class="h4 mb1 m-mb1">Workshop Jegyek</h3>
						<?php
						if (!function_exists('wc_get_products')) {
							return;
						}
						$query = new WC_Product_Query(array(
							'category' => array('workshop-jegyek'),
							'orderby' => 'date',
							'order' => 'DESC',
							'stock_status' => 'instock',
							'return' => 'ids',
						));

						$new_products = $query->get_products();
						if ($new_products && count($new_products) >= 1) {
							// do_action('woocommerce_before_shop_loop');
							// woocommerce_product_loop_start();

							foreach ($new_products as $new_product) {
								$post_object = get_post($new_product);
								setup_postdata($GLOBALS['post'] = &$post_object);
								wc_get_template_part('content', 'product-all');
							}
							wp_reset_postdata();

							// woocommerce_product_loop_end();

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action('woocommerce_no_products_found');
						}
						?>
					</div>
					<div class="tab-pane fade" id="pills-online-orak" role="tabpanel" aria-labelledby="pills-online-orak-tab">
						<h3 class="h4 mb1 m-mb1">Online Táncórák</h3>
						<?php
						if (!function_exists('wc_get_products')) {
							return;
						}
						$query = new WC_Product_Query(array(
							'category' => array('online-tancorak'),
							'orderby' => 'date',
							'order' => 'DESC',
							'stock_status' => 'instock',
							'return' => 'ids',
						));

						$new_products = $query->get_products();
						if ($new_products && count($new_products) >= 1) {
							// do_action('woocommerce_before_shop_loop');
							// woocommerce_product_loop_start();

							foreach ($new_products as $new_product) {
								$post_object = get_post($new_product);
								setup_postdata($GLOBALS['post'] = &$post_object);
								wc_get_template_part('content', 'product-all');
							}
							wp_reset_postdata();

							// woocommerce_product_loop_end();

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action('woocommerce_no_products_found');
						}
						?>
					</div>
					<div class="tab-pane fade" id="pills-online-videok" role="tabpanel" aria-labelledby="pills-online-videok-tab">
						<h3 class="h4 mb1 m-mb1">Online oktatóvideók</h3>
						<?php
						if (!function_exists('wc_get_products')) {
							return;
						}
						$query = new WC_Product_Query(array(
							'category' => array('online-oktatovideok'),
							'orderby' => 'date',
							'order' => 'DESC',
							'stock_status' => 'instock',
							'return' => 'ids',
						));

						$new_products = $query->get_products();
						if ($new_products && count($new_products) > 1) {
							// do_action('woocommerce_before_shop_loop');
							// woocommerce_product_loop_start();

							foreach ($new_products as $new_product) {
								$post_object = get_post($new_product);
								setup_postdata($GLOBALS['post'] = &$post_object);
								wc_get_template_part('content', 'product-all');
							}
							wp_reset_postdata();

							// woocommerce_product_loop_end();

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action('woocommerce_no_products_found');
						}
						?>
					</div>
					<div class="tab-pane fade" id="pills-maganorak" role="tabpanel" aria-labelledby="pills-maganorak-tab">
						<h3 class="h4 mb1 m-mb1">Magánórák</h3>
						<?php
						if (!function_exists('wc_get_products')) {
							return;
						}
						$query = new WC_Product_Query(array(
							'category' => array('maganorak'),
							'orderby' => 'price',
							'order' => 'ASC',
							'stock_status' => 'instock',
							'return' => 'ids',
						));

						$new_products = $query->get_products();
						if ($new_products && count($new_products) > 1) {
							// do_action('woocommerce_before_shop_loop');
							// woocommerce_product_loop_start();

							foreach ($new_products as $new_product) {
								$post_object = get_post($new_product);
								setup_postdata($GLOBALS['post'] = &$post_object);
								wc_get_template_part('content', 'product-all');
							}
							wp_reset_postdata();

							// woocommerce_product_loop_end();

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action('woocommerce_no_products_found');
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row m0">
		<div class="col-12 p0 mb3 m-mb2">
			<h2 class="h4">Táncstílus szerint</h2>
			<?php
			$tags = get_terms(array(
				'taxonomy' => 'product_tag',
				'hide_empty' => false
			));
			?>
			<nav class="">
				<?php
				foreach ($tags as $tag) {
					echo '<a class="btn mbhalf mr1" href="' . get_term_link($tag->term_id, 'product_tag') . '" rel="tag">' . $tag->name . '</a>';
				}
				?>
			</nav>
		</div>
	</div>

</div>

<!-- <nav>
					<?php $categories = get_categories(array(
						'taxonomy' => 'product_cat',
						'orderby' => 'name',
						'parent'  => 0
					));

					foreach ($categories as $category) {
						printf(
							'<a class="btn mr1 m-mr0 mb1 m-clear-mr" href="%1$s">%2$s</a>',
							esc_url(get_category_link($category->term_id)),
							esc_html($category->name)
						);
					}

					?>-->
<!-- <?php wp_list_categories(array('taxonomy' => 'product_cat', 'title_li'  => '')); ?>
				</nav> -->
</div>
</div>
</div>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action('woocommerce_sidebar');

get_footer('shop');
