<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper mt2 m-mt1 mb3 m-mb2">
		<ul class="nav  tabs wc-tabs" id="pills-tab" role="tablist">
			<?php
			$first = 1;
			foreach (array_reverse($product_tabs) as $key => $product_tab) : ?>
				<?php if ($first == 1) : ?>
					<li class="nav-item mr1 <?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>" aria-selected="true">
						<a class="nav-link active mr1 mb1" id="pills-<?php echo esc_attr($key); ?>-tab" href="#pills-<?php echo esc_attr($key); ?>" data-toggle="pill" role="tab" aria-controls="pills-<?php echo esc_attr($key); ?>" aria-selected="true">
							<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
						</a>
					</li>
					<?php $first += 1; ?>
				<?php else : ?>
					<li class="nav-item mr1 <?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
						<a class="nav-link mr1 mb1" id="pills-<?php echo esc_attr($key); ?>-tab" href="#pills-<?php echo esc_attr($key); ?>" data-toggle="pill" role="tab" aria-controls="pills-<?php echo esc_attr($key); ?>" aria-selected="false">
							<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
						</a>
					</li>
				<?php endif ?>
			<?php endforeach; ?>
		</ul>
		<hr>
		<div class="tab-content" id="pills-tabContent">
			<?php
			$first = 1;
			foreach ($product_tabs as $key => $product_tab) : ?>
				<?php if ($first == 1) : ?>
					<?php $first += 1; ?>
					<div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="pills-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_attr($key); ?>-tab">
						<?php
						if (isset($product_tab['callback'])) {
							call_user_func($product_tab['callback'], $key, $product_tab);
						}
						?>
					</div>
				<?php else : ?>

					<div class="tab-pane fade show woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="pills-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_attr($key); ?>-tab">
						<?php
						if (isset($product_tab['callback'])) {
							call_user_func($product_tab['callback'], $key, $product_tab);
						}
						?>
					</div>
				<?php endif ?>
			<?php endforeach; ?>
		</div>

		<?php do_action('woocommerce_product_after_tabs'); ?>

	</div><!-- close .col-6 -->
	</div><!-- close .row -->


<?php endif; ?>