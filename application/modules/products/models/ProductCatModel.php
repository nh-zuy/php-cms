<?php

/**
 *
 *
 **/
class ProductCatModel extends Model {
	public function getAllCats() {
		$selects  = array(
			'*'
		);
		$orders = array(
			'column' => 'id',
			'order' => 'DESC'
		);
		$limits = '30';

		$productCats = $this->getAll($selects, $orders, $limits);

		return $productCats;
	}

	/**
	 *
	 *
	 **/
	public function getCat($cat_id) {
		$category = $this->findById($cat_id);

		return $category;
	}

	/**
	 *
	 *
	 **/
	public function createProductCat($data) {
		return $this->insert($data);
	}

	/**
	 *
	 *
	 **/
	public function updateProductCat($cat_id, $data) {
		return $this->update($cat_id, $data);
	}

	/**
	 *
	 *
	 **/
	public function deleteProductCat($cat_id) {
		return $this->delete($cat_id);
	}
}