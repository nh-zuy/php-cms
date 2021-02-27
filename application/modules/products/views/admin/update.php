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
							<h3>Sản phẩm</h3>
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
									<h2>Chỉnh sửa thông tin<small>sản phẩm</small></h2>
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
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục sản phẩm</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<select name="productCat" class="select2_single form-control" tabindex="-1">

													<?php foreach ($productCats as $cat): ?>
														<option value="<?= $cat['id']; ?>"><?= $cat['cat_name']; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Tên sản phẩm</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="text" name="productName" class="form-control" placeholder="Tên sản phẩm ... " required="required" value="<?= $product['product_name']; ?>">
											</div>
										</div>

										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Disabled Input </label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Read-Only Input</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
											</div>
										</div> -->

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-3">
												Hình thu nhỏ
											</label>

											<div class="col-md-3 col-sm-3 col-xs-4">
												<div class="product-image">
													<img src="<?= $GLOBALS['config']['base_url'] . UPLOAD_PATH . MODULE . DS . $product['product_image']; ?>" alt="<?= $product['product_name']; ?>" />
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span>
											</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<textarea required="required" name="productDes" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;"><?= $product['product_des']; ?></textarea>
											</div>
										</div>

										

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Thông tin chi tiết <span class="required">*</span>
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

												<div id="editor"><?= $product['product_content']; ?></div>
												<textarea required name="productContent" id="descr" style="display:none;"></textarea>
												<br />

												
											</div>
										</div>

										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Password</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="password" class="form-control" value="passwordonetwo">
											</div>
										</div> -->

										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">AutoComplete</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
												<div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
											</div>
										</div> -->

										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Select</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<select class="form-control">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
												</select>
											</div>
										</div> -->



										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Select Grouped</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<select class="select2_group form-control">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div> -->

										<!-- <div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Select Multiple</label>
											<div class="col-md-10 col-sm-10 col-xs-12">
												<select class="select2_multiple form-control" multiple="multiple">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
													<option>Option five</option>
													<option>Option six</option>
												</select>
											</div>
										</div> -->

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Đơn giá</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<input required type="text" class="tags form-control" name="productUnit" value="<?= number_format($product['product_unit']); ?>" />
												
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-2 col-sm-2 col-xs-12">Tags</label>
											<div class="col-md-8 col-sm-8 col-xs-12">
												<input id="tags_1" type="text" class="tags form-control" value="laptop" name="productTag" />
												<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
											</div>
										</div>

										<!-- <div class="form-group">
											<label class="col-md-2 col-sm-2 col-xs-12 control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option one. select more than one options
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option two. select more than one options
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
													</label>
												</div>
											</div>
										</div> -->

										<!-- <div class="form-group">
											<label class="col-md-2 col-sm-2 col-xs-12 control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" checked="checked"> Checked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat"> Unchecked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" checked name="iCheck"> Checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck"> Unchecked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
													</label>
												</div>
											</div>
										</div> -->

										

										<div class="form-group">
											<label for="productStatus" class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>

											<div class="col-md-10 col-sm-10 col-xs-12">
												<div class="">
													<input type="checkbox" class="js-switch" <?= ($product['status']) ? 'checked' : ''; ?> name="productStatus"/>
												</div>
											</div>
										</div>


										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-3">
												<button type="submit" class="btn btn-primary">Hủy</button>
												<button type="submit" class="btn btn-success xcxc">Thay đổi</button>
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