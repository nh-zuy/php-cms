<?php 

/**
 *
 *
 **/
class ProductModel extends Model {
	/**/

	/**
	 *
	 *
	 **/
	public function getAllProducts() {
		$selects = array(              // Selected fields
			'*'
		);
		$orders = array(
			'column' => 'id',	// Fields need orderring
			'order' => 'DESC' 			// ASC / DESC
		);
		$limits = '30';                 // Items limit

		$products = $this->getAll($selects, $orders, $limits);

		return $products;
	}

	/**
	 *
	 *
	 **/
	public function getProduct($product_id) {
		$product = $this->findById($product_id);

		return $product;
	}

	/**
	 *
	 *
	 **/
	public function getByCatId($catId) {
		$sql = "SELECT * FROM {$this->table} WHERE cat_id={$catId}";

		return $this->db->query($sql);
	}

	/**
	 *
	 *
	 **/
	public function createProduct($data) {
		return $this->insert($data);
	}

	/**
	 *
	 *
	 **/
	public function updateProduct($product_id, $data) {
		return $this->update($product_id, $data);
	}

	/**
	 *
	 *
	 **/
	public function deleteProduct($product_id) {
		return $this->delete($product_id);
	}
}