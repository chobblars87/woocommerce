<?php
/**
 *
 * WC_WeArePlanet_Webhook_Manual_Task Class
 *
 * WeArePlanet
 * This plugin will add support for all WeArePlanet payments methods and connect the WeArePlanet servers to your WooCommerce webshop (https://www.weareplanet.com/).
 *
 * @category Class
 * @package  WeArePlanet
 * @author   wallee AG (http://www.wallee.com/)
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
/**
 * Webhook processor to handle manual task state transitions.
 */
class WC_WeArePlanet_Webhook_Manual_Task extends WC_WeArePlanet_Webhook_Abstract {

	/**
	 * Updates the number of open manual tasks.
	 *
	 * @param WC_WeArePlanet_Webhook_Request $request request.
	 */
	public function process( WC_WeArePlanet_Webhook_Request $request ) {
		$manual_task_service = WC_WeArePlanet_Service_Manual_Task::instance();
		$manual_task_service->update();
	}
}
