@extends('backend.layouts.master')
@section('title', 'Seller Due Report')
@section('page-header')
    <i class="fa fa-list"></i> Seller Due Report
@stop
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/custom.chosen.min.css')}}">
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header')

    <form class="form-horizontal"
          method="GET"
          role="form"
          action="/{{request()->route()->uri()}}"
          enctype="multipart/form-data"
          style="width: 80%; margin: auto">
        <table class="table table-bordered">
            <tr>
                <th class="bg-dark" style="width: 16%"><label for="seller">Seller</label></th>
                <th class="bg-dark" style="width: 16%"><label for="mobile">Mobile</label></th>
                <th class="bg-dark" style="width: 12%"><label for="">Action</label></th>
            </tr>
            <tr>
                <td>
                    <select class="chosen-select" id="seller" name="seller" data-placeholder="- Seller -">
                        <option value=""></option>
                        @foreach($all_sellers as $seller)
                            <option value="{{$seller->id}}" {{$seller->id == request()->query('seller') ? 'selected':''}}>
                                {{$seller->name . ' ('.$seller->shop_name.')'}}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text"
                           id="mobile"
                           name="mobile"
                           placeholder="01xxxxxxxxx"
                           value="{{request()->query('mobile')}}"
                           class="input-sm form-control text-center">
                </td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        <button type="submit"
                                class="btn btn-xs btn-primary"
                                title="Search">
                            <i class="ace-icon fa fa-search"></i>
                        </button>

                        <a href="/{{request()->route()->uri()}}"
                           class="btn btn-xs btn-info"
                           title="Show All">
                            <i class="ace-icon fa fa-list"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th class="bg-dark" style="width: 4%">SL</th>
                <th class="bg-dark" style="width: 13.71%">Name</th>
                <th class="bg-dark" style="width: 13.71%">Mobile</th>
                <th class="bg-dark" style="width: 13.71%">Due Amount</th>
            </tr>
            @forelse($sellers as $key => $seller)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $seller->name }}</td>
                    <td>{{ $seller->mobile }}</td>
                    <td>{{ $seller->amount }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No data available in table</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    @include('backend.partials._paginate', ['data' => $sellers])
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

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                todayHighlight: true,
            });
        });

        function delete_check(id) {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You will delete it permanently!</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })
        }
    </script>
@endpush
