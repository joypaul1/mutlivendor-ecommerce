@extends('layouts.master')
@section('title','Table')
@section('page-header')
    <i class="fa fa-list"></i> Table
@stop
@section('css')

    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-timepicker.min.css') }}" />
    <style type="text/css">
        .pagination {
            padding-left: 0;
            margin-top: -30px;
            border-radius: 4px;
            margin-right: 20px;
        }
    </style>

@stop


@section('content')

{{--    Add New Modal--}}

    <div id="modal-form" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="blue bigger">Please fill the following form fields</h4>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <form class="form-horizontal" role="form">


                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        <i class="ace-icon fa fa-times"></i>
                                        Oh snap!
                                    </strong>

                                    Change a few things up and try submitting again.
                                    <br />
                                </div>





                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Full Length </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group has-error">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label">Input with error</label>

                                    <div class="col-xs-12 col-sm-9">
										<span class="block input-icon input-icon-right">
											<input type="text" id="inputError" class="width-100" />
											<i class="ace-icon fa fa-times-circle"></i>
										</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label">Search Select</label>

                                    <div class="col-sm-9 col-md-9">
                                        <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
                                            <option value="">  </option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> Radio</label>

                                    <div class="col-xs-12 col-sm-9">
                                        <div class="radio">
                                            <label>
                                                <input name="form-field-radio" type="radio" class="ace">
                                                <span class="lbl"> radio option 1</span>
                                            </label>
                                            <label>
                                                <input name="form-field-radio" type="radio" class="ace">
                                                <span class="lbl"> radio option 1</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> checkbox</label>

                                    <div class="col-xs-12 col-sm-9">
                                        <div class="checkbox">
                                            <label>
                                                <input name="form-field-checkbox" type="checkbox" class="ace">
                                                <span class="lbl"> choice 2</span>
                                            </label>
                                            <label>
                                                <input name="form-field-checkbox" type="checkbox" class="ace">
                                                <span class="lbl"> choice 2</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> File Upload</label>

                                    <div class="col-xs-12 col-sm-6">

                                        <input multiple="" type="file" id="id-input-file-3" />

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> Date Picker</label>

                                    <div class="col-xs-12 col-sm-6">

                                        <div class="input-group">
                                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                            <span class="input-group-addon">
												<i class="fa fa-calendar bigger-110"></i>
											</span>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> Date Picker</label>

                                    <div class="col-xs-12 col-sm-6">

                                        <div class="input-daterange input-group">
                                            <input type="text" class="input-sm form-control" name="start" />
                                            <span class="input-group-addon">
																		<i class="fa fa-exchange"></i>
																	</span>

                                            <input type="text" class="input-sm form-control" name="end" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"> Autocomplete</label>

                                    <div class="col-xs-12 col-sm-6">

                                        <input id="tags" type="text" class="form-control" />
                                        <div class="space-4"></div>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label"></label>

                                    <div class="col-xs-12 col-sm-6">

                                        <button class="btn btn-success"> <i class="fa fa-save"></i> Save</button>
                                        <button class="btn btn-gray" type="Reset"> <i class="fa fa-refresh"></i> Reset</button>
                                        <a href="" class="btn btn-info"> <i class="fa fa-list"></i> List</a>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-sm" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                    </button>

                    <button class="btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-check"></i>
                        Save
                    </button>
                </div>
            </div>
        </div>

    </div>


{{--    End Add New Modal--}}


    <div class="page-header">

        <button type="button" onclick="delete_all_check()" class="btn btn-xs btn-danger" title="Delete"
                style="float: right; margin: 0 2px;">
            <i class="fa fa-trash"></i> Delete All
        </button>

        <form action="" id="deleteAllCheck" method="POST">
            @csrf
        </form>
        <a class="btn btn-xs btn-info" href="#modal-form" role="button" class="blue" data-toggle="modal" style="float: right; margin: 0 2px;"> <i class="fa fa-plus"></i> Add New</a>

        <h1>
            @yield('page-header')
        </h1>
    </div>


    <div class="row">
        <div class="col-xs-12">

            <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                <table id="dynamic-table" class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Ip Address</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>

                        <td></td>
                        <td>$45</td>
                        <td>3,330</td>
                        <td>Feb 12</td>
                        <td>Feb 12</td>

                        <td>
                            <span class="label label-sm label-warning">Expiring</span>
                        </td>

                        <td>
                            <a href="" class="btn btn-sm btn-info" title="View Details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-success" title="Published">
                                <i class="fa fa-thumbs-up"></i>
                            </a>
                            <button type="button" onclick="delete_check('1')" class="btn btn-sm btn-danger" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>

                            <form action="{{ url('/form')}}" id="deleteCheck_1" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>$45</td>
                        <td>3,330</td>
                        <td>Feb 12</td>
                        <td>Feb 12</td>
                        <td>
                            <span class="label label-sm label-warning">Errr</span>
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-info" title="View Details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-success" title="Published">
                                <i class="fa fa-thumbs-up"></i>
                            </a>
                            <button type="button" onclick="delete_check('1')" class="btn btn-sm btn-danger" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>

                            <form action="{{ url('/form')}}" id="deleteCheck_1" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>

                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>




@endsection

@section('js')

    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">

        function delete_check(id)
        {
            Swal.fire({
                title: 'Are you sure ?',
                html: "<b>You want to delete permanently !</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width:400,
            }).then((result) =>{
                if(result.value){
                    $('#deleteCheck_'+id).submit();
                }
            })

        }

        function delete_all_check() {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You want to delete permanently !</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width:400,
            }).then((result)=> {
                if(result.value)
                {
                    $('#deleteAllCheck').submit();
                }
            })
        }

    </script>


    <script type="text/javascript">

        jQuery(function($) {
            $('#dynamic-table').DataTable({
                "ordering": false,
                // install laravel datatable this package
                // https://github.com/yajra/laravel-datatables
                // processing: true,
                // serverSide: true,
                {{--ajax: '{{ url('') }}',--}}
                // columns:[
                //     {"data":"first_name"},
                //     {"data":"last_name"},
                // ],
                "bPaginate": true,
            });

        })
    </script>

    <!--  Select Box Search-->
    <script type="text/javascript">



        jQuery(function($){

            if(!ace.vars['touch']) {
                $('.chosen-select').chosen({allow_single_deselect:true});
                //resize the chosen on window resize

                $(window)
                // .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                            var $this = $(this);
                            $this.next().css({'width': '300px'});
                            // $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                //resize chosen on sidebar collapse/expand
                $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                    if(event_name != 'sidebar_collapsed') return;
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                        // $this.next().css({'width': $this.parent().width()});
                    })
                });


                $('#chosen-multiple-style .btn').on('click', function(e){
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                    else $('#form-field-select-4').removeClass('tag-input-style');
                });
            }

        })
    </script>

    <!--Drag and drop-->
    <script type="text/javascript">

        jQuery(function($) {


            $('#id-input-file-3').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'ace-icon fa fa-cloud-upload',
                droppable: true,
                thumbnail: 'small'//large | fit

            }).on('change', function(){
                //console.log($(this).data('ace_input_files'));
                //console.log($(this).data('ace_input_method'));
            });


        });

    </script>

    <!--date range picker-->
    <script type="text/javascript">
        jQuery(function($) {


            $('.input-daterange').datepicker({autoclose:true});


            //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
            $('input[name=date-range-picker]').daterangepicker({
                'applyClass' : 'btn-sm btn-success',
                'cancelClass' : 'btn-sm btn-default',
                locale: {
                    applyLabel: 'Apply',
                    cancelLabel: 'Cancel'
                }
            })
                .prev().on(ace.click_event, function(){
                $(this).next().focus();
            });

        })
    </script>

    <!--datepicker plugin-->
    <script type="text/javascript">
        jQuery(function($) {

            $('.date-picker').datepicker({
                autoclose: true,
                format:'yyyy-mm-dd',
                todayHighlight: true
            })
            //show datepicker when clicking on the icon
                .next().on(ace.click_event, function(){
                $(this).prev().focus();
            });

        })
    </script>

    <!--autocomplete-->
    <script type="text/javascript">
        jQuery(function($) {
            //autocomplete
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#tags" ).autocomplete({
                source: availableTags
            });

        });
    </script>


@stop