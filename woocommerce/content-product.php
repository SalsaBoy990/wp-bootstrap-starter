<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
	<div <?php wc_product_class('', $product); ?>>
		<div class="row m0">
			<?php
			// Get product thumbnail
			$size = 'woocommerce_thumbnail';
			$image_size = apply_filters('single_product_archive_thumbnail_size', $size);
			// Get url to single product
			$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

			$html = '<div class="text-center col-12 p0 m-mt2">';
			$html .= '<a href="' . esc_url($link) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
			$html .= $product ? $product->get_image($image_size) : '';
			echo $html . '</a></div>';

			?>
			<div class="col-12 p0 m-mt2 pl2 m-pl0">
				<?php
				$html = '<h2 class="mt0 h3 mb1 ' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">';
				$html .= '<a href="' . esc_url($link) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
				echo  $html . get_the_title() . '</a></h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

				// Get product attributes
				$datum_attribute = $product->get_attribute('datum');
				$idopont_attribute = $product->get_attribute('idopont');
				$szint_attribute = $product->get_attribute('szint');
				$helyszin_attribute = $product->get_attribute('helyszin');

				?>
				<div class="mb1">
					<?php
					echo '<div class="mbhalf">';
					if ($datum_attribute) {
						echo '<span class="pr1"><i class="ri-calendar-event-fill mrquarter icon-position-3"></i>' . $datum_attribute . '</span>';
					}

					if ($idopont_attribute) {
						echo '<span><i class="ri-time-line mrquarter icon-position-3"></i>' . $idopont_attribute . '</span>';
					}
					echo '</div>';

					if ($szint_attribute) {
						echo '<div class="mbhalf"><i class="ri-bar-chart-2-line mrquarter icon-position-3"></i>' . $szint_attribute  . ' szint</div>';
					}

					if (!$helyszin_attribute and $helyszin_attribute !== 'Online' and $helyszin_attribute !== 'online') {
						echo '<div class="mbhalf">' . $helyszin_attribute . '</div>';
					}

					?>
				</div>


				<?php
				/**
				 * Hook: woocommerce_before_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_open - 10
				 */
				// do_action('woocommerce_before_shop_loop_item');

				/**
				 * Hook: woocommerce_before_shop_loop_item_title.
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				// do_action('woocommerce_before_shop_loop_item_title');

				/**
				 * Hook: woocommerce_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_product_title - 10
				 */
				// do_action('woocommerce_shop_loop_item_title');

				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
				do_action('woocommerce_after_shop_loop_item_title');

				/**
				 * Hook: woocommerce_after_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_close - 5
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
				do_action('woocommerce_after_shop_loop_item');
				?>
			</div>
		</div>
	</div>
