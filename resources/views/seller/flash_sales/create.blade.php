@extends('seller.layouts.master')
@section('title', 'Add Flash Sale')
@section('page-header')
    <i class="fa fa-plus"></i> Add Flash Sale
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        .bootstrap-timepicker-widget table td input {
            width: 70px;
        }

        th, td {
            text-align: center;
            vertical-align: middle !important;
        }

        .chosen-container {
            text-align: center;
        }

        .flash-sale-info {
            color: #0098d4;
            font-weight: bold;
        }

        .flash-sale-danger {
            color: #d4002a;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    @include('seller.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Flash Sale List',
       'route' => route('seller.campaign.flash_sale.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('seller.campaign.flash_sale.store')}}">
        @csrf

        <!-- Date -->
            <div class="form-group">
                <label class="col-sm-2" for="date">
                    Date <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <input type="text"
                           id="date"
                           name="date"
                           placeholder="2020-12-01"
                           style="width: 100%; text-align: center">
                    <strong class="red">{{ $errors->first('date') }}</strong>
                </div>
            </div>

            <!-- Time -->
            <div class="form-group">
                <label class="col-sm-2" for="time">
                    Time <sup class="red">*</sup>
                </label>
                <div class="col-sm-4">
                    <select class="chosen-select"
                            id="time"
                            name="time"
                            data-placeholder="- Time -">
                        <option value=""></option>
                        @foreach($sales as $sale)
                            <option value="{{$sale->id}}"
                                    data-min-percentage="{{$sale->min_percentage}}"
                                    data-max-items="{{$sale->max_items_per_seller}}">
                                {{$sale->start_time . ' - ' . $sale->end_time}}
                            </option>
                        @endforeach
                    </select>
                    <strong class="red">{{ $errors->first('time') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <strong class="flash-sale-info"></strong>
                    <strong class="flash-sale-danger"></strong>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">

                    <table class="table table-bordered text-center" id="flash-table">
                        <thead>
                        <tr>
                            <th style="width: 10%">SL</th>
                            <th style="width: 30%">Item <sup class="red">*</sup></th>
{{--                            <th style="width: 20%">Quantity <sup class="red">*</sup></th>--}}
                            <th style="width: 20%">Sale Percentage <sup class="red">*</sup></th>
                            <th style="width: 15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--templatte--}}
                        <tr>
                            <td class="sl">1</td>
                            <td>
                                <select class="chosen-select item"
                                        name="item[]"
                                        data-placeholder="- Item -">
                                    <option value=""></option>
                                    @foreach($items as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </td>
{{--                            <td class="small-input">--}}
{{--                                <input class="input-sm qty"--}}
{{--                                       type="text"--}}
{{--                                       name="qty[]"--}}
{{--                                       required--}}
{{--                                       placeholder="100"--}}
{{--                                       style="width: 100%"--}}
{{--                                       value="">--}}
{{--                            </td>--}}
                            <td class="small-input">
                                <input class="input-sm percentage"
                                       name="percentage[]"
                                       type="text"
                                       required
                                       placeholder="10"
                                       style="width: 100%"
                                       value="">
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm btn-corner">
                                    <button type="button" onclick="genRow()"
                                            class="btn btn-sm btn-primary"><span
                                            class="bolder">+</span>
                                    </button>
                                    <button type="button" onclick="deleteRow(this)"
                                            class="btn btn-sm btn-danger"><span
                                            class="bolder">-</span></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button id="add-button" class="btn btn-sm btn-success submit" disabled>
                        <i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{route('seller.campaign.flash_sale.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/js/bootstrap-timepicker.min.js')}}"></script>
    <script>
        let percentage = 0;
        let maxItems = 0;
        let remainingItems = 0;
        let addButton, flash_table_body, date, time;

        $(document).ready(function () {
            chosenTrigger();

            addButton = $('#add-button');
            flash_table_body = $('#flash-table tbody');
            date = $('#date');
            time = $('#time');

            date.datepicker({
                format: 'yyyy-mm-dd',
                startDate: 'today',
            }).on('changeDate', function () {
                updateRemainingItems();
                checkInputs();
            });

            time.on('change', function () {
                const selectedOption = $(this).find('option:selected');
                percentage = Number(selectedOption.data('min-percentage'));
                maxItems = Number(selectedOption.data('max-items'));

                updateRemainingItems();
                checkInputs();
            });

            $('select.item').on('change', checkInputs);
            // $('input.qty').on('input', checkInputs);
            $('input.percentage').on('input', checkInputs);
        });

        function shouldGenerateRow() {
            return checkInputs() && $('#flash-table tbody tr').length < remainingItems;
        }

        function genRow() {
            if (!shouldGenerateRow()) return;

            const template = `<tr><td class="sl"></td>
    <td>
        <select class="chosen-select item"
                name="item[]"
                data-placeholder="- Item -">
            <option value=""></option>
        @foreach($items as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
            </select>
        </td>
        <td class="small-input">
            <input class="input-sm percentage"
                   name="percentage[]"
                   type="text"
                   required
                   placeholder="10"
                   style="width: 100%"
                   value="">
        </td>
        <td>
            <div class="btn-group btn-group-sm btn-corner">
                <button type="button" onclick="genRow()"
                        class="btn btn-sm btn-primary"><span
                        class="bolder">+</span>
                </button>
                <button type="button" onclick="deleteRow(this)"
                        class="btn btn-sm btn-danger"><span
                        class="bolder">-</span></button>
            </div>
        </td>
    </tr>`;

            flash_table_body.append(template);
            let sl = 1;
            $('td.sl').each(function () {
                $(this).text(sl++)
            });
            $('select.item').on('change', checkInputs);
            // $('input.qty').on('input', checkInputs);
            $('input.percentage').on('input', checkInputs);

            chosenTrigger();
            checkInputs();
        }

        function deleteRow(el) {
            if (flash_table_body.find('tr').length !== 1) {
                $(el).closest('tr').remove();
                let sl = 1;
                $('td.sl').each(function () {
                    $(this).text(sl++)
                });
                remainingItems += 1;
                checkInputs();
            }
        }

        function chosenTrigger() {
            $('.chosen-select').chosen({
                width: '100%'
            });
        }

        function updateRemainingItems() {
            if (date.val() && time.val()) {
                $.get('{{route("seller.campaign.flash_sale.count",["date"=>"date","time"=>"time"])}}'
                        .replace('date', date.val())
                        .replace('time', time.val()),
                    function (res) {
                        if (res.count >= 0) {
                            remainingItems = clamp(maxItems - Number(res.count), 0, Infinity);
                        }

                        if (remainingItems > 0){
                            $('.flash-sale-info').text(`Min Percentage: ${percentage}%, Max Items: ${maxItems}, Remaining: ${remainingItems}`);
                            $('.flash-sale-danger').text(``);
                        }
                        else{
                            $('.flash-sale-info').text(``);
                            $('.flash-sale-danger').text(`Min Percentage: ${percentage}%, Max Items: ${maxItems}, Remaining: ${remainingItems}`);
                        }
                        checkInputs();
                    });
            }
        }

        function checkItems() {
            const items = [];
            let flag = true;
            $('select.item').each(function () {
                if ($(this).val().toString() === '' || items.includes(Number($(this).val()))) {
                    flag = false;
                    $(this).parent().find('.chosen-single').css('border', '1px solid orange');
                } else {
                    $(this).parent().find('.chosen-single').css('border', '1px solid #d5d5d5');
                    items.push(Number($(this).val()));
                }
            });
            return flag;
        }

        // function checkQuantities() {
        //     let flag = true;
        //     $('input.qty').each(function () {
        //         if ($(this).val().toString() === '') {
        //             flag = false;
        //             $(this).css('border', '1px solid orange');
        //         } else {
        //             $(this).css('border', '1px solid #d5d5d5');
        //         }
        //     });
        //     return flag;
        // }

        function checkPercentages() {
            let flag = true;
            $('input.percentage').each(function () {
                if ($(this).val().toString() === '' || Number($(this).val()) < percentage) {
                    flag = false;
                    $(this).css('border', '1px solid orange');
                } else {
                    $(this).val(clamp($(this).val(), 0, 100));
                    $(this).css('border', '1px solid #d5d5d5');
                }
            });
            return flag;
        }

        function checkDate() {
            if (date.val().toString() === '' || remainingItems <= 0) {
                date.css('border', '1px solid orange');
                return false;
            } else {
                date.css('border', '1px solid #d5d5d5');
                return true;
            }
        }

        function checkTime() {
            if (time.val().toString() === '' || remainingItems <= 0) {
                time.parent().find('.chosen-single').css('border', '1px solid orange');
                return false;
            } else {
                time.parent().find('.chosen-single').css('border', '1px solid #d5d5d5');
                return true;
            }
        }

        function checkInputs() {
            const validDate = checkDate();
            const validTime = checkTime();
            const validItems = checkItems();
            // const validQuantities = checkQuantities();
            const validPercentage = checkPercentages();
            if (validDate && validTime && validItems && validPercentage) {
                addButton.attr('disabled', false);
                return true;
            } else {
                addButton.attr('disabled', true);
                return false;
            }
        }

        function clamp(v, min, max){
            return Math.min(Math.max(v, min), max);
        }
    </script>
@endpush
