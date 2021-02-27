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
                        Sản phẩm
                    </small>
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="What's up...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Tìm kiếm!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Danh sách <small>Đơn hàng</small></h2>
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

                                    <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    	<thead>
                                    		<tr class="headings">
                                    			<th>
                                    				<input type="checkbox" id="check-all" class="flat">
                                    			</th>
                                    			<th class="column-title">ID </th>
                                    			<th class="column-title">Ngày đặt hàng </th>
                                    			<th class="column-title">CODE </th>
                                    			<th class="column-title">Khách hàng </th>
                                    			<th class="column-title">Trạng thái </th>
                                    			<th class="column-title">Tổng tiền </th>
                                    			<th class="column-title no-link last"><span class="nobr">#Xử lý</span>
                                    			</th>
                                    			<th class="bulk-actions" colspan="7">
                                    				<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    			</th>
                                    		</tr>
                                    	</thead>

                                    	<tbody>
                                    		<?php foreach ($orders as $order): ?>
                                    			<tr class="even pointer">
                                    				<td class="a-center ">
                                    					<input type="checkbox" class="flat" name="table_records" >
                                    				</td>
                                    				<td class=" "><?= $order['id']; ?> </td>
                                    				<td class=" "><?= date("F j, Y, g:i a", strtotime($order['created_at'])); ?> </td>
                                    				<td class=" "><?= $order['code']; ?> <i class="success fa fa-long-arrow-up"></i></td>
                                    				<td class=" "><?= $order['customer_name']; ?> </td>
                                    				<td class=" ">
                                    					<?php
                                    						if ($order['status'] == 0) {
                                    							echo '<button type="button" class="btn btn-danger btn-xs">Chưa xử lí</button>';
                                    						}  else if ($order['status'] == 1) {
                                    							echo '<button type="button" class="btn btn-warning btn-xs">Đã xử lí</button>'; 
                                    						} else if ($order['status'] == 2) {
                                    							echo '<button type="button" class="btn btn-success btn-xs">Đã thanh toán</button>';
                                    						}
                                    					?>
                                    				</td>
                                    				<td class="a-right a-right ">$ </td>
                                    				<td class=" last">
                                    					<a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/orderDetail/<?= $order['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem </a>
                                    					<a href="<?= $GLOBALS['config']['base_url']; ?>/products/admin/delOrder/<?= $order['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                                    				</td>
                                    			</tr>
                                    		<?php endforeach; ?>
                                    	</tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
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