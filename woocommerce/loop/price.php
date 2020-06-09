<?php

/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
$alkalom_attribute = $product->get_attribute('alkalom');
$letszam_attribute = $product->get_attribute('letszam');
?>

<?php if ($price_html = $product->get_price_html()) : ?>
	<?php if (!$alkalom_attribute) : ?>
		<?php if ($letszam_attribute) { ?>
			<div class="price mb1"><i class="ri-price-tag-3-line mrquarter"></i><span class="bold-700"><?php echo $price_html; ?></span><span class="small-size"><?php echo '/' . $letszam_attribute ?></span></div>
		<?php } else { ?>
			<div class="price mb1"><i class="ri-price-tag-3-line mrquarter"></i><span class="bold-700"><?php echo $price_html; ?></span><span class="small-size"><?php echo '/' . 'fő' ?></span></div>
		<?php } ?>
	<?php else : ?>
		<?php if ($letszam_attribute) { ?>
			<div class="price mb1"><i class="ri-price-tag-3-line mrquarter"></i><span class="bold-700"><?php echo $price_html; ?></span><span class="small-size"><?php echo '/' . $letszam_attribute . '/' . $alkalom_attribute . ' alkalom' ?></span></div>
		<?php } else { ?>
			<div class="price mb1"><i class="ri-price-tag-3-line mrquarter"></i><span class="bold-700"><?php echo $price_html; ?></span><span class="small-size"><?php echo '/' . 'fő/' . $alkalom_attribute . ' alkalom' ?></span></div>
		<?php } ?>
	<?php endif; ?>
<?php endif; ?>