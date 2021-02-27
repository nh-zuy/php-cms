<?php 

/**
 *	Module Products
 *	Front-end
 **/
class DefaultController extends Controller {
	/**/

	/**
	 *	Default action
	 *	Render list of the products
	 *	@access public
	 **/
	public function index() {
		$title = MODULE . " / " . ACTION;

		$model = new ProductCatModel("products_cat");
		$productsCat = $model->getAllCats();

		return $this->render("index", array(
			'title' => $title,
			'productsCat' => $productsCat
		));
	}

	/**
	 *	Render the view of a product
	 *	@param id The id of the product need showing
	 *	@access public
	 **/
	public function view($id) {
		$title = MODULE . " / " .ACTION;

		$productModel = new ProductModel("products");
		$product = $productModel->getProduct($id);

        $productCatModel = new ProductCatModel("products_cat");
        $cat = $productCatModel->getCat($product['cat_id']);
                  
        // Relevant products
        $relProducts = $productModel->getByCatId($cat['id']);

		return $this->render("view", array(
			'title' => $title,
			'product' => $product,
			'cat' => $cat,
			'relProducts' => $relProducts
		));
	}


	/**
	 *	Render list of the product categories
	 *	@access public
	 **/
	public function cats() {
		$title = MODULE . " / " . ACTION;

		$model = new ProductCatModel("products_cat");
		$productCats = $model->getAllCats();

		return $this->render("cats", [
			'title' => $title,
			'productCats' => $productCats
		]);
	}

	/**
	 *	CART
	 *	Show the current cart
	 *	@param no params
	 *	@access public
	 **/
	public function cart() {
		$title = MODULE . " / " . ACTION;

		$cart = array_key_exists('cart', $_SESSION) ? $_SESSION['cart'] : array();

		return $this->render("cart", [
			'title' => $title,
			'cart' => $cart
		]);
	}

	/**
	 *	CART
	 *	Add the product into cart
	 *	@param id The id of product need adding
	 *	@access public
	 **/

	public function order($id) {
		$title = MODULE . " / " . ACTION;

		if (empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])) {
					
			$model = new ProductModel("products");
			$product = $model->getProduct($id);

			if ($product != NULL) {
				$product['quantity'] = 1;
				$_SESSION['cart'][$id] = $product;
			};
			
		} else {
			$_SESSION['cart'][$id]['quantity'] += 1;
		};


		return $this->redirect($GLOBALS['config']['base_url'] . "/products/cart");
	}


	/**
	 *	CART
	 *	Updating current cart
	 *	@param no params
	 * 	@access public
	 **/
	public function updateCart() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			foreach ($_POST['qty'] as $productId => $quantity) {
				if ($quantity > 0) {
					$_SESSION['cart'][$productId]['quantity'] = $quantity;
				} else if ($quantity == 0) {
					unset($_SESSION['cart'][$productId]);
				};
			};
		};

		return $this->redirect($GLOBALS['config']['base_url'] . "/products/cart");
	}

	/**
	 *	CART
	 *	Delete $id product order in cart
	 *	@param id The id of product deleting
	 **/
	public function delOrder($id) {
		$title = MODULE . " / " . ACTION;

		if (array_key_exists($id, $_SESSION['cart'])) {
			unset($_SESSION['cart'][$id]);
		};

		return $this->redirect($GLOBALS['config']['base_url'] . "/products/cart");
	}

	/**
	 *	CART 
	 *	Delete cart completely
	 *	@param no params
	 * 	@access public
	 **/
	public function delCart() {
		if (isset($_SESSION['cart'])) {
			unset($_SESSION['cart']);
		};

		return $this->redirect($GLOBALS['config']['base_url'] . "/products/cart");
	}

	/**
	 *	Cart
	 *	Click the submit order
	 *	@param no params
	 *	@access public
	 **/
	public function purchase() {
		/* */

		$orderModel = new OrderModel("orders");
		$orderDetailModel = new OrderDetailModel("orders_detail");

		/* Check if the POST request */
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			// Handle the purchase information
			$purchaseName = validation($_POST['purchaseName']);
			$purchaseEmail = validation($_POST['purchaseEmail']);
			$purchasePhone = validation($_POST['purchasePhone']);
			$purchaseAddress = validation($_POST['purchaseAddress']);
			$purchaseContent = validation($_POST['purchaseContent']);

			$order = array(
				'code' => rand(20, 100),
				'customer_name' => $purchaseName,
				'customer_email' => $purchaseEmail,
				'customer_phone' => $purchasePhone,
				'customer_address' => $purchaseAddress,
				'message' => $purchaseContent
			);

			/* Insert new order into DB */
			if ($insertedId = $orderModel->createOrder($order)) {
				// Handle the order detail
				$orderDetail = array();

				foreach ($_SESSION['cart'] as $value) {
					$orderDetail = array(
						'product_id' => $value['id'],
						'product_name' => $value['product_name'],
						'product_unit' => $value['product_unit'],
						'product_quantity' => $value['quantity'],
						'order_id' => $insertedId
					);

					// Insert the product into OrderDetail table
					if (!$orderDetailModel->createOrderDetail($orderDetail)) {
						die(require_once(ERROR_PATH . "500.php"));
					};
				};
			} else {
				/* Error */
				die(require_once(ERROR_PATH . "500.php"));
			};
		};

		return $this->redirect($GLOBALS['config']['base_url'] . "/products/cart");
	}
}