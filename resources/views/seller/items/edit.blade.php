@extends('seller.layouts.master') @section('title', 'Edit Item') @section('page-header') <i class="fa fa-plus"></i> Edit Item @endsection @push('css')
<link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
<style>
/****************/

.sticky-nav {
	position: -webkit-sticky;
	position: sticky;
	top: 0;
	z-index: 1011;
	/* sweet spot */
	display: flex;
	justify-content: center;
	background: #6bc1c9;
	margin: 0 0 20px 0;
	list-style: none;
	transition: all .3s;
	border-top: 2px solid #6bc1c9;
	border-bottom: 2px solid #6bc1c9;
}

.modal-open .sticky-nav {
	z-index: 100;
	opacity: 0.5;
}

.sticky-nav li:nth-child(1),
.sticky-nav li:nth-child(7) {
	flex: 1
}

.sticky-nav a {
	display: inline-block;
	padding: 10px;
	color: white;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
}

.sticky-nav a.active {
	background: #fafafa;
	color: #6db8bb;
}


/****************/

.ck-editor__editable {
	min-height: 250px !important;
}

.ck-editor__editable:nth-of-type(1) {
	margin-bottom: 20px;
}


/****************/

table th,
table td {
	text-align: center !important;
	vertical-align: middle !important;
}

.small-input {
	padding-left: 0 !important;
	padding-right: 0 !important;
}

.small-input input {
	width: 100px;
}

.maximize {
	margin-top: -13px;
	margin-bottom: -12px;
	position: relative;
}

.maximize table {
	margin-bottom: 0;
}


/****************/

.widget-box {
	margin-bottom: 20px;
	box-shadow: 0 0 4px #d7d7d7;
	border: none;
}

.widget-header {
	font-size: 14px;
	border-bottom: 1px solid #eee;
	background: #5877b8;
}

.widget-title {
	color: white;
}

.widget-toolbar > .nav-tabs > li:not(.active) > a {
	color: white;
}

label {
	color: #5c5c5c;
}

.modal {
	z-index: 1050;
}

.modal-body .col {
	width: 55%;
	margin: auto;
	text-align: left;
}

@media (min-width: 768px) {
	.modal-dialog {
		width: 400px;
	}
}

.chosen-select.color + .chosen-container a.chosen-single {
	min-width: 120px;
}

.chosen-select.size + .chosen-container a.chosen-single {
	min-width: 112px;
}
</style>
@endpush
@section('content') @include('seller.components.page_header', [ 'fa' => 'fa fa-list', 'name' => 'Item List', 'route' => route('seller.product.items.index') ])
<ul class="sticky-nav" id="sticky-nav">
	<li></li>
	<li><a class="active" id="nav-basic">Basic Information</a></li>
	<li><a id="nav-price">Price & Stock</a></li>
	<li><a id="nav-service">Service</a></li>
	<li><a id="nav-details">Description</a></li>
	<li><a id="nav-images">Product Images</a></li>
	<li></li>
</ul>
<form role="form" method="post" class="form-horizontal" enctype="multipart/form-data" action="{{route('seller.product.items.update', $item->id)}}"> @csrf
	<!-- BASIC -->
	<div class="widget-box" id="basic">
		<div class="widget-header widget-header-blue widget-header-flat">
			<h4 class="widget-title">Basic Information</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse" class="white"> <i class="ace-icon fa fa-chevron-up"></i> </a>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row">
					<div class="col-md-6">
						<!-- Name -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="name"> Product Name <sup class="red">*</sup> </label>
							<div class="col-md-9">
								<input class="form-control input-sm" id="name" name="name" placeholder="Name" type="text" value="{{$item->name}}"> <strong class="red">{{$errors->first('name')}}</strong> </div>
						</div>
						<!-- Category -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="category_id">Category <sup class="red">*</sup></label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Category - " name="category_id" id="category_id">
										<option></option> @foreach($categories as $category)
										<option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected' : ''}}> {{$category->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('category_id')}}</strong> </div>
						</div>
						<!-- Sub Category -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="sub_category_id">Sub Category <sup class="red">*</sup></label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Sub Category -" id="sub_category_id" name="sub_category_id">
										<option value=""></option> @foreach($sub_categories as $sub_category)
										<option value="{{$sub_category->id}}" {{$item->sub_category_id == $sub_category->id ? 'selected' : ''}}> {{$sub_category->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('sub_category_id')}}</strong> </div>
						</div>
						<!-- Child Category -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="child_category_id">Child Category </label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Child Category -" id="child_category_id" name="child_category_id">
										<option value=""></option> @foreach($child_categories as $child_category)
										<option value="{{$child_category->id}}" {{$item->child_category_id == $child_category->id ? 'selected' : ''}}> {{$child_category->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('child_category_id')}}</strong> </div>
						</div> @php $tag_ids = collect($item->tags)->pluck('id')->toArray(); @endphp
						<!-- Tags -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="tag_ids">Tags</label>
							<div class="col-sm-9">
								<div class="text-center">
									<select class="chosen-select" multiple id="tag_ids" name="tag_ids[]" data-placeholder="Select Tags"> @foreach($tags as $tag)
										<option value="{{ $tag->id }}" {{ in_array($tag->id, $tag_ids) ? 'selected' : ''}}> {{ $tag->name }} </option> @endforeach </select>
								</div> <strong class="red">{{ $errors->first('tag_ids') }}</strong> </div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Brand -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="brand_id">Brand</label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Brand -" id="brand_id" name="brand_id">
										<option value=""></option> @foreach($brands as $brand)
										<option value="{{$brand->id}}" {{$item->brand_id == $brand->id ? 'selected' : ''}}> {{$brand->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('brand_id')}}</strong> </div>
						</div>
						<!-- Unit -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="unit_id">Unit </label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Unit -" id="unit_id" name="unit_id">
										<option value=""></option> @foreach($units as $unit)
										<option value="{{$unit->id}}" {{$item->unit_id == $unit->id ? 'selected' : ''}}> {{$unit->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('unit_id')}}</strong> </div>
						</div>
						<!-- Origin -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="origin_id">Origin </label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Origin -" id="origin_id" name="origin_id">
										<option value=""></option> @foreach($origins as $origin)
										<option value="{{$origin->id}}" {{$item->origin_id == $origin->id ? 'selected' : ''}}> {{$origin->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('origin_id')}}</strong> </div>
						</div>
						<!-- Collection -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="collection_id">Collection</label>
							<div class="col-md-9">
								<div class="text-center">
									<select class="chosen-select form-control" data-placeholder="- Collection -" id="collection_id" name="collection_id">
										<option value=""></option> @foreach($colls as $col)
										<option value="{{$col->id}}" {{ $col->id == $item->collection_id ? 'selected': '' }}> {{$col->title}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('collection_id')}}</strong> </div>
						</div>
						<!-- Digital Sheba -->
						<div class="form-group">
							<label class="col-md-3 control-label no-padding-right" for="digital_sheba">Digital Sheba</label>
							<div class="col-md-9">
								<input type="checkbox" id="digital_sheba" name="digital_sheba" {{$item->digital_sheba ? 'checked' : ''}} style="margin-top: 9px"> <strong class="red">{{$errors->first('digital_sheba')}}</strong> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PRICE -->
	<div class="widget-box" id="price">
		<div class="widget-header widget-header-blue widget-header-flat">
			<h4 class="widget-title">Price & Stock</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse" class="white"> <i class="ace-icon fa fa-chevron-up"></i> </a>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row">
					<div class="maximize table-horizontal  table-responsive">
						<table class="table table-bordered text-center" id="price-table">
							<thead>
								<tr>
									<th>Color</th>
									<th>Size</th>
									<th>Sku</th>
									<th>Qty</th>
									<th>Price</th>
									<th>Sale Qty</th>
									<th>Sale Price</th>
									<th>Picture</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody> @foreach($item->variants as $variant)
								<tr>
									<td>
										<select class="chosen-select color" name="v_color_id[{{$variant->id}}]" data-placeholder="- Color -">
											<option value=""></option> @foreach($colors as $color)
											<option value="{{$color->id}}" {{$variant->color_id == $color->id ? 'selected' : ''}}> {{$color->name}} </option> @endforeach </select>
									</td>
									<td>
										<select class="chosen-select size" name="v_size_id[{{$variant->id}}]" data-placeholder="- Size -">
											<option value=""></option> @foreach($sizes as $size)
											<option value="{{$size->id}}" {{$variant->size_id == $size->id ? 'selected' : ''}}> {{$size->name}} </option> @endforeach </select>
									</td>
									<td class="small-input">
										<input class="input-sm" name="v_sku[{{$variant->id}}]" type="text" value="{{$variant->sku}}"> </td>
									<td class="small-input">
										<input class="input-sm" type="text" name="v_qty[{{$variant->id}}]" required placeholder="0" value="{{$variant->qty}}"> </td>
									<td class="small-input">
										<input class="input-sm" name="v_price[{{$variant->id}}]" required type="text" placeholder="0" value="{{$variant->price}}"> </td>
									<td class="small-input">
										<input class="input-sm" name="v_min_qty[{{$variant->id}}]" type="text" value="{{$variant->min_qty}}"> </td>
									<td>
										<button type="button" data-toggle="modal" data-target="#v-sale-price-modal-{{$variant->id}}-o"> <i class="fa fa-edit" style="font-size: 20px"></i> </button>
										<div class="modal" id="v-sale-price-modal-{{$variant->id}}-o">
											<div class="modal-dialog">
												<div class="modal-content">
													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title">Sale Price
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">
                                                                    &times;
                                                                </button>
                                                            </h4> </div>
													<!-- Modal body -->
													<div class="modal-body" style="width: auto;height: 80%">
														<div class="form-group">
															<div class="col">
																<label for="sale-price">Sale Price</label>
															</div>
															<div class="col">
																<input id="sale-price" name="v_sale_price[{{$variant->id}}]" type="text" value="{{$variant->sale_price}}" placeholder="0"> </div>
														</div>
														<div class="form-group">
															<div class="col">
																<label for="start-day">Start Day</label>
															</div>
															<div class="col">
																<input id="start-day" name="v_start_day[{{$variant->id}}]" type="text" class="datepicker" value="{{$variant->sale_start_day}}" placeholder="2030-12-01"> </div>
														</div>
														<div class="form-group">
															<div class="col">
																<label for="end-day">End Day</label>
															</div>
															<div class="col">
																<input id="end-day" name="v_end_day[{{$variant->id}}]" type="text" class="datepicker" value="{{$variant->sale_end_day}}" placeholder="2030-12-01"> </div>
														</div>
													</div>
													<!-- Modal footer -->
													<div class="modal-footer">
														<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close </button>
													</div>
												</div>
											</div>
										</div>
									</td>
									<td>
										<button type="button" data-toggle="modal" data-target="#v-image-modal-{{$variant->id}}-o"> <i class="fa fa-edit" style="font-size: 20px"></i> </button>
										<div class="modal" id="v-image-modal-{{$variant->id}}-o">
											<div class="modal-dialog">
												<div class="modal-content">
													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title">Change Picture
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">
                                                                    &times;
                                                                </button>
                                                            </h4> </div>
													<!-- Modal body -->
													<div class="modal-body" style="width: auto;height: 80%">
                                                        <a href="#" class="v-image-btn cboxElement" title="Color Image" onclick="vImageClick(event, this)" data-rel="colorbox">
                                                                <img width="150"
                                                                     height="150"
                                                                     alt="color image"
                                                                     class="v-image-display"
                                                                     src="{{asset($variant->image ?? 'defaults/click-me.png')}}">
                                                        </a>
														<input class="v-image-file" type="file" onchange="vImageChange(this)" name="v_image[{{$variant->id}}]" value="" style="display: none"> </div>
													<!-- Modal footer -->
													<div class="modal-footer">
														<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close </button>
													</div>
												</div>
											</div>
										</div>
									</td>
									<td>
										<div class="btn-group btn-group-sm btn-corner">
											<button type="button" onclick="genRow()" class="btn btn-sm btn-primary"><span class="bolder">+</span> </button>
											<button type="button" onclick="deleteRow(this)" class="btn btn-sm btn-danger"><span class="bolder">-</span></button>
										</div>
									</td>
								</tr> @endforeach </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SERVICE -->
	<div class="widget-box" id="service">
		<div class="widget-header widget-header-blue widget-header-flat">
			<h4 class="widget-title">Service</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse" class="white"> <i class="ace-icon fa fa-chevron-up"></i> </a>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row">
					<div class="col-md-6">
						<!-- Warranty Type -->
						<div class="form-group">
							<label class="col-md-4 control-label no-padding-right" for="warranty_type_id">Warranty Type </label>
							<div class="col-md-8">
								<div class="text-center">
									<select class="chosen-select" id="warranty_type_id" name="warranty_type_id" data-placeholder="- Warranty Type -">
										<option value=""></option> @foreach($warranty_types as $warranty_type)
										<option value="{{$warranty_type->id}}" {{$item->warranty_type_id == $warranty_type->id ? 'selected' : ''}}> {{$warranty_type->name}} </option> @endforeach </select>
								</div> <strong class="red">{{$errors->first('warranty_type')}}</strong> </div>
						</div>
						<!-- Warranty Policy -->
						<div class="form-group">
							<label class="col-md-4 control-label no-padding-right" for="warranty_policy"> Warranty Policy </label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="warranty_policy" name="warranty_policy" placeholder="Warranty Policy" type="text" value="{{$item->warranty_policy}}"> <strong class="red">{{$errors->first('warranty_policy')}}</strong> </div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Warranty Period -->
						<div class="form-group">
							<label class="col-md-4 control-label no-padding-right" for="warranty_period"> Warranty Period </label>
							<div class="col-md-8">
								<input class="form-control input-sm" id="warranty_period" name="warranty_period" placeholder="Warranty period" type="text" value="{{$item->warranty_period}}"> <strong class="red">{{$errors->first('warranty_period')}}</strong> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- DESCRIPTION -->
	<div class="widget-box" id="description">
		<div class="widget-header widget-header-blue widget-header-flat">
			<h4 class="widget-title">Description</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse" class="white"> <i class="ace-icon fa fa-chevron-up"></i> </a>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row">
					<div class="col-md-12">
						<!-- Highlights -->
						<div class="form-group">
							<label class="col-md-2 control-label no-padding-right" for="highlights">Highlights</label>
							<div class="col-md-9">
								<textarea class="ckeditor" name="highlights" id="highlights">{{$item->highlights}}</textarea> <strong class="red">{{$errors->first('highlights')}}</strong> </div>
						</div>
						<!-- Description -->
						<div class="form-group">
							<label class="col-md-2 control-label no-padding-right" for="description"> Description  </label>
							<div class="col-md-9">
								<textarea class="ckeditor" name="description" id="description">{{$item->description}}</textarea> <strong class="red">{{$errors->first('description')}}</strong> </div>
						</div>
						<!-- Short Description -->
						<div class="form-group">
							<label class="col-md-2 control-label no-padding-right" for="short_description"> Short Description  <span>(260 Characters)</span> </label>
							<div class="col-md-9">
								<textarea class="textarea" name="short_description" id="short_description" style="width: 100%" >{{$item->short_description}}</textarea> <strong class="red">{{$errors->first('short_description')}}</strong> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PRODUCT IMAGES -->
	<div class="widget-box" id="product-images">
		<div class="widget-header widget-header-blue widget-header-flat">
			<h4 class="widget-title">Product Images</h4>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse" class="white"> <i class="ace-icon fa fa-chevron-up"></i> </a>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row">
					<div class="col-md-12">
						<!-- Feature Image -->
						<div class="form-group">
							<label class="col-md-2 control-label no-padding-right" for="feature_image"> Feature Image <sup class="red">*</sup> </label>
							<div class="col-md-9">
								<ul class="ace-thumbnails clearfix" style="margin-bottom: 10px">
									<li> <a href="#" onclick="productImageClick(event, this)" data-rel="colorbox" class="cboxElement">
                                                <img alt="150x150" src="{{asset($item->feature_image)}}" width="150"
                                                     height="150">
                                                <div class="text">
                                                    <div class="inner">Change Image!</div>
                                                </div>
                                            </a>
										<input type="file" name="feature_image" onchange="productImageChange(this)" style="display: none">
										<div class="tools tools-bottom">
											<a href="#" onclick="productImageClick(event, this)"> <i class="ace-icon fa fa-pencil"></i> </a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- Other Images -->
						<div class="form-group">
							<label class="col-md-2 control-label no-padding-right" for="other_images"> Other Images  </label>
							<div class="col-md-9">
								<ul class="ace-thumbnails clearfix" style="margin-bottom: 10px"> @foreach($item->other_images as $image)
									<li> <a href="#" onclick="productImageClick(event, this)" data-rel="colorbox" class="cboxElement">
                                                    <img alt="150x150" src="{{asset($image->path)}}" width="150"
                                                         height="150">
                                                    <div class="text">
                                                        <div class="inner">Change Image!</div>
                                                    </div>
                                                </a>
										<input type="file" name="other_image[{{$image->id}}]" onchange="productImageChange(this)" style="display: none">
										<div class="tools tools-bottom">
											<a href="#" onclick="productImageClick(event, this)"> <i class="ace-icon fa fa-pencil"></i> </a>
											<a href="{{route('seller.product.items.delete.other-image',['item_id'=>$item->id,'image_id'=>$image->id])}}"> <i class="ace-icon fa fa-trash red"></i> </a>
										</div>
									</li> @endforeach </ul>
								<input type="file" multiple id="other_images" name="new_other_image[]" class="ace-file-input"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Buttons -->
	<div class="form-group text-right" style="height: 100px">
		<div class="col-sm-offset-3 col-md-9">
			<button type="submit" class="btn btn-sm btn-primary submit"> <i class="fa fa-save"></i> Update </button>
			<a class="btn btn-sm btn-gray" href="{{route('seller.product.items.index')}}"> <i class="fa fa-arrow-left"></i> Back </a>
		</div>
	</div>
</form> @endsection @push('js')
<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
$(document).ready(() => {
	////////////// jquery configuration
	chosen_trigger()
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	})
	$('#feature_image').ace_file_input({
		style: 'well',
		droppable: true,
		thumbnail: 'small',
	});
	$('#other_images').ace_file_input({
		style: 'well',
		droppable: true,
		thumbnail: 'small',
		btn_choose: 'Add more',
	});
	////////////// ajax
	const category = $('#category_id');
	const sub_category = $('#sub_category_id');
	const child_category = $('#child_category_id');
	category.change(function() {
		sub_category.empty();
		sub_category.append($('<option>', {
			value: '',
			text: ''
		}));
		child_category.empty();
		child_category.append($('<option>', {
			value: '',
			text: ''
		}));
		const id = $(this).val().toString().trim()
		if(id > 0) {
			$.get('ajax/sub-categories/' + id, function(res) {
				genSubCats(res)
			});
		}
		sub_category.val('').trigger('chosen:updated');
		child_category.val('').trigger('chosen:updated');
	});
	sub_category.change(function() {
			child_category.empty();
			child_category.append($('<option>', {
				value: '',
				text: ''
			}));
			const id = $(this).val().toString().trim()
			if(id > 0) {
				$.get('ajax/child-categories/' + id, function(res) {
					genChildCats(res)
				});
			}
			child_category.val('').trigger('chosen:updated');
		})
		////////////// template
	function genSubCats(subs) {
		if(subs instanceof Array) {
			subs.forEach(function(s) {
				sub_category.append($('<option>', {
					value: s.id,
					text: s.name
				}));
			});
			sub_category.val('').trigger('chosen:updated');
		}
	}

	function genChildCats(childCats) {
		if(childCats instanceof Array) {
			childCats.forEach(function(s) {
				child_category.append($('<option>', {
					value: s.id,
					text: s.name
				}));
			});
			child_category.val('').trigger('chosen:updated');
		}
	}
	////////////// ck editor
	document.querySelectorAll('.ckeditor').forEach((editor) => {
		ClassicEditor.create(editor, {
			removePlugins: ['CKFinder', 'Image', 'ImageToolbar', 'ImageUpload', 'ImageStyle'],
		}).catch((error) => {
			console.error(error);
		});
	});
	////////////// scroll
	const basic = $('#basic');
	const price = $('#price');
	const service = $('#service');
	const description = $('#description');
	const product_images = $('#product-images');
	const scrollOffset = 60;
	const detectOffset = 70;
	const navBasic = $("#nav-basic");
	const navPrice = $("#nav-price");
	const navService = $("#nav-service");
	const navDesc = $("#nav-details");
	const navImages = $("#nav-images");
	navBasic.click(function(e) {
		e.preventDefault();
		window.scrollTo(0, basic.offset().top - scrollOffset)
	})
	navPrice.click(function(e) {
		e.preventDefault();
		window.scrollTo(0, price.offset().top - scrollOffset)
	})
	navService.click(function(e) {
		e.preventDefault();
		window.scrollTo(0, service.offset().top - scrollOffset);
	})
	navDesc.click(function(e) {
		e.preventDefault();
		window.scrollTo(0, description.offset().top - scrollOffset);
	})
	navImages.click(function(e) {
		e.preventDefault();
		window.scrollTo(0, product_images.offset().top - scrollOffset);
	})
	let curTab = 0;
	$(window).scroll(function() {
		if(curTab !== 0 && window.scrollY < price.offset().top - detectOffset) {
			curTab = 0;
			navBasic.addClass('active');
			navPrice.removeClass('active');
			navService.removeClass('active');
			navDesc.removeClass('active');
			navImages.removeClass('active');
		} else if(curTab !== 1 && window.scrollY >= price.offset().top - detectOffset && window.scrollY < service.offset().top - detectOffset) {
			curTab = 1;
			navBasic.removeClass('active');
			navPrice.addClass('active');
			navService.removeClass('active');
			navDesc.removeClass('active');
			navImages.removeClass('active');
		} else if(curTab !== 2 && window.scrollY >= service.offset().top - detectOffset && window.scrollY <= description.offset().top - detectOffset) {
			curTab = 2;
			navBasic.removeClass('active');
			navPrice.removeClass('active');
			navService.addClass('active');
			navDesc.removeClass('active');
			navImages.removeClass('active');
		} else if(curTab !== 3 && window.scrollY >= description.offset().top - detectOffset && window.scrollY <= product_images.offset().top - detectOffset) {
			curTab = 3;
			navBasic.removeClass('active');
			navPrice.removeClass('active');
			navService.removeClass('active');
			navDesc.addClass('active');
			navImages.removeClass('active');
		} else if(curTab !== 4 && window.scrollY >= product_images.offset().top - detectOffset) {
			curTab = 4;
			navBasic.removeClass('active');
			navPrice.removeClass('active');
			navService.removeClass('active');
			navDesc.removeClass('active');
			navImages.addClass('active');
		}
	});
})
const price_table_body = $('#price-table tbody');

function shouldGenRow() {
	let n1 = NaN;
	let n2 = NaN;
	let flag = true;
	$('.chosen-select.color').each(function() {
		n1 = Number($(this).val());
		n2 = Number($(this).closest('tr').find('.chosen-select.size').val());
		if(!(n1 > 0 || n2 > 0)) {
			flag = false;
			return flag;
		}
	});
	return flag;
}
let rowId = 1;

function genRow() {
	if(!shouldGenRow()) return;
	const template =`<tr>
                        <td>
                            <select class="chosen-select color"
                                    name="new_v_color_id[${rowId}]"
                                    data-placeholder="- Color -">
                                <option value=""></option>
                                @foreach($colors as $color) <option value="{{$color->id}}">{{$color->name}}</option> @endforeach
                                        </select>
                                    </td>

                                    <td>
                                        <select class="chosen-select size"
                                                name="new_v_size_id[${rowId}]"
                                    data-placeholder="- Size -">
                                <option value=""></option>
                                @foreach($sizes as $size) <option value="{{$size->id}}">{{$size->name}}</option> @endforeach
                                        </select>
                                    </td>

                                    <td class="small-input">
                                        <input class="input-sm"
                                            name="new_v_sku[${rowId}]"
                                type="text"
                                placeholder="SKU"
                                value="">
                        </td>

                        <td class="small-input">
                            <input class="input-sm"
                                type="text"
                                name="new_v_qty[${rowId}]"
                                required
                                placeholder="0"
                                value="">
                        </td>

                        <td class="small-input">
                            <input class="input-sm"
                                name="new_v_price[${rowId}]"
                                type="text"
                                required
                                placeholder="0"
                                value="">
                        </td>
                        <td class="small-input">
                            <input class="input-sm"
                                name="new_v_min_qty[${rowId}]"
                                type="text"
                                placeholder="0"
                                value="">
                        </td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#v-sale-price-modal-${rowId}">
                                <i class="fa fa-edit" style="font-size: 20px"></i>
                            </button>
                            <div class="modal" id="v-sale-price-modal-${rowId}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Sale Price
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                    </h4>
                                </div>
                                <div class="modal-body" style="width: auto;height: 80%">
                                    <div class="form-group">
                                        <div class="col">
                                            <label for="sale-price-${rowId}">Sale Price</label>
                                        </div>
                                        <div class="col">
                                            <input id="sale-price-${rowId}" name="new_v_sale_price[${rowId}]" type="text" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col">
                                            <label for="start-day-${rowId}">Start Day</label>
                                        </div>
                                        <div class="col">
                                            <input id="start-day-${rowId}" name="new_v_start_day[${rowId}]" type="text" class="datepicker" placeholder="2030-12-01">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col">
                                            <label for="end-day-${rowId}">End Day</label>
                                        </div>
                                        <div class="col">
                                            <input id="end-day-${rowId}" name="new_v_end_day[${rowId}]" type="text" class="datepicker" placeholder="2030-12-01">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button type="button" style="cursor: pointer" data-toggle="modal" data-target="#v-image-modal-${rowId}" >
                                <i class="fa fa-edit" style="font-size: 20px"></i>
                            </button>
                            <div class="modal" id="v-image-modal-${rowId}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Change Picture <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                                        </div>
                                        <div class="modal-body" style="width: auto;height: 80%">
                                            <a href="#" class="v-image-btn cboxElement" onclick="vImageClick(event, this)" title="Color Image" data-rel="colorbox">
                                                <img width="150" height="150" alt="color image" class="v-image-display" src="{{asset('defaults/click-me.png')}}">
                                            </a>
                                            <input class="v-image-file" onchange="vImageChange(this)" name="new_v_image[${rowId}]" value="" type="file" style="display: none">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="btn-group btn-group-sm btn-corner">
                                <button type="button" onclick="genRow()" class="btn btn-sm btn-primary">
                                    <span class="bolder">+</span>
                                </button>
                                <button type="button" onclick="deleteRow(this)" class="btn btn-sm btn-danger">
                                    <span class="bolder">-</span>
                                </button>
                            </div>
                        </td>
                    </tr>`;
	rowId++;
	price_table_body.append(template)
	chosen_trigger()
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd'
	})
}

function deleteRow(el) {
	if(price_table_body.find('tr').length !== 1) {
		$(el).closest('tr').remove();
	}
}

function chosen_trigger() {
	if(!ace.vars['touch']) {
		$('.chosen-select').chosen({
			allow_single_deselect: true,
			search_contains: true
		});
		$(window).on('resize.chosen', function() {
			$('.chosen-select').each(function() {
				let $this = $(this);
				$this.next().css({
					'width': '100%'
				});
			})
		}).trigger('resize.chosen');
	} else {
		$('.chosen-select').css('width', '100%');
	}
}

function readURL(input, image) {
	if(input.files && input.files[0]) {
		const reader = new FileReader();
		reader.onload = function(e) {
			image.attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}

function vImageClick(event, el) {
	event.preventDefault();
	$(el).closest('tr').find('.v-image-file').eq(0).click();
}

function vImageChange(el) {
	readURL(el, $(el).closest('tr').find('.v-image-display').eq(0));
}

function productImageClick(event, el) {
	event.preventDefault();
	$(el).closest('li').find('input').click();
}

function productImageChange(el) {
	readURL(el, $(el).closest('li').find('img').eq(0));
}
$('#short_description').on('keyup input focus', function() {
	const offset = this.offsetHeight - this.clientHeight;
	$(this).val($(this).val().toString().substring(0, 260))
	$(this).css('height', 'auto').css('height', this.scrollHeight + offset);
});
</script>
 @endpush
