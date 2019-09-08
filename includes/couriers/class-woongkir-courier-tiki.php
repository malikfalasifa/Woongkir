<?php
/**
 * The file that defines the Woongkir_Courier_TIKI class
 *
 * @link       https://github.com/sofyansitorus
 * @since      ??
 *
 * @package    Woongkir
 * @subpackage Woongkir/includes
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Woongkir_Courier_TIKI class.
 *
 * @since      ??
 * @package    Woongkir
 * @subpackage Woongkir/includes
 * @author     Sofyan Sitorus <sofyansitorus@gmail.com>
 */
class Woongkir_Courier_TIKI extends Woongkir_Courier {

	/**
	 * Courier ID
	 *
	 * @since ??
	 *
	 * @var string
	 */
	public $id = 'tiki';

	/**
	 * Courier Name
	 *
	 * @since ??
	 *
	 * @var string
	 */
	public $name = 'TIKI';

	/**
	 * Courier Website
	 *
	 * @since ??
	 *
	 * @var string
	 */
	public $website = 'http://tiki.id';

	/**
	 * Get courier services for domestic shipping
	 *
	 * @since ??
	 *
	 * @return array
	 */
	public function get_services_domestic() {
		return array(
			'REG' => 'Regular Service',
			'ECO' => 'Economy Service',
			'ONS' => 'Over Night Service',
			'SDS' => 'Same Day Service',
			'HDS' => 'Holiday Services',
			'TRC' => 'Trucking Service',
		);
	}

	/**
	 * Get courier account for domestic shipping
	 *
	 * @since ??
	 *
	 * @return array
	 */
	public function get_account_domestic() {
		return array(
			'starter',
			'basic',
			'pro',
		);
	}
}