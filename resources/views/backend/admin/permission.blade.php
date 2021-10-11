@extends('backend.layouts.master')

@section('title', 'Permission List')
@section('page-header')
    <i class="fa fa-list"></i> {{ $admin->name }} Permission List
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
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'Create admin',
       'route' => route('backend.admin.create')
    ])
    <div class="">
        <label class="middle" style="font-size: 16px;
                                    color: #00cb62;
                                    text-align: center!important;
                                    display: block;">

            <input class="ace checkedAll" type="checkbox" id="checkedAll">
            <span class="lbl"> Checked All</strong>
        </label>
    </div>
    <form action="{{ route('backend.admin.permission.store',$admin->id) }}" method="post">
        @csrf

        @foreach ($modules as $module_key => $module)
            <div>
                <span style="font-size:16px;color: green;font-weight:bold;font-style:italic">{{ $module->name }} Permission List</span> <br><hr>

                    @foreach ($module->submodules as $submodule_key => $submodule)
                        @php $parents = $submodule->permissions->unique('parent')->pluck('parent', 'id')->toArray() @endphp

                        

                        @foreach($parents as $parent_key => $parent)
                            <strong> {{ Illuminate\Support\Str::upper($parent)}} Checked</strong> <input type="checkbox" id="parent-checked_{{ $parent_key }}" onchange="checkParent({{ $parent_key }})"></p><hr>

                                <div class="row">
                                    @foreach ($submodule->permissions->where('parent', $parent) as $permission)
                                        <label class="col-md-4 middle">
                                        <input class="ace checkSingle childCheck_{{  $parent_key }}" {{ in_array($permission->slug, $admins_permissions) ? 'checked' : '' }} type="checkbox" id="permission-id-{{ $module_key . '_' . $submodule_key . '_' . $parent_key }}"
                                                name='permission_ids[]' value="{{ $permission->id }}">
                                            <span class="lbl"> {{ Illuminate\Support\Str::title($permission->name) }}</span>
                                        </label>
                                    @endforeach
                                </div>
                                <hr>
                        @endforeach

                    @endforeach
            </div>
        @endforeach
        <button class="btn btn-md btn-info pull-right" type="submit">Save</button>
    </form>



@endsection

@push('js')
<script type="text/javascript">

function checkParent(id){
    if($("#parent-checked_"+id).is(":checked")){
        $(".childCheck_"+id).prop("checked", true);
        // console.log(id);
    }else{
        // console.log("not"+id);
        $(".childCheck_"+id).prop("checked", false);
    }
}


    $(document).ready(function() {
        $("#checkedAll").change(function(){
            if(this.checked){
            $(".checkSingle").each(function(){
                this.checked = true;
            })
            }else{
            $(".checkSingle").each(function(){
                this.checked = false;
            })
            }
        });

        $(".checkSingle").click(function () {
            if ($(this).is(":checked")){
            var isAllChecked = 0;

            $(".checkSingle").each(function(){

                if(!this.checked)
                isAllChecked = 1;
            })
            if(isAllChecked == 0)
            {
                $("#checkedAll").prop("checked", true);
            }
            }else {
                $("#checkedAll").prop("checked", false);
            }
        });


    });
</script>
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
