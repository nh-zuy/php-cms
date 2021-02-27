<?php Render("head"); ?>

    <!-- Pre Header -->
    <?php Widget("header"); ?>

    <!-- Navigation -->
    <?php Widget("menu"); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php Widget("banner"); ?>
    <!-- Banner Ends Here -->

	 <!-- Featured Starts Here -->
	 <div class="featured-items">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-12">
	 				<div class="section-heading">
	 					<div class="line-dec"></div>
	 					<h1>SHOPPING CART</h1>
	 				</div>
	 			</div>
	 			<div class="col-md-12">
	 				<form action="<?= $GLOBALS['config']['base_url']; ?>/products/default/updateCart" method="post">

	 				<table class="table table-striped">

	 					<thead>
	 						<tr>
	 							<th scope="col">ON</th>
	 							<th scope="col">Name</th>
	 							<th scope="col">Unit</th>
	 							<th scope="col">Quanity</th>
	 							<th scope="col">Total</th>
	 							<th scope="col"></th>
	 						</tr>
	 					</thead>

	 					<?php if($cart): ?>

	 					<tbody>

	 						<?php foreach($cart as $value): ?>

	 							<tr>
	 								<th scope="row"><?= $value['id']; ?></th>

	 								<td><?= $value['product_name']; ?></td>

	 								<td>$<?= number_format($value['product_unit']); ?></td>

	 								<td>
	 									<input 
	 									type="number"
	 									min="0"
	 									max="100" 
	 									id="productQty" 
	 									name="qty[<?= $value['id']; ?>]" 
	 									value="<?= $value['quantity']; ?>">

	 								</td>

	 								<td>$<?= number_format(($value['product_unit']*$value['quantity']), 0);?>
	 								</td>

	 								<td>
	 									<a class="btn btn-danger" role="button" href="<?= $GLOBALS['config']['base_url']; ?>/products/default/delOrder/<?= $value['id']; ?>">Xóa
	 									</a>
	 								</td>
	 							</tr>

	 						<?php endforeach; ?>
	 					</tbody>
	 				<?php endif; ?>
	 				</table>

	 				<?php if($cart): ?>
	 					<button type="submit" class="btn btn-primary">Cập nhật</button>

	 					<button 
	 					type="button" 
	 					class="btn btn-danger ml-5" 
	 					data-toggle="modal" 
	 					data-target="#deleteCart">
	 						Xóa giỏ
	 					</button>

	 					<a class="btn btn-success ml-5" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thanh toán</a>

	 				<?php endif; ?>
	 			</form>
	 			</div>
	 		</div>
	 	</div>
	 </div>

	 <!-- Modal -->
	<div class="modal fade" id="deleteCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 	<div class="modal-dialog" role="document">
	 		<div class="modal-content">
	 			<div class="modal-header">
	 				<h5 class="modal-title" id="exampleModalLabel">Xóa giỏ hàng</h5>
	 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	 					<span aria-hidden="true">&times;</span>
	 				</button>
	 			</div>
	 			<div class="modal-body">
	 				Bạn chắc chắn muốn xóa giỏ hàng?
	 			</div>
	 			<div class="modal-footer">
	 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
	 				<a type="button" class="btn btn-primary" href="<?= $GLOBALS['config']['base_url']; ?>/products/default/delCart">Chắc chắn</a>
	 			</div>
	 		</div>
	 	</div>
	</div>

	 <!-- Collapse information -->

	<div class="collapse mt-5 p-5" id="collapseExample">
	 	<div class="card card-body">
	 		<h2 class="card-title">Thông tin thanh toán</h4>
	 			<h5 class="card-subtitle mb-2 text-danger"><?php if(isset($message)) {echo $message;}; ?></h6>

	 				<form action="<?= $GLOBALS['config']['base_url']; ?>/products/default/purchase" method="post">

	 					<div class="form-group row">
	 						<label for="purchaseName" class="col-sm-2 col-form-label text-info">Tên khánh hàng</label>
	 						<div class="col-sm-10">
	 							<input type="text" class="form-control" name="purchaseName" id="name" placeholder="Your name" required>
	 						</div>
	 					</div>

	 					<div class="form-group row">
	 						<label for="purchaseEmail" class="col-sm-2 col-form-label text-info">Email</label>
	 						<div class="col-sm-10">
	 							<input type="text" class="form-control" name="purchaseEmail" id="email" placeholder="email@example.com" required>
	 						</div>
	 					</div>

	 					<div class="form-group row">
	 						<label for="purchasePhone" class="col-sm-2 col-form-label text-info">Số điện thoại</label>
	 						<div class="col-sm-10">
	 							<input type="tel" class="form-control" id="phone" name="purchasePhone" placeholder="+84" required>
	 						</div>
	 					</div>

	 					<div class="form-group row">
	 						<label for="purchaseAddress" class="col-sm-2 col-form-label text-info">Địa chỉ</label>
	 						<div class="col-sm-10">
	 							<input type="text" class="form-control" id="address" name="purchaseAddress" placeholder="Your address" required>
	 						</div>
	 					</div>

	 					<div class="form-group row">
	 						<label for="purchaseContent" class="col-sm-2 col-form-label text-info">Lời nhắn</label>
	 						<div class="col-sm-10">
	 							<textarea class="form-control" name="purchaseContent" puraria-label="With textarea" placeholder="Your notes" rows="8"></textarea>
	 						</div>
	 					</div>

	 					<button type="submit" class="btn btn-primary">Thanh toán</button>
	 				</form>

	 			</div>
	 		</div>
    <!-- Featred Ends Here -->

	<!-- Subscribe Form Starts Here -->
    <?php Widget("sub_form"); ?>
    <!-- Subscribe Form Ends Here -->

<?php Render("foot"); ?>
