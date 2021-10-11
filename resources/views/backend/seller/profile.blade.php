@extends('backend.layouts.master')
@section('title','Seller Profile')
@section('page-header')
<i class="ace-icon glyphicon glyphicon-user"></i> Seller Profile
@stop
@section('content')
@include('backend.components.page_header', [
'fa' => 'fa fa-list',
'name' => 'Seller Profile',
'route' => route('seller.profile.index')
])

<div class="col-sm-9">
	<form class="form-horizontal"method="post"action="{{route('backend.seller.createProfile')}}"role="form"enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="seller_id" value="{{ $seller_id??" " }}">
        <!-- Name -->
        <div class="form-group">
            <label class="col-sm-3 " for="proprietor_name">Seller name <sup class="red">*</sup></label>
            <div class="col-sm-8">
                <input type="text"
                    id="proprietor_name"
                    placeholder=" - Seller Name -"
                    class="form-control input-sm"
                    name="name"
                    required
                    value="{{ auth('seller')->user()->name??'' }}"
                    >
                   <strong class=" red">{{ $errors->first('name') }}</strong>
            </div>
        </div>
        <!-- email -->
        @if(auth('seller')->user()->email)
        <div class="form-group">
            <label class="col-sm-3 " for="proprietor_name">Seller login Email <sup class="red">*</sup></label>
            <div class="col-sm-8">
                <input type="text"
                    id="proprietor_name"
                    placeholder=" - Seller email -"
                    class="form-control input-sm"
                    name="login_email"
                    required
                    value="{{ auth('seller')->user()->email??'' }}"
                    >
                   <strong class=" red">{{ $errors->first('email') }}</strong>
            </div>
        </div>
        @endif
        @if(auth('seller')->user()->mobile)
        <div class="form-group">
            <label class="col-sm-3 " for="proprietor_name">Seller login Mobile <sup class="red">*</sup></label>
            <div class="col-sm-8">
                <input type="text"
                    id="proprietor_name"
                    placeholder=" - Seller phone number -"
                    class="form-control input-sm"
                    name="login_mobile"
                    required
                    value="{{ auth('seller')->user()->mobile??'' }}"
                    >
                   <strong class=" red">{{ $errors->first('login_mobile') }}</strong>
            </div>
        </div>
        @endif
		<!--Proprietor Name -->
		<div class="form-group">
			<label class="col-sm-3 " for="proprietor_name">Proprietor name <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="proprietor_name"
					placeholder=" - Proprietor_name -"
					class="form-control input-sm"
					name="proprietor_name"
					required
					value=""
					>
				   <strong class=" red">{{ $errors->first('proprietor_name') }}</strong>
			</div>
		</div>
		{{-- Company Registration number --}}
		<div class="form-group">
			<label class="col-sm-3" for="registration_number">Company Registration number <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="registration_number"
					placeholder=" - Registration Number -"
					class="form-control input-sm"
					name="registration_number"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('registration_number') }}</strong>
			</div>
		</div>
		{{-- Corporate address --}}
		<div class="form-group">
			<label class="col-sm-3 " for="crporate_address">Corporate Address <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="crporate_address"
					placeholder=" - Corporate Address -"
					class="form-control input-sm"
					name="crporate_address"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('crporate_address') }}</strong>
			</div>
		</div>
		{{-- Vat Registration number --}}
		<div class="form-group">
			<label class="col-sm-3 " for="vat_registration_number">Vat Registration number <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="vat_registration_number"
					placeholder=" - Vat Registration number -"
					class="form-control input-sm"
					name="vat_registration_number"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('vat_registration_number') }}</strong>
			</div>
		</div>
		{{-- owners NID numberr --}}
		<div class="form-group">
			<label class="col-sm-3 " for="nid_number">Owners NID number <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="nid_number"
					placeholder=" - NID number -"
					class="form-control input-sm"
					name="nid_number"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('nid_number') }}</strong>
			</div>
		</div>
		{{-- Trade licenses --}}
		<div class="form-group">
			<label class="col-sm-3 " for="nid_number">Trade licenses <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="nid_number"
					placeholder=" - Trade licenses -"
					class="form-control input-sm"
					name="trade_licenses"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('trade_licenses') }}</strong>
			</div>
		</div>
		{{-- 8. Main Business --}}
		<div class="form-group">
			<label class="col-sm-3 " for="nid_number">Main Business <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="nid_number"
					placeholder=" - Trade licenses -"
					class="form-control input-sm"
					name="main_business"
					required
					value=""
					>
				<strong class=" red">{{ $errors->first('main_business') }}</strong>
			</div>
		</div>
		{{-- Product Category --}}
		<div class="form-group">
			<label class="col-sm-3 " for="nid_number">Product Category<sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text" name="product_category" class="form-control"
					value=""
					required>
				<strong class=" red">{{ $errors->first('product_category') }}</strong>
			</div>
		</div>
		{{-- company corporate number --}}
		<div class="form-group">
			<label class="col-sm-3 " for="name">company corporate number <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input type="text"
					id="name"
					placeholder=" - corporate number -"
					class="form-control input-sm"
					name="corporate_number"
					value=""
					required
					>
				<strong class=" red">{{ $errors->first('corporate_number') }}</strong>
			</div>
		</div>
		{{-- 13. main contact person: number --}}
		<div class="form-group">
			<label class="col-sm-3 " for="name">Main contact person: number <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<input  type="text"
					id="name"
					placeholder=" - number -"
					class="form-control input-sm"
					name="address"
					value=""
					required
					>
				<strong class=" red">{{ $errors->first('corporate_number') }}</strong>
			</div>
		</div>
		{{-- 14. site location contact person and cellphone number --}}
		<div class="form-group">
			<label class="col-sm-3 " for="name"> Site location contact person and cellphone number <sup class="red">*</sup></label>
			<div class="col-sm-8">
                <textarea id="form-field-11" name="location_details" class="autosize-transition form-control" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 52px;">
                </textarea>
			</div>
		</div>
		{{-- ---seller-logo-----}}
		<div class="form-group">
			<label class="col-sm-3" for="sellerLogo">Seller Logo<sub class="red">*</sub></label>
			<div class="col-sm-8">
				<input type="file" id="sellerLogo"  name="seller_logo" accept="image/*" required }}>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3" for="product_image">Highlight Product Image<sub class="red">*</sub></label>
			<div class="col-sm-8">
				<input type="file" id="product_image"  name="product_image" accept="image/*" required }}>
			</div>
		</div>
		<!-- division -->
		<div class="form-group">
			<label class="col-sm-3" for="division">Division <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<div class="text-center">
					<select  class="form-control"
						required
						id="divisionId"
						name="division"
						required
						data-placeholder="- division -">
						<option value="-1">---select---</option>
						@foreach($divisions as $division)
						<option value="{{ $division->id }}">{{ $division->name }}</option>
						@endforeach
					</select>
				</div>
				<strong class=" red">{{ $errors->first('division') }}</strong>
			</div>
		</div>
		<!--city -->
		<div class="form-group">
			<label class="col-sm-3" for="city">City <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<div class="text-center">
					<select
						class="form-control"
						required
						id="getCityByDivision"
						name="city"
						data-placeholder="- City -"
						>
						<option value="-1">---select---</option>
						@foreach($cities as $city)
						<option value="{{$city->id}}">{{ $city->name }}</option>
						@endforeach
					</select>
				</div>
				<strong class=" red">{{ $errors->first('city') }}</strong>
			</div>
		</div>
		{{-- Postcode --}}
		<div class="form-group">
			<label class="col-sm-3 " for="postcode">Postcode <sup class="red">*</sup></label>
			<div class="col-sm-8">
				<div class="text-center">
					<select
						class="form-control"
						required
						id="getPostcodeByCity"
						name="postcode"
						data-placeholder="- postcode -">
						<option value="-1">---select---</option>
						@foreach($allArea as $area)
						<option value="{{ $area->id }}">{{ $area->name }}</option>
						@endforeach
					</select>
				</div>
				<strong class=" red">{{ $errors->first('postcode') }}</strong>
			</div>
		</div>
		<hr>
		<h3>Business Address</h3>
		<div class="" style="margin-bottom: 20px">
			<p style="float: left;margin-right: 10%;"> Same as Warehouse Address</p>
			<input type="checkbox" id="business_check" checked="">
		</div>
		<div id="business_class">
			<!-- Address -->
			<div class="form-group">
				<label class="col-sm-3 " for="name">Address <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<input  type="text"
						id="name"
						placeholder=" - address -"
						class="form-control input-sm"
						name="business_address"
						required
						value="">
					<strong class=" red">{{ $errors->first('business_address') }}</strong>
				</div>
			</div>
			<!-- division -->
			<div class="form-group">
				<label class="col-sm-3" for="division">Division<sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select class="form-control"
							required
							id="divisionIdForBusiness"
							name="business_division"
							data-placeholder="- division -">
							<option value="-1">---select---</option>
							@foreach($divisions as $division)
							<option value="{{ $division->id }}">{{ $division->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('business_division') }}</strong>
				</div>
			</div>
			<!--city -->
			<div class="form-group">
				<label class="col-sm-3" for="city">City <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select
							class="form-control"
							required
							id="getCityByDivisionForBusinessAddress"
							name="business_city"
							data-placeholder="- City -"
							>
							<option value="-1">---select---</option>
							@foreach($cities as $city)
							<option value="{{$city->id}}">{{ $city->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('business_city') }}</strong>
				</div>
			</div>
			{{-- Postcode --}}
			<div class="form-group">
				<label class="col-sm-3 " for="postcode">Postcode <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select
							class="form-control"
							required
							id="getPostcodeByCityForBusinessAddress"
							name="business_postcode"
							>
							<option value="-1">---select---</option>
							@foreach($allArea as $area)
							<option value="{{ $area->id }}">{{ $area->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('business_postcode') }}</strong>
				</div>
			</div>
		</div>
		<hr>
		<h3>Return Address</h3>
		<div class="" style="margin-bottom: 20px">
			<p style="float: left;margin-right: 10%;"> Same as Warehouse Address</p>
			<input type="checkbox" id="return_id" checked="">
		</div>
		<div id="return_class">
			<!-- Address -->
			<div class="form-group">
				<label class="col-sm-3 " for="name">Address <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<input type="text"
						id="name"
						placeholder=" - address -"
						class="form-control input-sm"
						name="return_address"
						required
						value="">
					<strong class=" red">{{ $errors->first('return_address') }}</strong>
				</div>
			</div>
			<!-- division -->
			<div class="form-group">
				<label class="col-sm-3" for="division">Division<sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select class="form-control"
							required
							id="divisionIdForReturnAddress"
							name="return_division"
							data-placeholder="- division -">
							<option value="-1">---select---</option>
							@foreach($divisions as $division)
							<option value="{{ $division->id }}">{{ $division->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('return_division') }}</strong>
				</div>
			</div>
			<!--city -->
			<div class="form-group">
				<label class="col-sm-3" for="city">City <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select
							class="form-control"
							required
							id="getCityByDivisionForReturnAddress"
							name="return_city"
							data-placeholder="- City -"
							>
							option value="-1">---select---</option>
							@foreach($cities as $city)
							<option value="{{$city->id}}">{{ $city->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('return_city') }}</strong>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 " for="postcode">Postcode <sup class="red">*</sup></label>
				<div class="col-sm-8">
					<div class="text-center">
						<select
							class="form-control"
							required
							id="getPostcodeByCityForReturnAddress"
							name="return_postcode"
							>
							<option value="-1">---select---</option>
							@foreach($allArea as $area)
							<option value="{{ $area->id }}">{{ $area->name }}</option>
							@endforeach
						</select>
					</div>
					<strong class=" red">{{ $errors->first('return_postcode') }}</strong>
				</div>
			</div>
		</div>
		<div class="row padding">
			<label class="col-md-9">
			</label>
			<div class="col-md-3">
				<input type="submit" name="btn" class="btn btn-outline-light btn-lg float-rights">
			</div>
		</div>
	</form>
</div>
<div class="col-sm-3" style="margin-top: 40px;border:1px solid gray" class="">
	<p>Seler Logo && Highlight Product Image</p>
	<hr>
	@if(!empty( $id))
	<img src="{{ asset($seller->seller_logo??' ') }}"     alt="{{ ($seller->seller_logo) }}" style="width:50px;height:50px">
	<img src="{{ asset($seller->product_image??' ') }}"   alt="{{ ($seller->product_image) }}"style="width:50px;height:50px">
	@endif
</div>
@endsection
@push('js')
<script type="text/javascript">
	// $(document).ready(function() {

	//     // business_check
	//     if ($("#business_check").is(':checked')){
	//         $("#business_class").hide();
	//     }

	//     $("#business_check").click(function () {
	//         if ($(this).is(":checked")) {
	//             $("#business_class").hide();
	//         } else {
	//             $("#business_class").show();
	//         }
	//     });

	//     // Return Address return_id
	//     if ($("#return_id").is(':checked')){
	//         $("#return_class").hide();
	//     }

	//     $("#return_id").click(function () {
	//         if ($(this).is(":checked")) {
	//             $("#return_class").hide();
	//         } else {
	//             $("#return_class").show();
	//         }
	//     });

	// });

	jQuery(function ($) {
	    if (!ace.vars['touch']) {
	        $('.chosen-select').chosen({allow_single_deselect: true, search_contains: true});
	        //resize the chosen on window resize
	        $(window).on('resize.chosen', function () {
	            $('.chosen-select').each(function () {
	                let $this = $(this);
	                $this.next().css({'width': '100%'});
	                // $this.next().css({'width': $this.parent().width()});
	            })
	        }).trigger('resize.chosen');
	    }


	});


</script>
   {{--  city-dropDown --}}
<script>
	$(document).ready(function () {
	    $('#divisionId').change(function () {
	            let divId = $(this).val();
                let url = "{{ route('postCode.getCity', ":divId") }}";
                url = url.replace(':divId', divId);

	        $.ajax({
	            url: url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getCityByDivision").empty();
	                $("#getCityByDivision").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getCityByDivision").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>
<script>
	$(document).ready(function () {
	    $('#getCityByDivision').change(function () {
	            let cityId = $(this).val();
                let url = "{{ route('located.area', ":cityId") }}";
                url = url.replace(':cityId', cityId);
	        $.ajax({
	             url: url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getPostcodeByCity").empty();
	                $("#getPostcodeByCity").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getPostcodeByCity").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>


{{--    business address --}}
<script>
	$(document).ready(function () {
	    $('#divisionIdForBusiness').change(function () {
	            let divId = $(this).val();
                let url = "{{ route('postCode.getCity', ":divId") }}";
                url = url.replace(':divId', divId);
	        $.ajax({
                url      : url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getCityByDivisionForBusinessAddress").empty();
	                $("#getCityByDivisionForBusinessAddress").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getCityByDivisionForBusinessAddress").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>
<script>
	$(document).ready(function () {
	    $('#getCityByDivisionForBusinessAddress').change(function () {

	            let cityId = $(this).val();
                let url = "{{ route('located.area', ":cityId") }}";
                url = url.replace(':cityId', cityId);
	        $.ajax({
	            url      : url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getPostcodeByCityForBusinessAddress").empty();
	                $("#getPostcodeByCityForBusinessAddress").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getPostcodeByCityForBusinessAddress").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>

{{--    Return address--}}
<script>
	$(document).ready(function () {
	    $('#divisionIdForReturnAddress').change(function () {
                let divId = $(this).val();
                let url = "{{ route('postCode.getCity', ":divId") }}";
                url = url.replace(':divId', divId);

	        $.ajax({
	            url      : url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getCityByDivisionForReturnAddress").empty();
	                $("#getCityByDivisionForReturnAddress").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getCityByDivisionForReturnAddress").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>

<script>
	$(document).ready(function () {
	    $('#getCityByDivisionForReturnAddress').change(function () {
                let cityId = $(this).val();
                let url = "{{ route('located.area', ":cityId") }}";
                url = url.replace(':cityId', cityId);

	        $.ajax({
	             url     : url,
	            method   : 'GET',
	            data     : 'jsonData',
	            dataType : 'JSON',
	            success  : function (data) {
	                $("#getPostcodeByCityForReturnAddress").empty();
	                $("#getPostcodeByCityForReturnAddress").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
	                $.each(data, function (key, value) {
	                    $("#getPostcodeByCityForReturnAddress").append('<option value="' + value.id + '">' + value.name + '</option>');
	                });
	            }
	        });
	    });
	});
</script>
@endpush
