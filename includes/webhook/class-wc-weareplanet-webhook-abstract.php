<?php
/**
 *
 * WC_WeArePlanet_Webhook_Abstract Class
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
 * Abstract webhook processor.
 */
abstract class WC_WeArePlanet_Webhook_Abstract {


	/**
	 * Instances.
	 *
	 * @var array
	 */
	private static $instances = array();

	/**
	 * Instance.
	 *
	 * @return static
	 */
	public static function instance() {
		$class = get_called_class();
		if ( ! isset( self::$instances[ $class ] ) ) {
			self::$instances[ $class ] = new $class();
		}
		return self::$instances[ $class ];
	}

	/**
	 * Processes the received webhook request.
	 *
	 * @param WC_WeArePlanet_Webhook_Request $request request.
	 */
	abstract public function process( WC_WeArePlanet_Webhook_Request $request);
}
