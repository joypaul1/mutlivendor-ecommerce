@extends('backend.layouts.master')
@section('title', 'Add Coupon')
@section('page-header')
    <i class="fa fa-plus"></i> Add Coupon
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
@endpush

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Coupon List',
       'route' => route('backend.campaign.coupons.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{ route('backend.campaign.coupons.store') }}">
        @csrf
        <!-- Name -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="name">Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="name"
                           name="name"
                           required
                           placeholder="Coupon Name"
                           value="{{ old('name') }}"
                           class="form-control input-sm text-center">
                    <strong class="red">{{ $errors->first('name') }}</strong>
                </div>
            </div>

            <!-- From, To -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="from">Validity <sup class="red">*</sup></label>

                <div class="col-sm-4">
                    <div class="input-daterange input-group">
                        <input type="text"
                               id="from"
                               name="from"
                               required
                               placeholder="From"
                               autocomplete="off"
                               value="{{ old('from') }}"
                               class="form-control input-sm text-center">
                        <span class="input-group-addon">
                            <i class="fa fa-exchange"></i>
                        </span>

                        <input type="text"
                               id="to"
                               name="to"
                               required
                               placeholder="To"
                               autocomplete="off"
                               value="{{ old('to') }}"
                               class="form-control input-sm text-center">
                    </div>
                    @error('from')
                    <strong class="red">{{ $errors->first('from') }}</strong>
                    @enderror
                    @error('to')
                    <br>
                    <strong class="red">{{ $errors->first('to') }}</strong>
                    @enderror
                </div>
            </div>

            <!-- Applicable To -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="applicable_to">Applicable To<sup class="red">*</sup></label>

                <div class="col-sm-4">
                    <div class="text-center">
                        <select class="chosen-select" id="applicable_to" name="applicable_to" data-placeholder="- Applicable To -" required>
                            <option></option>
                            <option value="subtotal" {{ old('applicable_to') == 'subtotal' ? 'selected' : ''}}>
                                Subtotal
                            </option>
                            <option value="delivery charge" {{ old('applicable_to') == 'delivery charge' ? 'selected' : ''}}>
                                Delivery Charge
                            </option>
                        </select>
                    </div>
                    <strong class=" red">{{ $errors->first('applicable_to') }}</strong>
                </div>
            </div>

            <!-- Type -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="type">Type <sup class="red">*</sup></label>

                <div class="col-sm-4">
                    <div class="text-center">
                        <select class="chosen-select" id="type" name="type" data-placeholder="- Type -" required>
                            <option></option>
                            <option value="amount" {{ old('type') == 'amount' ? 'selected' : '' }}>
                                Amount
                            </option>
                            <option value="percent" {{ old('type') == 'percent' ? 'selected' : '' }}>
                                Percentage
                            </option>
                        </select>
                    </div>
                    <strong class=" red">{{ $errors->first('type') }}</strong>
                </div>
            </div>

            <!-- Value -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="value">Value <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           required
                           id="value"
                           name="value"
                           placeholder="0"
                           value="{{ old('value') }}"
                           class="form-control input-sm text-center">
                    <strong class="red">{{ $errors->first('value') }}</strong>
                </div>
            </div>

            <!-- Max Use -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="max_use">Max Use <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           required
                           id="max_use"
                           name="max_use"
                           placeholder="0"
                           value="{{ old('max_use') ?? '1' }}"
                           class="form-control input-sm text-center">
                    <strong class="red">{{ $errors->first('max_use') }}</strong>
                </div>
            </div>

            <!-- Is Active -->
            <div class="form-group" style="vertical-align: middle;">
                <label class="col-sm-2 bolder" for="is_active" style="padding-top: 7px">Is Active </label>

                <div class="col-sm-4">
                    <input type="checkbox"
                           id="is_active"
                           name="is_active"
                           class="form-control input-sm text-center"
                           {{ (old('is_reusable') == null) || (old('is_reusable') == 'on') ? 'checked' : '' }}
                           style="width: 20px;">
                    <strong class="red">{{ $errors->first('is_active') }}</strong>
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit" type="submit">
                        <i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{ route('backend.campaign.coupons.index') }}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
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
            $('.input-daterange input').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd',
                todayHighlight: true
            });
        });
    </script>
@endpush
