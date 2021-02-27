<?php Render("head"); ?>

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <?php Widget("menu_admin"); ?>
            </div>

            <!-- top navigation -->
            <?php Widget("top_nav"); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                	<div class="page-title">
                		<div class="title_left">
                			<h3>
                				Đơn hàng
                				<small>
                					Thông tin chi tiết
                				</small>
                			</h3>
                		</div>

                		<div class="title_right">
                			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                				<div class="input-group">
                					<input type="text" class="form-control" placeholder="Search for...">
                					<span class="input-group-btn">
                						<button class="btn btn-default" type="button">Tìm kiếm!</button>
                					</span>
                				</div>
                			</div>
                		</div>
                	</div>
                	<div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                            	<div class="x_title">
                            		<h2>Thông tin chi tiết <small>#</small></h2>
                            		<ul class="nav navbar-right panel_toolbox">
                            			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            			</li>
                            			<li class="dropdown">
                            				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            				<ul class="dropdown-menu" role="menu">
                            					<li><a href="#">Settings 1</a>
                            					</li>
                            					<li><a href="#">Settings 2</a>
                            					</li>
                            				</ul>
                            			</li>
                            			<li><a class="close-link"><i class="fa fa-close"></i></a>
                            			</li>
                            		</ul>
                            		<div class="clearfix"></div>
                            	</div>

                            	<div class="x_content">

                            		<section class="content invoice">
                            			<!-- title row -->
                            			<div class="row">
                            				<div class="col-xs-12 invoice-header">
                            					<h1>
                            						<i class="fa fa-globe"></i> Đơn hàng số <?= $order['id']; ?>
                            						<small class="pull-right">Ngày: <?= date("d/m/Y", strtotime($order['created_at'])); ?></small>
                            					</h1>
                            				</div>
                            				<!-- /.col -->
                            			</div>
                            			<!-- info row -->
                            			<div class="row invoice-info">
                            				<div class="col-sm-4 invoice-col">
                            					<div class="badge badge-primary text-wrap">TỪ</div>
                            					<address>
                            						<strong><?= $order['customer_name']; ?></strong>
                            						
                            						<br><?= $order['customer_address']; ?>
                            						
                            						<br>Điện thoại: <?= $order['customer_phone']; ?>
                            						<br>Email: <?= $order['customer_email']; ?>
                            					</address>
                            				</div>
                            				<!-- /.col -->
                            				<div class="col-sm-4 invoice-col">
                            					<div class="badge badge-primary text-wrap">ĐẾN</div>
                            					<address>
                            						<strong>Admin</strong>
                            						<br>Admin address
                            						<br>Điện thoại: 0376123456
                            						<br>Email: admin@gmail.com
                            					</address>
                            				</div>
                            				<!-- /.col -->
                            				<div class="col-sm-4 invoice-col">
                            					<b>Đơn hàng #<?= $order['code']; ?></b>
                            					<br>
                            					<b>Mã code:</b> <?= $order['code']; ?>
                            					<br>
                            					<b>Order ID:</b> <?= $order['id']; ?>
                            					<br>
                            					<b>Ngày thanh toán:</b> 
                            					<br>
                            					<b>Tài khoản:</b> 
                            				</div>
                            				<!-- /.col -->
                            			</div>
                            			<!-- /.row -->

                            			<div class="row">
                            				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            					<div class="tile-stats">
                            						<div class="icon"><i class="fa fa-comments-o"></i>
                            						</div>
                            						<div class="count"><?= $order['customer_name']; ?></div>

                            						<h3>Lời nhắn</h3>
                            						<p><?= $order['message']; ?></p>
                            					</div>
                            				</div>
                            			</div>

                            			<!-- Table row -->
                            			<div class="row">



                            				<div class="col-xs-12 table">
                            					<table class="table table-striped">
                            						<thead>
                            							<tr>
                            								<th>ID sản phẩm</th>
                            								<th style="width: 30%">Tên sản phẩm</th>
                            								<th style="width: 35%">Mô tả</th>
                            								<th>Đơn giá</th>
                            								<th>Số lượng</th>
                            								
                            								
                            							</tr>
                            						</thead>
                            						<tbody>

                            							<?php foreach ($orderDetail as $detail): ?>
                            								<tr>
                            									<td>
                            										<?= $detail['id']; ?>
                            											
                            										</td>

                            									<td>
                            										<?= $detail['product_name']; ?>
                            									</td>

                            									<td></td>

                            									<td>
                            										$<?= number_format($detail['product_unit']); ?>
                            											
                            										</td>
                            									<td>
                            										<?= $detail['product_quantity'] ?>
                            									</td>
                            								</tr>
                            							<?php endforeach; ?>
                            						</tbody>
                            					</table>
                            					<hr>
                            				</div>
                            				<!-- /.col -->
                            			</div>
                            			<!-- /.row -->

                            			<div class="row">
                            				<!-- accepted payments column -->
                            				<div class="col-xs-6">
                            					<p class="lead">Hình thức thanh toán:</p>
                            					<img src="<?= $GLOBALS['config']['base_url']; ?>/public/images/visa.png" alt="Visa">
                            					<img src="<?= $GLOBALS['config']['base_url']; ?>/public/images/mastercard.png" alt="Mastercard">
                            					<img src="<?= $GLOBALS['config']['base_url']; ?>/public/images/american-express.png" alt="American Express">
                            					<img src="<?= $GLOBALS['config']['base_url']; ?>/public/images/paypal2.png" alt="Paypal">
                            					<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            						Lựa chọn hình thức thanh toán
                            					</p>
                            				</div>
                            				<!-- /.col -->
                            				<div class="col-xs-6">
                            					<p class="lead">Hóa đơn chi tiết</p>
                            					<div class="table-responsive">
                            						<table class="table">
                            							<tbody>
                            								<tr>
                            									<th style="width:50%">Tổng giá trị:</th>
                            									<td>$<?= number_format($total); ?></td>
                            								</tr>
                            								<tr>
                            									<th>Thuế</th>
                            									<td>$<?= number_format($tax * $total); ?></td>
                            								</tr>
                            								<tr>
                            									<th>Shipping:</th>
                            									<td>$<?= number_format($shipping); ?></td>
                            								</tr>
                            								<tr>
                            									<th>Tổng tiền:</th>
                            									<td>$<?= number_format($tax * $total + $total + $shipping); ?></td>
                            								</tr>
                            							</tbody>
                            						</table>
                            					</div>
                            				</div>
                            				<!-- /.col -->
                            			</div>
                            			<!-- /.row -->

                            			<!-- this row will not appear when printing -->
                            			<div class="row no-print">
                            				<div class="col-xs-12">
                            					<button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In hóa đơn</button>
                            					<button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Xác nhận thanh toán</button>
                            					<button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Hóa đơn PDF</button>
                            				</div>
                            			</div>
                            		</section>

                            	</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! | Admin Theme
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

<?php Render("foot"); ?>