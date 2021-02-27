<?php

/**
 *	Module Products
 *
 **/
class AdminController extends Controller {
	/**/

	/**
	 *	Products
	 *	Show all the products
	 **/
	public function index() {

		$productModel = new ProductModel("products");
		$products = $productModel->getAllProducts();

		return $this->render("index", array(
			'products' => $products
		));
	}

	/**
	 *	Products
	 *	Sho the detail of the product
	 **/
	public function view($id) {

		$model = new ProductModel("products");
		$product = $model->getProduct($id);

		return $this->render("view", [
			'product' => $product
		]);
	}

	/**
	 *	Products
	 *	Add new product
	 **/
	public function create() {

		$productModel = new ProductModel("products");
		$productCatModel = new ProductCatModel("products_cat");
		$productCats = $productCatModel->getAllCats();

		$message = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$productCat = validation($_POST['productCat']);
			$productName = validation($_POST['productName']);
			$productDes = validation($_POST['productDes']);
			$productContent = validation($_POST['productContent']);
			$productUnit = floatval(str_replace(',', '', validation($_POST['productUnit'])));
			$productStatus = (isset($_POST['productStatus'])) ? 1 : 0;

			$data = array(
				'product_name' => $productName,
				'product_des' => $productDes,
				'product_content' => $productContent,
				'product_unit' => $productUnit,
				'status' => $productStatus,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
				'cat_id' => $productCat
			);

			if ($insertId = $productModel->createProduct($data)) {
				$message = "Thêm sản phẩm thành công !";
				return $this->redirect($GLOBALS['config']['base_url'] . "/products/admin", $message);
			} else {
				die("ERROR: Can't create new product !");
			};
		}

		return $this->render("create", [
			'message' => $message,
			'productCats' => $productCats
		]);
	}

	/**
	 *	Products
	 *	Update the product info
	 **/
	public function update($id) {

		$productCatModel = new ProductCatModel("products_cat");
		$productModel = new ProductModel("products");
		$message = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$productCat = validation($_POST['productCat']);
			$productName = validation($_POST['productName']);
			$productDes = validation($_POST['productDes']);
			$productContent = validation($_POST['productContent']);
			$productUnit = floatval(str_replace(',', '', validation($_POST['productUnit'])));
			$productStatus = (isset($_POST['productStatus'])) ? 1 : 0;

			$data = array(
				'product_name' => $productName,
				'product_des' => $productDes,
				'product_content' => $productContent,
				'product_unit' => $productUnit,
				'status' => $productStatus,
				'updated_at' => date("Y-m-d H:i:s"),
				'cat_id' => $productCat
			);

			if ($productModel->updateProduct($id, $data)) {
				$message = "Cập nhật thành công";
			} else {
				die(require_once(ERROR_PATH . "500.php"));
			};
		};

		$product = $productModel->getProduct($id);
		$productCats = $productCatModel->getAllCats();

		// Push up first the current category of the product
		for ($i=0; $i < count($productCats); $i++) { 
			/* Swap the current category with the first element */
			if ($productCats[$i]['id'] === $product['cat_id'] ) {
				$temp = $productCats[0];
				$productCats[0] = $productCats[$i];
				$productCats[$i] = $temp;

				break;
			};
		};

		return $this->render("update", [
			'product' => $product,
			'productCats' => $productCats,
			'message' => $message
		]);
	}

	/**
	 *	Products
	 *	Delete the product
	 **/
	public function delete($id) {
		$model = new ProductModel("products");

		if ($model->deleteProduct($id)) {
			$message = "Xóa thành công !";
			return $this->redirect($GLOBALS['config']['base_url'] . "/products/admin", $message);
		} else {
			die("ERROR Delete the product !");
		};
	}

	/**
	 *	Product Cats
	 *	Show all the product categories
	 **/
	public function cats() {

		$productCatModel = new ProductCatModel("products_cat");
		$productCats = $productCatModel->getAllCats();

		return $this->render("cats", array(
			'productCats' => $productCats
		)); 
	}

	/**
	 *	Product Cats
	 *	Show the full info product cat
	 **/
	public function viewCat($id) {
		$productCatModel = new ProductCatModel("products_cat");
		$productCat = $productCatModel->getCat($id);

		return $this->render("viewCat", [
			'productCat' => $productCat
		]);
	}

	/**
	 *	Product Cats
	 *	Create product cat
	 **/
	public function createCat() {
		$productCatModel = new ProductCatModel("products_cat");

		$message = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$productCatName = validation($_POST['productCatName']);
			$productCatDes = validation($_POST['productCatDes']);
			$productCatContent = validation($_POST['productCatContent']);
			$productCatStatus = (isset($_POST['productCatStatus'])) ? 1 : 0;

			$data = array(
				'cat_name' => $productCatName,
				'cat_des' => $productCatDes,
				'cat_content' => $productCatContent,
				'cat_status' => $productCatStatus,
				'created_at' => date("Y-m-d H:i:s")
			);

			if ($insertId = $productCatModel->createProductCat($data)) {
				$message = "Thêm sản phẩm thành công !";
				return $this->redirect($GLOBALS['config']['base_url'] . "/products/admin/cats", $message);
			} else {
				die("ERROR: Can't create new product !");
			};
		};

		return $this->render("createCat", [
			
		]);
	}

	/**
	 *	Product Cats
	 *	Update info product cat
	 **/
	public function updateCat($id) {

		$productCatModel = new ProductCatModel("products_cat");

		$message = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			
			$productCatName = validation($_POST['productCatName']);
			$productCatDes = validation($_POST['productCatDes']);
			$productCatContent = validation($_POST['productCatContent']);
			$productCatStatus = (isset($_POST['productCatStatus'])) ? 1 : 0;

			$data = array(
				'cat_name' => $productCatName,
				'cat_des' => $productCatDes,
				'cat_content' => $productCatContent,
				'cat_status' => $productCatStatus
			);

			if ($productCatModel->updateProductCat($id, $data)) {
				$message = "Cập nhật thành công";
			} else {
				die(require_once(ERROR_PATH . "500.php"));
			};
		};

		$productCat = $productCatModel->getCat($id);

		return $this->render("updateCat", [
			'productCat' => $productCat,
			'message' => $message
		]);
	}

	/**
	 *	Product Cats
	 *	Delete product cat
	 **/
	public function deleteCat($id) {
		$model = new ProductCatModel("products_cat");

		if ($model->deleteProductCat($id)) {
			$message = "Xóa thành công !";
			return $this->redirect($GLOBALS['config']['base_url'] . "/products/admin/cats", $message);
		} else {
			die("ERROR Delete the product !");
		};
	}

	/**
	 *	SHOPPING
	 *	Show all orders
	 **/
	public function orders() {
		$title = MODULE . " / " . ACTION;

		$model = new OrderModel("orders");
		$orders = $model->getAllOrders();

		// Tax
		$tax = 0.19;

		// Shipping
		$shipping = 20000;

		return $this->render("order", [
			'orders' => $orders,
			'tax' => $tax,
			'shipping' => $shipping
		]);
	}

	/**
	 *	SHOPPING
	 *	Show the detail of the order
	 **/
	public function orderDetail($id) {

		$orderModel = new OrderModel("orders");
		$order = $orderModel->getOrder($id);

		$orderDetailModel = new OrderDetailModel("orders_detail");
		$orderDetail = $orderDetailModel->getByOrderId($id);

		// Calculate the total value of products
		$total = 0;

		foreach ($orderDetail as $detail) {
			$total += $detail['product_quantity'] * $detail['product_unit'];
		};

		// Tax
		$tax = 0.19;

		// Shipping
		$shipping = 20000;

		return $this->render("order_detail", [
			'order' => $order,
			'orderDetail' => $orderDetail,
			'total' => $total,
			'tax' => $tax,
			'shipping' => $shipping 
		]);
	}

	/**
	 *	SHOPPING
	 *	Delete the order
	 **/
	public function delOrder($orderId) {
		$model = new OrderModel("orders");

		if ($model->deleteOrder($orderId)) {
			$message = "Xóa thành công !";
			return $this->redirect($GLOBALS['config']['base_url'] . "/products/admin/orders", $message);
		} else {
			die(require_once(ERROR_PATH . "500.php"));
		}
	}
}