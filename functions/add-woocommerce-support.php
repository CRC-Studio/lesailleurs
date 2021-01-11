<?php

/***************************************/
/*                                     */
/*       Add Woocommerce Support       */
/*                                     */
/***************************************/


function monobloc_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'monobloc_add_woocommerce_support' );
