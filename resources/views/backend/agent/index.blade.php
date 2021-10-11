@extends('backend.layouts.master')

@section('title','Agent List')
@section('page-header')
    <i class="fa fa-list"></i> Agent List
@stop

@push('css')
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    @if(hasAccess('add-agent'))
        @include('backend.components.page_header', [
        'fa' => 'fa fa-pencil',
        'name' => 'Create agent',
        'route' => route('backend.agent.create')
        ])
    @endif
    <form class="form-horizontal" method="post" action="{{ route('backend.agent.search') }}" role="form" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th  class="bg-dark" style="width: 22%"><label for="name">Agent Name  </label></th>
                    <th class="bg-dark" style="width: 12%;">Actions</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="myInput" name="search" placeholder="Agent(Name.Email.phone.Nid.BankName.AccountNumber.Address.Bkash.Education) search here.." value="" class="input-sm form-control text-center" required>
                    </td>
                    <td>
                        <div class="btn-group btn-group-mini btn-corner">
                            <button type="submit" class="btn btn-xs btn-primary" title="Search">
                                <i class="ace-icon fa fa-search"></i>
                            </button>

                            <a href="{{ route('backend.agent.index') }}" class="btn btn-xs btn-info" title="Show All">
                                <i class="ace-icon fa fa-list"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <table id="simple-table" class="table  table-bordered table-hover">

        <thead>
            <tr>
                <th class="bg-dark" style="">SL</th>
                <th class="bg-dark" style="">Name</th>
                <th class="bg-dark" style="width:20%">Email</th>
                <th class="bg-dark" style="width:20%">Phone</th>
                <th class="bg-dark" style="width:5%">Type</th>
                <th class="bg-dark" style="width:15%">Address</th>
                <th class="bg-dark" style="width:10%">Image</th>
                <th class="bg-dark" style="">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($agents as $key => $agent)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->delivery->email??" "}}</td>
                    <td>{{ $agent->delivery->phone??" "}}</td>
                    <td class="hidden-480">
                        @if($agent->type == 'personal')
                            <span class="label label-sm label-success">Personal</span>
                        @else
                            <span class="label label-sm label-warning">Business</span>
                        @endif
                    </td>
                    <td>
                        {{ $agent->address }}
                    </td>
                    <td>
                        <img src="{{ asset($agent->logo) }}" alt="{{ asset($agent->logo) }}" width="100px" height="60px">
                    </td>

                    <td>
                        <div class="btn-group btn-group-mini btn-corner">
                            {{-- @if(hasAccess('agent-view'))
                                <a href="{{ route('backend.agent.show', $agent->id) }}" class="btn btn-xs btn-info"title="Show data">
                                    <i class="ace-icon fa fa-eye"></i>
                                </a>
                            @endif --}}
                            @if(hasAccess('agent-edit'))
                                <a href="{{ route('backend.agent.edit', $agent->id) }}"class="btn btn-xs btn-warning"
                                    title="Edit"><i class="ace-icon fa fa-pencil"></i>
                                </a>
                            @endif
                            @if(hasAccess('agent-delete'))
                                <button type="button" class="btn btn-xs btn-danger"
                                        onclick="delete_check({{$agent->id}})"title="Delete"><i class="ace-icon fa fa-trash-o"></i>
                                </button>
                            @endif
                        </div>
                        <form action="{{ route('backend.agent.destroy', $agent->id)}}"
                              id="deleteCheck_{{ $agent->id }}" method="DELETE">
                            @csrf
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10">No data available in table</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @include('backend.partials._paginate', ['data' => $agents])
@endsection

@push('js')
    <script type="text/javascript">
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
