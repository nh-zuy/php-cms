<?php

/**
 *
 *
 **/
class OrderModel extends Model {
	/**/

	/**
	 *
	 *
	 **/
	public function getAllOrders() {
		$selects = array(              // Selected fields
			'*'
		);
		$orders = array(
			'column' => 'id',	// Fields need orderring
			'order' => 'DESC' 			// ASC / DESC
		);
		$limits = '30';                 // Items limit

		$orders = $this->getAll($selects, $orders, $limits);

		return $orders;
	}

	/**
	 *
	 *
	 **/
	public function createOrder($order) {
		return $this->insert($order);
	}

	/**
	 *
	 *
	 **/
	public function getOrder($orderId) {
		$order = $this->findById($orderId);

		return $order;
	}

	/**
	 *
	 *
	 **/
	public function deleteOrder($orderId) {
		return $this->delete($orderId);
	}
}