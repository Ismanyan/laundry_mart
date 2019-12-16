<?php
/**
 * Product Loop Start
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */
global $wp_query, $woocommerce_loop;

$furnilife_opt = get_option( 'furnilife_opt' );

$shoplayout = 'sidebar';
if(isset($furnilife_opt['shop_layout']) && $furnilife_opt['shop_layout']!=''){
	$shoplayout = $furnilife_opt['shop_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$shoplayout = $_GET['layout'];
}
$shopsidebar = 'left';
if(isset($furnilife_opt['sidebarshop_pos']) && $furnilife_opt['sidebarshop_pos']!=''){
	$shopsidebar = $furnilife_opt['sidebarshop_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$shopsidebar = $_GET['sidebar'];
}
switch($shoplayout) {
	case 'fullwidth':
		Furnilife_Class::furnilife_shop_class('shop-fullwidth');
		$shopcolclass = 12;
		$shopsidebar = 'none';
		$productcols = 4;
		break;
	default:
		Furnilife_Class::furnilife_shop_class('shop-sidebar');
		$shopcolclass = 9;
		$productcols = 3;
}

$furnilife_viewmode = Furnilife_Class::furnilife_show_view_mode();
?>
<div class="shop-products products <?php echo esc_attr($furnilife_viewmode);?> <?php echo esc_attr($shoplayout);?>">