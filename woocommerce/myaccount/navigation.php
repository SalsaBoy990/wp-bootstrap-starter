<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_account_navigation');
?>

<nav class="woocommerce-MyAccount-navigation mb2 m-mb1">
	<ul class="nav nav-pills nav-justified mb2 m-mb1">
		<?php
		foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
			<?php
			$curr_endpoint = esc_url(wc_get_account_endpoint_url($endpoint));
			// remove query string for logout link
			$exploded = explode('?', $curr_endpoint);
			$slug = (string) $exploded[0];
			$path = get_bloginfo('url') . '/sajat-fiokom';

			?>
			<?php if ($slug === ($path . '/kijelentkezes/')) : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><i class="ri-logout-box-r-line ri-md mrquarter "></i><?php echo esc_html($label); ?></a>
				</li>
			<?php elseif ($slug === ($path . '/profil-szerkesztese/')) : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><i class="ri-account-box-line ri-lg mrquarter icon-position-3"></i><?php echo esc_html($label); ?></a>
				</li>
			<?php elseif ($slug === ($path . '/cim-szerkesztese/')) : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><i class="ri-map-pin-line ri-lg mrquarter icon-position-3"></i><?php echo esc_html($label); ?></a>
				</li>
			<?php elseif ($slug === ($path . '/letoltesek/')) : ?>
			<?php // empty on purpose!!! ?>
			<?php elseif ($slug === ($path . '/rendelesek/')) : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><i class="ri-stack-line ri-lg mrquarter icon-position-3"></i><?php echo esc_html($label); ?></a>
				</li>
			<?php elseif ($slug === ($path . '/')) : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><i class="ri-dashboard-line ri-lg mrquarter icon-position-3"></i><?php echo esc_html($label); ?></a>
				</li>
			<?php else : ?>
				<li class="mbhalf nav-item <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
					<a class="btn-small nav-link" href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><?php echo esc_html($label); ?></a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action('woocommerce_after_account_navigation'); ?>