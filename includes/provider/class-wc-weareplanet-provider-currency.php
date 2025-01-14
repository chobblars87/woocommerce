<?php
/**
 *
 * WC_WeArePlanet_Provider_Currency Class
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
 * Provider of currency information from the gateway.
 */
class WC_WeArePlanet_Provider_Currency extends WC_WeArePlanet_Provider_Abstract {

	/**
	 * Construct.
	 */
	protected function __construct() {
		parent::__construct( 'wc_weareplanet_currencies' );
	}

	/**
	 * Returns the currency by the given code.
	 *
	 * @param string $code code.
	 * @return \WeArePlanet\Sdk\Model\RestCurrency
	 */
	public function find( $code ) {
		return parent::find( $code );
	}

	/**
	 * Returns a list of currencies.
	 *
	 * @return \WeArePlanet\Sdk\Model\RestCurrency[]
	 */
	public function get_all() {
		return parent::get_all();
	}


	/**
	 * Fetch data.
	 *
	 * @return array|\WeArePlanet\Sdk\Model\RestCurrency[]
	 * @throws \WeArePlanet\Sdk\ApiException ApiException.
	 * @throws \WeArePlanet\Sdk\Http\ConnectionException ConnectionException.
	 * @throws \WeArePlanet\Sdk\VersioningException VersioningException.
	 */
	protected function fetch_data() {
		$currency_service = new \WeArePlanet\Sdk\Service\CurrencyService( WC_WeArePlanet_Helper::instance()->get_api_client() );
		return $currency_service->all();
	}

	/**
	 * Get id.
	 *
	 * @param mixed $entry entry.
	 * @return string
	 */
	protected function get_id( $entry ) {
		/* @var \WeArePlanet\Sdk\Model\RestCurrency $entry */
		return $entry->getCurrencyCode();
	}
}
