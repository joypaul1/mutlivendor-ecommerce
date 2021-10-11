@extends('backend.layouts.master')

@section('title','customer-List')
@section('page-header')
    <i class="fa fa-list"></i> customer List
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
       'name' => 'List customer',
       'route' => route('backend.customer.index')
    ])

   <div class="col-xs-12 col-sm-3 center">
        <div>
            <span class="profile-picture">
            <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{ asset($user->image) }}">
        </span>

            <div class="space-4"></div>

            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <i class="ace-icon fa fa-circle light-green"></i> &nbsp;
                    <span class="white">{{ $user->name }}</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="space-6"></div>

        <div class="hr hr12 dotted"></div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Username </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="username">{{$user->name}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Email </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{$user->email?? ' '}}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Mobile </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{$user->mobile?? ' '}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Gender </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{ $user->gender?? ' '}}</span>
                </div>
            </div>


            <div class="profile-info-row">
                <div class="profile-info-name"> Location </div>

                <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                <span class="editable editable-click" id="country">{{ $user->address_line_1??' ' }}</span>
                    <span class="editable editable-click" id="city">{{ $user->address_line_2??' ' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Division </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $user->division->name }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> City </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{ $user->city->name }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Area </div>

                <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{ $user->area->name }}</span>
                </div>
            </div>


            <div class="profile-info-row">
                <div class="profile-info-name">Resistered/Joined </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="signup">{{ $user->created_at->format('d-M-y')  }}</span>
                </div>
            </div>


        </div>
    </div>
    {{-- @include('backend.partials._paginate', ['data' => $customers]) --}}
@endsection

