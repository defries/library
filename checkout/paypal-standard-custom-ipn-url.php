<?php
/**
 * Plugin Name: Easy Digital Downloads - Custom IPN URL for Paypal Standard
 * Description: Allows you to use a custom URL for the IPN sent from Paypal Standard, which enables you to have multiple IPNs using Zapier. 
 */

/*
 * Modify the IPN notify url that is sent to Paypal Standard to be a hook from Zapier. This makes multiple IPNs possible. See:
 * https://zapier.com/help/how-use-multiple-ipns-paypal/
 */
function edd_library_custom_paypal_redirect_args( $paypal_args, $purchase_data ) {

	$paypal_args['notify_url'] = 'YOUR_ZAPIER_HOOK_URL_HERE';

	return $paypal_args;
}
add_filter( 'edd_paypal_redirect_args', 'edd_library_custom_paypal_redirect_args', 10, 2 );
