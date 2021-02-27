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
							<h3>Danh mục Sản phẩm</h3>
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
						

						<div class="col-md-12 col-xs-12">
							<div class="x_panel">

								<div class="x_title">
									<h2>Thêm danh mục<small>sản phẩm</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li>
											<a class="collapse-link">
												<i class="fa fa-chevron-up"></i>
											</a>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												<i class="fa fa-wrench"></i>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="#">Settings 1</a>
												</li>

												<li>
													<a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li>
											<a class="close-link">
												<i class="fa fa-close"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>

								<div class="x_content">


									<?= (isset($message)) ? '<h4><p class="text-success text-center">' . $message. '</p></h4>' : ''; ?> 

									<br />
									<form class="form-horizontal form-label-left" method="post">

								

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Tên danh mục</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="text" name="productCatName" class="form-control" placeholder="Tên danh mục ... " required="required" value="">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-3">
												Hình thu nhỏ
											</label>

											<div class="col-md-3 col-sm-3 col-xs-4">
												<div class="product-image">
													<img src="" alt="" />
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả danh mục<span class="required">*</span>
											</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<textarea placeholder="Mô tả danh mục ..." required="required" name="productCatDes" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;"></textarea>
											</div>
										</div>

										

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Chi tiết danh mục<span class="required">*</span>
											</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<div id="alerts"></div>
												<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
													<div class="btn-group">
														<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
														<ul class="dropdown-menu">
														</ul>
													</div>
													<div class="btn-group">
														<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
														<ul class="dropdown-menu">
															<li><a data-edit="fontSize 5"><p style="font-size:17px">Huge</p></a>
															</li>
															<li><a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
															</li>
															<li><a data-edit="fontSize 1"><p style="font-size:11px">Small</p></a>
															</li>
														</ul>
													</div>
													<div class="btn-group">
														<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
														<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
														<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
														<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
													</div>
													<div class="btn-group">
														<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
														<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
														<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
														<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
													</div>
													<div class="btn-group">
														<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
														<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
														<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
														<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
													</div>
													<div class="btn-group">
														<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
														<div class="dropdown-menu input-append">
															<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
															<button class="btn" type="button">Add</button>
														</div>
														<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

													</div>

													<div class="btn-group">
														<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
														<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
													</div>
													<div class="btn-group">
														<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
														<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
													</div>
												</div>

												<div id="editor"></div>
												<textarea required name="productCatContent" id="descr" style="display:none;"></textarea>
												<br />

												
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Tags</label>
											<div class="col-md-8 col-sm-8 col-xs-12">
												<input id="tags_1" type="text" class="tags form-control" value="laptop" name="productCatTag" />
												<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
											</div>
										</div>

										

										<div class="form-group">
											<label for="productStatus" class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<div class="">
													<input type="checkbox" class="js-switch" checked name="productCatStatus"/> 
													
												</div>


											</div>
										</div>


										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-3">
												<button type="submit" class="btn btn-primary">Hủy</button>
												<button type="submit" class="btn btn-success xcxc">Thêm</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>


				
					</div>				
					
				</div>
				<!-- /page content -->

				<!-- footer content -->
				<footer>
					<div class="">
						<p class="pull-right">Gentelella Alela! | Themes Admin
							<span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
						</p>
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->

			</div>

		</div>
	</div>

<?php Render("foot"); ?>