@extends('backend.layouts.master')
@section('title', 'Edit Order')
@section('page-header')
    <i class="fa fa-plus"></i> Edit Order
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        /****************/
        .ck-editor__editable {
            min-height: 250px !important;
        }

        .ck-editor__editable:nth-of-type(1) {
            margin-bottom: 20px;
        }

        /****************/
        table th, table td {
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
            /* background: #5877b8; */
            background: #8e8f92bf;
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

        .chosen-select.color + .chosen-container a.chosen-single {
            min-width: 120px;
        }

        .chosen-select.size + .chosen-container a.chosen-single {
            min-width: 112px;
        }

        .near-postal {
            background-color: #10ac84;
            color: white;
        }

        .near-postal-ex {
            background-color: #10ac84;
            color: white;
        }

        .near-city {
            background-color: #07abce;
            color: white;
        }

        .near-city-ex {
            background-color: #07abce;
            color: white;
        }

        .near-division {
            background-color: #2e86de;
            color: white;
        }

        .near-division-ex {
            background-color: #2e86de;
            color: white;
        }
    </style>
@endpush

@section('content')

    @include('backend.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Waiting List',
       'route' => route('backend.order.waiting.index')
    ])

    <form role="form"
          method="post"
          class="form-horizontal"
          enctype="multipart/form-data"
          action="{{route('backend.order.waiting.update', $order->id)}}">
    @csrf

        <!-- Summary -->
        @include('backend.orders._summary', ['order' => $order])

    <!-- Billing -->
        <div class="widget-box" id="billing">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h4 class="widget-title">Billing Information</h4>
                <div class="widget-toolbar">
                    <a href="#" data-action="collapse" class="white">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="name">
                                    Name <sup class="red">*</sup>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control input-sm"
                                           id="name"
                                           name="name"
                                           placeholder="Name"
                                           type="text"
                                           value="{{$order->billing_address->name}}">
                                    <strong class="red">{{$errors->first('name')}}</strong>
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="mobile">
                                    Mobile <sup class="red">*</sup>
                                </label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <input class="form-control input-sm"
                                               id="mobile"
                                               name="mobile"
                                               placeholder="Mobile no"
                                               type="text"
                                               value="{{$order->billing_address->mobile}}">
                                    </div>
                                    <strong class="red">{{$errors->first('mobile')}}</strong>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="email">
                                    Email <sup class="red">*</sup>
                                </label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <input class="form-control input-sm"
                                               id="email"
                                               name="email"
                                               placeholder="Email address"
                                               type="text"
                                               value="{{$order->billing_address->email}}">
                                    </div>
                                    <strong class="red">{{$errors->first('email')}}</strong>
                                </div>
                            </div>

                            <!-- Note -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="note">
                                    Note
                                </label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <textarea class="form-control input-sm"
                                                  id="note"
                                                  name="note"
                                                  placeholder="Order related instruction"
                                                  rows="3">{{$order->note}}</textarea>
                                    </div>
                                    <strong class="red">{{$errors->first('note')}}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Division -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="division">Division <sup
                                        class="red">*</sup></label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <select class="chosen-select form-control"
                                                data-placeholder="- Division -"
                                                id="division"
                                                name="division">
                                            <option value=""></option>
                                            @foreach($divisions as $division)
                                                <option value="{{$division->id}}"
                                                    {{$division->id == $order->billing_address->division_id ? 'selected' : ''}}>
                                                    {{$division->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <strong class="red">{{$errors->first('division')}}</strong>
                                </div>
                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="city">City <sup
                                        class="red">*</sup></label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <select class="chosen-select form-control"
                                                data-placeholder="- City -"
                                                id="city"
                                                name="city">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <strong class="red">{{$errors->first('city')}}</strong>
                                </div>
                            </div>

                            <!-- Area -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="area">Area</label>

                                <div class="col-md-9">
                                    <div class="text-center">
                                        <select class="chosen-select form-control"
                                                data-placeholder="- Area -"
                                                id="area"
                                                name="area">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <strong class="red">{{$errors->first('area')}}</strong>
                                </div>
                            </div>

                            <!-- Address L1 -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="address_l1">
                                    Address L1 <sup class="red">*</sup>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control input-sm"
                                           id="address_l1"
                                           name="address_l1"
                                           placeholder="Street address"
                                           type="text"
                                           value="{{$order->billing_address->address_line_1}}">
                                    <strong class="red">{{$errors->first('address_l1')}}</strong>
                                </div>
                            </div>

                            <!-- Address L2 -->
                            <div class="form-group">
                                <label class="col-md-3 control-label no-padding-right" for="address_l2">
                                    Address L2
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control input-sm"
                                           id="address_l2"
                                           name="address_l2"
                                           placeholder="Apartment, floor"
                                           type="text"
                                           value="{{$order->billing_address->address_line_2}}">
                                    <strong class="red">{{$errors->first('address_l2')}}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Items -->
        <div class="widget-box" id="items">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h4 class="widget-title">Items</h4>
                <div class="widget-toolbar">
                    <a href="#" data-action="collapse" class="white">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div class="row">
                        <div class="maximize">
                            <table class="table table-bordered text-center" id="items-table">
                                <thead>
                                <tr>
                                    <th>Seller Info</th>
                                    <th>Item</th>
                                    <th>Variant</th>
                                    <th>Qty</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Sub Total</th>
                                    <th>Received</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $sub = 0;
                                @endphp
                                @foreach($order->details as $detail)
                                    @foreach($detail->items as $item)
                                        <tr>
                                            <td style="max-width: 200px">
                                                {{ optional($detail->seller)->name}} <br>
                                                Number/Email : {{ optional($detail->seller)->number??optional($detail->seller)->email }} <br>
                                                Shop Name:{{optional($detail->seller)->shop_name??''}}
                                            </td>
                                            <td style="max-width: 200px">
                                                {{$item->product->name}}
                                                <input type="hidden" name="items[]" value="{{$item->id}}">
                                            </td>
                                            <td>

                                                @if($item->variant->color && $item->variant->size)
                                                    {{$item->variant->color->name . ' - ' . $item->variant->size->name}}
                                                @elseif($item->variant->color)
                                                    {{$item->variant->color->name}}
                                                @elseif($item->variant->size)
                                                    {{$item->variant->size->name}}
                                                @else
                                                    Default
                                                @endif
                                            </td>
                                            <td class="small-input">
                                                <input class="input-sm text-center qty"
                                                       type="text"
                                                       name="qty[{{$item->variant_id}}]"
                                                       required
                                                       placeholder="0"
                                                       value="{{round($item->qty)}}">
                                            </td>
                                            <td class="small-input">
                                                <input class="input-sm text-center" type="text" value="{{ optional($item->variant)->sku??'' }}" readonly>
                                            </td>
                                            <td class="small-input">
                                                <input class="input-sm text-center price"
                                                       name="prices[{{$item->variant_id}}]"
                                                       type="text"
                                                       required
                                                       placeholder="0"
                                                       value="{{round($item->price)}}">
                                            </td>
                                            <td>
                                                <span class="subtotal">{{round($item->subtotal)}}</span>
                                                @php
                                                    if ($item->active)
                                                        $sub += round($item->subtotal);
                                                @endphp
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm btn-corner">
                                                    <input name="actives[{{$item->variant_id}}]"
                                                           class="active"
                                                           type="checkbox"
                                                        {{$item->active ? 'checked' : ''}}>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                <tr>
                                    <td colspan="5">
                                    </td>
                                    <td class="total">{{$sub}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="form-group text-right" style="height: 100px">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-offset-6 col-md-6 text-center" style="margin-bottom: 15px">
                        <select class="chosen-select"
                                name="agent"
                                required
                                data-placeholder="- Agent -">
                            <option value=""></option>
                            @foreach($agents as $agent)
                                <option value="{{$agent->id}}"
                                        {{$agent->id == $order->delivery_agent_id ? 'selected' : ''}}
                                        class="@switch($agent->order)
                                        @case(-6)
                                            near-postal
                                        @break
                                        @case(-5)
                                            near-postal-ex
                                        @break
                                        @case(-4)
                                            near-city
                                        @break
                                        @case(-3)
                                            near-city-ex
                                        @break
                                        @case(-2)
                                            near-division
                                        @break
                                        @case(-1)
                                            near-division-ex
                                        @break
                                        @endswitch">
                                    {{$agent->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary submit">
                    <i class="fa fa-save"></i> Send to Delivery
                </button>

                <a class="btn btn-sm btn-gray" href="{{route('backend.order.not-delivered.index')}}">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </form>

@endsection

@push('js')
    <script src="{{asset('assets/js/ckeditor.js')}}"></script>
    <script>
        $(document).ready(() => {

            ////////////// jquery configuration
            chosen_trigger()

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            })

            autosize($('textarea'))

            ////////////// ajax
            const division = $('#division');
            const city = $('#city');
            const area = $('#area');
            division.change(function () {
                city.empty();
                city.append($('<option>', {
                    value: '',
                    text: ''
                }));

                area.empty();
                area.append($('<option>', {
                    value: '',
                    text: ''
                }));
                city.val('').trigger('chosen:updated');
                area.val('').trigger('chosen:updated');

                let division_id = $(this).val().toString().trim()
                if (division_id > 0) {
                    $.get('{{route("backend.order.cities.ajax", 100)}}'.replace('100', division_id), function (res) {
                        res.cities.forEach(function (c, i) {
                            city.append($('<option>', {
                                value: c.id,
                                text: c.name,
                            }));
                        });
                        const city_id = division_id == {{$order->billing_address->division_id}} ? {{$order->billing_address->city_id}} : res.cities[0].id;
                        city.val(city_id).trigger('chosen:updated');

                        $.get('{{route("backend.order.areas.ajax", 100)}}'.replace('100', city_id), function (res) {
                            res.areas.forEach(function (a, i) {
                                area.append($('<option>', {
                                    value: a.id,
                                    text: a.name,
                                }));
                            });

                            const area_id = city_id == {{$order->billing_address->city_id}} ? {{$order->billing_address->post_code_id ?? '0'}} : res.areas[0].id;
                            area.val(area_id).trigger('chosen:updated');
                        });
                    });
                }
            });

            division.val('{{$order->billing_address->division_id}}').trigger('change');

            city.change(function () {
                area.empty();
                area.append($('<option>', {
                    value: '',
                    text: ''
                }));
                area.val('').trigger('chosen:updated');

                const id = $(this).val().toString().trim()
                if (id > 0) {
                    $.get('{{route("backend.order.areas.ajax", 100)}}'.replace('100', id), function (res) {
                        res.areas.forEach(function (a, i) {
                            area.append($('<option>', {
                                value: a.id,
                                text: a.name,
                            }));
                        });
                        area.val(res.areas[0].id).trigger('chosen:updated');
                    });
                }
            });

            function updateSubtotal() {
                const trList = $('#items-table tbody tr');
                let total = 0;
                trList.each(function (i) {
                    if (i === trList.length - 1) {
                        $(this).find('.total').text(total);
                    }

                    const price = $(this).find('.price').val();
                    const qty = $(this).find('.qty').val();
                    const subtotal = price * qty;
                    $(this).find('.subtotal').text(subtotal);
                    if ($(this).find('input.active').prop('checked'))
                        total += subtotal;
                });
            }

            $('input.price').on('input', updateSubtotal);
            $('input.qty').on('input', updateSubtotal);
            $('input.active').on('change', updateSubtotal);
        });

        function shouldGenRow() {
            let n1 = NaN;
            let n2 = NaN;
            let flag = true;
            $('.chosen-select.color').each(function () {
                n1 = Number($(this).val());
                n2 = Number($(this).closest('tr').find('.chosen-select.size').val());
                if (!(n1 > 0 || n2 > 0)) {
                    flag = false;
                    return flag;
                }
            });
            return flag;
        }

        function chosen_trigger() {
            if (!ace.vars['touch']) {
                $('.chosen-select').chosen({allow_single_deselect: true, search_contains: true});
                $(window).on('resize.chosen', function () {
                    $('.chosen-select').each(function () {
                        let $this = $(this);
                        $this.next().css({
                            'width': '100%',
                        });
                    })
                }).trigger('resize.chosen');
            } else {
                $('.chosen-select').css('width', '100%');
            }
        }

        function round(num, precision = 0) {
            return parseFloat((Math
                .round((num * Math.pow(10, precision)) + ((num >= 0 ? 1 : -1) * 0.0001)) / Math.pow(10, precision))
                .toFixed(precision));
        }
    </script>
@endpush
