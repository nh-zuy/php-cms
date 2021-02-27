<?php

/**
 *
 *
 **/
class OrderDetailModel extends Model {
	
	/**/

	/**
	 *
	 *
	 **/
	public function getByOrderId($orderId) {
		$sql = "SELECT * FROM {$this->table} WHERE order_id={$orderId}";

		return $this->db->query($sql);
	}

	/**
	 *
	 *
	 **/
	public function createOrderDetail($orderDetail) {
		return $this->insert($orderDetail);
	}
}