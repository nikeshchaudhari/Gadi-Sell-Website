<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 7.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$count = etheme_get_option('mini-cart-items-count', 3);
$count = apply_filters('etheme_mini_cart_items_count', $count);
?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>

<div class="woocommerce-mini-cart cart_list product_list_widget <?php echo ( isset($args) && isset($args['list_class'])) ? esc_attr($args['list_class']) : ''; ?>">

	<?php etheme_cart_items($count); ?>

</div><!-- end product list -->

<?php do_action( 'woocommerce_after_mini_cart' ); ?>