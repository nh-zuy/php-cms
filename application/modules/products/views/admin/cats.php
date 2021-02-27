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
                            <h3>Danh mục <small>Sản phẩm</small></h3>
                        </div>

                        <div class="title_right">
                        	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        		<div class="input-group">
                        			<input type="text" class="form-control" placeholder="Ưhat up's?">
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
                    				<h2>Các danh mục</h2>
                    				<ul class="nav navbar-right panel_toolbox">
                    					<li>
                    						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    					</li>

                    					<li class="dropdown">
                    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    							<i class="fa fa-wrench"></i>
                    						</a>
                    						<!-- <ul class="dropdown-menu" role="menu">
                    							<li><a href="#">Settings 1</a>
                    							</li>
                    							<li><a href="#">Settings 2</a>
                    							</li>
                    						</ul> -->
                    					</li>

                    					<li>
                    						<a class="close-link"><i class="fa fa-close"></i></a>
                    					</li>
                    				</ul>

                    				<div class="clearfix"></div>
                    			</div>

                    			<div class="x_content">

                    				<a class="btn btn-primary" href="<?= $GLOBALS['config']['base_url'] . "/products/admin/createCat"?>">Thêm danh mục </a>

                    				<!-- start project list -->
                    				<table class="table table-striped projects">
                    					<thead>
                    						<tr>
                    							<th style="width: 1%">#</th>
                    							<th style="width: 20%">Tên danh mục</th>
                    							<th>Hình ảnh thu nhỏ</th>
                    							<th>Số lượng sản phẩm</th>
                    							<th>Trạng thái</th>
                    							<th style="width: 20%">#Xử lý</th>
                    						</tr>
                    					</thead>
                    					<tbody>

                    						<?php foreach ($productCats as $cat): ?>
                    							<?php $percent = rand(1, 100); ?>
                    						<tr>
                    							<td><?= $cat['id']; ?></td>

                    							<td>
                    								<a><?= $cat['cat_name']; ?></a>
                    								<br />
                    								<small><?= $cat['created_at']; ?></small>
                    							</td>

                    							<td>

                    								<?php if($cat['cat_image']): ?>
                    									<ul class="list-inline">
                    										<li>

                    											<img 
                    												src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $cat['cat_image']; ?>" 
                    												class="avatar" 
                    												alt="<?= $cat['cat_name']; ?>">
                    										</li>
                    									</ul>
                    								<?php endif; ?>
                    							</td>

                    							<td class="project_progress">
                    								<div class="progress progress_sm">
                    									<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?= $percent; ?>"></div>
                    								</div>
                    								<small><?= $percent; ?>% thu hút</small>
                    							</td>

                    							<td>
                    								<?= ($cat['cat_status']) ? '<button type="button" class="btn btn-success btn-xs">Hiển thị</button>' : '<button type="button" class="btn btn-danger btn-xs">Ẩn</button>'; ?>
                    							</td>

                    							<td>
                    								<a href="<?= $GLOBALS['config']['base_url'] . "/products/admin/viewCat/" . $cat['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem </a>
                    								<a href="<?= $GLOBALS['config']['base_url'] . "/products/admin/updateCat/" . $cat['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                    								<a href="<?= $GLOBALS['config']['base_url'] . "/products/admin/deleteCat/" . $cat['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                    							</td>
                    						</tr>	
                    					<?php endforeach; ?>

                    					</tbody>
                    				</table>
                    				<!-- end project list -->

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