@extends('backend.layouts.master')
@section('page-header')
    <i class="fa fa-home"></i> Dashboard
@endsection
@section('title', 'Dashboard')
@push('css')
    <style>
        .clock {
            margin: 0 auto;
            color: #fff;
        }

        #Date {
            font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
            font-size: 36px !important;
            text-align: center !important;
            text-shadow: 0 0 5px #00c6ff !important;
        }

        .clock>ul {
            margin: 0 auto;
            padding: 0px;
            list-style: none;
            text-align: center;
        }

        .clock>ul>li {
            display: inline;
            font-size: 5em;
            text-align: center;
            font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
            text-shadow: 0 0 5px #00c6ff;
        }

    </style>

@endpush
@section('content')

    <div class="page-header">
        <h1>
            @yield('page-header')
        </h1>
    </div>

    {{-- Content --}}
    <div class="row justify-content-center d-block">
        <div class="col-md-12">
            <div class="card ">
                <div class="alert alert-block alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>

                    <i class="ace-icon fa fa-check green"></i>
                    Hellow, {{ auth()->user()->name }} . Welcome to Dashboard
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable __web-inspector-hide-shortcut__"
            id="widget-container-col-2" style="">
            <div class="widget-box widget-color-blue" id="widget-box-2" style="opacity: 1;">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="ace-icon fa fa-table"></i>
                        Sale Report
                    </h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th class="text-center">
                                        Sl No.
                                    </th>
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-center hidden-480">Amount</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- <tr>
                                    <td class="text-center">1</td>

                                    <td class="text-center">
                                        <strong>Today Sale</strong>
                                    </td>

                                    <td class="text-center  hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right"> number_format(saleReport['todaySale'], 2)
                                            Tk</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"> 2</td>

                                    <td class="text-center">
                                        <strong>Yesterday Sale</strong>
                                    </td>

                                    <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right"> number_format(saleReport['yesterdaySale'], 2) ?? 0.0
                                            TK</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>

                                    <td class="text-center">
                                        <strong>This Month</strong>
                                    </td>

                                    <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">number_format(saleReport['monthlySale'], 2) ?? 0.0
                                            TK</span>
                                    </td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable __web-inspector-hide-shortcut__"
            id="widget-container-col-2" style="">
            <div class="widget-box widget-color-blue" id="widget-box-2" style="opacity: 1;">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Today Date &amp; Time
                    </h5>
                </div>

                <div class="widget-body" style="background: #0c2b48">
                    <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                <div class="">
                                    <div class="">
                                        <div class="">

                                            <!-- Clock HTML -->
                                            <div class="containers">
                                                <div class="clock">
                                                    <div id="Date">{{ date('D') }} - {{ date('d') }}
                                                        {{ date('M') }} {{ date('Y') }}. </div>

                                                    <ul>
                                                        <li id="hours">{{ date('h') }}</li>
                                                        <li id="point">:</li>
                                                        <li id="min">{{ date('i') }}</li>
                                                        <li id="point">:</li>
                                                        <li id="sec">{{ date('s') }}</li>
                                                        <li id=""> .{{ date('A') }}</li>
                                                    </ul>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable __web-inspector-hide-shortcut__"
            id="widget-container-col-2" style="">
            <div class="widget-box widget-color-blue" id="widget-box-2" style="opacity: 1;">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        Order Report
                    </h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th class="text-center">
                                        Sl No.
                                    </th class="text-center">
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-center hidden-480">Amount</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <strong>Pending Order </strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">{{ $pendingOrder ?? 0 }}</span>
                                    </td> -->
                                </tr>

                                <tr>
                                    <td class="text-center"> 2</td>

                                    <td class="text-center">
                                        <strong> Waiting Order</strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">{{ $waitingOrder ?? 0 }}
                                            </< /span>
                                    </td> -->
                                </tr>
                                <tr>
                                    <td class="text-center"> 3</td>

                                    <td class="text-center">
                                        <strong>On Delivery</strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">{{ $onDeliveryOrder ?? 0 }}
                                            </< /span>
                                    </td> -->
                                </tr>
                                <tr>
                                    <td class="text-center"> 4</td>

                                    <td class="text-center">
                                        <strong> Not Delivered</strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">{{ $notdeliveryOrder ?? 0 }}
                                            </< /span>
                                    </td> -->
                                </tr>
                                <tr>
                                    <td class="text-center"> 5</td>

                                    <td class="text-center">
                                        <strong> Delivered </strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">{{ $deliveryOrder ?? 0 }}
                                            </< /span>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable __web-inspector-hide-shortcut__"
            id="widget-container-col-2" style="">
            <div class="widget-box widget-color-blue" id="widget-box-2" style="opacity: 1;">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        Due Report
                    </h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th class="text-center">
                                        Sl No.
                                    </th class="text-center">
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-center hidden-480">Amount</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <strong>Seller Due</strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span class="label label-success arrowed-in arrowed-in-right">{{ $seller_due??0.00 }} Tk</span>
                                    </td> -->
                                </tr>

                                <tr>
                                    <td class="text-center"> 2</td>

                                    <td class="text-center">
                                        <strong>Agent Due</strong>
                                    </td>

                                    <!-- <td class="text-center hidden-480">
                                        <span class="label label-success arrowed-in arrowed-in-right">{{ $agent_due??0.00 }} TK</span>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 widget-container-col ui-sortable __web-inspector-hide-shortcut__"
            id="widget-container-col-2" style="">
            <div class="widget-box widget-color-blue" id="widget-box-2" style="opacity: 1;">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        User List
                    </h5>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thin-border-bottom">
                                <tr>
                                    <th class="text-center">
                                        Sl No.
                                    </th class="text-center">
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-center hidden-480">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <strong>Total User </strong>
                                    </td>

                                    <td class="text-center hidden-480">
                                        <span class="label label-success arrowed-in arrowed-in-right">
                                            <!-- {{ $total_user ?? 0 }} -->
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 2</td>
                                    <td class="text-center">
                                        <strong>Total Seller </strong>
                                    </td>
                                    <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">
                                            <!-- {{ $total_seller ?? 0 }} -->
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 2</td>
                                    <td class="text-center">
                                        <strong>Total Agent</strong>
                                    </td>
                                    <td class="text-center hidden-480">
                                        <span
                                            class="label label-success arrowed-in arrowed-in-right">
                                            <!-- {{ $total_agent ?? 0 }} -->
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@push('js')
    <script type="text/javascript">
        jQuery(function($) {


            $(window).on('resize.scroll_reset', function() {
                $('.scrollable-horizontal').ace_scroll('reset');
            });


            $('#id-checkbox-vertical').prop('checked', false).on('click', function() {
                $('#widget-toolbox-1').toggleClass('toolbox-vertical')
                    .find('.btn-group').toggleClass('btn-group-vertical')
                    .filter(':first').toggleClass('hidden')
                    .parent().toggleClass('btn-toolbar')
            });


            // widget boxes
            // widget box drag & drop example
            $('.widget-container-col').sortable({
                connectWith: '.widget-container-col',
                items: '> .widget-box',
                handle: ace.vars['touch'] ? '.widget-title' : false,
                cancel: '.fullscreen',
                opacity: 0.8,
                revert: true,
                forceHelperSize: true,
                placeholder: 'widget-placeholder',
                forcePlaceholderSize: true,
                tolerance: 'pointer',
                start: function(event, ui) {
                    //when an element is moved, it's parent becomes empty with almost zero height.
                    //we set a min-height for it to be large enough so that later we can easily drop elements back onto it
                    ui.item.parent().css({
                        'min-height': ui.item.height()
                    })
                    //ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
                },
                update: function(event, ui) {
                    ui.item.parent({
                        'min-height': ''
                    })
                    //p.style.removeProperty('background-color');


                    //save widget positions
                    var widget_order = {}
                    $('.widget-container-col').each(function() {
                        var container_id = $(this).attr('id');
                        widget_order[container_id] = []


                        $(this).find('> .widget-box').each(function() {
                            var widget_id = $(this).attr('id');
                            widget_order[container_id].push(widget_id);
                            //now we know each container contains which widgets
                        });
                    });

                    ace.data.set('demo', 'widget-order', widget_order, null, true);
                }
            });


            ///////////////////////

            //when a widget is shown/hidden/closed, we save its state for later retrieval
            $(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
                var widgets = ace.data.get('demo', 'widget-state', true);
                if (widgets == null) widgets = {}

                var id = $(this).attr('id');
                widgets[id] = event.type;
                ace.data.set('demo', 'widget-state', widgets, null, true);
            });


            (function() {
                //restore widget order
                var container_list = ace.data.get('demo', 'widget-order', true);
                if (container_list) {
                    for (var container_id in container_list)
                        if (container_list.hasOwnProperty(container_id)) {

                            var widgets_inside_container = container_list[container_id];
                            if (widgets_inside_container.length == 0) continue;

                            for (var i = 0; i < widgets_inside_container.length; i++) {
                                var widget = widgets_inside_container[i];
                                $('#' + widget).appendTo('#' + container_id);
                            }

                        }
                }


                //restore widget state
                var widgets = ace.data.get('demo', 'widget-state', true);
                if (widgets != null) {
                    for (var id in widgets)
                        if (widgets.hasOwnProperty(id)) {
                            var state = widgets[id];
                            var widget = $('#' + id);
                            if (
                                (state == 'shown' && widget.hasClass('collapsed')) ||
                                (state == 'hidden' && !widget.hasClass('collapsed'))
                            ) {
                                widget.widget_box('toggleFast');
                            } else if (state == 'closed') {
                                widget.widget_box('closeFast');
                            }
                        }
                }


                $('#main-widget-container').removeClass('invisible');


                //reset saved positions and states
                $('#reset-widgets').on('click', function() {
                    ace.data.remove('demo', 'widget-state');
                    ace.data.remove('demo', 'widget-order');
                    document.location.reload();
                });

            })();

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Create two variable with the names of the months and days in an array
            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ];
            var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

            // Create a newDate() object
            var newDate = new Date();
            // Extract the current date from Date object
            newDate.setDate(newDate.getDate());
            // Output the day, date, month and year
            $('#Dates').html(dayNames[newDate.getDay()] + "-" + newDate.getDate() + '-' + monthNames[newDate
                .getMonth()] + ' ' + newDate.getFullYear() + ' .');

            setInterval(function() {
                // Create a newDate() object and extract the seconds of the current time on the visitor's
                var seconds = new Date().getSeconds();
                // Add a leading zero to seconds value
                $("#sec").html((seconds < 10 ? "0" : "") + seconds);
            }, 1000);

            setInterval(function() {
                // Create a newDate() object and extract the minutes of the current time on the visitor's
                var minutes = new Date().getMinutes();

                // Add a leading zero to the minutes value
                $("#min").html((minutes < 10 ? "0" : "") + minutes);
            }, 1000);

            setInterval(function() {
                // Create a newDate() object and extract the hours of the current time on the visitor's
                var hours = new Date().getHours();
                hours = hours % 12;
                hours = hours ? hours : 12; // the hour '0' should be '12'
                var ampm = hours >= 12 ? 'pm' : 'am';
                $("#hours").html(hours);
            }, 1000);

        });

    </script>
@endpush
