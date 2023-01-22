<?php

namespace Automattic\WooCommerce\Database\Migrations;

trait WooCommerceTableMigratorTrait
{
	/**
	 * Returns the name of WooCommerce custom tables.
	 *
	 * @return array{orders: string, addresses: string, op_data: string, meta: string}
	 */
	protected function get_table_names(): array {
		global $wpdb;

		return array(
			'orders'    => $wpdb->prefix . 'wc_orders',
			'addresses' => $wpdb->prefix . 'wc_order_addresses',
			'op_data'   => $wpdb->prefix . 'wc_order_operational_data',
			'meta'      => $wpdb->prefix . 'wc_orders_meta',
		);
	}
}
