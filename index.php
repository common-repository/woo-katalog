<?php
/*
Plugin Name: Woo Katalog
Version: 1.1.0
Description: WooCommerce Sepete Ekleyi Kaldırma
Author: Murat Bütün
Author URI: http://muratbutun.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
function remove_loop_button(){remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );}add_action('init','remove_loop_button');
?>