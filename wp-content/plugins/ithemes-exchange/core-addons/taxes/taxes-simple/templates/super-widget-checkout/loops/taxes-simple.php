<?php
/**
 * This is the default template for the
 * super-widget-checkout taxes-simple element.
 *
 * @since 1.1.0
 * @version 1.2.1
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/super-widget-checkout/loops directory
 * located in your theme.
*/
?>
<?php do_action( 'it_exchange_super_widget_checkout_before_taxes_simple_element' ); ?>
<div class="cart-taxes cart-totals-row">
	<?php do_action( 'it_exchange_super_widget_checkout_begin_taxes_simple_element' ); ?>
	<?php echo it_exchange_add_simple_taxes_get_label( 'tax' ) . _x( ':', 'Used in superwidget for taxes. eg Tax: ', 'it-l10n-ithemes-exchange' ); ?> <?php esc_attr_e( it_exchange_addon_get_simple_taxes_for_cart() ); ?>
	<?php do_action( 'it_exchange_super_widget_checkout_end_taxes_simple_element' ); ?>
</div>
<?php do_action( 'it_exchange_super_widget_checkout_after_taxes_simple_element' ); ?>
