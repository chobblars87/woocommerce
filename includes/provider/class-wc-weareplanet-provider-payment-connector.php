<?php
/**
 *
 * WC_WeArePlanet_Provider_Payment_Connector Class
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
 * Provider of payment connector information from the gateway.
 */
class WC_WeArePlanet_Provider_Payment_Connector extends WC_WeArePlanet_Provider_Abstract {

	/**
	 * Construct.
	 */
	protected function __construct() {
		parent::__construct( 'wc_weareplanet_payment_connectors' );
	}

	/**
	 * Returns the payment connector by the given id.
	 *
	 * @param int $id Id.
	 * @return \WeArePlanet\Sdk\Model\PaymentConnector
	 */
	public function find( $id ) {
		return parent::find( $id );
	}

	/**
	 * Returns a list of payment connectors.
	 *
	 * @return \WeArePlanet\Sdk\Model\PaymentConnector[]
	 */
	public function get_all() {
		return parent::get_all();
	}

	/**
	 * Fetch data.
	 *
	 * @return array|\WeArePlanet\Sdk\Model\PaymentConnector[]
	 * @throws \WeArePlanet\Sdk\ApiException ApiException.
	 * @throws \WeArePlanet\Sdk\Http\ConnectionException ConnectionException.
	 * @throws \WeArePlanet\Sdk\VersioningException VersioningException.
	 */
	protected function fetch_data() {
		$connector_service = new \WeArePlanet\Sdk\Service\PaymentConnectorService( WC_WeArePlanet_Helper::instance()->get_api_client() );
		return $connector_service->all();
	}

	/**
	 * Get id.
	 *
	 * @param mixed $entry entry.
	 * @return int|string
	 */
	protected function get_id( $entry ) {
		/* @var \WeArePlanet\Sdk\Model\PaymentConnector $entry */
		return $entry->getId();
	}
}
